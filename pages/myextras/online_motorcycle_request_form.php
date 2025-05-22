<?php get_header();
/*Template Name: Motorcycle Request Form - Bank of Makati*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/online_motorcycle_request_form/';
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo $css_path; ?>/online_motorcycle_request_form.css">
<?php get_template_part('template/banner_php'); ?>
<section class="image_content">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?php echo $img_path; ?>Lorem Ipsum.jpg" alt="Lorem ipsum dolor ">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="content">
                        <span class="orange_text">Online Motorcycle Request Form</span>
                        <h2>Motorcycle Loan Request</h2>
                        <img src="<?php echo $img_path; ?>Lorem Ipsum.jpg" alt="Lorem ipsum dolor " class="d-block d-lg-none w-100 img-fluid mb-20">
                        <p>Get one step closer to owning your dream motorcycle with a hassle-free online request. Choose from a wide selection of quality-branded models available nationwide through top dealerships like Motortrade and Honda Prestige. Enjoy flexible payment terms, with installment plans ranging from six months to three years.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="online_motorcycle_request_form">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text">Online Motorcycle Request Forms</span>
                        <h2>Request Forms</h2>
                        <p>Easily access and submit the right form for your motorcycle-related requests. Choose from various options to ensure a smooth and hassle-free process.</p>
                    </div>
                </div>

                <?php
                // Fetch terms from the 'motorcycle-request-form' taxonomy
                $terms = get_terms(array(
                    'taxonomy'   => 'motorcycle-request-form',
                    'hide_empty' => false, // Set to true to exclude empty terms
                ));

                if (!empty($terms) && !is_wp_error($terms)) :
                    foreach ($terms as $term) :
                        $term_link = get_term_link($term); // Get the term link
                        $icon_image = get_field('icon', 'motorcycle-request-form_' . $term->term_id); // Fetch ACF field for term
                ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="content">
                                <div class="icons">
                                    <?php if ($icon_image) : ?>
                                        <img src="<?php echo esc_url($icon_image); ?>" alt="<?php echo esc_attr($term->name); ?> Icon">
                                    <?php endif; ?>
                                </div>
                                <h3><?php echo esc_html($term->name); ?></h3>
                                <p><?php echo $term->description; ?></p>
                                <a href="<?php echo esc_url($term_link); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Get Started Now</a>
                            </div>
                        </div>

                    <?php endforeach;
                else : ?>
                    <p><?php esc_html_e('No terms found.', 'text-domain'); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_template_part('template/contact-us');
get_footer(); ?>