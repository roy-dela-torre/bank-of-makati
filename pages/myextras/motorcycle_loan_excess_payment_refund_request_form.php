<?php get_header();
/*Template Name: Motorcycle Loan Original CR Request Form*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/motorcycle_loan_excess_payment_refund_request_form/';
get_template_part('template/banner_php');
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_excess_payment_refund_request_form.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $js_path = get_stylesheet_directory_uri() . '/inc/js'; ?>
<script src="<?php echo $js_path; ?>/motorcycle_loan_excess_payment_refund_request_form.js"></script>
<section class="request_for_refund overflow-hidden">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">Lorem Ipsum</span>
                        <h2 class="text-center">Request For Refund (MCL Excess Payment)</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur. Ultricies sit luctus vel neque dictumst nulla laoreet.</p>
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
                            <p class="text-center">Borrower’s Information and Contact Details</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                3
                            </span>
                            <p class="text-center">Account Information</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                4
                            </span>
                            <p class="text-center">Mode of Receipt</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                5
                            </span>
                            <p class="text-center">Deposit to Account</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php echo do_shortcode('[contact-form-7 id="fb1427d" title="Request For Refund (MCL Excess Payment) Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="request_for_excess_payment_refund" popover id="request_for_excess_payment_refund">
    <div class="header">
        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/logo.png" alt="Logo" class="mb-20 img-fluid w-100">
        <h2 class="text-center">Request for Excess Payment Refund</h2>
    </div>
    <div class="step1">
        <h3>Borrower’s Information and Contact Details</h3>
        <div class="row">
            <div class="col-md-6">
                <label for="full_name">Full Name (Required)</label>
                <input type="text" readonly id="full_name" name="full_name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="mobile_number">Mobile Number (Required)</label>
                <input type="text" readonly id="mobile_number" name="mobile_number" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="secondary_contact_number">Secondary Contact Number</label>
                <input type="text" readonly id="secondary_contact_number" name="secondary_contact_number" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="email_address">Email Address (Required)</label>
                <input type="text" readonly id="email_address" name="email_address" class="form-control">
            </div>
            <div class="col-md-12">
                <div class="image_attach">
                    <button class="view_attach_image" popovertarget="image_attach">View Attached Image</button>
                    <img src="" alt="" id="image_attach">
                </div>
            </div>
        </div>
    </div>
    <div class="step2">
        <h3>Account Information</h3>
        <div class="row">
            <div class="col-md-6">
                <label for="account_number">10 Digit Account Number (Required)</label>
                <input type="text" readonly id="account_number" name="account_number" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="maturity_date">Maturity Date (Required)</label>
                <input type="date" id="maturity_date" name="maturity_date" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="loan_term">Loan Term (Required)</label>
                <input type="text" readonly id="loan_term" name="loan_term" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="excess_payment_amount">Exact Amount Of Excess Payment (Required)</label>
                <input type="text" readonly id="excess_payment_amount" name="excess_payment_amount" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="requested_refund_amount">Excess Payment Amount (Requested Amount for Refund) (Required)</label>
                <input type="text" readonly id="requested_refund_amount" name="requested_refund_amount" class="form-control">
            </div>
        </div>
    </div>
    <div class="step3">
        <h3>Mode of Receipt</h3>
        <div class="row">
            <div class="col-md-12">
                <label for="preferred_mode_of_receipt">Please select your preferred mode of receipt (Required)</label>
                <input type="text" readonly id="preferred_mode_of_receipt" name="preferred_mode_of_receipt" class="form-control">
            </div>
        </div>
    </div>
    <div class="step4">
        <h3>Deposit to Account</h3>
        <div class="row">
            <div class="col-md-6">
                <label for="bank_name">Bank (Required)</label>
                <input type="text" id="bank_name" name="bank_name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="bank_branch">Bank Branch (Example - Dian Makati Branch) (Required)</label>
                <input type="text" id="bank_branch" name="bank_branch" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="bank_account_number">Bank Account Number (Required)</label>
                <input type="text" id="bank_account_number" name="bank_account_number" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="account_type">Type of Account (Required)</label>
                <input type="text" id="account_type" name="account_type" class="form-control">
            </div>
            <div class="col-md-12">
                <p>Please make sure that the bank account name and account number provided are correct.</p>
                <div class="form-check">
                    <input type="checkbox" id="confirm_details" name="confirm_details" class="form-check-input">
                    <label for="confirm_details" class="form-check-label">I confirm that the details are correct</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="attached_image" popover id="attached_image">
    <img loading="lazy" src="<?= get_stylesheet_directory_uri() ?>/assets/images/myextras/attached_image.jpg" alt="Motorcycle Loan Excess Payment Refund Request Form" class="img-fluid w-100">
</div>