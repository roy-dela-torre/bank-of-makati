<?php if (have_rows('the_testimonial')) : ?>
    <?php while (have_rows('the_testimonial')) : the_row(); ?>

        <?php
        $section_class = get_sub_field('section_class');
        $section_background = get_sub_field('section_background');
        $small_text = get_sub_field('small_text');
        $acf_title = get_sub_field('title'); // Renamed to avoid conflicts
        $acf_description = get_sub_field('description'); // Renamed to avoid conflicts
        ?>
        <section class="testimonials <?php echo esc_attr($section_class); ?>" style="background: <?php echo esc_attr($section_background); ?>;">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                                <div class="left_content">
                                    <span class="orange_text"><?php echo esc_html($small_text); ?></span>
                                    <h2><?php echo esc_html($acf_title); ?></h2>
                                    <p><?php echo $acf_description; ?></p>
                                </div>
                                <div class="right_content">
                                    <div class="testimonials_group_button">
                                        <button class="prev disabled" disabled="disabled">
                                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.305119 5.33344L5.63856 9.79705e-08L6.97168 1.33312L2.3048 6L6.97168 10.6669L5.63856 12L0.305119 6.66656C0.12837 6.48976 0.0290785 6.25 0.0290785 6C0.0290786 5.75 0.12837 5.51024 0.305119 5.33344Z" fill="white"></path>
                                            </svg>
                                        </button>
                                        <button class="next enabled">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.69488 6.66656L1.36144 12L0.0283203 10.6669L4.6952 6L0.0283203 1.33312L1.36144 0L6.69488 5.33344C6.87163 5.51024 6.97092 5.75 6.97092 6C6.97092 6.25 6.87163 6.48976 6.69488 6.66656Z" fill="white"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div id="testimonials_carousel" class="owl-carousel owl-theme">
                                    <?php
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page number
                                    $post_types = array('testimonials'); // Use the correct post type name (singular)

                                    $args = array(
                                        'post_type'      => $post_types,
                                        'posts_per_page' => -1,
                                        'paged'          => $paged,
                                        'order'          => 'DESC',
                                        'post_status'    => 'publish',
                                    );

                                    $blogs_query = new WP_Query($args); // Initialize WP_Query

                                    if ($blogs_query->have_posts()):
                                        while ($blogs_query->have_posts()): $blogs_query->the_post();
                                            $post_id = get_the_ID();
                                            $post_title = get_the_title();
                                            $post_description = get_the_content();
                                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                    ?>
                                            <div class="testimonials_item animate__fadeIn">
                                                <div class="content">
                                                    <div class="main_content d-flex flex-column">
                                                        <?php
                                                        if (is_single(822)):

                                                        else: ?>
                                                            <div class="quotation">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/quotation.png" alt="quotation" class="">
                                                            </div>
                                                        <?php endif;
                                                        ?>
                                                        <div class="company_logo">
                                                            <img src="<?php echo $img_url; ?>" alt="<?php echo $post_title; ?>" class="">
                                                        </div>
                                                        <?php echo $post_description; // Ensure safe output 
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata(); // Reset post data
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>