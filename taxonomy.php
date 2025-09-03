<?php
get_header();

// Get the queried term object for taxonomy pages
$term = get_queried_object(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/my_extrass_global.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/banner.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_excess_payment_refund_request_form.css">
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/step_by_step_form.css">
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/jquery-ui.css">
<?php

if ($term && !is_wp_error($term)) {
    if ($term->slug == "esoa") {
        get_template_part('pages/myextras/motorcycle_loan_e_soa_request_form');
    } elseif ($term->slug == "excess-payment") {
        get_template_part('pages/myextras/motorcycle_loan_excess_payment_refund_request_form');
    } elseif ($term->slug == "original-cr") {
        // Request for Original Motorcycle Certificate of Registration
        get_template_part('pages/myextras/motorcycle_loan_original_cr_request_form');
    } elseif ($term->slug == "individual") {
        get_template_part('pages/mybusiness/individual');
    } elseif ($term->slug == "corporation") {
        get_template_part('pages/mybusiness/corporation');
    } elseif ($term->slug == "deposit-forms") {
        get_template_part('pages/mybusiness/deposit');
    } elseif ($term->slug == "personal") {
        if (get_post_type() == 'myextras') {
            get_template_part('pages/myextras/personal');
        } elseif (get_post_type() == 'mybusiness') {
            get_template_part('pages/mybusiness/personal');
        }
    }
    elseif ($term->slug == "due-date") {
        get_template_part('pages/myextras/motorcycle_loan_request_change_due_date');
    }
}
?>

<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/jquery-ui.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/step_by_step_form.js"></script>

<?php 
get_footer();
?>
<!-- <script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/jquery-ui.js"></script> -->
