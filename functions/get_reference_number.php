<?php
// Optional: log mail failures for quick diagnosis
add_action('wp_mail_failed', function ($wp_error) {
    error_log('📨 wp_mail_failed: ' . $wp_error->get_error_message());
});

// STEP 1: Hook after Contact Form 7 submission
add_action('wpcf7_mail_sent', function ($contact_form) {
    $allowed_form_ids = [1201, 1188, 1255, 1180, 885, 867, 828];
    $form_id = $contact_form->id();
    error_log('CF7 submitted, ID: ' . $form_id);

    if (!in_array($form_id, $allowed_form_ids)) return;

    $submission = WPCF7_Submission::get_instance();
    if (!$submission) return;

    $posted_data = $submission->get_posted_data();

    // STEP 2: Generate unique reference number
    $date_part   = date('mdY'); // MMDDYYYY, e.g., 11152024
    $last_number = (int) get_option('last_reference_number', 0) + 1;
    update_option('last_reference_number', $last_number);

    $account_number = isset($posted_data['account_number']) ? sanitize_text_field($posted_data['account_number']) : '';
    update_option('last_generated_account_number', $account_number);

    $reference_number = sprintf("RCR%s-%04d", $date_part, $last_number);

    // STEP 3: Extract account name
    $name_fields  = ['name', 'account_name', 'full_name', 'first_name', 'last_name', 'middle_name'];
    $account_name = '';
    foreach ($name_fields as $field) {
        if (!empty($posted_data[$field])) {
            $account_name = sanitize_text_field($posted_data[$field]);
            break;
        }
    }
    if (empty($account_name) && !empty($posted_data['first_name']) && !empty($posted_data['last_name'])) {
        $account_name = sanitize_text_field($posted_data['first_name'] . ' ' . $posted_data['last_name']);
    }
    if (strpos($account_name, ',') !== false) {
        $parts = array_map('trim', explode(',', $account_name));
        if (count($parts) === 2) {
            $account_name = $parts[1] . ' ' . $parts[0];
        }
    }

    $status        = 'Request Received';
    $date_uploaded = date('d/m/Y');

    // STEP 5: Create the post
    $post_id = wp_insert_post([
        'post_type'  => 'traking',
        'post_title' => $reference_number,
        'post_status' => 'publish',
    ]);
    if (is_wp_error($post_id)) {
        error_log('❌ Post creation failed: ' . $post_id->get_error_message());
        return;
    }

    // STEP 6: Save ACF fields
    update_field('reference_number', $reference_number, $post_id);
    update_field('account_number',   $account_number,   $post_id);
    update_field('account_name',     $account_name,     $post_id);
    update_field('status',           $status,           $post_id);
    update_field('date_uploaded',    $date_uploaded,    $post_id);

    // STEP 7: Save for frontend use via REST API
    update_option('last_generated_ref_number', $reference_number);

    error_log('✅ Tracking post created: ' . $post_id . ' | Ref: ' . $reference_number);

    // STEP 8: Email the reference number to the submitter
    // Prefer the typical CF7 email tag first, then fallbacks, then scan keys with "email"
    $candidate_emails = [
        $posted_data['your-email']     ?? null,
        $posted_data['email']          ?? null,
        $posted_data['your_email']     ?? null,
        $posted_data['account_email']  ?? null,
        $posted_data['contact_email']  ?? null,
        $posted_data['email_address']  ?? null,
    ];
    if (!array_filter($candidate_emails)) {
        foreach ($posted_data as $k => $v) {
            if (stripos($k, 'email') !== false && !empty($v)) {
                $candidate_emails[] = $v;
            }
        }
    }

    $to_email = '';
    foreach ($candidate_emails as $raw) {
        if (!$raw) continue;
        $maybe = sanitize_email($raw);
        if (is_email($maybe)) {
            $to_email = $maybe;
            break;
        }
    }

    error_log('📍 Determined submitter email: ' . ($to_email ?: '[NONE]'));
    if (!$to_email) {
        error_log('⚠️ No valid submitter email found. Skipping email send.');
        return;
    }

    $site_name = wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES);
    $subject   = "Your Reference Number – {$site_name}";
    // Get the form title/name
    $form_title = method_exists($contact_form, 'title') ? $contact_form->title() : '';

    $message = wp_kses_post("
    <p>
        <img src='" . esc_url(get_template_directory_uri() . '/assets/images/global/logo.png') . "' 
             alt='Bank of Makati Logo' 
             style='max-width:200px; height:auto; display:block; margin-bottom:20px;'>
    </p>
    <p>Hi " . esc_html($account_name ?: 'there') . ",</p>
    <p>We received your request" . ($form_title ? " for <strong>" . esc_html($form_title) . "</strong>" : "") . ". Here are the details:</p>
    <ul>
        <li><strong>Reference Number:</strong> " . esc_html($reference_number) . "</li>
        " . ($account_number ? "<li><strong>Account Number:</strong> " . esc_html($account_number) . "</li>" : "") . "
        <li><strong>Status:</strong> " . esc_html($status) . "</li>
        <li><strong>Date Uploaded:</strong> " . esc_html($date_uploaded) . "</li>
    </ul>
    <p>Please keep this reference number for your records.</p>
    <p>You can track your status here: 
    <a href='" . esc_url(home_url('/tracking?ref=' . urlencode($reference_number) . '&acct=' . urlencode($account_number))) . "' target='_blank'>Track Your Account</a>
    </p>
    <p>For other concerns or related inquiries, you may reach our Customer Engagement Team at <a href='tel:88890000'>8889-0000</a> local 2104-2106, Viber message us at <a href='tel:09431292559'>0943-129-2559</a> or follow our Official Facebook Page: <a href='https://www.facebook.com/bankofmakatiofficial/' target='_blank'>facebook.com/bankofmakatiofficial</a>.
    </p>");


    // --- IMPORTANT FOR FLUENTSMTP (Gmail): do NOT override From.
    // Let FluentSMTP use its authenticated From (smtp.bmi@gmail.com).
    // We only set Reply-To so replies go to admin (or change to $to_email if you prefer).
    $admin_email = get_option('admin_email');
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $site_name . ' <' . $admin_email . '>',
        // If you ALSO want a copy of this user email to the admin, un-comment the next line:
        // 'Bcc: ' . $admin_email,
    ];

    $sent = wp_mail($to_email, $subject, $message, $headers);
    if ($sent) {
        error_log('📧 Reference email sent to user: ' . $to_email);
    } else {
        error_log('❌ Failed sending reference email to user: ' . $to_email);
    }
});

// STEP 9: REST API endpoint for latest tracking info (unchanged)
add_action('rest_api_init', function () {
    register_rest_route('bmi/v1', '/tracking-info', [
        'methods'  => 'GET',
        'callback' => function () {
            $latest = get_posts([
                'post_type'      => 'traking',
                'posts_per_page' => 1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);

            if (empty($latest)) {
                return new WP_REST_Response(['error' => 'No tracking info found.'], 404);
            }

            $post_id = $latest[0]->ID;

            return [
                'reference_number' => get_field('reference_number', $post_id),
                'account_number'   => get_field('account_number', $post_id),
                'account_name'     => get_field('account_name', $post_id),
                'status'           => get_field('status', $post_id),
                'date_uploaded'    => get_field('date_uploaded', $post_id),
            ];
        },
        'permission_callback' => '__return_true',
    ]);
});
