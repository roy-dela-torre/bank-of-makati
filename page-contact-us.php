<?php get_header();
/*Template Name: Contact us*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/contact_us/';
get_template_part('template/banner_php'); ?>
<section class="share_your_feedback">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="content">
                        <span class="orange_text">Share your feedback</span>
                        <h2>Your Voice Matters to Us</h2>
                        <p>To improve our products and services, we want to know any feedback from you. Be it a praise, comment or complaint on our bank products, personnel and services, please feel free to inform us either by email or through phone.</p>
                        <div class="group_content">
                            <div class="list_content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="35" viewBox="0 0 41 35" fill="none">
                                    <path d="M7.00391 31.3865H12.6061V33.5993C12.6061 33.9708 12.4586 34.327 12.1959 34.5897C11.9332 34.8523 11.577 34.9999 11.2056 34.9999H8.40446C8.03301 34.9999 7.67677 34.8523 7.41412 34.5897C7.15146 34.327 7.00391 33.9708 7.00391 33.5993V31.3865Z" fill="#802F34" />
                                    <path d="M28.0117 31.3865H33.6139V33.5993C33.6139 33.9708 33.4664 34.327 33.2037 34.5897C32.9411 34.8523 32.5848 34.9999 32.2134 34.9999H29.4123C29.0408 34.9999 28.6846 34.8523 28.4219 34.5897C28.1593 34.327 28.0117 33.9708 28.0117 33.5993V31.3865Z" fill="#802F34" />
                                    <path d="M11.9023 15.3501V11.8908C11.9035 11.5197 12.0514 11.1641 12.3138 10.9017C12.5762 10.6393 12.9318 10.4913 13.3029 10.4902C13.6735 10.493 14.0281 10.6414 14.2902 10.9035C14.5523 11.1655 14.7007 11.5202 14.7034 11.8908V13.9706L11.9023 15.3501Z" fill="#802F34" />
                                    <path d="M25.9102 13.9706V11.8908C25.9113 11.5197 26.0592 11.1641 26.3216 10.9017C26.584 10.6393 26.9396 10.4913 27.3107 10.4902C27.6813 10.493 28.0359 10.6414 28.298 10.9035C28.5601 11.1655 28.7085 11.5202 28.7113 11.8908V15.3501L25.9102 13.9706Z" fill="#802F34" />
                                    <path d="M40.616 10.154C40.616 11.9957 39.3415 14.4607 37.4087 15.294C37.2055 15.3797 36.9835 15.4111 36.7645 15.3851C34.7681 15.1165 32.9229 14.1754 31.5334 12.717C31.3189 12.4952 31.184 12.2086 31.1498 11.9019C31.1156 11.5953 31.184 11.2859 31.3443 11.0223L31.6595 10.4971L32.3737 9.29966C30.3009 8.22824 26.2253 7.00275 20.308 7.00275C14.3907 7.00275 10.3151 8.22824 8.24224 9.29966L8.95652 10.4971L9.27165 11.0223C9.43199 11.2859 9.50041 11.5953 9.4662 11.9019C9.43198 12.2086 9.29707 12.4952 9.08257 12.717C7.69308 14.1754 5.8479 15.1165 3.85152 15.3851C3.6325 15.4111 3.41048 15.3797 3.20726 15.294C1.2745 14.4607 0 11.9957 0 10.154C0 3.17925 10.5251 0 20.308 0C30.0908 0 40.616 3.17925 40.616 10.154Z" fill="#E64C3C" />
                                    <path d="M2.80184 10.8545C2.61611 10.8545 2.438 10.7807 2.30667 10.6494C2.17534 10.5181 2.10156 10.3399 2.10156 10.1542C2.11505 9.09443 2.49793 8.07258 3.18419 7.26488C3.24095 7.19085 3.31193 7.12892 3.39297 7.0827C3.474 7.03649 3.56345 7.00693 3.65606 6.99576C3.74867 6.98459 3.84258 6.99204 3.93228 7.01767C4.02197 7.0433 4.10564 7.08659 4.17838 7.145C4.25111 7.20341 4.31144 7.27576 4.35583 7.35781C4.40021 7.43986 4.42775 7.52995 4.43684 7.62279C4.44593 7.71563 4.43637 7.80935 4.40874 7.89845C4.3811 7.98754 4.33595 8.07022 4.27592 8.14163C3.79213 8.7023 3.51855 9.41386 3.50211 10.1542C3.50211 10.3399 3.42833 10.5181 3.29701 10.6494C3.16568 10.7807 2.98756 10.8545 2.80184 10.8545Z" fill="#FB7B76" />
                                    <path d="M6.30668 6.37547C6.15098 6.37567 5.99965 6.32399 5.87661 6.22857C5.75357 6.13315 5.66584 5.99945 5.62728 5.8486C5.58872 5.69775 5.60154 5.53835 5.66371 5.39559C5.72587 5.25284 5.83385 5.13488 5.97055 5.06035C7.99844 4.02222 10.1665 3.28458 12.4068 2.87059C12.5889 2.83344 12.7783 2.87016 12.9333 2.97266C13.0884 3.07516 13.1963 3.23505 13.2335 3.41715C13.2706 3.59925 13.2339 3.78865 13.1314 3.94369C13.0289 4.09872 12.869 4.20668 12.6869 4.24383C10.5834 4.62859 8.54718 5.31741 6.64212 6.28863C6.53941 6.34539 6.42403 6.37526 6.30668 6.37547Z" fill="#FB7B76" />
                                    <path d="M8.95732 10.4973C8.9423 10.5156 8.92308 10.53 8.90129 10.5393C8.436 10.7393 8.01656 11.0324 7.66881 11.4006C7.56233 11.5519 7.40098 11.6556 7.21914 11.6896C7.03731 11.7236 6.84938 11.6853 6.69543 11.5827C6.54257 11.4756 6.43833 11.3124 6.40553 11.1286C6.37272 10.9449 6.41401 10.7557 6.52036 10.6023C6.99074 10.0456 7.57921 9.60067 8.24303 9.2998L8.95732 10.4973Z" fill="#802F34" />
                                    <path d="M33.926 11.5827C33.772 11.6853 33.5841 11.7236 33.4022 11.6896C33.2204 11.6556 33.059 11.5519 32.9526 11.4006C32.6048 11.0324 32.1854 10.7393 31.7201 10.5393C31.6983 10.53 31.6791 10.5156 31.6641 10.4973L32.3783 9.2998C33.0422 9.60067 33.6306 10.0456 34.101 10.6023C34.2074 10.7557 34.2487 10.9449 34.2159 11.1286C34.183 11.3124 34.0788 11.4756 33.926 11.5827Z" fill="#802F34" />
                                    <path d="M6.6377 32.1988C6.11831 32.1969 5.60579 32.0798 5.13705 31.8561C4.6683 31.6324 4.25498 31.3075 3.92683 30.9049C3.59869 30.5023 3.36388 30.0319 3.2393 29.5277C3.11471 29.0234 3.10346 28.4978 3.20636 27.9887C4.92483 19.1828 11.9283 12.5911 20.3071 12.5911C28.6859 12.5911 35.6893 19.1828 37.4092 27.9887C37.5121 28.4979 37.5008 29.0237 37.3762 29.528C37.2515 30.0323 37.0166 30.5028 36.6883 30.9054C36.36 31.3081 35.9465 31.6329 35.4776 31.8565C35.0087 32.0802 34.496 32.1971 33.9765 32.1988H6.6377Z" fill="#E64C3C" />
                                    <path d="M20.3113 29.3976C24.1789 29.3976 27.3141 26.2624 27.3141 22.3948C27.3141 18.5273 24.1789 15.3921 20.3113 15.3921C16.4438 15.3921 13.3086 18.5273 13.3086 22.3948C13.3086 26.2624 16.4438 29.3976 20.3113 29.3976Z" fill="white" />
                                    <path d="M20.311 26.5964C22.6315 26.5964 24.5127 24.7153 24.5127 22.3948C24.5127 20.0743 22.6315 18.1931 20.311 18.1931C17.9905 18.1931 16.1094 20.0743 16.1094 22.3948C16.1094 24.7153 17.9905 26.5964 20.311 26.5964Z" fill="#FB7B76" />
                                </svg>
                                <h3 class="blue_text">Hotline</h3>
                                <p><a href="tel:+(632) 8889-0000">(632) 8889-0000</a> local <a href="tel:+2104">2104</a></p>
                            </div>
                            <div class="list_content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                    <g clip-path="url(#clip0_1480_10825)">
                                        <path d="M0 13.1249L16.8525 23.8503C17.045 23.9924 17.2725 24.0624 17.5 24.0624C17.7275 24.0624 17.955 23.9924 18.1475 23.8503L35 13.1249L18.1562 0.218691C17.7669 -0.0722461 17.2331 -0.0722461 16.8438 0.218691L0 13.1249Z" fill="#64B5F6" />
                                        <path d="M28.4375 0H6.5625C5.35719 0 4.375 0.982188 4.375 2.1875V26.25C4.375 26.8538 4.865 27.3438 5.46875 27.3438H29.5312C30.135 27.3438 30.625 26.8538 30.625 26.25V2.1875C30.625 0.982188 29.645 0 28.4375 0Z" fill="#ECEFF1" />
                                        <path d="M9.84375 6.5625H25.1562C25.76 6.5625 26.25 6.0725 26.25 5.46875C26.25 4.865 25.76 4.375 25.1562 4.375H9.84375C9.24 4.375 8.75 4.865 8.75 5.46875C8.75 6.0725 9.24 6.5625 9.84375 6.5625Z" fill="#90A4AE" />
                                        <path d="M25.1562 8.75H9.84375C9.24 8.75 8.75 9.24 8.75 9.84375C8.75 10.4475 9.24 10.9375 9.84375 10.9375H25.1562C25.76 10.9375 26.25 10.4475 26.25 9.84375C26.25 9.24 25.76 8.75 25.1562 8.75Z" fill="#90A4AE" />
                                        <path d="M18.5938 13.125H9.84375C9.24 13.125 8.75 13.615 8.75 14.2188C8.75 14.8225 9.24 15.3125 9.84375 15.3125H18.5938C19.1975 15.3125 19.6875 14.8225 19.6875 14.2188C19.6875 13.615 19.1975 13.125 18.5938 13.125Z" fill="#90A4AE" />
                                        <path d="M18.1475 23.8503C17.955 23.9925 17.7275 24.0625 17.5 24.0625C17.2725 24.0625 17.045 23.9925 16.8525 23.8503L0 13.125V32.8125C0 34.02 0.98 35 2.1875 35H32.8125C34.02 35 35 34.02 35 32.8125V13.125L18.1475 23.8503Z" fill="#1E88E5" />
                                        <path d="M32.8125 35H2.1875C0.960313 35 0 34.0397 0 32.8125C0 32.4647 0.16625 32.1366 0.44625 31.9309L16.8525 20.9934C17.045 20.8513 17.2725 20.7812 17.5 20.7812C17.7275 20.7812 17.955 20.8513 18.1475 20.9934L34.5537 31.9309C34.8337 32.1366 35 32.4647 35 32.8125C35 34.0397 34.0397 35 32.8125 35Z" fill="#2196F3" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1480_10825">
                                            <rect width="35" height="35" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <h3 class="blue_text">Email</h3>
                                <a href="mailto:consumerassistance@bankofmakati.com.ph">consumerassistance@bankofmakati.com.ph</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="form">
                        <h3>Share Your Experience with Us</h3>
                        <?php echo do_shortcode('[contact-form-7 id="13845d5" title="Share your feedback form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="head_office">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="text-center orange_text">Head Office</span>
                        <h2 class="text-center">Connect with Us</h2>
                        <p class="text-center">Visit our head office or call our hotline for quick assistance. We're here to help with your banking needs.</p>
                        <p class="text-center"><b>Hotline:</b> <a href="tel:+(632) 8889-0000">(632) 8889-0000</a></p>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <div class="content">
                        <div class="data_table">Service</div>
                        <div class="data_table">Local</div>
                        <div class="data_table">&nbsp;</div>
                        <div class="data_table ">Extension Number</div>
                        <div class="data_table ">Customer Helpdesk/Operator</div>
                        <div class="data_table">0</div>
                        <div class="data_table ">Deposit Products</div>
                        <div class="data_table">2503, 2504, 2505, 2506</div>
                        <div class="data_table ">Consumer Department</div>
                        <div class="data_table">1211, 1212, 1213</div>
                        <div class="data_table">Housing Loan</div>
                        <div class="data_table">1210</div>
                        <div class="data_table">Loans Operations Department</div>
                        <div class="data_table">2401, 24 02, 2403, 2404, 2405, 2406</div>
                        <div class="data_table">Loans Operation Department 2</div>
                        <div class="data_table">2508, 2509, 2510</div>
                        <div class="data_table">Business Loan</div>
                        <div class="data_table">1201</div>
                        <div class="data_table">Micro Small Lending Department</div>
                        <div class="data_table">1214</div>
                        <div class="data_table">CRLG MIS</div>
                        <div class="data_table">1218</div>
                        <div class="data_table">Microfinance Department</div>
                        <div class="data_table">1217</div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <div class="content">
                        <div class="data_table">Service</div>
                        <div class="data_table">Local</div>
                        <div class="data_table">&nbsp;</div>
                        <div class="data_table">Extension Number</div>
                        <div class="data_table">Enterprise Department</div>
                        <div class="data_table">1215, 1216</div>
                        <div class="data_table">Commercial Lending Department</div>
                        <div class="data_table">1204, 1205, 1206, 1207</div>
                        <div class="data_table">Loans Treasury Accounting Department</div>
                        <div class="data_table">2639, 2640, 2641</div>
                        <div class="data_table">HR Department</div>
                        <div class="data_table">2621, 2622, 2623, 2624</div>
                        <div class="data_table">Security and Safety Department</div>
                        <div class="data_table">2627, 2628</div>
                        <div class="data_table">Financial Accounting Department</div>
                        <div class="data_table">2633, 2634, 2635</div>
                        <div class="data_table">Real State & Consumer Lending</div>
                        <div class="data_table">1208</div>
                        <div class="data_table">Institutional Borrowing Department</div>
                        <div class="data_table">2507</div>
                        <div class="data_table">Treasury Department </div>
                        <div class="data_table">&nbsp;</div>
                        <div class="data_table">&nbsp;</div>
                        <div class="data_table">&nbsp;</div>
                    </div>
                </div>
                <div class="col-md-12 d-block d-lg-none">
                    <div class="content">
                        <div class="data_table">Service</div>
                        <div class="data_table">Extension Number</div>

                        <!-- Combined Data: Left + Right Columns -->

                        <div class="data_table">&nbsp;</div>
                        <div class="data_table ">Extension Number</div>
                        <div class="data_table ">Customer Helpdesk/Operator</div>
                        <div class="data_table">0</div>
                        <div class="data_table ">Deposit Products</div>
                        <div class="data_table">2503, 2504, 2505, 2506</div>
                        <div class="data_table ">Consumer Department</div>
                        <div class="data_table">1211, 1212, 1213</div>
                        <div class="data_table">Housing Loan</div>
                        <div class="data_table">1210</div>
                        <div class="data_table">Loans Operations Department</div>
                        <div class="data_table">2401, 24 02, 2403, 2404, 2405, 2406</div>
                        <div class="data_table">Loans Operation Department 2</div>
                        <div class="data_table">2508, 2509, 2510</div>
                        <div class="data_table">Business Loan</div>
                        <div class="data_table">1201</div>
                        <div class="data_table">Micro Small Lending Department</div>
                        <div class="data_table">1214</div>
                        <div class="data_table">CRLG MIS</div>
                        <div class="data_table">1218</div>
                        <div class="data_table">Microfinance Department</div>
                        <div class="data_table">1217</div>

                        <!-- Second Column -->

                        <div class="data_table">&nbsp;</div>
                        <div class="data_table">Extension Number</div>
                        <div class="data_table">Enterprise Department</div>
                        <div class="data_table">1215, 1216</div>
                        <div class="data_table">Commercial Lending Department</div>
                        <div class="data_table">1204, 1205, 1206, 1207</div>
                        <div class="data_table">Loans Treasury Accounting Department</div>
                        <div class="data_table">2639, 2640, 2641</div>
                        <div class="data_table">HR Department</div>
                        <div class="data_table">2621, 2622, 2623, 2624</div>
                        <div class="data_table">Security and Safety Department</div>
                        <div class="data_table">2627, 2628</div>
                        <div class="data_table">Financial Accounting Department</div>
                        <div class="data_table">2633, 2634, 2635</div>
                        <div class="data_table">Real State & Consumer Lending</div>
                        <div class="data_table">1208</div>
                        <div class="data_table">Institutional Borrowing Department</div>
                        <div class="data_table">2507</div>
                        <div class="data_table">Treasury Department </div>
                        <div class="data_table">&nbsp;</div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="your_opinion_counts">
    <div class="wrapper">
        <div class="contaner-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="text-center orange_text">Your Opinion Counts</span>
                        <h2 class="text-center">Help Us Serve You Better</h2>
                        <p class="text-center">We value your opinions and suggestions as we look for ways to improve our service. Please take a few moments to let us know how we are doing.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form">
                        <?php echo do_shortcode('[contact-form-7 id="5114a43" title="Your Opinion Counts"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script>
    $(document).ready(function() {
        $("select.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required,select.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required,select.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required").select2()
    });
</script>