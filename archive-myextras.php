<?php get_header();
/*Template Name: My Extras Archive*/
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/my_extras.css">
<section class="banner h-100 d-flex align-items-center" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/myextras/banner.jpg')no-repeat center center/cover;">
    <div class="wrapper">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="text-center text-white">Added Benefits for a Better Banking Experience</h1>
                        <p class="text-center text-white">MyExtras offers exclusive perks, rewards, and value-added services designed to enhance your banking experience. Enjoy greater convenience, special privileges, and tailored solutions that go beyond traditional banking.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="uncategorize pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'myextras',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'uncategorized', // Replace with your category slug
                        ),
                    ),
                );

                // Execute the query
                $related_query = new WP_Query($args);

                // Check if there are posts
                if ($related_query->have_posts()):
                    while ($related_query->have_posts()) : $related_query->the_post();
                        $img_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                        $icons = get_field('icon');
                ?>
                        <div class="col-md-12">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="description"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>No posts found in the 'Uncategorized' category.</p>
                <?php endif;
                // Reset post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<section class="online_motorcycle_request_form pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header d-flex align-items-center flex-wrap justify-content-between">
                        <h2 class="">Online Motorcycle Request Form</h2>
                        <a href="<?php echo get_home_url(); ?>/myextra/motorcycle-request-form/" target="_blank" rel="noopener noreferrer" class="blue_btn">Learn More</a>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'myextras',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'online-motorcycle-request-form', // Replace with your category slug
                        ),
                    ),
                );

                // Execute the query
                $related_query = new WP_Query($args);

                // Check if there are posts
                if ($related_query->have_posts()):
                    while ($related_query->have_posts()) : $related_query->the_post();
                        $img_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                        $icons = get_field('icon');
                        $permalink = get_permalink();
                        $response = wp_remote_get($permalink, ['redirection' => 0]); // Don't follow redirects
                        $redirected_url = wp_remote_retrieve_header($response, 'location'); // Get the redirected URL

                        if (!$redirected_url) {
                            $redirected_url = $permalink; // Fallback if no redirection
                        }
                ?>
                        <div class="col-xxl-3 col-xl-4 col-lg-6">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="description"><?php the_excerpt(); ?></p>
                                    <a href="<?php echo esc_url($redirected_url); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>No posts found in the 'Business Account' category.</p>
                <?php endif;
                // Reset post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>



<section class="deposite_rate">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header d-flex align-items-center flex-wrap justify-content-between">
                        <h2>Deposit Rates</h2>
                        <a href="<?php echo get_home_url(); ?>/myextra/deposit-rates/" target="_blank" rel="noopener noreferrer" class="blue_btn">Learn More</a>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'myextras',
                    'posts_per_page' => 2,
                    'post_status'    => 'publish',
                    'order'          => 'DESC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'deposit-rates', // Replace with your category slug
                        ),
                    ),
                );

                // Execute the query
                $related_query = new WP_Query($args);

                // Check if there are posts
                if ($related_query->have_posts()):
                    while ($related_query->have_posts()) : $related_query->the_post();
                        $icons = get_field('icon');
                ?>
                        <div class="col-xl-6 col-lg-6">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                                <div class="main_content">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="description"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p>No posts found in the 'Business Account' category.</p>
                <?php endif;
                // Reset post data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>