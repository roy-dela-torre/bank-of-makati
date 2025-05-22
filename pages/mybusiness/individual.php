<?php get_header(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/themes/base/jquery-ui.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/mybusiness_form.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/my_extras.js"></script>
<style>
    section.banner {
        height: 500px;
    }

    section.banner .content {
        max-width: 1086px;
    }

    section.individual .header {
        max-width: 757px;
        width: 100%;
        margin: auto;
        margin-bottom: 60px;
    }

    section.individual .owl-stage {
        display: flex;
        /* height: fit-content; */
    }

    section.individual .owl-stage .owl-item {
        height: fit-content;
        padding-right: 1px;
    }

    section.individual .owl-carousel .owl-stage-outer {
        overflow: hidden;
    }

    section.individual .step1_row {
        display: flex;
        gap: 20px;
    }

    section.individual .step2_row {
        display: flex;
        gap: 20px;
    }

    section.individual span.wpcf7-form-control-wrap {
        display: block;
        margin-bottom: 20px;
    }

    section.individual .step3_row {
        display: flex;
        gap: 20px;
    }

    section.individual .step4_row {
        display: flex;
        gap: 20px;
    }

    section.individual .step4_row.row_one span.wpcf7-form-control-wrap {
        margin-bottom: 0;
    }

    section.individual div.hr {
        margin-block: 30px;
        height: 1px;
        background: #F2F2F2;
    }

    section.individual .black_text {
        color: #4A4A4A;
        font-family: Montserrat;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 25px; /* 178.571% */
        margin-bottom: 30px;
    }

    section.individual .title_text {
        font-size: 16px;
    }

    .month-year-picker .ui-datepicker-calendar {
        display: none;
    } 

    section.individual .hereby {
        display: flex;
        justify-content: flex-start;
        gap: 5px;
        margin-bottom: 30px;
    }

    section.individual input.declaration {
        margin: 0;
        max-width: 300px;
        width: 100%;
        border: none !important;
        border-bottom: 1px solid #c1c1c1 !important;
        padding: 0 !important; 
        border-radius: 0 !important;
    }

    section.individual span[data-name="declaration"] {
        max-width: 300px;
        margin-bottom: 0 !important;
    }

    section.individual .owl-carousel .owl-stage>div>div {
        padding: 40px;
        border-radius: 5px;
        border: 1px solid var(--Gray, #F2F2F2);
        background: #FFF;
        box-shadow: 0px 12px 18.3px 0px rgba(0, 0, 0, 0.05); 
    }

    section.individual .consent-wrapper {
        /* display: flex;
        flex-wrap: wrap;
        column-gap: 5px;
        justify-content: start; */
        margin-bottom: 20px;
    }

    section.individual .consent-wrapper p {
        display: inline;
    }

    section.individual .consent-wrapper input {
        padding: 0 !important;
        border: 0 !important;
        border-bottom: 1px solid #c1c1c1 !important; 
    }

    section.individual .consent-wrapper span.wpcf7-form-control-wrap {
        display: inline;
    }

    section.individual input.compliance {
        display: inline;
        max-width: 300px;
        width: 100%;
    }

    section.individual input.understand_years {
        max-width: 70px;
        width: 100%;
        display: inline;
    }

    section.individual .consent-wrapper input.understand1, section.individual .consent-wrapper input.understand2 {
        max-width: 200px;
        width: 100%;
        display: inline;
    }

    section.individual .step6_row {
        display: flex;
        gap: 20px;
    }

    section.individual .form_step6 .row1, section.individual .form_step6 .row2 {
        margin-bottom: 30px;
    }

    section.individual .form_step6 .row1 span, section.individual .form_step6 .row2 span {
        margin-bottom: 10px;
        font-weight: 400;
    }

    section.individual .owl-nav.disabled {
       display: none;
    }

    section.individual .step6_hr {
        height: 1px;
        background: #4A4A4A;
        max-width: 160px;
        width: 100%;
        margin-bottom: 10px;
    }

    section.individual .checklist span.wpcf7-form-control.wpcf7-radio {
        display: flex;
        gap: 20px 50px;
        flex-wrap: wrap;
    }

    @media (max-width: 767px) {
        section.individual .step1_row, section.individual .step2_row, section.individual .step3_row, section.individual .step4_row {
            flex-direction: column;
            gap: 0;
        }

        /* section.individual .step1_row span.wpcf7-form-control-wrap, section.individual .step2_row span.wpcf7-form-control-wrap, section.individual .step3_row span.wpcf7-form-control-wrap, section.individual .step4_row span.wpcf7-form-control-wrap {
            margin-bottom: 20px;
        } */
    }

    /* section.individual select {
        height: 100%;
    } */

    /* section.individual .owl-nav {
        display: none;
    } */
</style>

<section class="banner" style="background: url('https://bankofmakati.innovnational.com/wp-content/uploads/2025/04/banner-7.jpg') no-repeat center center / cover;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="text-white text-center">Credit Solutions for Individuals and Sole Proprietors</h1>

                        <p>Manage your finances seamlessly with credit solutions designed for individuals and sole proprietors. Enjoy flexible options that support your personal and business growth.</p>

                        <a href="<?php echo home_url(); ?>" target="_blank" rel="noopener noreferrer" class="white_btn">
                            Print Blank Form Now
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="individual">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">Individual and Sole Proprietorship</span>
                        <h2 class="text-center">Simple and Convenient Credit Application for 
                        Individuals and Sole Proprietors</h2>
                        <p class="text-center">Easily apply for credit as an individual or sole proprietor with simple and clear steps. Explore the available options to find the best way to complete your application.</p>
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
                    <div class="forms">
                        <?php echo do_shortcode('[contact-form-7 id="7fc900e" title="Individual and Sole Proprietorship"]') ?>
                    </div>
                    <button class="autofill">autofill</button>
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

<div class="individual__forms owl-theme owl-carousel d-none">
    <div class="form_step1"> 
        <h3>Borrower and Business Information</h3>

        <div class="step1_row">

        </div>

        <div class="step4_row">
            
        </div>

        <div class="hr"></div>

        <button type="button" class="step1 next_form next_step">Next</button>

        <button type="button" class="prev_form prev_step">Prev</button>

        <span class="d-block blue_text"></span>

        <span class="d-block black_text"></span>
        
        <p></p>

    </div>
    <div class="form_step2"> <h3>Step 2</h3> <p>Content for Step 2</p> </div>
    <div class="form_step3"> <h3>Step 3</h3> <p>Content for Step 3</p> </div>
    <div class="form_step4"> <h3>Step 4</h3> <p>Content for Step 4</p> </div>
    <div class="form_step5"> <h3>Step 5</h3> <p>Content for Step 5</p> </div>
    <div class="form_step6"> <h3>Step 6</h3> <p>Content for Step 6</p> </div>

    <div class="row1">

    </div>

    <button type="button" class="submit_individual_form orange_btn">Submit</button>

    <button class="autofill">autofill</button>

    <div>
        <div class="step6_row">
            [text g_name3 class:g_name3 "Printed Name"]
[text g_affiliation3 class:g_affiliation3 placeholder "Affiliation"]
        </div>
<div class="step6_row">
            [text g_relationship3 class:g_relationship3 placeholder "Relationship with Borrower"]
[text g_contactaddress3 class:g_contactaddress3 placeholder "Contact Information: address, contact number"]
        </div>
    </div>

    <div class="group_button">
            <button type="button" class="prev_form prev_step transparent_btn">Prev</button>
        </div>.

        <span class="d-block black_text"></span>

</div>

<?php get_footer(); ?>

<script>
    
</script>