<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/content_image.css">
<section class="eligibility pt-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center <?php echo get_field('row_reverse') == true ? 'flex-row-reverse' : ''?>">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?php echo esc_url(get_field('image')); ?>" alt="<?php echo get_field('small_text'); ?>" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="content ps-xl-5">
                        <span class="orange_text"><?php echo get_field('small_text'); ?></span>
                        <h2><?php echo get_field('header'); ?></h2>
                        <img src="<?php echo esc_url(get_field('image')); ?>" alt="<?php echo get_field('small_text'); ?>" class="img-fluid w-100 d-block d-lg-none mb-20">
                        <?php echo get_field('content_image_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>