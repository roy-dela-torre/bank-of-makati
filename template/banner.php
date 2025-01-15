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
                <div class="content">
                    <h1 class="text-white text-center"><?php echo esc_html($header); ?></h1>
                    <?php echo $content; ?>
                    <a href="<?php echo esc_url($button_link); ?>" target="_blank" rel="noopener noreferrer" class="white_btn"><?php echo esc_html($button_text); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
endif;
?>