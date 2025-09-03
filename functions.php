<?php

// =====================
// THEME SETUP
// =====================
if (!function_exists('bank_of_makati_setup')) :
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

// =====================
// CONTACT FORM 7 CUSTOMIZATIONS
// =====================

// Remove <br> tags from CF7 forms
function remove_br_from_cf7_form($form)
{
    $form = str_replace(['<br>', '<br />'], '', $form);
    return $form;
}
add_filter('wpcf7_form_elements', 'remove_br_from_cf7_form');

// Disable <p> wrapper in CF7
add_filter('wpcf7_autop_or_not', '__return_false');

// Set autocomplete off for CF7 forms
add_filter('wpcf7_form_autocomplete', function ($autocomplete) {
    return 'off';
}, 10, 1);

// Remove CF7MLS CSS
add_action('template_redirect', function () {
    ob_start(function ($buffer) {
        return preg_replace('#<link[^>]+id=[\'"]cf7mls-css[\'"][^>]*>#', '', $buffer);
    });
});

// =====================
// FRONTEND SCRIPTS & STYLES
// =====================

// Enqueue testimonials template CSS if FAQ template part is present
function enqueue_testimonials_template_css()
{
    if (is_page() || is_single()) {
        ob_start();
        get_template_part('template/faq');
        $output = ob_get_clean();
        if (strpos($output, 'faq') !== false) {
            wp_enqueue_style(
                'faq-template-css',
                get_stylesheet_directory_uri() . '/template/css/testimonials.css',
                array(),
                null
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_testimonials_template_css');

// =====================
// ADMIN SCRIPTS & STYLES
// =====================

// Enqueue custom admin CSS
function enqueue_custom_admin_css()
{
    wp_enqueue_style('custom-admin-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_css');

// Enqueue admin style CSS (duplicate, consider removing one if not needed)
function enqueue_admin_style_css()
{
    wp_enqueue_style('admin-style-css', get_template_directory_uri() . '/style.css');
}
add_action('admin_enqueue_scripts', 'enqueue_admin_style_css');

// =====================
// SHORTCODES
// =====================

// Shortcode to load terms and conditions for My Business contact form
function load_my_business_terms_conditions()
{
    ob_start();
    $file_path = get_stylesheet_directory() . '/template/my_business_terms_conditions.php';

    if (file_exists($file_path)) {
        include $file_path;
    } else {
        return '<p><em>Terms and Conditions file not found.</em></p>';
    }

    return ob_get_clean();
}
add_shortcode('my_terms_conditions', 'load_my_business_terms_conditions');

// =====================
// EXTERNAL FUNCTION FILES
// =====================
require_once get_template_directory() . '/functions/get_branches_ajax.php';
require_once get_template_directory() . '/functions/get_reference_number.php';
require_once get_template_directory() . '/functions/motorcycle_loan_original_cr_request_form.php';
require_once get_template_directory() . '/functions/form_validation.php';
require_once get_template_directory() . '/functions/delete_form_db_send_email.php';
require_once get_template_directory() . '/functions/disabled_endpoint.php';
// require_once get_template_directory() . '/functions/user_maintenance.php';
// =====================
// (OPTIONAL) COMMENTED CODE FOR REFERENCE
// =====================

// Add your commented or future-use code here for reference


function enqueue_script_and_styles()
{
    wp_enqueue_script(
        'sweetalert2-js',
        'https://cdn.jsdelivr.net/npm/sweetalert2@11.22.5/dist/sweetalert2.all.min.js',
        array(),
        '11.22.5',
        true
    );
    wp_enqueue_script(
        'field-validation',
        get_template_directory_uri() . '/inc/js/fields_validation.js',
        array('jquery'), // depends on jQuery
        null,
        true
    );
    wp_enqueue_style(
        'sweetalert2-css',
        'https://cdn.jsdelivr.net/npm/sweetalert2@11.22.5/dist/sweetalert2.min.css',
        array(),
        '11.22.5'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_script_and_styles');

function enqueue_custom_scripts()
{
    if (is_front_page()) {
        wp_enqueue_script(
            'homepage',
            get_template_directory_uri() . '/inc/js/homepage.js',
            array('jquery', 'field-validation'), // depends on field-validation!
            null,
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


add_action('admin_menu', function () {
    add_menu_page(
        'Plugins List',
        'Plugins List',
        'manage_options',
        'plugins-list',
        'render_plugins_list'
    );
});

function render_plugins_list() {
    if ( ! current_user_can('manage_options') ) {
        return;
    }

    // Handle CSV export
    if ( isset($_GET['export_plugins']) && $_GET['export_plugins'] === '1' ) {
        export_plugins_csv();
        exit;
    }

    // Get all installed plugins
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    $plugins = get_plugins();

    echo '<div class="wrap"><h1>Installed Plugins</h1>';
    echo '<p><a href="' . esc_url( admin_url('admin.php?page=plugins-list&export_plugins=1') ) . '" class="button button-primary">Export to CSV</a></p>';

    echo '<table class="widefat fixed striped">';
    echo '<thead><tr><th>Name</th><th>Version</th><th>Source</th><th>Plugin URI</th></tr></thead><tbody>';

    foreach ( $plugins as $path => $plugin ) {
        $name    = esc_html( $plugin['Name'] );
        $version = esc_html( $plugin['Version'] );
        $uri     = ! empty( $plugin['PluginURI'] ) ? '<a href="' . esc_url( $plugin['PluginURI'] ) . '" target="_blank">View</a>' : '—';

        // Detect source
        if ( strpos( $path, 'mu-plugins/' ) !== false ) {
            $source = 'Must-use (MU) Plugin';
        } elseif ( strpos( $path, 'wp-content/plugins/' ) !== false ) {
            $source = 'WordPress.org / Custom';
        } else {
            $source = 'Custom/Manual Upload';
        }

        echo "<tr>
                <td>{$name}</td>
                <td>{$version}</td>
                <td>{$source}</td>
                <td>{$uri}</td>
              </tr>";
    }

    echo '</tbody></table></div>';
}

function export_plugins_csv() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    $plugins = get_plugins();

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=plugins-list.csv');

    $output = fopen('php://output', 'w');
    fputcsv($output, ['Name', 'Version', 'Source', 'Plugin URI']); // header row

    foreach ( $plugins as $path => $plugin ) {
        $name    = $plugin['Name'];
        $version = $plugin['Version'];
        $uri     = ! empty( $plugin['PluginURI'] ) ? $plugin['PluginURI'] : '—';

        if ( strpos( $path, 'mu-plugins/' ) !== false ) {
            $source = 'Must-use (MU) Plugin';
        } elseif ( strpos( $path, 'wp-content/plugins/' ) !== false ) {
            $source = 'WordPress.org / Custom';
        } else {
            $source = 'Custom/Manual Upload';
        }

        fputcsv($output, [$name, $version, $source, $uri]);
    }

    fclose($output);
}
