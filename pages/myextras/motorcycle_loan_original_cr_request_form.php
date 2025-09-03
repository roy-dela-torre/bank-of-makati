<?php get_header();
/*Template Name: Motorcycle Loan Original CR Request Form*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/motorcycle_loan_original_cr_request_form/';
get_template_part('template/banner_php');
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_original_cr_request_form.css">
<section class="request_of_release">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">Motorcycle Loan Original CR Request Form</span>
                        <h2 class="text-center">Request for release of Original Certificate of Registration (CR)</h2>
                        <p class="text-center">This form allows you to request the release of the original Certificate of Registration (CR) for your motorcycle. Submit the required details to retrieve your CR for personal or legal purposes.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form">
                        <div class="step-indicator-wrapper">
                            <div id="mobile-step-indicator" class="align-items-center justify-content-center gap-4 d-flex d-md-none">
                                <svg id="circle-progress" width="24" height="24" viewBox="0 0 36 36">
                                    <path class="circle-bg"
                                        d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                        fill="none"
                                        stroke="#eee"
                                        stroke-width="2.5" />
                                    <path id="circle-fill"
                                        d="M18 2.0845
                                        a 15.9155 15.9155 0 0 1 0 31.831
                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                        fill="none"
                                        stroke="#4d9ef9"
                                        stroke-width="2.5"
                                        stroke-dasharray="0, 100" />
                                </svg>
                                <span class="ms-2" id="mobile-step-text">
                                    <span id="mobile-step-current">1</span> / <span id="mobile-step-total">2</span>
                                </span>
                            </div>

                            <ul class="step-progress d-md-flex d-none">
                                <li class="active" data-step="1" data-title="Data Privacy Statement and Consent Form">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Data Privacy Statement and Consent Form</div>
                                </li>
                                <li data-step="2" data-title="Loan Borrower Information">
                                    <div class="step-number">2</div>
                                    <div class="step-title">Loan Borrower Information</div>
                                </li>
                                <li data-step="3" data-title="Contact Information">
                                    <div class="step-number">3</div>
                                    <div class="step-title">Contact Information</div>
                                </li>
                                <li data-step="4" data-title="Last Payment Details">
                                    <div class="step-number">4</div>
                                    <div class="step-title">Last Payment Details</div>
                                </li>
                                <li data-step="5" data-title="Pick-Up Location">
                                    <div class="step-number">5</div>
                                    <div class="step-title">Pick-Up Location</div>
                                </li>
                                <li data-step="6" data-title="Remarks">
                                    <div class="step-number">6</div>
                                    <div class="step-title">Remarks</div>
                                </li>
                            </ul>
                        </div>

                        <?php echo do_shortcode('[contact-form-7 id="90b67b6" title="Motorcycle Loan Original CR Request Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <button type="button" class="show_modal" id="print_data" popovertarget="printable_data">print data</button>
<button class="autofill">Auto Fill</button> -->
<div class="printable_data" popover id="printable_data">
    <div class="content">
        <div class="header">
            <div class="image mx-auto">
                <img src="<?= $img_path; ?>/Request for release of Original Certificate of Registration (CR).jpg" alt="<?= the_title() ?>">
            </div>
            <h2 class="text-center">Request for release of Original Certificate of Registration (CR)</h2>
        </div>

        <div class="main_content">
            <!-- Loan Borrower Information -->
            <div class="step">
                <span>Loan Borrower Information</span>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="loan_account_number_text">10 Digit Loan Account Number</label>
                            <input type="text" id="loan_account_number_text" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="first_name_text">First Name</label>
                            <input type="text" id="first_name_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="middle_name_text">Middle Name</label>
                            <input type="text" id="middle_name_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="surname_text">Surname</label>
                            <input type="text" id="surname_text" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="step">
                <span>Contact Information</span>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="primary_mobile_number_text">Primary Mobile Number</label>
                            <input type="text" id="primary_mobile_number_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="other_contact_number_text">Other Contact Number</label>
                            <input type="text" id="other_contact_number_text" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="email_address_text">Email Address</label>
                            <input type="text" id="email_address_text" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Last Payment Details -->
            <div class="step">
                <span>Last Payment Details</span>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="receipt_date_text">Receipt Date</label>
                            <input type="text" id="receipt_date_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="receipt_number_2_text">Receipt Number</label>
                            <input type="text" id="receipt_number_2_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="amount_text">Amount</label>
                            <input type="text" id="amount_text" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preferred Pick-Up Location -->
            <div class="step">
                <span>Preferred Pick-Up Location (Dealer Branch / Bank of Makati Branch)</span>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="pickup_location_text">Pick-Up Location</label>
                            <input type="text" id="pickup_location_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="area_text">Area</label>
                            <input type="text" id="area_text" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form_group">
                            <label for="bmi_branch_text">BMI Branches</label>
                            <input type="text" id="bmi_branch_text" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Remarks Portion -->
            <div class="step">
                <span>Remarks Portion</span>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="remarks_text">Remarks</label>
                            <input type="text" id="remarks_text" readonly>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form_group">
                            <label for="copy_of_certificate_text">Do you want a copy of Certificate of Full Payment?</label>
                            <input type="text" id="copy_of_certificate_text" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="print_data orange_btn w-100 mt-3" onclick="printData()">Print</button>
    </div>
</div>
<script src="<?= get_stylesheet_directory_uri() ?>/inc/js/motorcycle_loan_original_cr_request_form.js"></script>