<?php $css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo $css_path; ?>/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/select2.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/global.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/index.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">

<?php if (is_page(229)): ?>
    <!-- Bank Motorcycle Loan Philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/bank_motorcycle_loan_philippines.css">

<?php elseif (is_page(224)): ?>
    <!-- Pesonal retirement savings account philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/personal-retirement-savings-account-philippines.css">

<?php elseif (is_page(226)): ?>
    <!-- Savings account for student -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/savings-account-for-student.css">

<?php elseif (is_page(247)): ?>
    <!-- Affordable housing loan philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/affordable-housing-loan-philippines.css">

<?php elseif (is_page(256)): ?>
    <!-- MSME Loan Philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/msme-loan-philippines.css">

<?php endif; ?>