<?php if(have_rows('company_partners')) : ?>
    <?php while ( have_rows('company_partners') ) : the_row(); ?>

    <?php 
        $section_class = get_sub_field('section_class');
        $section_background = get_sub_field('section_background');
        $small_text = get_sub_field('small_text');
        $title = get_sub_field('title');
        $short_description = get_sub_field('short_description');
        $partner_logo = get_sub_field('partner_logo');
    ?>

    <section class="company_partner <?php echo $section_class; ?>" style="background: <?php echo $section_background; ?>;">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="company_partner_header">
                            <span class="orange_text"><?php echo $small_text; ?></span>
                            <h2><?php echo $title; ?></h2>
                            <?php echo $short_description; ?>
                        </div>
                    </div>
    
                    <?php 

                    if ($partner_logo): ?>
                        
                        <div class="partner_gallerys ">
                            <div class="row justify-content-center company_partner_row_gap">

                            <?php foreach ($partner_logo as $image): ?>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="partner_images ps-4 pe-4">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    </div>
                                </div>
                                
                            <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>