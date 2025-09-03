<?php if (have_rows('content_with_bg')) : ?>
    <?php while (have_rows('content_with_bg')) : the_row(); ?>

        <?php
        $section_background_color = get_sub_field('section_background_color');
        $background_image = get_sub_field('background_image');
        $section_class = get_sub_field('section_class');
        $small_text = get_sub_field('small_text');
        $header_title = get_sub_field('header_title');
        $content = get_sub_field('content');
        $button_link = get_sub_field('button_link');
        $button_text = get_sub_field('button_text');
        ?>

        <section class="content_with_bg <?php echo $section_class; ?>" style="background: <?php echo $section_background_color; ?>;">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="background_image" style="background: url('<?php echo $background_image['url']; ?>') no-repeat center center / cover;">
                        <div class="contents">
                            <span class="text-white"><?php echo $small_text; ?></span>
                            <h2 class="text-white"><?php echo $header_title; ?></h2>
                            <div class="content_with_bg_text">
                                <div class="main_content">
                                    <?php echo $content; ?>
                                </div>
                            </div>
                            <?php if ($button_link): ?>
                                <a href="<?php echo esc_url($button_link['url']); ?>" target="_blank">
                                    <?php echo esc_html($button_link['title']); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>