<?php if (have_rows('banner_content')) : ?>
    <?php while (have_rows('banner_content')) : the_row(); ?>

        <?php
        $bg_image = get_sub_field('banner_background_image');
        $section_class = get_sub_field('section_class');
        $heading = get_sub_field('banner_heading');
        $description = get_sub_field('banner_description');
        $btn_link = get_sub_field('banner_url');
        $btn_link2 = get_sub_field('banner_url_2');

        $post_type = get_post_type();
        $mymoney = '';

        // Check if the post type is 'page'
        if ($post_type === 'mymoney' || $post_type === 'mybusiness') {
            $mymoney = 'max-width: 1200px';
        }

        $single_posts = [
            'young-savers',
            580,
            504,
            'motorcycle-loan',
            495,
            'housing-loan',
            644,
            'business-loans'
        ];
        ?>

        <section class="banner <?php echo $section_class; ?>" style="background: url('<?php echo $bg_image['url']; ?>') no-repeat center center / cover;">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="content" style="<?php echo $mymoney; ?>">
                                <?php
                                $headers = "";
                                if (is_single($single_posts)):
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

                                <?php

                                $link_url = isset($btn_link['url']) ? $btn_link['url'] : '';
                                $link_title = isset($btn_link['title']) ? $btn_link['title'] : '';

                                $link_url1 = isset($btn_link2['url']) ? $btn_link2['url'] : '';
                                $link_title1 = isset($btn_link2['title']) ? $btn_link2['title'] : '';

                                // Fallbacks for esc_url and esc_html if not available
                                if (!function_exists('esc_url')) {
                                    function esc_url($url) {
                                        return filter_var($url, FILTER_SANITIZE_URL);
                                    }
                                }
                                if (!function_exists('esc_html')) {
                                    function esc_html($text) {
                                        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
                                    }
                                }
                                ?>
                                <div class="d-flex flex-sm-row flex-column gap-sm-4 gap-3 w-100 justify-content-center cta_buttons">
                                    <?php if (!empty($btn_link) && !empty($link_url)): ?>
                                        <a href="<?php echo esc_url($link_url); ?>" target="_blank" class="white_btn"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                    <?php if (!empty($btn_link2) && !empty($link_url1)): ?>
                                        <a href="<?php echo esc_url($link_url1); ?>" target="_blank" class="orange_btn"><?php echo esc_html($link_title1); ?></a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>