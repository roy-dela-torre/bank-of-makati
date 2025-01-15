<?php $js_path = get_stylesheet_directory_uri() . '/inc/js'; ?>
<script src="<?php echo $js_path; ?>/jquery.min.js"></script>
<script src="<?php echo $js_path; ?>/bootstrap.bundle.min.js"></script>
<script src="<?php echo $js_path; ?>/select2.min.js"></script>
<script src="<?php echo $js_path; ?>/owl.carousel.min.js"></script>
<script src="<?php echo $js_path; ?>/functions.js"></script>

<script>
    $(document).ready(function() {
        $('li#menu-item-73').append(`<?php echo get_template_part('header_submenu/mymoney_submenu') ?>`);
        $('li#menu-item-72').append(`<?php echo get_template_part('header_submenu/mybusiness_submenu') ?>`);
        $('li#menu-item-71').append(`<?php echo get_template_part('header_submenu/myextras_submenu') ?>`);
    });
</script>

<?php if (is_front_page()): ?>
    <script src="<?php echo $js_path; ?>/homepage.js"></script>
<?php elseif (is_page(226) || is_page('Savings Account for Students')): ?>
    <script src="<?php echo $js_path; ?>/savings_account.js"></script>
<?php elseif (is_page(229) || is_page('Bank Mootorcyle Loan Philippines')): ?>
    <script src="<?php echo $js_path; ?>/bank_motorcycle_loan.js"></script>
<?php elseif (is_category()): ?>
    <script src="<?php echo $js_path; ?>/category.js"></script>
<?php endif; ?>