<?php
get_header();
// Template Name: Page Tracking
get_template_part('template/banner_php');
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/tracking.css">
<section class="track_your_account">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="text-center orange_text mn-20">Track Your Account</span>
                        <h2 class="text-center mn-20">Stay Updated in Just a Few Clicks</h2>
                        <p class="text-center">
                            Enter your unique Reference Number and Account Number below to view your application status.
                            Make sure your details are correct to receive the most accurate and timely update.
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="tracking_form mx-auto">
                        <form id="tracking_form" method="post">
                            <input type="text" name="reference_number" placeholder="Reference Number (Required)" required>
                            <input type="text" name="account_number" placeholder="Account Number (Required)" required>
                            <input type="submit" value="Search" class="orange_btn w-100" id="submit_tracking">
                        </form>
                    </div>
                </div>

                <?php
                $show_data = false;
                $tracking_data = null;

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reference_number'], $_POST['account_number'])) {
                    $ref = sanitize_text_field($_POST['reference_number']);
                    $acc = sanitize_text_field($_POST['account_number']);

                    error_log('Submitted Reference: ' . $ref);
                    error_log('Submitted Account: ' . $acc);

                    $args = array(
                        'post_type' => 'traking',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                            'relation' => 'AND',
                            array(
                                'key' => 'reference_number',
                                'value' => $ref,
                                'compare' => '='
                            ),
                            array(
                                'key' => 'account_number',
                                'value' => $acc,
                                'compare' => '='
                            ),
                        ),
                    );

                    $query = new WP_Query($args);
                    error_log('Tracking Query Found Posts: ' . $query->found_posts);

                    if ($query->have_posts()) {
                        $show_data = true;
                        $query->the_post();
                        $tracking_data = array(
                            'reference_number' => get_field('reference_number'),
                            'account_number'   => get_field('account_number'),
                            'account_name'     => get_field('account_name'),
                            'status'           => get_field('status'),
                            'date_uploaded'    => get_field('date_uploaded'),
                            'remarks'          => get_field('remarks'),
                        );
                        wp_reset_postdata();
                    }
                }

                // Normalize current status
                $current_raw  = isset($tracking_data['status']) ? trim((string)$tracking_data['status']) : '';
                $current_slug = sanitize_title($current_raw);
                ?>

                <div class="col-md-12">
                    <div class="d-flex flex-column">

                        <!-- User Data Table -->
                        <div class="user_data" <?php if (!$show_data) echo 'hidden'; ?> style="<?php echo esc_html($tracking_data['status']); ?>">
                            <?php if ($show_data && $tracking_data): ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Reference Number:</th>
                                        <td><?php echo esc_html($tracking_data['reference_number']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Account Number:</th>
                                        <td><?php echo esc_html($tracking_data['account_number']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Account Name:</th>
                                        <td><?php echo esc_html($tracking_data['account_name']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td><?php echo esc_html($tracking_data['status']); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Date Uploaded:</th>
                                        <td><?php echo esc_html($tracking_data['date_uploaded']); ?></td>
                                    </tr>
                                </table>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                                <div class="alert alert-danger">No tracking data found for the provided details.</div>
                            <?php endif; ?>
                        </div>

                        <!-- Status Steps -->
                        <div class="status" <?php if (!$show_data) echo 'hidden'; ?>>
                            <?php
                            // Get all possible statuses
                            $status_choices = [];
                            if (function_exists('acf_get_field')) {
                                $field = acf_get_field('status');
                                if ($field && !empty($field['choices']) && is_array($field['choices'])) {
                                    $status_choices = $field['choices'];
                                }
                            }

                            // Gate: only show if current
                            $gated = ['confirmed-fully-paid', 'with-remaining-balance'];

                            // Build visible steps
                            $visible = [];
                            foreach ($status_choices as $key => $label) {
                                $loop_slug = sanitize_title(is_string($label) ? $label : $key);
                                // if ($loop_slug === 'invalid-request') {
                                //     continue;
                                // }
                                // if (in_array($loop_slug, $gated, true) && $loop_slug !== $current_slug) {
                                //     continue;
                                // }
                                // If current is confirmed-fully-paid, skip with-remaining-balance
                                if ($current_slug === 'confirmed-fully-paid' && $loop_slug === 'with-remaining-balance') {
                                    continue;
                                }

                                if ($current_slug === 'with-remaining-balance' && $loop_slug === 'confirmed-fully-paid') {
                                    continue;
                                }

                                $visible[$loop_slug] = (string)$label;
                            }

                            // Render desktop steps
                            ?>
                            <ul class="d-none d-lg-flex" <?php echo $current_slug === 'invalid-request' ? 'hidden' : ''; ?>>
                                <?php
                                if (empty($visible)) {
                                    echo '<li>' . esc_html__('No status yet', 'textdomain') . '</li>';
                                } else {
                                    $li_count     = count($visible);
                                    $found_active = false;

                                    foreach ($visible as $loop_slug => $label) {
                                        if ($loop_slug === 'invalid-request') {
                                            continue;
                                        }
                                        $class = '';
                                        if ($loop_slug === $current_slug) {
                                            $class = 'active';
                                            $found_active = true;
                                        } elseif (!$found_active) {
                                            $class = 'completed';
                                        }

                                        echo '<li' . ($class ? ' class="' . esc_attr($class) . '"' : '') .
                                            ' style="width:' . (100 / $li_count) . '%;">' .
                                            esc_html($label) . '</li>';
                                    }
                                }
                                ?>
                            </ul>

                            <!-- Status Message -->
                            <p class="message_status text-center text-lg-start">
                                <?php
                                if ($current_slug === 'request-received') {
                                    echo esc_html__('Your request is on process. For further updates, please view the status in this facility.', 'textdomain');
                                } elseif ($current_slug === 'in-process') {
                                    echo esc_html__('We are now processing your request.', 'textdomain');
                                } elseif ($current_slug === 'confirmed-fully-paid') {
                                    echo esc_html__('Your account is confirmed fully paid. For further updates, please view the status in this facility.', 'textdomain');
                                } elseif ($current_slug === 'with-remaining-balance') {
                                    echo esc_html__('Your account has a remaining outstanding balance. Please settle it at your earliest convenience.', 'textdomain');
                                } elseif ($current_slug === 'pending-with-balance') {
                                    echo esc_html__('Your request could not be processed. To know why, please call__________________', 'textdomain');
                                } elseif ($current_slug === 'in-transit-to-preferred-pick-up-location') {
                                    echo esc_html__('Your original CR is in transit to your preferred pick-up branch', 'textdomain');
                                } elseif ($current_slug === 'ready-for-pick-up') {
                                    echo esc_html__('Your original CR is ready for pick-up in your preferred branch.', 'textdomain');
                                } elseif ($current_slug === 'invalid-request') {
                                    $remarks = isset($tracking_data['remarks']) ? trim((string)$tracking_data['remarks']) : '';
                                    $contact_phone = '123-456-7890'; // Replace with actual phone
                                    $contact_email = 'support@example.com'; // Replace with actual email
                                    printf(
                                        esc_html__('Your request could not be processed due to %1$s. Please call our Customer Engagement Team at %2$s or email at %3$s for assistance.', 'textdomain'),
                                        esc_html($remarks),
                                        esc_html($contact_phone),
                                        esc_html($contact_email)
                                    );
                                }
                                ?>
                            </p>
                        </div>

                        <?php
                        $step_labels = array_values($visible);
                        $step_slugs  = array_keys($visible);

                        $current_index = array_search($current_slug, $step_slugs);
                        if ($current_index === false) $current_index = 0;

                        $current_label = $step_labels[$current_index] ?? '';
                        $total_steps   = count($step_labels);
                        ?>
                        <div id="mobile-step-indicator"
                            class="align-items-center justify-content-center gap-4 d-flex d-lg-none"
                            <?php echo (esc_html($current_label)); ?>>
                            <svg id="circle-progress" width="24" height="24" viewBox="0 0 36 36">
                                <path class="circle-bg" d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none" stroke="#eee" stroke-width="2.5"></path>
                                <path id="circle-fill" d="M18 2.0845
            a 15.9155 15.9155 0 0 1 0 31.831
            a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none" stroke="#4d9ef9" stroke-width="2.5"
                                    stroke-dasharray="<?php echo $total_steps > 0 ? round((($current_index + 1) / $total_steps) * 100) : 0; ?>, 100"></path>
                            </svg>
                            <span class="ms-2" id="mobile-step-text">
                                <?php
                                if ($total_steps > 0) {
                                    echo ($current_index + 1) . ' / ' . $total_steps . ' – ' . esc_html($current_label);
                                }
                                ?>
                            </span>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    function updateMobileStep() {
        var $status = $('.status:visible ul');
        var $mobile = $('#mobile-step-indicator');
        if (!$status.length || !$mobile.length) return;

        var $lis = $status.find('li:not(:contains("No status yet"))');
        var total = $lis.length;
        var activeIdx = $lis.index($lis.filter('.active'));
        if (activeIdx < 0) activeIdx = 0;
        var label = $lis.eq(activeIdx).text();

        // Update SVG progress
        var percent = Math.round(((activeIdx + 1) / total) * 100);
        $('#circle-fill').attr('stroke-dasharray', percent + ', 100');
        // Update text
        $('#mobile-step-text').text((activeIdx + 1) + ' / ' + total + ' – ' + label);
    }
    jQuery(document).ready(function($) {
        // Show overlay on any AJAX send
        $(document).ajaxSend(function() {
            $("#overlay").fadeIn(300);
        });

        // Hide overlay after AJAX completes (for all AJAX)
        $(document).ajaxComplete(function() {
            setTimeout(function() {
                $("#overlay").fadeOut(300);
            }, 500);
        });

        // If URL contains ?ref=...&acct=..., auto-trigger the AJAX form submit
        function triggerTrackingFromUrl() {
            var params = new URLSearchParams(window.location.search);
            var ref = params.get('ref');
            var acct = params.get('acct');
            if (ref && acct) {
                // Fill the form fields
                $('input[name="reference_number"]').val(ref);
                $('input[name="account_number"]').val(acct);
                // Submit the form via AJAX
                $('#tracking_form').trigger('submit');
            }
        }

        $('#tracking_form').on('submit', function(e) {
            e.preventDefault();
            $('.user_data').attr('hidden', true);
            $('.status').attr('hidden', true);
            $('#tracking_loader').show();

            var formData = $(this).serialize();
            $.post(window.location.href, formData, function(response) {
                var $resp = $(response);

                var userHtml = $resp.find('.user_data').html();
                var statusHtml = $resp.find('.status').html();

                if (userHtml && $.trim(userHtml).length) {
                    $('.user_data').html(userHtml).removeAttr('hidden');
                } else {
                    $('.user_data').attr('hidden', true);
                }

                if (statusHtml && $.trim(statusHtml).length) {
                    $('.status').html(statusHtml).removeAttr('hidden');
                } else {
                    $('.status').attr('hidden', true);
                }

                $('#tracking_loader').hide();
            });
        });

        // Call on page load
        triggerTrackingFromUrl();
        updateMobileStep();
        $(document).ajaxComplete(updateMobileStep);

    });
</script>