<?php get_header();
/*Template Name: My Business Archive*/
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/my_business.css">
<section class="banner d-flex align-items-center" style="background: url('https://bankofmakati.innovnational.com/wp-content/uploads/2025/06/mybusiness-banner-min.jpg')no-repeat center center/cover;">
    <div class="wrapper">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="text-center text-white">Empower Your Business with MyBusiness</h1>
                        <p class="text-center text-white">Bank of Makati’s MyBusiness offers tailored financial solutions to help entrepreneurs and businesses grow. From flexible loan options to efficient banking services, we provide the support you need to achieve long-term success.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="business_account pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="mb-0">Business Account</h2>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mybusiness',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'business-account', // Replace with your category slug
                        ),
                    ),
                    'orderby'        => 'date',
                );

                // Execute the query
                $related_query = new WP_Query($args);

                // Check if there are posts
                if ($related_query->have_posts()):
                    while ($related_query->have_posts()) : $related_query->the_post();
                        $img_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                        $icons = get_field('icon');
                ?>
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                            <div class="content">
                                <div class="image_height">
                                    <div class="image">
                                        <?php if ($icons): ?>
                                            <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                        <?php endif; ?>
                                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                    </div>
                                </div>
                                
                                <div class="main_content business_account_content">
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

<section class="business_loan pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="mb-0">Business Loans</h2>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mybusiness',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'business-loans', // Replace with your category slug
                        ),
                    ),
                );

                // Execute the query
                $related_query = new WP_Query($args);

                // Check if there are posts
                if ($related_query->have_posts()):

                    $total = $related_query->post_count; // Total number of posts
                    $current = 0; // Counter for current loop index


                    while ($related_query->have_posts()) : $related_query->the_post();
                        $current++;

                        $img_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                        $icons = get_field('icon');
                ?>
                    <?php if ($current === $total) { // Check if this is the last card ?>
                        <div class="col-12 custom-col">
                            <div class="content flex-lg-row">
                                <div class=" w-100 content_image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100 image_full_width">
                                </div>
                                <div class="main_content content_row">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="description"><?php the_excerpt(); ?></div>
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content business_loan_content">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="description"><?php the_excerpt(); ?></div>
                                    <a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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

<section class="uncategorize pb-0 d-none">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mybusiness',
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

<section class="cash_management_service pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="mb-0">Cash Management Services</h2>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mybusiness',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'cash-management-services', // Replace with your category slug
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
                        <div class="col-xxl-4 col-xl-6 col-lg-6">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content cash_management_service_content">
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

<section class="credit_application_form">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header d-flex align-items-md-center flex-md-row flex-column gap-20 justify-content-between">
                        <h2 class="mb-0">Credit Application Form</h2>
                        <a href="<?php echo home_url('mybusiness/credit-application-form'); ?>" target="_blank" rel="noopener noreferrer" class="blue_btn">Learn More</a>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mybusiness',
                    'posts_per_page' => 2,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'credit-application-form', // Replace with your category slug
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
                        <div class="col-xl-6 col-lg-6">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content credit_application_form_content">
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
        setEqualHeightForSection('section.business_account .business_account_content', 'h3');
        setEqualHeightForSection('section.business_loan .business_loan_content', 'h3');
        setEqualHeightForSection('section.credit_application_form .credit_application_form_content', 'h3');
        setEqualHeightForSection('section.cash_management_service .cash_management_service_content', 'h3');
    }

    // Call updateHeights initially and also on window resize
    $(window).on('load resize', function () {
        updateHeights();
    });
</script>