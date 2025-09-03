
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

    section.individual input[readonly] {
        background-color: #ddd;
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

    section.individual div.hr {
        margin-block: 30px;
        height: 1px;
        background: #F2F2F2;
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

    .terms_conditions_deposit {
        margin-bottom: 30px;
        height: 850px;
        overflow-y: auto;
    }

    .terms_conditions_deposit span.title {
        color: var(--Black, #4A4A4A);
        font-family: Montserrat;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 25px; /* 178.571% */
        margin-bottom: 30px;
        display: block;
    }

    

    @media (max-width: 767px) {
        section.individual .input_rows {
            flex-direction: column;
            gap: 0;
        }

        div[id^="wpcf7-f1322"] button.cf7mls_back {
            width: 100%;
            margin-top: 20px;
        }
    }
</style>

<section class="individual">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text text-center">Deposit Forms</span>
                        <h2 class="text-center">Your Details Help Us Serve You Better</h2>
                        <p class="text-center">Accurate information ensures smooth and efficient processing of your requests. We handle your data with the utmost care and confidentiality.</p>
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
                            <span class="ms-2" id="mobile-step-text">1 / 2</span>
                        </div>
                        <ul class="step-progress d-md-flex d-none">
                            <li class="active">
                                <div class="step-number">1</div>
                                <div class="step-title">Customer Information Form</div>
                            </li>
                            <li>
                                <div class="step-number">2</div>
                                <div class="step-title">Terms and Conditions</div>
                            </li>
                        </ul>


                        <?php echo do_shortcode('[contact-form-7 id="fb8dd29" title="My Money Deposit Form"]') ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    // document.addEventListener("DOMContentLoaded", function () {
    //     document.querySelector(".autofill").addEventListener("click", function (e) {
    //         e.preventDefault();

    //         // Autofill input fields
    //         document.querySelectorAll("form input").forEach(function (input) {
    //             if (input.type === "text") {
    //                 if (input.classList.contains("hasDatepicker")) {
    //                     input.value = new Date().toISOString().split("T")[0]; // today
    //                 } else {
    //                     input.value = "John Doe";
    //                 }
    //             } else if (input.type === "email") {
    //                 input.value = "john@example.com";
    //             } else if (input.type === "tel") {
    //                 input.value = "1234567890";
    //             } else if (input.type === "date") {
    //                 input.value = new Date().toISOString().split("T")[0]; // today
    //             } else if (input.type === "number") {
    //                 input.value = 42;
    //             }
    //         });

    //         // Autofill radio buttons (pick first option in each group)
    //         const radioGroups = new Set();
    //         document.querySelectorAll('form input[type="checkbox"]').forEach(function (radio) {
    //             if (!radioGroups.has(radio.name)) {
    //                 const firstRadio = document.querySelector(`input[name="${radio.name}"]`);
    //                 if (firstRadio) firstRadio.checked = true;
    //                 radioGroups.add(radio.name); 
    //             }
    //         });

    //         // Autofill textareas
    //         document.querySelectorAll("form textarea").forEach(function (textarea) {
    //             textarea.value = "This is a sample message for autofill.";
    //         });

    //         // Autofill select dropdowns
    //         document.querySelectorAll("form select").forEach(function (select) {
    //             if (select.options.length > 1) {
    //                 select.selectedIndex = 1;
    //             }
    //         });
    //     });
    // });
</script>