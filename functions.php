<?php
if (! function_exists('bank_of_makati')) :
    function bank_of_makati_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bank_of_makati'),
        ));
    }
    add_action('after_setup_theme', 'bank_of_makati_setup');
endif;

function remove_br_from_cf7_form($form)
{

    $form = str_replace('<br>', '', $form);
    $form = str_replace('<br />', '', $form);
    return $form;
}
add_filter('wpcf7_form_elements', 'remove_br_from_cf7_form');