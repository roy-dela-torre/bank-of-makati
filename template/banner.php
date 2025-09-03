<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/banner.css">
<?php
$data = get_query_var('data');

if ($data):
    $banner_bg = $data['banner_bg'];
    $header = $data['header'];
    $content = $data['content'];
    $button_text = $data['button_text'];
    $button_link = $data['button_link'];
    $id = $data['id'];
?>
    <section class="banner" style="background: url('<?php echo esc_url($banner_bg); ?>') no-repeat center center / cover;">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justi-content-center">
                    <div class="col-md-12">
                        <div class="content">
                            <?php
                            if (is_page('motorcycle-loan') || is_page('229') || is_page('housing-loan') || is_page('247') || is_page('256') || is_page('business-loans') || is_page(85) || is_page('retirement-savings-account') || is_page('young-savers-with-atm') || is_page('226')):
                                $headers = "h2";
                            else:
                                $headers = "h1";
                            endif;
                            ?>
                            <?php if (!empty($header)): ?>
                                <<?php echo $headers; ?> class="text-white text-center"><?php echo esc_html($header); ?></<?php echo $headers; ?>>
                            <?php endif; ?>

                            <?php if (!empty($content)): ?>
                                <?php echo $content; ?>
                            <?php endif; ?>

                            <?php if (!empty($button_link) && !empty($button_text)): ?>
                                <a href="<?php echo esc_url($button_link); ?>" target="_blank" rel="noopener noreferrer" class="white_btn">
                                    <?php echo esc_html($button_text); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>