<?php
get_header(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/related_post.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/header_with_card_no_image.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/content_image.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/banner.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/content_with_bg.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/accordion_content.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/company_partners.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/loan_calculator.css">



<?php get_template_part('template/single_page_layout'); ?>

<?php
if (is_single(580)) {
    include('page-savings-account-for-student.php');
}

elseif (is_single(504)) {
    include('page-bank-motorcycle-loan-philippines.php');
}

elseif (is_single(495)) {
    include('page-affordable-housing-loan-philippines.php'); 
}
?>

<?php get_footer(); ?>
