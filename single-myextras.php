<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/inc/css/single_myextras.css">
<?php
if (is_single(641)) :
    include('pages/myextras/motorcycle_loan_original_cr_request_form.php');
elseif (is_single(640)) :
    include('pages/myextras/motorcycle_loan_e_soa_request_form.php');
elseif (is_single(886)) :
    include('pages/myextras/online_motorcycle_request_form.php');
elseif (is_single(822)) :
    include('pages/myextras/acquired_assests_for_sale.php');
elseif (is_single(893)) :
    include('pages/myextras/deposit_rates.php');
elseif (is_single(643)) :
    include('pages/myextras/corporate.php');
elseif (is_single(642)) :
    include('pages/myextras/personal.php');
else:
    echo 'Content not found.';
endif;
get_footer();
