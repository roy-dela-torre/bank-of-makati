<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/related_post.css">
<section class="product_and_services">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="left_content">
                            <span class="orange_text">Other Related Savings</span>
                            <h2>Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Ultricies sit luctus vel neque dictumst nulla laoreet.</p>
                        </div>
                    </div>
                </div>
                <?php
                global $paged;
                $curpage = $paged ? $paged : 1;
                $args = array(
                    'post_type'        => 'product-and-services',
                    'posts_per_page'   => 4,
                    'post_status'        => 'publish',
                    'order' => 'ASC',
                );
                $blogs_query = new WP_Query($args);
                if ($blogs_query->have_posts()):
                    while ($blogs_query->have_posts()) : $blogs_query->the_post();
                        $id = get_the_ID();
                        $date = get_the_date();
                        $title = get_the_title();
                        $description = get_the_excerpt();
                        $link = get_permalink();
                        $icons = get_field('icon', get_the_ID());
                        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full')
                            ? get_the_post_thumbnail_url(get_the_ID(), 'full')
                            : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png'; ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="content">
                                <div class="image">
                                    <img src="<?php echo esc_url($icons); ?>" alt="" class="icons">
                                    <img src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                                </div>
                                <div class="main_content">
                                    <h3><?php echo $title; ?></h3>
                                    <p class="description"><?php echo $description; ?></p>
                                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>