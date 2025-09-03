<?php get_header(); ?>
<section class="thank_you h-100 d-flex align-items-center" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/thank-you.jpg')no-repeat center center/cover;max-height: 900px">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content d-flex align-items-center flex-column mx-auto" style="max-width: 446px; ">
                        <h1 class="text-center text-white">Thank You!</h1>
                        <p class="text-center text-white mb-20">Your request has been successfully received. We appreciate your trust and will get back to you shortly.</p>
                        <a href="<?php echo get_home_url(); ?>" class="white_btn">Back to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>