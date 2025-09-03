<?php

// Check value exists.
if (have_rows('my_money')) :

    // Loop through rows.
    while (have_rows('my_money')) : the_row();

        // Case: Banner layout.
        if (get_row_layout() == 'banner') {
            get_template_part('template/global_blocks/banner');

        // Case: Cards Without Image layout.
        } elseif (get_row_layout() == 'cards_no_image') {
            get_template_part('template/global_blocks/header_with_cards');

        // Case: Other Related Post layout.
        } elseif (get_row_layout() == 'other_related_post') {
            get_template_part('template/global_blocks/other_related_post');

        // Case: Image and Content layout.
        } elseif (get_row_layout() == 'image_and_content') {
            get_template_part('template/global_blocks/content_and_image');

        // Case: Content with Background Image layout.
        } elseif (get_row_layout() == 'content_with_background_image') {
            get_template_part('template/global_blocks/content_with_bg');

        // Case: Accordion layout.
        } elseif (get_row_layout() == 'calculator') {
            get_template_part('template/global_blocks/loan_calculator');
        
        } elseif (get_row_layout() == 'accordion_layout') {
            get_template_part('template/global_blocks/accordion_content');

        } elseif (get_row_layout() == 'partners') {
            get_template_part('template/global_blocks/company_partners');

        } 
        elseif (get_row_layout() == 'client_testimonial') {
            get_template_part('template/global_blocks/testimonials');
        
        } 

    endwhile;

// No value.
else :
    // Do something...
endif;
