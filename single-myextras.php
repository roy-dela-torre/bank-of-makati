<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/inc/css/single_myextras.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/banner.css">
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_excess_payment_refund_request_form.css"> -->
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/step_by_step_form.css">
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/jquery-ui.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/flexible_content.css">
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
elseif (is_single(1102)) :
    include('pages/myextras/motorcycle_loan_request_change_due_date.php');
elseif (is_single(824)) :
    include('pages/myextras/motorcycle_loan_request_change_due_date.php');
else:
    echo 'Content not found.';
endif; ?>
<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/jquery-ui.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/step_by_step_form.js"></script>
<?php get_footer();?>

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
        setEqualHeightForSection('section.header_with_card_no_image.assets .content', 'h3');
        setEqualHeightForSection('section.header_with_card_no_image.purchase .content', 'h3');
    }

    // Call updateHeights initially and also on window resize
    $(window).on('load resize', function () {
        updateHeights();
    });

</script>