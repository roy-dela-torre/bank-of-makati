<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/contact_us.css">

<section class="contact_us <?php echo get_field('contact_us_section_class'); ?>" 
    <?php 
        $background_color = get_field('contact_us_background_color');
        if (!empty($background_color)) {
            echo 'style="background-color: ' . esc_attr($background_color) . ';"';
        }
    ?>
>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php
                $background_image = get_field('contact_us_background_image', get_the_ID());
                $background_image_url = !empty($background_image) ? esc_url($background_image['url']) : '';
                ?>
                <div class="col-md-12">
                    <div class="content_bg"
                        style="background: url('<?php echo $background_image_url; ?>')no-repeat center center / cover;">
                        <div class="main_content">
                            <?php if ($small_text = get_field('contact_us_small_text')): ?>
                                <span class="text-white"><?php echo esc_html($small_text); ?></span>
                            <?php endif; ?>

                            <?php if ($header = get_field('contact_us_header')): ?>
                                <h2 class="text-white"><?php echo esc_html($header); ?></h2>
                            <?php endif; ?>

                            <?php if ($content = get_field('contact_us_content')): ?>
                                <div class="contact_content"><?php echo wp_kses_post($content); ?></div>
                            <?php endif; ?>

                            <?php if ($link = get_field('contact_us_link')): ?>
                                <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer"
                                    class="orange_btn">
                                    <?php echo esc_html(get_field('contact_us_text')); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>