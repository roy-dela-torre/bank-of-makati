<?php get_header();

$current_page_id = get_the_ID();
$page_slug = get_post_field('post_name', $current_page_id);
$args = array(
    'post_type' => 'product-and-services',
    'name'      => $page_slug,
    'posts_per_page' => 1,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    $query->the_post();
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
    <section class="content">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <h1><?php the_title(); ?></h1>
                    <div><?php the_content(); ?></div>
                </div>
            </div>
        </div>
    </section>
<?php
} else {

?>
    <section class="page h-100 d-flex align-items-center">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="content d-flex align-items-center flex-column">
                            <h1 class="text-center text-white">Page Under Maintenance</h1>
                            <p class="text-center text-white mb-20">Our website is currently undergoing maintenance to serve you better. Please check back soon—we’ll be back shortly!</p>
                            <a href="<?php echo get_home_url(); ?>" class="white_btn">Back to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        section.page {
            background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/maintenance.jpg')no-repeat center center/cover;
            max-height: 900px;
        }

        section.page .content{
            max-width: 675px;
        }

        @media (max-width: 991px) {
            section.page {
                max-height: 700px;
            }
        }

        @media (max-width: 767px) {
            section.page {
                max-height: 500px;
            }
        }
    </style>
<?php
}


wp_reset_postdata();

get_footer();
?>