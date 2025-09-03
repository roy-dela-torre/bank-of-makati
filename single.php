<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/single.css">
<section class="single_post">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mb-0">
                        <h1><?php echo get_the_title(); ?></h1>
                        <span class="date mb-30"><?php echo get_the_date('F j, Y'); ?></span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main_content">
                        <div class="featured_image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['class' => 'img-fluid', 'alt' => get_the_title()]); ?>
                            <?php endif; ?>
                        </div>
                        <?php the_content(); ?>
                        <div class="share d-flex align-items-center">
                            <span>Share</span>
                            <div class="icons">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                                        <path d="M5.25 8.625H7.125L7.875 5.625H5.25V4.125C5.25 3.3525 5.25 2.625 6.75 2.625H7.875V0.105C7.6305 0.0727501 6.70725 0 5.73225 0C3.696 0 2.25 1.24275 2.25 3.525V5.625H0V8.625H2.25V15H5.25V8.625Z" fill="#1B4298" />
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15" fill="none">
                                        <path d="M13.9449 0L9.75248 4.79245L6.12731 0H0.875L7.14941 8.20364L1.20311 15H3.74913L8.3385 9.75525L12.3497 15H17.4702L10.9298 6.35329L16.4893 0H13.9449ZM13.0521 13.4769L3.84731 1.44252H5.36031L14.4619 13.4761L13.0521 13.4769Z" fill="#1B4298" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15" viewBox="0 0 17 15" fill="none">
                                        <path d="M3.8019 1.66741C3.80168 2.10941 3.62588 2.53322 3.31318 2.84561C3.00048 3.158 2.57649 3.33337 2.13449 3.33315C1.69249 3.33293 1.26868 3.15713 0.956289 2.84443C0.643902 2.53173 0.468529 2.10774 0.46875 1.66574C0.468971 1.22374 0.644768 0.799926 0.957468 0.487539C1.27017 0.175152 1.69415 -0.000220793 2.13616 2.08623e-07C2.57816 0.00022121 3.00197 0.176018 3.31436 0.488718C3.62675 0.801417 3.80212 1.2254 3.8019 1.66741ZM3.8519 4.56725H0.518747V15H3.8519V4.56725ZM9.11827 4.56725H5.80179V15H9.08494V9.5253C9.08494 6.47547 13.0597 6.19216 13.0597 9.5253V15H16.3512V8.39203C16.3512 3.25065 10.4682 3.44231 9.08494 5.96717L9.11827 4.56725Z" fill="#1B4298" />
                                    </svg>
                                </a>
                                <a href="javascript:void(0);" onclick="copyToClipboard()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                        <path d="M11.6016 15C10.9766 15 10.4453 14.7812 10.0078 14.3438C9.57031 13.9062 9.35156 13.375 9.35156 12.75C9.35156 12.675 9.37031 12.5 9.40781 12.225L4.13906 9.15C3.93906 9.3375 3.70781 9.4845 3.44531 9.591C3.18281 9.6975 2.90156 9.7505 2.60156 9.75C1.97656 9.75 1.44531 9.53125 1.00781 9.09375C0.570313 8.65625 0.351562 8.125 0.351562 7.5C0.351562 6.875 0.570313 6.34375 1.00781 5.90625C1.44531 5.46875 1.97656 5.25 2.60156 5.25C2.90156 5.25 3.18281 5.30325 3.44531 5.40975C3.70781 5.51625 3.93906 5.663 4.13906 5.85L9.40781 2.775C9.38281 2.6875 9.36731 2.60325 9.36131 2.52225C9.35531 2.44125 9.35206 2.3505 9.35156 2.25C9.35156 1.625 9.57031 1.09375 10.0078 0.65625C10.4453 0.21875 10.9766 0 11.6016 0C12.2266 0 12.7578 0.21875 13.1953 0.65625C13.6328 1.09375 13.8516 1.625 13.8516 2.25C13.8516 2.875 13.6328 3.40625 13.1953 3.84375C12.7578 4.28125 12.2266 4.5 11.6016 4.5C11.3016 4.5 11.0203 4.44675 10.7578 4.34025C10.4953 4.23375 10.2641 4.087 10.0641 3.9L4.79531 6.975C4.82031 7.0625 4.83606 7.147 4.84256 7.2285C4.84906 7.31 4.85206 7.4005 4.85156 7.5C4.85106 7.5995 4.84806 7.69025 4.84256 7.77225C4.83706 7.85425 4.82131 7.9385 4.79531 8.025L10.0641 11.1C10.2641 10.9125 10.4953 10.7657 10.7578 10.6597C11.0203 10.5537 11.3016 10.5005 11.6016 10.5C12.2266 10.5 12.7578 10.7188 13.1953 11.1562C13.6328 11.5938 13.8516 12.125 13.8516 12.75C13.8516 13.375 13.6328 13.9062 13.1953 14.3438C12.7578 14.7812 12.2266 15 11.6016 15Z" fill="#1B4298" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="related_blogs sticky-top">
                        <h2>Related Blogs</h2>
                        <div class="row">
                            <?php
                            $related_posts = new WP_Query(array(
                                'category__in' => wp_get_post_categories(get_the_ID()),
                                'posts_per_page' => 3,
                                'post__not_in' => array(get_the_ID())
                            ));
                            if ($related_posts->have_posts()) :
                                while ($related_posts->have_posts()) : $related_posts->the_post();

                                $excerpt = get_the_excerpt();
                                $excerpt = wp_trim_words($excerpt, 20, '...'); // Limit to 20 words

                            ?>
                                    <div class="related_blog">
                                        <div class="related_blog_content">
                                            <h3><?php echo get_the_title(); ?></h3>
                                            <p class="mb-20"><?php echo $excerpt; ?></p>
                                            <a href="<?php echo get_the_permalink(); ?>" class="orange_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php get_footer(); ?>
<script>
    function copyToClipboard() {
        var tempInput = document.createElement("input");
        tempInput.value = window.location.href; // Get current page URL
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        // Optional: Show a copied confirmation message
        alert("Link copied to clipboard!");
    }
</script>