<?php get_header(); ?>
<section class="page_not_found h-100 d-flex align-items-center" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/404.jpg')no-repeat center center/cover;max-height: 900px">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="content mx-auto d-flex align-items-center flex-column" style="max-width: 506px; ">
                        <h1 class="text-center text-white mx-auto">404!</h1>
                        <p class="text-center text-white mb-20">The page you’re looking for may have been moved or doesn’t exist. Please check the URL or return to our homepage.</p>
                        <a href="<?php echo get_home_url(); ?>" class="white_btn">Back to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>