
<?php if(have_rows('related_post')) : ?>
    <?php while ( have_rows('related_post') ) : the_row(); ?>

    <?php 
        $section_background_color = get_sub_field('section_background_color');
        $section_class = get_sub_field('section_class');
        $related_small_text = get_sub_field('related_small_text');
        $related_title = get_sub_field('related_title');
        $related_description = get_sub_field('related_description');
        $related_post = get_sub_field('related_post');
    ?>

    <section class="product_and_services <?php echo $section_class; ?>" style="background: <?php echo $section_background_color; ?>">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <div class="left_content">
                                <span class="orange_text"><?php echo $related_small_text; ?></span>
                                <h2><?php echo $related_title; ?></h2>
                                <?php echo $related_description; ?>
                            </div>
                        </div>
                    </div>

                    <?php 
                    if ($related_post) :
                        foreach ($related_post as $post) :
                            setup_postdata($post);

                            $id = get_the_ID();
                            $date = get_the_date();
                            $title = get_the_title();
                            $description = get_the_excerpt();
                            $link = get_permalink();
                            $icons = get_field('icon', get_the_ID());
                            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full')
                                ? get_the_post_thumbnail_url(get_the_ID(), 'full')
                                : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                            ?>
                            
                            <div class="col-xxl-3 col-xl-6 col-lg-6">
                                <div class="content">
                                    <div class="image">
                                        <img src="<?php echo esc_url($icons); ?>" alt="" class="icons">
                                        <img src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                                    </div>
                                    <div class="main_content">
                                        <h3><?php echo $title; ?></h3>
                                        <p class="description"><?php echo $description; ?></p>
                                        <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                        endforeach;
                        // Reset post data
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>