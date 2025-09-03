<?php $js_path = get_stylesheet_directory_uri() . '/inc/js'; ?>
<script src="<?= $js_path; ?>/jquery.js"></script>
<script src="<?= $js_path; ?>/bootstrap.bundle.min.js" async></script>
<script src="<?= $js_path; ?>/select2.min.js"></script>
<script src="<?= $js_path; ?>/owl.carousel.min.js"></script>
<script src="<?= $js_path; ?>/functions.js" async></script>
<script src="<?= $js_path; ?>/loan_calculator.js"></script>
<script src="<?= $js_path; ?>/jquery-ui.js"></script>
<script src="<?= $js_path; ?>/form_validation.js"></script>
<script src="<?= $js_path; ?>/step_by_step_form.js"></script>
<script src="<?= $js_path; ?>/my_business_form.js"></script>
<script>
    $(document).ready(function() {
        $(window).on('load', function() {
            $('li#menu-item-638').append(`<?= get_template_part('header_submenu/mymoney_submenu') ?>`);
            $('li#menu-item-637').append(`<?= get_template_part('header_submenu/mybusiness_submenu') ?>`);
            $('li#menu-item-639').append(`<?= get_template_part('header_submenu/myextras_submenu') ?>`);
            <?php if (!is_front_page()): ?>

                function setEqualHeightForSection(sectionSelector, secondSelector) {
                    var elementsToResize = $(sectionSelector).find(secondSelector);
                    var tallestHeight = 0;
                    elementsToResize.css('height', 'auto');
                    elementsToResize.each(function() {
                        var height = $(this).height();
                        if (height > tallestHeight) {
                            tallestHeight = height;
                        }
                    });
                    elementsToResize.height(tallestHeight);
                }
                setEqualHeightForSection("section.product_and_services", "h3");
                $(window).resize(function() {
                    setEqualHeightForSection("section.product_and_services", "h3");
                }).resize();
            <?php endif; ?>
        });

        $('section.individual .datepicker').datepicker();
    });
</script>

<?php
$queried_object = get_queried_object();
$taxonomy_slug = $queried_object ? $queried_object->taxonomy ?? '' : '';
?>

<?php if (is_front_page()):

elseif (is_page(226) || is_page('Savings Account for Students')): ?>
    <script src="<?= $js_path; ?>/savings_account.js" async></script>
<?php elseif (is_page(229) || is_page('Bank Mootorcyle Loan Philippines')): ?>
    <script src="<?= $js_path; ?>/bank_motorcycle_loan.js" async></script>
<?php elseif (is_category()): ?>
    <script src="<?= $js_path; ?>/category.js" async></script>
<?php elseif (is_singular('mybusiness')): ?>
    <script src="<?= $js_path; ?>/testimonial_carousel.js"></script>
<?php endif; ?>