<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/blogs.css">
<section class="news">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="header d-flex align-items-lg-center justify-content-between">
                    <div class="left_content">
                        <span class="orange_text">Latest <?php echo is_page('blogs') ? 'Blogs':'News on Bank of Makati'?></span>
                        <h2><?php echo is_page('news') ? 'BMI Today':'Stay Updated with Our Latest News'?></h2>
                        <p>Check out our latest news and keep up with everything happening at Bank of Makati.</p>
                    </div>
                    <div class="right_content">
                        <a href="<?php echo get_home_url(); ?>/" target="_blank" rel="noopener noreferrer" class="blue_btn">View More</a>
                    </div>
                </div>
                <div class="main_content">
                    <?php
                    $postype = get_query_var('post_type');
                    $args = array(
                        'post_type'        => $postype,
                        'posts_per_page'   => 4,
                        'post_status'        => 'publish',
                        'order' => 'ASC',
                    );
                    $large_content = true;
                    $blogs_query = new WP_Query($args);
                    if ($blogs_query->have_posts()):
                        while ($blogs_query->have_posts()) : $blogs_query->the_post();
                            $id = get_the_ID();
                            $date = get_the_date();
                            $title = get_the_title();
                            $description = get_the_excerpt();
                            $link = get_permalink();
                            $categories = get_the_category();
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '' . get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                            $excluded_posts[] = $id;
                            if ($large_content == true): ?>
                                <div class="large_content" style="background: url('<?php echo $img_url; ?>')no-repeat center center/cover">
                                    <div class="content">
                                        <span class="text-white">BMI Today</span>
                                        <h3 class="text-white"><?php echo $title; ?></h3>
                                        <p class="text-white"><?php echo $description; ?></p>
                                        <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Read More</a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="small_content d-flex">
                                    <div class="content">
                                        <div class="post_content">
                                            <span class="blue_text">BMI Today</span>
                                            <h3><?php echo $title; ?></h3>
                                            <p><?php echo $description; ?></p>
                                            <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Read More</a>
                                        </div>
                                        <div class="image">
                                            <img src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="w-100 img-fluid">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $large_content = false; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>