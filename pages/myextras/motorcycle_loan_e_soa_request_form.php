<?php get_header();
/*Template Name: Motorcycle Loan Original CR Request Form*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/motorcycle_loan_e_soa_request_form/';
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_e_soa_request_form.css">

<section class="banner"
    style="background: url('<?= get_home_url() ?>/wp-content/uploads/2025/03/Stay-on-Track-with-Your-Loan-Details-Banner.jpg') no-repeat center center / cover;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justi-content-center">
                <div class="col-md-12">
                    <div class="content mx-auto d-flex flex-column">
                        <h1 class="text-white text-center">Stay on Track with Your Loan Details</h1>
                        <p class="text-white text-center">Request your Electronic Statement of Account (E-SOA) to
                            monitor your motorcycle loan balance and payment history. Get instant access to your records
                            anytime, ensuring a smooth and hassle-free loan management experience.</p>
                       
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
                        <span class="text-center orange_text">Motorcycle Loan E-SOA Request Form</span>
                        <h2 class="text-center">Data Privacy</h2>
                        <p class="text-center">We are committed to protecting your personal information and ensuring
                            transparency in how your data is used. By providing your consent, you agree to the secure
                            processing of your details by our privacy policy.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="mobile-step-indicator"
                        class=" align-items-center justify-content-center gap-4 d-flex d-md-none">
                        <svg id="circle-progress" width="24" height="24" viewBox="0 0 36 36">
                            <path class="circle-bg" d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#eee" stroke-width="2.5" />
                            <path id="circle-fill" d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#4D9EF9" stroke-width="2.5"
                                stroke-dasharray="0, 100" />
                        </svg>
                        <span class="ms-2" id="mobile-step-text">1 / 2</span>
                    </div>
                    <ul class="step-progress d-md-flex d-none">
                        <li class="active">
                            <div class="step-number">1</div>
                            <div class="step-title">Data Privacy Statement and <br> Consent Form</div>
                        </li>
                        <li>
                            <div class="step-number">2</div>
                            <div class="step-title">Loan Account Number & <br> Purpose of Request</div>
                        </li>

                        <li class="d-none">
                            <div class="step-number">3</div>
                            <div class="step-title">Authorized Representative's Information</div>
                            <div class="step-title">Loan Borrower's Information</div>
                        </li>
                        <li class="d-none">
                            <div class="step-number">4</div>
                            <div class="step-title">Authorized Representative's Supporting Documents</div>
                        </li>
                    </ul>
                    <?php echo do_shortcode('[contact-form-7 id="be319b7" title="Motorcycle Loan E-SOA Request Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/motorcycle_loan_e_soa_request_form.js"></script>
<script>
    // $(document).ready(function() {
    //     $('fieldset.fieldset-cf7mls.cf7mls_current_fs button#cf7mls-next-btn-cf7mls_step-3').click(function() {
    //         $('input.wpcf7-form-control.wpcf7-submit.has-spinner.orange_btn').click()
    //     });
    //    $("select[name='requester_type']").on("change", function () {
    //         const selected = $(this).val();
    //         const $stepList = $("ul.step-progress");

    //         // Always remove previously added dynamic steps (after index 1)
    //         $stepList.find("li").slice(2).remove();

    //         if (selected === "Loan Borrower") {
    //             $stepList.append(`
    //                 <li>
    //                     <div class="step-number">3</div>
    //                     <div class="step-title">Loan Borrower's Information</div>
    //                 </li>
    //             `);
    //         } else if (selected === "Authorized Representative") {
    //             $stepList.append(`
    //                 <li>
    //                     <div class="step-number">3</div>
    //                     <div class="step-title">Authorized Representative's Information</div>
    //                 </li>
    //                 <li>
    //                     <div class="step-number">4</div>
    //                     <div class="step-title">Authorized Representative's Supporting Documents</div>
    //                 </li>
    //             `);
    //         }
    //     });

    // });
</script>