<?php
get_header(); ?>

<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/related_post.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/header_with_card_no_image.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/content_image.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/banner.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/content_with_bg.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/accordion_content.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/company_partners.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/loan_calculator.css"> -->

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/flexible_content.css">

<?php if(is_single(1311) || is_single('deposit-forms')) { ?>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/step_by_step_form.css">
<?php } ?>

<?php get_template_part('template/single_page_layout'); ?>

<?php 

    if(is_single(580) || is_single('young-savers')) {
        get_template_part('template/landing_page/savings_account_for_student');
    }

    if(is_single(504) || is_single('motorcycle-loan')) {
        get_template_part('template/landing_page/bank-motorcycle-loan-philippines');
    }

    if(is_single(495) || is_single('housing-loan')) {
        get_template_part('template/landing_page/affordable-housing-loan-philippines');
    }

?>

<?php if (is_single(1311) || is_single('deposit-forms')) { 
    get_template_part('pages/mymoney/deposit');
} ?>

<?php if(is_single(1311) || is_single('deposit-forms')) { ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/my_business_form.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/step_by_step_form.js"></script>
<?php } ?>

<?php
// if (is_single(580)) {
//     include('page-savings-account-for-student.php');
// }

// elseif (is_single(504)) {
//     include('page-bank-motorcycle-loan-philippines.php');
// }

// elseif (is_single(495)) {
//     include('page-affordable-housing-loan-philippines.php'); 
// }
?>

<?php get_footer(); ?>

<script>
    function setEqualHeightForSection(section, element) {
        const elements = $(section).find(element);

        // Check if the window width is 768px or above
        if ($(window).width() >= 768) {
            elements.css('height', ''); // Reset the height first
            const maxHeight = Math.max(...elements.map(function () {
                return $(this).height();
            }).get());
            elements.height(maxHeight);
        } else {
            elements.css('height', ''); // Reset height to default for smaller screens
        }
    }

    function updateHeights() {
        setEqualHeightForSection('section.header_with_card_no_image .content', 'h3');
    }

    // Call updateHeights initially and also on window resize
    $(window).on('load resize', function () {
        updateHeights();
    });
</script>