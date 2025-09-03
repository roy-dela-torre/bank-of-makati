<?php get_header();
/*Template Name: My Money Archive*/
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/my_money.css">
<section class="banner h-100 d-flex align-items-center" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mymoney/banner.jpg')no-repeat center center/cover;">
    <div class="wrapper">
        <div class="contianer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="text-center text-white">Manage Your Finances with MyMoney</h1>
                        <p class="text-center text-white">Manage your personal finances with ease using MyMoney. Our platform offers a range of tools to help you track spending, set goals, and build a secure financial future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="personal_account pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="mb-0">Consumer Loans</h2>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mymoney',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'personal-accounts', // Replace with your category slug
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
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                            <div class="content">
                                <div class="image">
                                    <?php if ($icons): ?>
                                        <img src="<?php echo esc_url($icons); ?>" alt="Icon for <?php the_title_attribute(); ?>" class="icons">
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content personal_account_content">
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

<section class="consumer_loans">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="mb-0">Personal Accounts</h2>
                    </div>
                </div>
                <?php
                // Define the query arguments
                $args = array(
                    'post_type'      => 'mymoney',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',
                            'field'    => 'slug', // You can use 'slug' or 'term_id'
                            'terms'    => 'consumer-loans', // Replace with your category slug
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
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
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
        setEqualHeightForSection('section.personal_account .personal_account_content', 'h3');
    }

    // Call updateHeights initially and also on window resize
    $(window).on('load resize', function () {
        updateHeights();
    });
</script>