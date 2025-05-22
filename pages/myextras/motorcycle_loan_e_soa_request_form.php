<?php get_header();
/*Template Name: Motorcycle Loan Original CR Request Form*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/motorcycle_loan_e_soa_request_form/';
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_e_soa_request_form.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/inc/css/my_extras.js"></script>
<script src="<?= get_stylesheet_directory_uri() ?>/inc/css/motorcycle_loan_e_soa_request_form.js"></script>
<section class="banner" style="background: url('<?= get_home_url() ?>/wp-content/uploads/2025/03/Stay-on-Track-with-Your-Loan-Details-Banner.jpg') no-repeat center center / cover;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justi-content-center">
                <div class="col-md-12">
                    <div class="content mx-auto d-flex flex-column">
                        <h1 class="text-white text-center">Stay on Track with Your Loan Details</h1>
                        <p class="text-white text-center">Request your Electronic Statement of Account (E-SOA) to monitor your motorcycle loan balance and payment history. Get instant access to your records anytime, ensuring a smooth and hassle-free loan management experience.</p>
                        <a href="<?= get_home_url() ?>/" target="_blank" rel="noopener noreferrer" class="white_btn mx-auto">
                            Print Blank Form Now </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="motorcycle_loan_e_soa_request_form">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">Motorcycle Loan E-SOA Request Form</span>
                        <h2 class="text-center">Data Privacy</h2>
                        <p class="text-center">We are committed to protecting your personal information and ensuring transparency in how your data is used. By providing your consent, you agree to the secure processing of your details by our privacy policy.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="step_by_step">
                        <div class="step active">
                            <span class="step">
                                1
                            </span>
                            <p class="text-center">Data Privacy Statement and Consent Form</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                2
                            </span>
                            <p class="text-center">Loan Account Number &
                                Purpose of Request</p>
                        </div>
                        <div class="step d-none">
                            <span class="step">
                                3
                            </span>
                            <p class="text-center">Loan Borrower's Information</p>
                        </div>
                        <div class="step d-none">
                            <span class="step">
                                4
                            </span>
                            <p class="text-center">Authorized Representative's Supporting Documents</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php echo do_shortcode('[contact-form-7 id="be319b7" title="Motorcycle Loan E-SOA Request Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>