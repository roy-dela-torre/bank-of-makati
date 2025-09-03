<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/blogs.css">
<section class="news">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="header d-flex align-items-lg-center justify-content-between">
                    <div class="left_content">
                        <?php if (is_page('blogs')): ?>
                            <div class="group_button d-none">
                                <button type="button" class="financial_repost orange_btn"> Financial Reports</button>
                                <button type="button" class="transparent_btn annual_reports"> Annual Reports</button>
                            </div>
                        <?php endif; ?>
                        <span class="orange_text">Latest
                            <?php echo is_page('blogs') ? 'Blogs' : 'News on Bank of Makati'; ?></span>
                        <<?php echo is_page('blogs') ? 'h1' : 'h2'; ?>><?php echo is_page('blogs') ? 'Explore Our Blogs' : 'Stay Updated with Our Latest News'; ?></<?php echo is_page('blogs') ? 'h1' : 'h2'; ?>>
                        <p><?php echo is_page('blogs') ? 'Discover expert advice, practical tips, and inspiring business stories to help you make informed financial decisions.' : 'Check out our latest news and keep up with everything happening at Bank of Makati.'; ?>
                        </p>
                    </div>
                    <?php if (is_front_page()): ?>
                        <div class="right_content">
                            <a href="<?php echo get_home_url(); ?>/news" target="_blank" rel="noopener noreferrer"
                                class="blue_btn">View More</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="main_content">
                    <?php
                    $postype = get_query_var('post_type') ? get_query_var('post_type') : 'post'; // Default to 'post'
                    $args = array(
                        'post_type' => $postype,
                        'posts_per_page' => 4, // Limit to 4 posts
                        'post_status' => 'publish',
                        'order' => 'ASC',
                    );

                    $blogs_query = new WP_Query($args);
                    if ($blogs_query->have_posts()):
                        $is_large_content = true; // Start with the large content layout
                        while ($blogs_query->have_posts()):
                            $blogs_query->the_post();
                            $id = get_the_ID();
                            $date = get_the_date();
                            $title = get_the_title();
                            $description = get_the_excerpt();
                            $link = get_permalink();
                            $categories = get_the_category();
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_home_url() . '/wp-content/themes/bank-of-makati/assets/images/global/logo.png';
                    ?>
                            <?php if ($is_large_content): ?>
                                <div class="large_content"
                                    style="background: linear-gradient(0deg, rgba(43, 43, 43, 0.30) 0%, rgba(43, 43, 43, 0.30) 100%), url('<?php echo $img_url; ?>') lightgray 50% / cover no-repeat;">
                                    <div class="content">
                                        <?= is_page('blogs') ? "" : '<span class=" text-white bmi_today d-block mb-20">BMI Today</span>' ?>
                                        <h3 class="text-white"><?php echo $title; ?></h3>
                                        <p class="text-white"><?php echo $description; ?></p>
                                        <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer"
                                            class="orange_btn">Read More</a>
                                    </div>
                                </div>
                                <?php $is_large_content = false; ?>
                            <?php else: ?>
                                <div class="small_content d-flex">
                                    <div class="content">
                                        <div class="post_content">
                                            <?= is_page('blogs') ? "" : '<span class="bmi_today d-block mb-20">BMI Today</span>' ?>
                                            <h3><?php echo $title; ?></h3>
                                            <p><?php echo $description; ?></p>
                                            <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer"
                                                class="orange_btn">Read More</a>
                                        </div>
                                        <div class="image">
                                            <img loading="lazy" src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>"
                                                class="w-100 img-fluid">
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                    <?php endwhile;
                        wp_reset_postdata(); // Reset the query
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>