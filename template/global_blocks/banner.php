
<?php if(have_rows('banner_content')) : ?>
    <?php while ( have_rows('banner_content') ) : the_row(); ?>

    <?php 
        $bg_image = get_sub_field('banner_background_image');
        $section_class = get_sub_field('section_class');
        $heading = get_sub_field('banner_heading');
        $description = get_sub_field('banner_description');
        $btn_link = get_sub_field('banner_button_link');
        $btn_text = get_sub_field('banner_button_text');

        $post_type = get_post_type();
        $mymoney = '';

        // Check if the post type is 'page'
        if ($post_type === 'mymoney' || $post_type === 'mybusiness') {
            $mymoney = 'max-width: 1200px';
        }
    ?>

    <section class="banner <?php echo $section_class; ?>" style="background: url('<?php echo $bg_image['url']; ?>') no-repeat center center / cover;">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="content" style="<?php echo $mymoney; ?>">
                            <?php
                            if (is_page('motorcycle-loan') || is_page('229') || is_page('housing-loan') || is_page('247') || is_page('256') || is_page('business-loans') || is_page(85) || is_page('retirement-savings-account') || is_page('young-savers-with-atm') || is_page('226')):
                                $headers = "h2";
                            else:
                                $headers = "h1";
                            endif;
                            ?>
                            <?php if (!empty($heading)): ?>
                                <<?php echo $headers; ?> class="text-white text-center"><?php echo $heading; ?></<?php echo $headers; ?>>
                            <?php endif; ?>

                            <?php if (!empty($description)): ?>
                                <?php echo $description; ?>
                            <?php endif; ?>

                            <?php if (!empty($btn_link) && !empty($btn_text)): ?>
                                <a href="<?php echo $btn_link; ?>" target="_blank" rel="noopener noreferrer" class="white_btn">
                                    <?php echo $btn_text; ?>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>