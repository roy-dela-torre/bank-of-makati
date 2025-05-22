<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template/css/header_with_card_no_image.css">
<section class="header_with_card_no_image pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text"><?php echo get_field('field_67a08afbcd9c9'); ?></span>
                        <h2><?php echo get_field('header'); ?></h2>
                        <?php echo get_field('header_content'); ?>
                    </div>
                </div>
                <?php if (have_rows('cards')): ?>
                    <?php while (have_rows('cards')): the_row(); ?>
                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                            <div class="content">
                                <?php if (!empty(the_sub_field('icons'))): ?>
                                    <div class="icons"><img src="<?php echo the_sub_field('image'); ?>" alt=""></div>
                                <?php endif; ?>
                                <h3><?php the_sub_field('title'); ?></h3>
                                <p><?php the_sub_field('content'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>