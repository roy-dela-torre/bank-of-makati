<?php get_header();
/*Template Name: News*/
?>
<meta name="robots" content="noindex, follow">
<?php
add_filter('wpseo_robots', function ($robots) {
    return 'index, follow';
});
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/post_content.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/news_main.css">
<?php
// Define the categories you want to use as tabs
$news_categories = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC',
    'include' => array( // Replace with your category IDs or slugs
        // Example: 3, 5
        // Or leave empty to show all categories
    ),
));

// Get selected category from query var or default to first
$selected_cat = isset($_GET['news_cat']) ? intval($_GET['news_cat']) : (isset($news_categories[0]) ? $news_categories[0]->term_id : 0);

set_query_var('post_type', 'news');
echo get_template_part('template/blogs');
?>

<section class="news-tabs-section">
    <div class="wrapper">
        <ul class="news-tabs nav nav-tabs mb-4">
            <?php foreach ($news_categories as $cat): ?>
                <li class="nav-item">
                    <a class="nav-link<?php if ($selected_cat == $cat->term_id) echo ' active'; ?>"
                       href="<?php echo esc_url(add_query_arg('news_cat', $cat->term_id)); ?>">
                        <?php echo esc_html($cat->name); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active">
                <div class="row">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'paged' => $paged,
                        'posts_per_page' => 9,
                        'post_type' => array('news'),
                        'cat' => $selected_cat,
                    );
                    $search_query = new WP_Query($args);

                    if ($search_query->have_posts()):
                        while ($search_query->have_posts()): $search_query->the_post();
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                            $post_id = get_the_ID();
                            $title = get_the_title();
                            $description = get_the_excerpt();
                            $post_url = get_the_permalink();

                            $data = array(
                                'img_url' => $img_url,
                                'title' => $title,
                                'post_url' => $post_url,
                                'post_id' => $post_id,
                                'description' => $description,
                            );

                            set_query_var('data', $data); ?>
                            <div class="col-lg-4 col-md-6">
                                <?php get_template_part('template/post_template'); ?>
                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <div class="col-12">
                            <p>No news found in this category.</p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="paging d-flex justify-content-center align-items-center">
                    <?php
                    $totalPages = $search_query->max_num_pages;
                    echo paginate_links(array(
                        'total' => $totalPages,
                        'mid_size' => 2,
                        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                            <path d="M8.01844 16.6636L0.253469 9.12797C0.161303 9.03826 0.0958652 8.94107 0.0571556 8.83641C0.018446 8.73175 -0.000601545 8.61961 1.29147e-05 8.5C1.29356e-05 8.38039 0.0193678 8.26825 0.0580774 8.16359C0.0967871 8.05893 0.161918 7.96174 0.253469 7.87203L8.01844 0.313985C8.23349 0.104663 8.50231 1.48659e-06 8.82489 1.54299e-06C9.14747 1.59939e-06 9.42397 0.112139 9.65438 0.336413C9.8848 0.560688 10 0.822341 10 1.12137C10 1.42041 9.88479 1.68206 9.65438 1.90633L2.88019 8.5L9.65438 15.0937C9.86943 15.303 9.97696 15.5611 9.97696 15.8679C9.97696 16.1747 9.86175 16.4399 9.63134 16.6636C9.40092 16.8879 9.1321 17 8.82489 17C8.51767 17 8.24885 16.8879 8.01844 16.6636Z" fill="#1B4298"/>
                        </svg>',
                        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                            <path d="M1.98156 0.336412L9.74653 7.87203C9.8387 7.96174 9.90413 8.05893 9.94284 8.16359C9.98155 8.26825 10.0006 8.38039 9.99999 8.5C9.99999 8.61961 9.98063 8.73175 9.94192 8.83641C9.90321 8.94107 9.83808 9.03826 9.74653 9.12797L1.98156 16.686C1.76651 16.8953 1.49769 17 1.17511 17C0.852531 17 0.576034 16.8879 0.345619 16.6636C0.115205 16.4393 -1.83546e-06 16.1777 -1.80932e-06 15.8786C-1.78317e-06 15.5796 0.115205 15.3179 0.345619 15.0937L7.11981 8.5L0.345621 1.90633C0.130567 1.69701 0.0230402 1.43894 0.0230403 1.13214C0.0230403 0.82533 0.138248 0.560086 0.368662 0.336412C0.599077 0.112136 0.867894 -7.98354e-07 1.17511 -7.71496e-07C1.48233 -7.44638e-07 1.75115 0.112136 1.98156 0.336412Z" fill="#1B4298"/>
                        </svg>'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>