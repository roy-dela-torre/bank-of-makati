<?php
get_header();

// Get the queried term object for taxonomy pages
$term = get_queried_object(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/my_extrass_global.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/banner.css">
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
    } elseif ($term->slug == "personal") {
        echo "sdfsdfdsf";
        if (get_post_type() == 'myextras') {
            get_template_part('pages/myextras/personal');
            echo "sdfsdfdsf";
        } elseif (get_post_type() == 'mybusiness') {
            get_template_part('pages/mybusiness/personal');
        }
    }
}
get_footer();
?>