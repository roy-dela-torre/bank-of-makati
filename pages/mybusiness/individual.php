
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/step_by_step_form.css">
<style>
    section .cf7mls-btns {
        margin-top: 10px;
    }

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

    section.individual .gap-20 {
        gap: 20px;
    }

    section.individual .input_rows {
        display: flex;
        gap: 20px;
    }

    section.individual span.wpcf7-form-control-wrap {
        margin-bottom: 20px;
        display: block;
    }

    section.individual span.wpcf7-form-control-wrap:has(.wpcf7-acceptance) {
        margin-bottom: 30px;
    }

    section.individual input[readonly] {
        background-color: #ddd;
    }

    section.individual .black_text {
        color: #4A4A4A;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 25px; /* 178.571% */
        margin-bottom: 30px;
    }

    section.individual .title_text {
        font-size: 16px;
    }

    section.individual div.hr {
        margin-block: 30px;
        height: 1px;
        background: #F2F2F2;
    }

    section.individual .hereby {
        /* display: flex; */
        justify-content: flex-start;
        gap: 5px;
        margin-bottom: 30px;
    }

    section.individual input.declaration {
        margin: 0;
        max-width: 170px;
        width: 100%;
        border: none !important;
        border-bottom: 1px solid #c1c1c1 !important;
        padding: 0 !important; 
        border-radius: 0 !important;
    }

    section.individual span[data-name="declaration"] {
        max-width: 170px;
        margin-bottom: 0 !important;
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

    span.wpcf7-form-control.wpcf7-checkbox {
        display: flex;
        flex-wrap: wrap;
        gap: 20px 50px;
    }

    section.individual .step6_hr {
        height: 1px;
        background: #4A4A4A;
        max-width: 160px;
        width: 100%;
        margin-bottom: 10px;
    }
	
	.month-year-picker .ui-datepicker-calendar {
        display: none;
    } 

    .year-only-picker .ui-datepicker-calendar {
        display: none;
    } 

    section.individual h3 {
        margin-bottom: 30px;
    }

    section.individual .wpcf7-checkbox label {
        gap: 5px;
        align-items: start;
    }

    section.individual .attach_photo {
        color: #4A4A4A;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 25px;
        display: block;
        margin-bottom: 10px;
    }

    section.individual .wpcf7-checkbox .wpcf7-list-item-label {
         font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 25px;
        color: #4A4A4A;
    }

    section.individual .wpcf7-acceptance span.wpcf7-list-item-label {
        color: #4A4A4A;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: 25px;
    }

    section.individual .wpcf7-acceptance span.wpcf7-list-item-label a {
        color: #F26531;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: 25px;
        text-decoration: none;
    }

    section.individual .wpcf7-acceptance label {
        gap: 10px;
        align-items: start;
    }

    section.individual .wpcf7-acceptance input[type="checkbox"] {
        margin-top: 5px;
    }

    section.individual .step6 p, section.individual .step5 p {
        font-size: 14px;
    }

    section.individual .step5 p {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    @media (max-width: 767px) {
        section.individual .input_rows {
            flex-direction: column;
            gap: 0;
        }

        section .cf7mls-btns button[name="cf7mls_back"] {
            width: 100%;
            margin-top: 20px;
        }

        section .cf7mls-btns {
            flex-direction: column-reverse;
            gap: 0;
        }

        section .cf7mls-btns button[name="cf7mls_next"] {
            width: 100%;
        }
    }
</style>

<section class="banner" style="background: url('https://bankofmakati.innovnational.com/wp-content/uploads/2025/04/banner-7.jpg') no-repeat center center / cover;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="text-white text-center">Credit Solutions for Individuals and Sole Proprietors</h1>

                        <p>Manage your finances seamlessly with credit solutions designed for individuals and sole proprietors. Enjoy flexible options that support your personal and business growth.</p>

                        <a href="https://bankofmakati.innovnational.com/wp-content/uploads/2025/08/CLASS-B-Business-Application-Form-_individual.pdf" target="_blank" rel="noopener noreferrer" class="white_btn">
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
                    <div class="forms">
                        <div id="mobile-step-indicator" class=" align-items-center justify-content-center gap-4 d-flex d-md-none">
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

                        <!-- <ul id="progressbar" class="d-flex justify-content-center">
                            <li class="active">Personal Information</li>
                            <li class="">Borrower and Business Information</li>
                            <li class="">Loan Application Information</li>
                            <li class="">Financial Information</li>
                            <li class="">Undertaking/Declaration</li>
                            <li class="">Data Privacy Consent</li>
                        </ul> -->

                        <ul class="step-progress d-md-flex d-none">
                            <li class="active">
                                <div class="step-number">1</div>
                                <div class="step-title">Personal Information</div>
                            </li>
                            <li>
                                <div class="step-number">2</div>
                                <div class="step-title">Borrower and Business Information</div>
                            </li>
                            <li>
                                <div class="step-number">3</div>
                                <div class="step-title">Loan Application Information</div>
                            </li>
                            <li>
                                <div class="step-number">4</div>
                                <div class="step-title">Financial Information</div>
                            </li>
                            <li>
                                <div class="step-number">5</div>
                                <div class="step-title">Undertaking/Declaration</div>
                            </li>
                            <li>
                                <div class="step-number">6</div>
                                <div class="step-title">Data Privacy Consent</div>
                            </li>
                        </ul>

                        <?php echo do_shortcode('[contact-form-7 id="35e8cad" title="Individual and Sole"]') ?>

                        <!-- <button class="autofill">autofill</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/my_business_form.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/inc/js/step_by_step_form.js"></script> -->

<script>

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector(".autofill").addEventListener("click", function (e) {
            e.preventDefault();

            // Autofill input fields
            document.querySelectorAll("form input").forEach(function (input) {
                if (input.type === "text") {
                    if (input.classList.contains("hasDatepicker")) {
                        input.value = new Date().toISOString().split("T")[0]; // today
                    } else {
                        input.value = "John Doe";
                    }
                } else if (input.type === "email") {
                    input.value = "john@example.com";
                } else if (input.type === "tel") {
                    input.value = "1234567890";
                } else if (input.type === "number") {
                    input.value = 42;
                }
            });

            // Autofill radio buttons (pick first option in each group)
            const radioGroups = new Set();
            document.querySelectorAll('form input[type="checkbox"]').forEach(function (radio) {
                if (!radioGroups.has(radio.name)) {
                    const firstRadio = document.querySelector(`input[name="${radio.name}"]`);
                    if (firstRadio) firstRadio.checked = true;
                    radioGroups.add(radio.name);
                }
            });

            // Autofill textareas
            document.querySelectorAll("form textarea").forEach(function (textarea) {
                textarea.value = "This is a sample message for autofill.";
            });

            // Autofill select dropdowns
            document.querySelectorAll("form select").forEach(function (select) {
                if (select.options.length > 1) {
                    select.selectedIndex = 1;
                }
            });
        });
    });
</script>