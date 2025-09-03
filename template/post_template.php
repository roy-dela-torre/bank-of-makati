<?php
$data = get_query_var('data');

if ($data):
    $img_url = !empty($data['img_url']) ? $data['img_url'] : '' . get_stylesheet_directory_uri() . '/assets/images/global/logo.png';
    $title = $data['title'];
    $description = $data['description'];
    $post_url = $data['post_url'];
?>
    <div class="content post">
        <div class="image">
            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>">
        </div>
        <div class="main_content">
            <h3><?php echo esc_html($title); ?></h3>
            <p><?php echo esc_html($description); ?></p>
            <a href="<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Read More</a>
        </div>
    </div>
<?php
endif;
?>