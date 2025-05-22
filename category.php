<?php get_header(); 
/*Template Name: Categories*/ 
?>
<section class="post_categories">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <!-- Filter Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar_filter">
                        <ul>
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'name',
                                'order'   => 'ASC',
                            ));
                            foreach ($categories as $category) {
                                echo '<li>
                                    <input type="checkbox" class="category-filter" value="' . esc_attr($category->term_id) . '"> ' . esc_html($category->name) . '
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <!-- Post Content Area -->
                <div class="col-lg-8">
                    <div id="post-content">
                        <div class="row">
                            <?php
                            // Get current page number
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                            // Query posts with pagination
                            $args = array(
                                'posts_per_page' => -1, // Number of posts per page
                                'paged'          => $paged,
                            );
                            $blogs_query = new WP_Query($args);
                            $count = 0;
                            if ($blogs_query->have_posts()) :
                                while ($blogs_query->have_posts()) :
                                    $blogs_query->the_post(); ?>
                                    <div class="col-lg-4" <?php echo $count >= 6 ? 'style="display:none;"' : '' ?>>
                                        <div class="content">
                                            <div class="featured_image">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                            <?php
                                    $count += 1;
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>No posts found.</p>';
                            endif;
                            ?>
                            <div class="paging">
                                <nav class="pagination-container d-flex align-items-center justify-content-center">
                                    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                                        prev
                                    </button>

                                    <div id="pagination-numbers">

                                    </div>

                                    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                                        next
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>