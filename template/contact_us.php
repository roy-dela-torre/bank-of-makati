<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/contact_us.css">
<section class="contact_us pt-0" style="<?php echo get_field('banner_background'); ?>">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content_bg">
                        <div class="main_content">
                            <span class="text-white"><?php echo get_field('small_text'); ?></span>
                            <h2 class="text-white"><?php echo get_field('header'); ?></h2>
                            <?php echo get_field('main_content'); ?>
                            <a href="<?php echo get_field('button_link'); ?>/contact-us/" target="_blank" rel="noopener noreferrer" class="orange_btn"><?php echo get_field('button_text'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>