<?php
/* Template Name: template */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        // Get the slug of the post
        $slug = get_post_field('post_name', get_the_ID());

        // Redirect to the homepage + slug
        wp_redirect(home_url('/' . $slug));
        exit; // Ensure the script stops executing after redirection
    endwhile;
endif;

get_footer();
