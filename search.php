<?php
get_header();
global $wp_query;
$s = sanitize_text_field($_GET['s']);
$img = get_stylesheet_directory_uri() . '/assets/img/homepage';
if (is_post_type_archive('news')) {
    set_query_var('post_type', 'news');
} elseif (is_page('blogs')) {
    set_query_var('post_type', 'post');
} elseif (is_post_type_archive('mybusiness')) {
    set_query_var('post_type', 'mybusiness');
} elseif (is_post_type_archive('myextras')) {
    set_query_var('post_type', 'myextras');
} elseif (is_post_type_archive('mymoney')) {
    set_query_var('post_type', 'mymoney');
} else {
    set_query_var('post_type', array('news', 'mymoney', 'mybusiness', 'myextras'));
}
$post_type = get_query_var('post_type') ? get_query_var('post_type') : 'post';
$img_path = get_template_directory_uri() . '/assets/images/bmi_branch_locator';
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/search.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/post_content.css">
<section class="banner h-100 align-items-center d-flex">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="content">
                    <h1 class="text-center text-white">Search Results For “<?php echo esc_html($s); ?>”</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="searchResults <?php echo $post_type == "branche" ? "branches" : "" ?>">
    <div class="container-fluid">
        <div class="wrapper">
            <div class="row d-none d-lg-flex">
                <?php
                // Check if search query exists
                $s = get_query_var('s'); // Get the search term

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page

                // Define the query arguments
                $args = array(
                    's'              => $s,               // Search query
                    'paged'          => $paged,           // Pagination
                    'posts_per_page' => 9,                // Number of posts per page
                    'post_type'      => $post_type,       // Post type (branche)
                    'post_status'    => 'publish',      // Only show published posts
                );

                $search_queryfirst = new WP_Query($args);

                if ($search_queryfirst->have_posts()):
                    while ($search_queryfirst->have_posts()): $search_queryfirst->the_post();
                        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $post_id = get_the_ID();
                        $title = get_the_title();
                        $description = get_the_excerpt();
                        $post_url = get_the_permalink();

                        // Prepare data for the template part
                        $data = array(
                            'img_url'     => $img_url,
                            'title'       => $title,
                            'post_url'    => $post_url,
                            'post_id'     => $post_id,
                            'description' => $description,
                        );

                        // Pass the data to the template part
                        set_query_var('data', $data); ?>
                        <div class="col-lg-4 col-md-6">
                            <?php if ($post_type == "branche"): ?>
                                <div class="content">
                                    <div class="maps">
                                        <img src="<?php echo $img_path; ?>/maps_placeholder.jpg" alt="" class="img-fluid w-100 maps_placeholder">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.381001975133!2d120.60405720000001!3d18.192407199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338ec7655eaea311%3A0x88cb786fcaced8b5!2sNRN%20Apartment%20and%20building!5e0!3m2!1sen!2sph!4v1737011132438!5m2!1sen!2sph" width="600" height="450" style="border:0;display: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="main_content">
                                        <h3><?php the_title(); ?></h3>
                                        <div class="location">
                                            <?php

                                            if (get_field('location')) {
                                            ?>
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.13214 2.5C11.0684 2.5 14.2643 5.70071 14.2643 9.64286C14.2643 11.7529 13.2059 14.2336 11.9057 16.44C10.0199 19.6407 7.66207 22.2636 7.66207 22.2636C7.52727 22.4143 7.33398 22.5 7.13214 22.5C6.9303 22.5 6.73701 22.4143 6.60222 22.2636C6.60222 22.2636 4.24434 19.6407 2.3586 16.44C1.05841 14.2336 0 11.7529 0 9.64286C0 5.70071 3.19591 2.5 7.13214 2.5ZM7.13214 5.35714C4.77069 5.35714 2.85286 7.27786 2.85286 9.64286C2.85286 12.0079 4.77069 13.9286 7.13214 13.9286C9.4936 13.9286 11.4114 12.0079 11.4114 9.64286C11.4114 7.27786 9.4936 5.35714 7.13214 5.35714Z" fill="#0DADF5" />
                                                        <path d="M7.13411 12.5002C8.7097 12.5002 9.98697 11.221 9.98697 9.64303C9.98697 8.06508 8.7097 6.78589 7.13411 6.78589C5.55852 6.78589 4.28125 8.06508 4.28125 9.64303C4.28125 11.221 5.55852 12.5002 7.13411 12.5002Z" fill="#1F397B" />
                                                    </svg>
                                                    <?php echo esc_html(get_field('location')); ?>
                                                </p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="telephone">
                                            <?php

                                            if (have_rows('telephone')) {
                                                $formatted_telephones = [];

                                                while (have_rows('telephone')) {
                                                    the_row();
                                                    $telephone = get_sub_field('telephone');
                                                    if ($telephone) {
                                                        $telephone_cleaned = preg_replace('/\s+/', '', $telephone);
                                                        $telephone_cleaned = str_replace('.', '', $telephone_cleaned);
                                                        $formatted_telephones[] = '<a href="tel:+' . $telephone_cleaned . '">' . $telephone_cleaned . '</a>';
                                                    }
                                                }

                                            ?>
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                        <path d="M13.761 13.2979L12.824 14.3911C12.0432 15.2656 10.7626 15.3905 9.98177 14.6097L5.85892 10.4868C5.07807 9.70599 5.20301 8.42541 6.07755 7.64457L7.17073 6.67632L1.64236 1.14795C1.51743 1.30412 1.39249 1.42905 1.29879 1.58522C-0.262895 3.45925 -0.512765 6.95742 1.08016 9.20625C3.95366 13.1105 7.38937 16.5462 11.2936 19.4197C13.5424 21.0126 17.0406 20.7627 18.9146 19.201C19.0708 19.0761 19.1957 18.9512 19.3519 18.8262L13.761 13.2979Z" fill="#F1786B" />
                                                        <path d="M2.01543 0.804529L1.64062 1.1481L7.169 6.67647L7.5438 6.30167C7.94984 5.89563 7.94984 5.23972 7.5438 4.80245L3.48342 0.804529C3.07738 0.39849 2.42147 0.39849 2.01543 0.804529Z" fill="#DD655B" />
                                                        <path d="M14.1365 12.9231L13.7617 13.2979L19.2901 18.8262L19.6649 18.4514C20.0709 18.0454 20.0709 17.3895 19.6649 16.9522L15.6045 12.8918C15.1985 12.517 14.5426 12.517 14.1365 12.9231Z" fill="#DD655B" />
                                                    </svg>
                                                    <?php echo implode(' / ', $formatted_telephones); ?>
                                                </p>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <div class="phone_number">
                                            <?php

                                            if (have_rows('phone_number')) {
                                                $formatted_phone_numbers = [];

                                                while (have_rows('phone_number')) {
                                                    the_row();
                                                    $phone_number = get_sub_field('phone_number');
                                                    if ($phone_number) {
                                                        $phone_number_cleaned = preg_replace('/\s+/', '', $phone_number);
                                                        $phone_number_cleaned = str_replace('.', '', $phone_number_cleaned);
                                                        $formatted_phone_numbers[] = '<a href="tel:+' . $phone_number_cleaned . '">' . $phone_number_cleaned . '</a>';
                                                    }
                                                }

                                            ?>
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                                        <path d="M9.60889 0.5H1.88651C0.844618 0.5 0 1.34462 0 2.38651V18.6135C0 19.6554 0.844618 20.5 1.88651 20.5H9.60889C10.6508 20.5 11.4954 19.6554 11.4954 18.6135V2.38651C11.4954 1.34462 10.6508 0.5 9.60889 0.5Z" fill="#43567C" />
                                                        <path d="M10.525 2.98885V17.3254C10.5252 17.3678 10.5169 17.4098 10.5008 17.4491C10.4847 17.4883 10.461 17.524 10.431 17.554C10.4011 17.5841 10.3656 17.608 10.3264 17.6243C10.2872 17.6406 10.2452 17.6491 10.2028 17.6492H1.29488C1.25245 17.6491 1.21046 17.6406 1.1713 17.6243C1.13214 17.608 1.09658 17.5841 1.06666 17.554C1.03673 17.524 1.01303 17.4883 0.996899 17.4491C0.98077 17.4098 0.972532 17.3678 0.972658 17.3254V2.98885C0.972532 2.94642 0.98077 2.90439 0.996899 2.86515C1.01303 2.82591 1.03673 2.79024 1.06666 2.76016C1.09658 2.73009 1.13214 2.70621 1.1713 2.68989C1.21046 2.67357 1.25245 2.66512 1.29488 2.66504H10.2028C10.2452 2.66512 10.2872 2.67357 10.3264 2.68989C10.3656 2.70621 10.4011 2.73009 10.431 2.76016C10.461 2.79024 10.4847 2.82591 10.5008 2.86515C10.5169 2.90439 10.5252 2.94642 10.525 2.98885Z" fill="#8CC0F3" />
                                                        <path d="M7.07851 1.70174H4.41264C4.37054 1.70174 4.33016 1.68501 4.3004 1.65525C4.27063 1.62548 4.25391 1.58511 4.25391 1.54301C4.25391 1.50091 4.27063 1.46054 4.3004 1.43077C4.33016 1.401 4.37054 1.38428 4.41264 1.38428H7.07851C7.12061 1.38428 7.16098 1.401 7.19075 1.43077C7.22052 1.46054 7.23724 1.50091 7.23724 1.54301C7.23724 1.58511 7.22052 1.62548 7.19075 1.65525C7.16098 1.68501 7.12061 1.70174 7.07851 1.70174Z" fill="#2F3A5A" />
                                                        <path d="M6.77194 18.502H4.7232C4.64308 18.502 4.57812 18.5669 4.57812 18.647V19.4332C4.57812 19.5133 4.64308 19.5783 4.7232 19.5783H6.77194C6.85206 19.5783 6.91701 19.5133 6.91701 19.4332V18.647C6.91701 18.5669 6.85206 18.502 6.77194 18.502Z" fill="#2F3A5A" />
                                                        <g opacity="0.5">
                                                            <path d="M9.64494 2.66504L0.96875 17.1809V14.9142L8.28939 2.66504H9.64494Z" fill="#E1E6E9" />
                                                            <path d="M10.5202 3.36035V4.4921L2.65666 17.6492H1.98047L10.5202 3.36035Z" fill="#E1E6E9" />
                                                        </g>
                                                    </svg>
                                                    <?php echo implode(' / ', $formatted_phone_numbers); ?>
                                                </p>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            <?php else: ?>
                                <?php get_template_part('template/post_template'); ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <div class="col-12">
                        <p>No results found.</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row d-flex d-lg-none">
                <?php
                // Check if search query exists
                $s = get_query_var('s'); // Get the search term

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page

                // Define the query arguments
                $args = array(
                    's'              => $s,               // Search query
                    'paged'          => $paged,           // Pagination
                    'posts_per_page' => 6,                // Number of posts per page
                    'post_type'      => $post_type,       // Post type (branche)
                );

                $search_query = new WP_Query($args);

                if ($search_query->have_posts()):
                    while ($search_query->have_posts()): $search_query->the_post();
                        $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $post_id = get_the_ID();
                        $title = get_the_title();
                        $description = get_the_excerpt();
                        $post_url = get_the_permalink();

                        // Prepare data for the template part
                        $data = array(
                            'img_url'     => $img_url,
                            'title'       => $title,
                            'post_url'    => $post_url,
                            'post_id'     => $post_id,
                            'description' => $description,
                        );

                        // Pass the data to the template part
                        set_query_var('data', $data); ?>
                        <div class="col-lg-4 col-md-6">
                            <?php if ($post_type == "branche"): ?>
                                <div class="content">
                                    <div class="maps">
                                        <img src="<?php echo $img_path; ?>/maps_placeholder.jpg" alt="" class="img-fluid w-100 maps_placeholder">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.381001975133!2d120.60405720000001!3d18.192407199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338ec7655eaea311%3A0x88cb786fcaced8b5!2sNRN%20Apartment%20and%20building!5e0!3m2!1sen!2sph!4v1737011132438!5m2!1sen!2sph" width="600" height="450" style="border:0;display: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="main_content">
                                        <h3><?php the_title(); ?></h3>
                                        <div class="location">
                                            <?php

                                            if (get_field('location')) {
                                            ?>
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.13214 2.5C11.0684 2.5 14.2643 5.70071 14.2643 9.64286C14.2643 11.7529 13.2059 14.2336 11.9057 16.44C10.0199 19.6407 7.66207 22.2636 7.66207 22.2636C7.52727 22.4143 7.33398 22.5 7.13214 22.5C6.9303 22.5 6.73701 22.4143 6.60222 22.2636C6.60222 22.2636 4.24434 19.6407 2.3586 16.44C1.05841 14.2336 0 11.7529 0 9.64286C0 5.70071 3.19591 2.5 7.13214 2.5ZM7.13214 5.35714C4.77069 5.35714 2.85286 7.27786 2.85286 9.64286C2.85286 12.0079 4.77069 13.9286 7.13214 13.9286C9.4936 13.9286 11.4114 12.0079 11.4114 9.64286C11.4114 7.27786 9.4936 5.35714 7.13214 5.35714Z" fill="#0DADF5" />
                                                        <path d="M7.13411 12.5002C8.7097 12.5002 9.98697 11.221 9.98697 9.64303C9.98697 8.06508 8.7097 6.78589 7.13411 6.78589C5.55852 6.78589 4.28125 8.06508 4.28125 9.64303C4.28125 11.221 5.55852 12.5002 7.13411 12.5002Z" fill="#1F397B" />
                                                    </svg>
                                                    <?php echo esc_html(get_field('location')); ?>
                                                </p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="telephone">
                                            <?php

                                            if (have_rows('telephone')) {
                                                $formatted_telephones = [];

                                                while (have_rows('telephone')) {
                                                    the_row();
                                                    $telephone = get_sub_field('telephone');
                                                    if ($telephone) {
                                                        $telephone_cleaned = preg_replace('/\s+/', '', $telephone);
                                                        $telephone_cleaned = str_replace('.', '', $telephone_cleaned);
                                                        $formatted_telephones[] = '<a href="tel:+' . $telephone_cleaned . '">' . $telephone_cleaned . '</a>';
                                                    }
                                                }

                                            ?>
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                        <path d="M13.761 13.2979L12.824 14.3911C12.0432 15.2656 10.7626 15.3905 9.98177 14.6097L5.85892 10.4868C5.07807 9.70599 5.20301 8.42541 6.07755 7.64457L7.17073 6.67632L1.64236 1.14795C1.51743 1.30412 1.39249 1.42905 1.29879 1.58522C-0.262895 3.45925 -0.512765 6.95742 1.08016 9.20625C3.95366 13.1105 7.38937 16.5462 11.2936 19.4197C13.5424 21.0126 17.0406 20.7627 18.9146 19.201C19.0708 19.0761 19.1957 18.9512 19.3519 18.8262L13.761 13.2979Z" fill="#F1786B" />
                                                        <path d="M2.01543 0.804529L1.64062 1.1481L7.169 6.67647L7.5438 6.30167C7.94984 5.89563 7.94984 5.23972 7.5438 4.80245L3.48342 0.804529C3.07738 0.39849 2.42147 0.39849 2.01543 0.804529Z" fill="#DD655B" />
                                                        <path d="M14.1365 12.9231L13.7617 13.2979L19.2901 18.8262L19.6649 18.4514C20.0709 18.0454 20.0709 17.3895 19.6649 16.9522L15.6045 12.8918C15.1985 12.517 14.5426 12.517 14.1365 12.9231Z" fill="#DD655B" />
                                                    </svg>
                                                    <?php echo implode(' / ', $formatted_telephones); ?>
                                                </p>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                        <div class="phone_number">
                                            <?php

                                            if (have_rows('phone_number')) {
                                                $formatted_phone_numbers = [];

                                                while (have_rows('phone_number')) {
                                                    the_row();
                                                    $phone_number = get_sub_field('phone_number');
                                                    if ($phone_number) {
                                                        $phone_number_cleaned = preg_replace('/\s+/', '', $phone_number);
                                                        $phone_number_cleaned = str_replace('.', '', $phone_number_cleaned);
                                                        $formatted_phone_numbers[] = '<a href="tel:+' . $phone_number_cleaned . '">' . $phone_number_cleaned . '</a>';
                                                    }
                                                }

                                            ?>
                                                <p>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                                        <path d="M9.60889 0.5H1.88651C0.844618 0.5 0 1.34462 0 2.38651V18.6135C0 19.6554 0.844618 20.5 1.88651 20.5H9.60889C10.6508 20.5 11.4954 19.6554 11.4954 18.6135V2.38651C11.4954 1.34462 10.6508 0.5 9.60889 0.5Z" fill="#43567C" />
                                                        <path d="M10.525 2.98885V17.3254C10.5252 17.3678 10.5169 17.4098 10.5008 17.4491C10.4847 17.4883 10.461 17.524 10.431 17.554C10.4011 17.5841 10.3656 17.608 10.3264 17.6243C10.2872 17.6406 10.2452 17.6491 10.2028 17.6492H1.29488C1.25245 17.6491 1.21046 17.6406 1.1713 17.6243C1.13214 17.608 1.09658 17.5841 1.06666 17.554C1.03673 17.524 1.01303 17.4883 0.996899 17.4491C0.98077 17.4098 0.972532 17.3678 0.972658 17.3254V2.98885C0.972532 2.94642 0.98077 2.90439 0.996899 2.86515C1.01303 2.82591 1.03673 2.79024 1.06666 2.76016C1.09658 2.73009 1.13214 2.70621 1.1713 2.68989C1.21046 2.67357 1.25245 2.66512 1.29488 2.66504H10.2028C10.2452 2.66512 10.2872 2.67357 10.3264 2.68989C10.3656 2.70621 10.4011 2.73009 10.431 2.76016C10.461 2.79024 10.4847 2.82591 10.5008 2.86515C10.5169 2.90439 10.5252 2.94642 10.525 2.98885Z" fill="#8CC0F3" />
                                                        <path d="M7.07851 1.70174H4.41264C4.37054 1.70174 4.33016 1.68501 4.3004 1.65525C4.27063 1.62548 4.25391 1.58511 4.25391 1.54301C4.25391 1.50091 4.27063 1.46054 4.3004 1.43077C4.33016 1.401 4.37054 1.38428 4.41264 1.38428H7.07851C7.12061 1.38428 7.16098 1.401 7.19075 1.43077C7.22052 1.46054 7.23724 1.50091 7.23724 1.54301C7.23724 1.58511 7.22052 1.62548 7.19075 1.65525C7.16098 1.68501 7.12061 1.70174 7.07851 1.70174Z" fill="#2F3A5A" />
                                                        <path d="M6.77194 18.502H4.7232C4.64308 18.502 4.57812 18.5669 4.57812 18.647V19.4332C4.57812 19.5133 4.64308 19.5783 4.7232 19.5783H6.77194C6.85206 19.5783 6.91701 19.5133 6.91701 19.4332V18.647C6.91701 18.5669 6.85206 18.502 6.77194 18.502Z" fill="#2F3A5A" />
                                                        <g opacity="0.5">
                                                            <path d="M9.64494 2.66504L0.96875 17.1809V14.9142L8.28939 2.66504H9.64494Z" fill="#E1E6E9" />
                                                            <path d="M10.5202 3.36035V4.4921L2.65666 17.6492H1.98047L10.5202 3.36035Z" fill="#E1E6E9" />
                                                        </g>
                                                    </svg>
                                                    <?php echo implode(' / ', $formatted_phone_numbers); ?>
                                                </p>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            <?php else: ?>
                                <?php get_template_part('template/post_template'); ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else: ?>
                    <div class="col-12">
                        <p>No results found.</p>
                    </div>
                <?php endif; ?>
            </div>
            <!-- Pagination -->
            <div class="paging d-flex justify-content-center align-items-center d-lg-none">
                <?php
                $totalPages = $search_query->max_num_pages;
                echo paginate_links(array(
                    'total'        => $totalPages,
                    'mid_size'     => 2,
                    'prev_text'    => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                    <path d="M8.01844 16.6636L0.253469 9.12797C0.161303 9.03826 0.0958652 8.94107 0.0571556 8.83641C0.018446 8.73175 -0.000601545 8.61961 1.29147e-05 8.5C1.29356e-05 8.38039 0.0193678 8.26825 0.0580774 8.16359C0.0967871 8.05893 0.161918 7.96174 0.253469 7.87203L8.01844 0.313985C8.23349 0.104663 8.50231 1.48659e-06 8.82489 1.54299e-06C9.14747 1.59939e-06 9.42397 0.112139 9.65438 0.336413C9.8848 0.560688 10 0.822341 10 1.12137C10 1.42041 9.88479 1.68206 9.65438 1.90633L2.88019 8.5L9.65438 15.0937C9.86943 15.303 9.97696 15.5611 9.97696 15.8679C9.97696 16.1747 9.86175 16.4399 9.63134 16.6636C9.40092 16.8879 9.1321 17 8.82489 17C8.51767 17 8.24885 16.8879 8.01844 16.6636Z" fill="#1B4298"/>
                    </svg>',
                    'next_text'    => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                    <path d="M1.98156 0.336412L9.74653 7.87203C9.8387 7.96174 9.90413 8.05893 9.94284 8.16359C9.98155 8.26825 10.0006 8.38039 9.99999 8.5C9.99999 8.61961 9.98063 8.73175 9.94192 8.83641C9.90321 8.94107 9.83808 9.03826 9.74653 9.12797L1.98156 16.686C1.76651 16.8953 1.49769 17 1.17511 17C0.852531 17 0.576034 16.8879 0.345619 16.6636C0.115205 16.4393 -1.83546e-06 16.1777 -1.80932e-06 15.8786C-1.78317e-06 15.5796 0.115205 15.3179 0.345619 15.0937L7.11981 8.5L0.345621 1.90633C0.130567 1.69701 0.0230402 1.43894 0.0230403 1.13214C0.0230403 0.82533 0.138248 0.560086 0.368662 0.336412C0.599077 0.112136 0.867894 -7.98354e-07 1.17511 -7.71496e-07C1.48233 -7.44638e-07 1.75115 0.112136 1.98156 0.336412Z" fill="#1B4298"/>
                    </svg>',
                ));
                ?>
            </div>
            <div class="paging d-none justify-content-center align-items-center d-lg-flex">
                <?php
                $totalPages = $search_queryfirst->max_num_pages;
                echo paginate_links(array(
                    'total'        => $totalPages,
                    'mid_size'     => 2,
                    'prev_text'    => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                    <path d="M8.01844 16.6636L0.253469 9.12797C0.161303 9.03826 0.0958652 8.94107 0.0571556 8.83641C0.018446 8.73175 -0.000601545 8.61961 1.29147e-05 8.5C1.29356e-05 8.38039 0.0193678 8.26825 0.0580774 8.16359C0.0967871 8.05893 0.161918 7.96174 0.253469 7.87203L8.01844 0.313985C8.23349 0.104663 8.50231 1.48659e-06 8.82489 1.54299e-06C9.14747 1.59939e-06 9.42397 0.112139 9.65438 0.336413C9.8848 0.560688 10 0.822341 10 1.12137C10 1.42041 9.88479 1.68206 9.65438 1.90633L2.88019 8.5L9.65438 15.0937C9.86943 15.303 9.97696 15.5611 9.97696 15.8679C9.97696 16.1747 9.86175 16.4399 9.63134 16.6636C9.40092 16.8879 9.1321 17 8.82489 17C8.51767 17 8.24885 16.8879 8.01844 16.6636Z" fill="#1B4298"/>
                    </svg>',
                    'next_text'    => '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                    <path d="M1.98156 0.336412L9.74653 7.87203C9.8387 7.96174 9.90413 8.05893 9.94284 8.16359C9.98155 8.26825 10.0006 8.38039 9.99999 8.5C9.99999 8.61961 9.98063 8.73175 9.94192 8.83641C9.90321 8.94107 9.83808 9.03826 9.74653 9.12797L1.98156 16.686C1.76651 16.8953 1.49769 17 1.17511 17C0.852531 17 0.576034 16.8879 0.345619 16.6636C0.115205 16.4393 -1.83546e-06 16.1777 -1.80932e-06 15.8786C-1.78317e-06 15.5796 0.115205 15.3179 0.345619 15.0937L7.11981 8.5L0.345621 1.90633C0.130567 1.69701 0.0230402 1.43894 0.0230403 1.13214C0.0230403 0.82533 0.138248 0.560086 0.368662 0.336412C0.599077 0.112136 0.867894 -7.98354e-07 1.17511 -7.71496e-07C1.48233 -7.44638e-07 1.75115 0.112136 1.98156 0.336412Z" fill="#1B4298"/>
                    </svg>',
                ));
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>