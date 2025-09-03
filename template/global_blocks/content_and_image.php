
<?php if(have_rows('image_content')) : ?>
    <?php while ( have_rows('image_content') ) : the_row(); ?>

    <?php 
        $section_background_color = get_sub_field('section_background_color');
        $section_class = get_sub_field('section_class');
        $content_image = get_sub_field('content_image');
        $content_small_text = get_sub_field('content_small_text');
        $content_header = get_sub_field('content_header');
        $content_description = get_sub_field('content_description');
        $content_row_reverse = get_sub_field('content_row_reverse');
        $align_center_row = get_sub_field('align_center');
    ?>

    <section class="eligibility <?php echo $section_class; ?>" style="background: <?php echo $section_background_color;  ?>;">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row <?php echo $align_center_row == true ? 'align-items-center' : '' ?> <?php echo $content_row_reverse == true ? 'flex-row-reverse' : ''?>">
                    <div class="col-lg-6 d-none d-lg-block eligibility_img">
                        <div class="image">
                            <img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_small_text; ?>" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 <?php echo $content_row_reverse == true ? 'pe-xl-5' : 'ps-xl-5'?>">
                        <div class="content <?php echo $content_row_reverse == true ? 'pe-lg-5' : 'ps-lg-5'?>">
                            <span class="orange_text"><?php echo $content_small_text; ?></span>
                            <h2><?php echo $content_header; ?></h2>
                            <img src="<?php echo $content_image['url']; ?>" alt="<?php echo $content_small_text; ?>" class="img-fluid w-100 d-block d-lg-none mb-20">
                            <?php echo $content_description; ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>