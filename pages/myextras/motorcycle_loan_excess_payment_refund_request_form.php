<?php
$img_path = get_stylesheet_directory_uri() . '/assets/images/motorcycle_loan_excess_payment_refund_request_form/';
$css_path = get_stylesheet_directory_uri() . '/inc/css'; ?>
<section class="banner"
    style="background: url('<?= get_home_url() ?>/wp-content/uploads/2025/02/banner1-1.jpg') no-repeat center center / cover;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justi-content-center">
                <div class="col-md-12">
                    <div class="content mx-auto d-flex flex-column">
                        <h1 class="text-white text-center">Stay on Track with Your Loan Details</h1>
                        <p class="text-white text-center">Easily request a refund for excess payments made on your motorcycle loan. Complete the form to initiate the refund process for any overpayments you have made.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="request_for_refund">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">Motorcycle Loan Excess Payment Refund Request Form</span>
                        <h2 class="text-center">Request For Refund (MCL Excess Payment)</h2>
                        <p class="text-center">This form is for requesting a refund on excess payments made towards your motorcycle loan via MCL Express. It ensures a smooth and prompt refund process when you’ve overpaid.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form">
                        <!-- Mobile Step Indicator -->
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
                            <span class="ms-2" id="mobile-step-text">1 / 6</span>
                        </div>
                        <ul class="step-progress d-md-flex d-none">
                            <li class="active">
                                <div class="step-number active">1</div>
                                <div class="step-title">Data Privacy Statement and Consent Form</div>
                            </li>
                            <li>
                                <div class="step-number">2</div>
                                <div class="step-title">Borrower’s Information and Contact Details</div>
                            </li>
                            <li>
                                <div class="step-number">3</div>
                                <div class="step-title">Account Information</div>
                            </li>
                            <li>
                                <div class="step-number">4</div>
                                <div class="step-title">Mode of Receipt</div>
                            </li>
                            <li>
                                <div class="step-number">5</div>
                                <div class="step-title">Deposit to Account</div>
                                <div class="step-title">Request for Issuance Of Check</div>
                                <div class="step-title">Credit to GCash</div>
                            </li>
                        </ul>

                        <?php echo do_shortcode('[contact-form-7 id="fb1427d" title="Request For Refund (MCL Excess Payment) Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="attached_image" popover id="attached_image">
    <img loading="lazy" src="<?= get_stylesheet_directory_uri() ?>/assets/images/myextras/attached_image.jpg" alt="Motorcycle Loan Excess Payment Refund Request Form" class="img-fluid w-100">
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="attach_image_reqs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <div class="mb-4 d-flex justify-content-end">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="attached_requirements px-lg-4">
                        <!-- <img src="https://bankofmakati.innovnational.com/wp-content/uploads/2025/08/gov-issued-id.jpg" alt="GOVERNMENT ISSUED ID" loading="lazy" class="w-100"> -->
                        <span class="list_title text-center d-block">LIST OF ACCEPTABLE GOVERNMENT-ISSUED IDENTIFICATION CARDS (IDS) / DOCUMENTS</span>

                        <ol>
                            <li>Social Security System (SSS) / Unified Multi-purpose Identification (UMID)</li>
                            <li>GSID e-card</li>
                            <li>Passport</li> 
                            <li>Driver's License</li>
                            <li>Professional Regulation Commission (PRC) ID</li>
                            <li>NBI Clearance</li>
                            <li>Police Clearance</li>
                            <li>Postal ID</li>
                            <li>Voter's ID</li>
                            <li>Barangay Certification</li>
                            <li>Senior Citizen Card</li>
                            <li>Overseas Workers Welfare Administration (OWWA) ID</li>
                            <li>OFW ID</li>
                            <li>Seaman's Book</li>
                            <li>Alien Certificate of Registration / Immigrant Certificate of Registration</li>
                            <li>Government Office and GOCC ID, e.g Armed Forces of the Philippines (AFP), Home Development Mutual Fund (HDMF) IDs</li>
                            <li>Certification from the National Council for the Welfare of Disabled Persons (NCWDP)</li>
                            <li>Integrated Bar of the Philippines ID</li>
                            <li>Company ID issued by private entities or institutions registered with or supervised or regulated either by the BSP, SEC or IC</li>
                            <li>ID issued by the National Council on Disability Affairs (NCDA) — formerly National Council for the Welfare of Disabled Persons</li>
                            <li>National ID or Philippine Statistics Authority (PhilSys) ID</li>
                        </ol>

                        <span class="list_second_title d-block">For Foreign Nationals — All of the following IDs must be required:</span>

                        <ul>
                            <li>PhilID for resident aliens</li>
                            <li>Passport</li>
                            <li>Alien Certificate of Registration / Immigration Certificate of Registration</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/jquery-ui.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/motorcycle_loan_excess_payment_refund_request_form.js"></script>