<?php
/**
 * Maker–Checker user maintenance (default roles + forced password reset after approval)
 */

/** 0) Helper: mark pending only when needed *****************************************/
function mc_mark_pending_for($user_id, $reason = '') {
  $cur = get_user_meta($user_id, 'mc_status', true);
  if ($cur !== 'pending') {
    update_user_meta($user_id, 'mc_status', 'pending');
  }
  update_user_meta($user_id, 'mc_requested_by', get_current_user_id());
  update_user_meta($user_id, 'mc_requested_at', current_time('mysql'));
  if ($reason) {
    update_user_meta($user_id, 'mc_pending_reason', sanitize_text_field($reason));
  }
}

/** 1) CAPABILITIES (no new roles) ***************************************************/
add_action('init', function () {
  // Give site administrators the approve capability by default
  $admin = get_role('administrator');
  if ($admin && !$admin->has_cap('approve_users')) {
    $admin->add_cap('approve_users');
  }

  // OPTIONAL: also grant to editors (or any role you prefer)
  // $editor = get_role('editor');
  // if ($editor && !$editor->has_cap('approve_users')) $editor->add_cap('approve_users');
});

/** 2) MARK NEW/EDITED USERS AS "PENDING" ********************************************/
// On create: mark as pending and store maker info.
add_action('user_register', function ($user_id) {
  update_user_meta($user_id, 'mc_status', 'pending');              // pending | active | rejected
  update_user_meta($user_id, 'mc_requested_by', get_current_user_id());
  update_user_meta($user_id, 'mc_requested_at', current_time('mysql'));

  mc_notify_checkers_about($user_id, 'create');
});

// On profile update: only mark pending for meaningful changes by non-checkers
add_action('profile_update', function ($user_id, $old_user_data) {
  // 1) If this update is part of an approval flow, skip
  if (defined('MC_APPROVAL_ACTION') && MC_APPROVAL_ACTION) return;

  // 2) If part of the password reset flow, skip
  if (get_transient('mc_pwreset_flow_' . $user_id)) return;

  // 3) If the editor can approve, skip (checkers/admin edits don’t need re-approval)
  if (current_user_can('approve_users')) return;

  // 4) Detect meaningful field changes
  $new = get_userdata($user_id);
  $watched = [
    'user_email',
    'user_nicename',
    'display_name',
  ];
  $changed = false;
  foreach ($watched as $key) {
    if ($old_user_data->{$key} !== $new->{$key}) { $changed = true; break; }
  }

  // Also watch FIRST/LAST NAME from user meta
  $old_first = get_user_meta($user_id, 'first_name', true);
  $old_last  = get_user_meta($user_id, 'last_name', true);
  $new_first = $new->first_name; // WP_User magic getter reads meta
  $new_last  = $new->last_name;
  if (!$changed && ($old_first !== $new_first || $old_last !== $new_last)) {
    $changed = true;
  }

  if ($changed) {
    mc_mark_pending_for($user_id, 'profile_update');
    mc_notify_checkers_about($user_id, 'update');
  }
}, 10, 2);

// If a non-checker changes someone's role, re-require approval
add_action('set_user_role', function ($user_id, $role, $old_roles) {
  if (current_user_can('approve_users')) return; // checkers/admin role edits are allowed
  mc_mark_pending_for($user_id, 'role_change');
  mc_notify_checkers_about($user_id, 'update');
}, 10, 3);

/** 3) BLOCK LOGIN FOR PENDING / REJECTED / FORCE-RESET ******************************/
add_filter('authenticate', function ($user, $username) {
  if ($user instanceof WP_User) {
    $status = get_user_meta($user->ID, 'mc_status', true);
    if ($status === 'pending') {
      return new WP_Error('mc_pending', __('Your account is pending approval. Please try again later.'));
    }
    if ($status === 'rejected') {
      return new WP_Error('mc_rejected', __('Your account was rejected. Contact support.'));
    }

    // Force password reset after approval
    $must_reset = get_user_meta($user->ID, 'mc_force_pw_reset', true);
    if ($must_reset) {
      // Send/reset link (idempotent) and block login
      mc_send_reset_link($user);
      $lost_url = wp_lostpassword_url();
      return new WP_Error(
        'mc_pwreset',
        sprintf(
          /* translators: %s: lost password url */
          __('For security, you must reset your password before logging in. Please check your email, or %s.'),
          '<a href="' . esc_url($lost_url) . '">' . __('reset it here') . '</a>'
        )
      );
    }
  }
  return $user;
}, 30, 2);

// When the user actually resets the password, clear flags so they can log in
add_action('password_reset', function ($user) {
  delete_user_meta($user->ID, 'mc_force_pw_reset');
  delete_transient('mc_pwreset_flow_' . $user->ID); // clear flow guard
}, 10, 1);

/** 4) APPROVAL UI (ADMIN PAGE) ******************************************************/
add_action('admin_menu', function () {
  add_menu_page(
    'User Approvals',
    'User Approvals',
    'approve_users',
    'mc-user-approvals',
    'mc_render_user_approvals_page',
    'dashicons-yes-alt',
    59
  );
});

function mc_render_user_approvals_page() {
  if (!current_user_can('approve_users')) wp_die(__('You do not have permission to access this page.'));

  if (!empty($_GET['mc_msg'])) {
    echo '<div class="notice notice-success"><p>' . esc_html($_GET['mc_msg']) . '</p></div>';
  }

  $pending = get_users([
    'meta_key'   => 'mc_status',
    'meta_value' => 'pending',
    'number'     => 200,
    'fields'     => ['ID', 'user_login', 'user_email', 'display_name', 'user_registered']
  ]);

  echo '<div class="wrap"><h1>User Approvals</h1>';
  if (empty($pending)) { echo '<p>No pending users 🎉</p></div>'; return; }

  echo '<table class="widefat striped"><thead><tr>
    <th>User</th><th>Email</th><th>Registered</th><th>Requested By</th><th>Requested At</th><th>Actions</th>
  </tr></thead><tbody>';

  foreach ($pending as $u) {
    $requested_by = get_user_meta($u->ID, 'mc_requested_by', true);
    $requested_at = get_user_meta($u->ID, 'mc_requested_at', true);
    $maker_name   = $requested_by ? (get_user_by('id', (int)$requested_by)->display_name ?? ('User #' . (int)$requested_by)) : '—';

    $approve_url = wp_nonce_url(
      admin_url('admin-post.php?action=mc_approve_user&user_id=' . $u->ID),
      'mc_approve_' . $u->ID
    );
    $reject_url = wp_nonce_url(
      admin_url('admin-post.php?action=mc_reject_user&user_id=' . $u->ID),
      'mc_reject_' . $u->ID
    );

    echo '<tr>
      <td>' . esc_html($u->display_name . ' (' . $u->user_login . ')') . '</td>
      <td>' . esc_html($u->user_email) . '</td>
      <td>' . esc_html($u->user_registered) . '</td>
      <td>' . esc_html($maker_name) . '</td>
      <td>' . esc_html($requested_at ?: '—') . '</td>
      <td>
        <a class="button button-primary" href="' . esc_url($approve_url) . '">Approve</a>
        <a class="button" href="' . esc_url($reject_url) . '">Reject</a>
      </td>
    </tr>';
  }
  echo '</tbody></table></div>';
}

/** 5) APPROVE / REJECT ACTION HANDLERS **********************************************/
add_action('admin_post_mc_approve_user', function () {
  if (!current_user_can('approve_users')) wp_die(__('Permission denied'));
  $user_id = isset($_GET['user_id']) ? (int) $_GET['user_id'] : 0;
  check_admin_referer('mc_approve_' . $user_id);

  if ($user_id) {
    define('MC_APPROVAL_ACTION', true); // prevents profile_update hook from re-pending
    update_user_meta($user_id, 'mc_status', 'active');
    update_user_meta($user_id, 'mc_approved_by', get_current_user_id());
    update_user_meta($user_id, 'mc_approved_at', current_time('mysql'));

    // Force password reset on first login after approval + guard the reset flow
    update_user_meta($user_id, 'mc_force_pw_reset', 1);
    set_transient('mc_pwreset_flow_' . $user_id, 1, HOUR_IN_SECONDS * 6);

    // Immediately send the reset email
    $user = get_user_by('id', $user_id);
    if ($user) mc_send_reset_link($user);

    // Clean up any reject meta
    delete_user_meta($user_id, 'mc_rejected_by');
    delete_user_meta($user_id, 'mc_rejected_at');

    // Notify user + maker
    mc_notify_user_about($user_id, 'approved');
    mc_notify_maker_about($user_id, 'approved');
  }

  wp_safe_redirect(add_query_arg('mc_msg', urlencode('User approved. Password reset link sent.'), admin_url('admin.php?page=mc-user-approvals')));
  exit;
});

add_action('admin_post_mc_reject_user', function () {
  if (!current_user_can('approve_users')) wp_die(__('Permission denied'));
  $user_id = isset($_GET['user_id']) ? (int) $_GET['user_id'] : 0;
  check_admin_referer('mc_reject_' . $user_id);

  if ($user_id) {
    define('MC_APPROVAL_ACTION', true);
    update_user_meta($user_id, 'mc_status', 'rejected');
    update_user_meta($user_id, 'mc_rejected_by', get_current_user_id());
    update_user_meta($user_id, 'mc_rejected_at', current_time('mysql'));

    mc_notify_user_about($user_id, 'rejected');
    mc_notify_maker_about($user_id, 'rejected');
  }

  wp_safe_redirect(add_query_arg('mc_msg', urlencode('User rejected.'), admin_url('admin.php?page=mc-user-approvals')));
  exit;
});

/** 6) EMAIL HELPERS *****************************************************************/
function mc_notify_checkers_about($user_id, $type = 'create') {
  $subject = sprintf('[Action Required] User %s pending approval', $type === 'update' ? 'update' : 'creation');
  $url = admin_url('admin.php?page=mc-user-approvals');
  $body = "A user is pending approval.\n\nReview here: $url";

  $recipients = [];
  foreach (get_users(['fields' => ['user_email', 'ID']]) as $u) {
    $usr = get_user_by('id', $u->ID);
    if ($usr && user_can($usr, 'approve_users')) $recipients[] = $u->user_email;
  }
  $recipients = array_unique($recipients);
  if (!empty($recipients)) wp_mail($recipients, $subject, $body);
}

function mc_notify_user_about($user_id, $decision) {
  $user = get_user_by('id', $user_id);
  if (!$user) return;
  $subject = $decision === 'approved' ? 'Your account has been approved' : 'Your account was not approved';
  $body = $decision === 'approved'
    ? "Hi {$user->display_name},\n\nYour account is now active. For security, please reset your password using the link we just sent you."
    : "Hi {$user->display_name},\n\nSorry, your account request was not approved. If you think this is a mistake, please contact support.";
  wp_mail($user->user_email, $subject, $body);
}

function mc_notify_maker_about($user_id, $decision) {
  $maker_id = (int) get_user_meta($user_id, 'mc_requested_by', true);
  if (!$maker_id) return;
  $maker = get_user_by('id', $maker_id);
  if (!$maker) return;
  $user = get_user_by('id', $user_id);
  $subject = sprintf('Decision on %s: %s', $user->user_login, ucfirst($decision));
  $body = "Hello {$maker->display_name},\n\nThe request you submitted for {$user->user_login} was {$decision}.";
  wp_mail($maker->user_email, $subject, $body);
}

/** 7) OPTIONAL: SHOW STATUS IN USER LIST ********************************************/
add_filter('manage_users_columns', function ($cols) {
  $cols['mc_status'] = 'MC Status';
  return $cols;
});
add_filter('manage_users_custom_column', function ($output, $column_name, $user_id) {
  if ('mc_status' === $column_name) {
    $status = get_user_meta($user_id, 'mc_status', true) ?: '—';
    return esc_html(ucfirst($status));
  }
  return $output;
}, 10, 3);

/** 8) APPROVE FROM USERS LIST: single + bulk (nice to have) *************************/
// Single-row "Approve" action
add_filter('user_row_actions', function ($actions, $user) {
  if (!current_user_can('approve_users')) return $actions;
  if (get_user_meta($user->ID, 'mc_status', true) === 'pending') {
    $approve_url = wp_nonce_url(
      admin_url('admin-post.php?action=mc_approve_user&user_id=' . $user->ID),
      'mc_approve_' . $user->ID
    );
    $actions['mc_approve'] = '<a href="' . esc_url($approve_url) . '">Approve</a>';
  }
  return $actions;
}, 10, 2);

// Bulk approve action
add_filter('bulk_actions-users', function ($actions) {
  $actions['mc_bulk_approve'] = 'Approve (Maker–Checker)';
  return $actions;
});
add_filter('handle_bulk_actions-users', function ($redirect, $doaction, $user_ids) {
  if ($doaction !== 'mc_bulk_approve' || !current_user_can('approve_users')) return $redirect;
  foreach ($user_ids as $uid) {
    if (get_user_meta($uid, 'mc_status', true) === 'pending') {
      update_user_meta($uid, 'mc_status', 'active');
      update_user_meta($uid, 'mc_approved_by', get_current_user_id());
      update_user_meta($uid, 'mc_approved_at', current_time('mysql'));

      // Force reset + guard
      update_user_meta($uid, 'mc_force_pw_reset', 1);
      set_transient('mc_pwreset_flow_' . $uid, 1, HOUR_IN_SECONDS * 6);

      $u = get_user_by('id', $uid);
      if ($u) mc_send_reset_link($u);
      if (function_exists('mc_notify_user_about')) mc_notify_user_about($uid, 'approved');
      if (function_exists('mc_notify_maker_about')) mc_notify_maker_about($uid, 'approved');
    }
  }
  return add_query_arg('mc_bulk', count($user_ids), $redirect);
}, 10, 3);
add_action('admin_notices', function () {
  if (!empty($_GET['mc_bulk'])) {
    echo '<div class="notice notice-success is-dismissible"><p>'
      . esc_html($_GET['mc_bulk']) . ' user(s) approved & reset links sent.'
      . '</p></div>';
  }
});

/** 9) UTIL: send password reset link ************************************************/
function mc_send_reset_link($user) {
  // Generate and email a reset link for the user.
  if (is_numeric($user)) $user = get_user_by('id', (int)$user);
  if (!$user instanceof WP_User) return;
  // WordPress core helper: send reset email (respects email templates / filters)
  retrieve_password($user->user_login);
}
