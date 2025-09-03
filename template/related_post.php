<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/related_post.css">
<section class="product_and_services">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <div class="left_content">
                            <?php
                            // Get categories associated with the current page
                            $categories = get_the_category();

                            if (!empty($categories)) {
                                echo '<span class="orange_text">Other Related ';
                                foreach ($categories as $category) {
                                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                                }
                                echo '</span>';
                            } else {
                                echo '<span class="orange_text">Other Related Loans</span>';
                            }
                            ?>

                            <h2>Lorem Ipsum</h2>
                            <p>Lorem ipsum dolor sit amet consectetur. Ultricies sit luctus vel neque dictumst nulla laoreet.</p>
                        </div>
                    </div>
                </div>

                <?php
                // Get the Post Object field (field key: field_679b0bbf05936)
                $related_posts = get_field('field_679b0bbf05936'); // Get Post Object field

                if ($related_posts):
                    // Array to store post IDs
                    $related_post_ids = array();

                    // Loop through each related post and push the post ID into the array
                    foreach ($related_posts as $post_object) {
                        $related_post_ids[] = $post_object->ID;
                    }

                    // Set up WP_Query arguments to fetch posts based on the IDs from ACF field
                    $args = array(
                        'post_type'      => array('post', 'mymoney', 'product-and-services'), // Add the post types you're querying
                        'posts_per_page' => 4, // Limit the number of posts displayed
                        'post_status'    => 'publish', // Only show published posts
                        'orderby'        => 'post__in', // Maintain the order from ACF Post Object field
                        'post__in'       => $related_post_ids, // Restrict the query to only the selected post IDs
                    );

                    // Perform the query
                    $related_query = new WP_Query($args);

                    if ($related_query->have_posts()):
                        while ($related_query->have_posts()) : $related_query->the_post();
                            $id = get_the_ID();
                            $date = get_the_date();
                            $title = get_the_title();
                            $description = get_the_excerpt();
                            $link = get_permalink();
                            $icons = get_field('icon', get_the_ID());
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full')
                                ? get_the_post_thumbnail_url(get_the_ID(), 'full')
                                : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                            ?>
                            <div class="col-xxl-3 col-xl-6 col-lg-6">
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
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>No related posts found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>