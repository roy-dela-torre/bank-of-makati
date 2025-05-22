<?php get_header();
/*Template Name: Motorcycle Loan Original CR Request Form*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/motorcycle_loan_original_cr_request_form/';
get_template_part('template/banner_php');
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_original_cr_request_form.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php echo $css_path; ?>/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $js_path = get_stylesheet_directory_uri() . '/inc/js'; ?>
<script src="<?php echo $js_path; ?>/motorcycle_loan_original_cr_request_form.js"></script>
<section class="request_of_release">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">This form is for fully paid MCL borrower only</span>
                        <h2 class="text-center">Request for release of Original Certificate of Registration (CR)</h2>
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
                            <p class="text-center">Loan Borrower Information</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                3
                            </span>
                            <p class="text-center">Contact Information</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                4
                            </span>
                            <p class="text-center">Last Payment Details</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                5
                            </span>
                            <p class="text-center">Pick-Up Location</p>
                        </div>
                        <div class="step">
                            <span class="step">
                                6
                            </span>
                            <p class="text-center">Remarks</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="step_by_step_form">
                        <?php echo do_shortcode('[contact-form-7 id="90b67b6" title="Motorcycle Loan Original CR Request Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<button type="button" class="btn btn-primary d-none" id="showModalBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl"> <!-- Larger modal for better layout -->
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center flex-column">
                <div class="images">
                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/logo.png" alt="Logo" class="mb-20 img-fluid w-100">
                </div>
                <h2 class="text-center mb-0">Request for Release of Original Certificate of Registration (CR)</h2>
            </div>
            <div class="modal-body" id="modalContent">
                <div class="step">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p_header">Loan Borrower Information</p>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="loanAccountNumber">10 Digit Loan Account Number</label>
                                <input readonly type="text" class="form-control" id="loanAccountNumber" placeholder="10 Digit Loan Account Number" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input readonly type="text" class="form-control" id="firstName" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="surname">Surname</label>
                                <input readonly type="text" class="form-control" id="surname" placeholder="Surname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="middleName">Middle Name</label>
                                <input readonly type="text" class="form-control" id="middleName" placeholder="Middle Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p_header">Contact Information</p>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="primaryMobileNumber">Primary Mobile Number</label>
                                <input readonly type="text" class="form-control" id="primaryMobileNumber" placeholder="Primary Mobile Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="otherContactNumber">Other Contact Number</label>
                                <input readonly type="text" class="form-control" id="otherContactNumber" placeholder="Other Contact Number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="emailAddress">Email Address</label>
                                <input readonly type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p_header">Last Payment Details</p>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="receiptDate">Receipt Date</label>
                                <input readonly type="date" class="form-control" id="receiptDate" placeholder="Receipt Date">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="receiptNumber">Receipt Number</label>
                                <input readonly type="text" class="form-control" id="receiptNumber" placeholder="Receipt Number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input readonly type="number" class="form-control" id="amount" placeholder="Amount">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p_header">Preferred Pick-Up Location (Dealer Branch / Bank of Makati Branch)</p>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pickupLocation">Pick-Up Location</label>
                                <input readonly type="text" class="form-control" id="pickupLocation" placeholder="Preferred Pick-Up Location">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="area">Area</label>
                                <input readonly type="text" class="form-control" id="area" placeholder="Area">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bmiBranch">BMI Branch</label>
                                <input readonly type="text" class="form-control" id="bmiBranch" placeholder="BMI Branch">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p_header">Remarks Portion</p>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <textarea readonly class="form-control" id="remarks" placeholder="Enter any remarks here"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="copyOfCertificate">Do you want a copy of Certificate of Full Payment?</label>
                                <input readonly type="text" class="form-control" id="copyOfCertificate">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success w-100 orange_btn text-center p-0 m-0" id="print" onclick="printData()">Print</button>
            </div>
        </div>
    </div>
</div>