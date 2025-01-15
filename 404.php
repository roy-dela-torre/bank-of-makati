<?php get_header(); ?>
<section class="page_not_found h-100 d-flex align-items-center" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/background_template.jpg')no-repeat center center/cover;max-height: 900px">>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4">
                    <div class="content d-flex align-items-center flex-column">
                        <h1 class="text-center text-white">404!</h1>
                        <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur. Ultricies sit luctus vel neque dictumst nulla laoreet.</p>
                        <a href="<?php echo get_home_url(); ?>" class="white_btn">Back to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>