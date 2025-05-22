<?php
$banner_sections = json_decode(get_theme_mod('custom_banner_repeater', '[]'), true);

if (!empty($banner_sections)):
    foreach ($banner_sections as $banner): ?>
        <section class="banner" style="background: url('<?php echo esc_url($banner['banner_bg']); ?>') no-repeat center center / cover;">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="content">
                                <?php if (!empty($banner['header'])): ?>
                                    <h1 class="text-white text-center"><?php echo esc_html($banner['header']); ?></h1>
                                <?php endif; ?>

                                <?php if (!empty($banner['content'])): ?>
                                    <p><?php echo wp_kses_post($banner['content']); ?></p>
                                <?php endif; ?>

                                <?php if (!empty($banner['button_link']) && !empty($banner['button_text'])): ?>
                                    <a href="<?php echo esc_url($banner['button_link']); ?>" target="_blank" rel="noopener noreferrer" class="white_btn">
                                        <?php echo esc_html($banner['button_text']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach;
endif;
?>
