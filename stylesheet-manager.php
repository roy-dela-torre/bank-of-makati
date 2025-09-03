<?php $css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo $css_path; ?>/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/select2.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/global.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/jquery-ui.css">
<?php if (is_front_page()): ?>
    <link rel="stylesheet" href="<?php echo $css_path; ?>/index.css">
    <link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php elseif (is_page(229) || is_single(504)): ?>
    <!-- Bank Motorcycle Loan Philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/bank_motorcycle_loan_philippines.css">

<?php elseif (is_page(224)): ?>
    <!-- Pesonal retirement savings account philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/personal-retirement-savings-account-philippines.css">

<?php elseif (is_page(226) || is_single(580)): ?>
    <!-- Savings account for student -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/savings-account-for-student.css">

<?php elseif (is_page(247) || is_single(495)): ?>
    <!-- Affordable housing loan philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/affordable-housing-loan-philippines.css">

<?php elseif (is_page(256) || is_single(644)): ?>
    <!-- MSME Loan Philippines -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/msme-loan-philippines.css">

<?php elseif (is_page(366)): ?>
    <!-- BMI Branch Locator -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/bmi-branch-locator.css">

<?php elseif (is_page(145)): ?>
    <!-- Faqs -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/faq.css">

<?php elseif (is_page(57)): ?>
    <!-- Career -->
    <link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/career.css">

<?php elseif (is_page(55)): ?>
    <!-- About Us -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/about-us.css">
    <link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">

<?php elseif (is_page(59)): ?>
    <!-- Contact Us -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/contact-us.scss">

<?php elseif (is_page(81)): ?>
    <!-- What We Stand for -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/what_we_stand_for.css">

<?php elseif (is_page(790)): ?>
    <!-- Loan Calculator -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/loan_calculator.css">

<?php elseif (is_single(886)): ?>
    <!-- Loan Calculator -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/online_motorcycle_request_form.css">

<?php elseif (is_page(439)): ?>
    <!-- Terms and Conditions -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/terms_and_condition.css">

<?php elseif (is_page(3)): ?>
    <!-- Terms and Conditions -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/privacy_policy.css">

<?php elseif (is_page(1174)): ?>
    <!-- Sustainability -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/sustainability.css">
<?php endif; ?>