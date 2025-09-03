
function toggleGroup() {
    if ($('input[name="agreement1"]:checked').val() === "I Agree") {
        $('[data-id="i_agree"]').slideDown();
    } else {
        $('[data-id="i_agree"]').slideUp();
    }
}
$(document).ready(function () {
    $('#branch-select').select2({
        width: '100%'
    });
    $("#branch-map-container img").hover(function () {
        $(this).replaceWith(`<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30887.513858030256!2d121.12549671228615!3d14.602537526105552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c0aa1bfb0799%3A0x5e0d063ffa71328b!2sBank%20Of%20Makati!5e0!3m2!1sen!2sph!4v1754472220177!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`);

    }, function () {
        // out
    });

    $.get(`${window.location.origin}/get-your-opinion-section/`, function (data) {
        function toggleReadonly(selectClass, textClass) {

            $(textClass)
                .attr("readonly", "readonly")
                .val("")
                .css("background", "#ddd")
                .removeClass("wpcf7-validates-as-required")
                .removeAttr("aria-required");

            $(selectClass).on("change", function () {
                if ($(this).val() === "Other") {
                    $(textClass)
                        .removeAttr("readonly")
                        .css("background", "#fff")
                        .addClass("wpcf7-validates-as-required")
                        .attr("aria-required", "true");
                } else {
                    $(textClass)
                        .attr("readonly", "readonly")
                        .val("")
                        .css("background", "#ddd")
                        .removeClass("wpcf7-validates-as-required")
                        .removeAttr("aria-required");
                }
            });

            // Initialize the background color on page load
            $(textClass).each(function () {
                if ($(this).attr("readonly")) {
                    $(this).css("background", "#ddd");
                }
            });
        }

        setTimeout(function () {
            $('section.your_opinion_count span.select2-selection__arrow b').replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.929 7.88911L0.271999 2.23211L1.686 0.818115L6.636 5.76812L11.586 0.818115L13 2.23212L7.343 7.88911C7.15547 8.07659 6.90116 8.1819 6.636 8.1819C6.37084 8.1819 6.11653 8.07659 5.929 7.88911Z" fill="#4A4A4A"/>
            </svg>`);
        }, 1000)
        // Extract only the section.your_opinion_count from the response
        var $section = $('<div>').html(data).find('section.your_opinion_count');
        if ($section.length) {
            $('.financial_consumer').after($section);
        }
        $("section.your_opinion_count button#cf7mls-next-btn-cf7mls_step-1").click(function (e) {
            toggleReadonly(".disabled1", ".other1")
            toggleReadonly(".disabled2", ".other2")
            toggleReadonly(".disabled3", ".other3")
            toggleReadonly(".disabled4", ".other4")
        });
        $("section.your_opinion_count button#cf7mls-next-btn-cf7mls_step-2").click(function (e) {
            toggleReadonly(".disabled3", ".other3")
            toggleReadonly(".disabled4", ".other4")
        });

        $("select").select2()
        $("input#datepicker").datepicker()

        toggleGroup(); // Run on load
        $('input[name="agreement1"]').on('change', toggleGroup); // Run on change

        // Use event delegation to handle dynamic replacement of the button/input
        $(document).on('change', 'input[name="agreement1"]', function () {
            if ($('input[name="agreement1"]:checked').val() === "I Disagree") {
                $('section.your_opinion_count button#cf7mls-next-btn-cf7mls_step-1').replaceWith(`<a href="javascript:void(0)" style="text-decoration: none;" class="orange_btn" id="agreement1_submit">Submit</a><span class="wpcf7-spinner"></span>`);
                $('a#agreement1_submit').click(function () {
                    $('input[name="radio-749"][value="I Disagree"]').prop('checked', true);
                    $('input#disagree_submit').click()
                })
            } else {
                $('section.your_opinion_count a#agreement1_submit').replaceWith(`
                <button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next" id="cf7mls-next-btn-cf7mls_step-1">
                    Next
                    <img src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" alt="Step Loading" data-lazy-src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" style="display: none;">
                </button>
            `);
            }
        });
        $('select[name="formUnderstanding"]').prop('disabled', false).trigger('change.select2');


        // form validation
        function validateCurrentStep($fieldset) {
            var errors = [];

            // Agreement step
            if ($fieldset.find('input[name="agreement1"]').length) {
                if (!window.validateAgreement('div#wpcf7-f1349-o1 span.wpcf7-form-control-wrap')) {
                    errors.push('Please select your agreement to the Data Privacy statement.');
                }
                var agreement1 = $fieldset.find('input[name="agreement1"]:checked').val();
                if (agreement1 === "I Agree") {
                    if (!window.validateAgreement('div#wpcf7-f1349-o1 div[data-id="i_agree"] span.wpcf7-form-control-wrap')) {
                        errors.push('Please select your agreement to the marketing consent.');
                    }
                }
            }

            // Personal Info step
            if ($fieldset.find('input[name="full_name"]').length) {
                var fullName = $fieldset.find('input[name="full_name"]').val();
                var mobileNumber = $fieldset.find('input[name="mobile_number"]').val();
                var emailAddress = $fieldset.find('input[name="email_address"]').val();
                var branchVisited = $fieldset.find('input[name="branch_visited"]').val();
                var dateOfVisit = $fieldset.find('input[name="date_of_visit"]').val();
                var purposeOfVisit = $fieldset.find('select[name="purpose_of_visit"]').val();
                var other1 = $fieldset.find('input[name="other1"]').val();
                var productType = $fieldset.find('select[name="product_type"]').val();
                var other2 = $fieldset.find('input[name="other2"]').val();

                if (!window.validateFullName(fullName)) {
                    errors.push('Full Name is required and must not contain numbers or special characters.');
                }
                if (!window.validateContactNumber(mobileNumber)) {
                    errors.push('Please enter a valid Mobile Number.');
                }
                if (!window.validateEmail(emailAddress)) {
                    errors.push('Please enter a valid Email Address.');
                }
                if (!branchVisited) {
                    errors.push('Branch Visited is required.');
                }
                if (!window.validateDate(dateOfVisit)) {
                    errors.push('Date of Visit is required and must be in MM/DD/YYYY format.');
                }
                if (!window.validateSelectField(purposeOfVisit)) {
                    errors.push('Please select Purpose of Visit.');
                }
                if (purposeOfVisit === "Other" && !other1) {
                    errors.push('Please specify the "Other" purpose of visit.');
                }
                if (!window.validateSelectField(productType)) {
                    errors.push('Please select Type of Product Availed.');
                }
                if ((productType === "Others:" || productType === "Other") && !other2) {
                    errors.push('Please specify the "Other" product type.');
                }
            }

            // Personal Info step (updated fields)
            if ($fieldset.find('input[name="full_name"]').length) {
                var fullName = $fieldset.find('input[name="full_name"]').val();
                var mobileNumber = $fieldset.find('input[name="mobile_number"]').val();
                var emailAddress = $fieldset.find('input[name="email_address"]').val();
                var branchVisited = $fieldset.find('input[name="branch_visited"]').val();
                var dateOfVisit = $fieldset.find('input[name="date_of_visit"]').val();
                var purposeOfVisit = $fieldset.find('select[name="purpose_of_visit"]').val();
                var other1 = $fieldset.find('input[name="other1"]').val();
                var productType = $fieldset.find('select[name="product_type"]').val();
                var other2 = $fieldset.find('input[name="other2"]').val();

                if (!window.validateFullName(fullName)) {
                    errors.push('Full Name is required and must not contain numbers or special characters.');
                }
                if (!window.validateContactNumber(mobileNumber)) {
                    errors.push('Please enter a valid Mobile Number.');
                }
                if (!window.validateEmail(emailAddress)) {
                    errors.push('Please enter a valid Email Address.');
                }
                if (!branchVisited) {
                    errors.push('Branch Visited is required.');
                }
                if (!window.validateDate(dateOfVisit)) {
                    errors.push('Date of Visit is required and must be in MM/DD/YYYY format.');
                }
                if (!window.validateSelectField(purposeOfVisit) || purposeOfVisit === "Purpose of Visit (Required)") {
                    errors.push('Please select Purpose of Visit.');
                }
                if (purposeOfVisit === "Other" && !other1) {
                    errors.push('Please specify the "Other" purpose of visit.');
                }
                if (!window.validateSelectField(productType) || productType === "Type of Product Availed (Required)") {
                    errors.push('Please select Type of Product Availed.');
                }
                if ((productType === "Others:" || productType === "Other") && !other2) {
                    errors.push('Please specify the "Other" product type.');
                }
            }

            // Remove duplicates
            errors = [...new Set(errors)];
            return errors;
        }

        // On next button click, validate current step only
        $('div#wpcf7-f1349-o1 button[name="cf7mls_next"]').click(function (e) {
            var $fieldset = $(this).closest('.fieldset-cf7mls');
            var errors = validateCurrentStep($fieldset);
            $('.wpcf7-response-output').hide();
            if (errors.length > 0) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Form Error',
                    html: errors.join('<br>'),
                    confirmButtonColor: '#ff6600'
                });
                return false;
            }
        });

        // On final submit, validate all steps
        $('div#wpcf7-f1349-o1 input[type="submit"]').click(function (e) {
            var errors = [];
            $('div#wpcf7-f1349-o1 .fieldset-cf7mls').each(function () {
                errors = errors.concat(validateCurrentStep($(this)));
            });
            $('.wpcf7-response-output').hide();
            errors = [...new Set(errors)];
            if (errors.length > 0) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Form Error',
                    html: errors.join('<br>'),
                    confirmButtonColor: '#ff6600'
                });
                return false;
            }
            window.showResponseAlert && window.showResponseAlert('div#wpcf7-f1349-o1 .wpcf7-response-output');
        });



    });

    $('select[name="inquiry_motorcycle"]').on('change', function () {
        if (this.value === 'Early Closure Termination') {
            $('button#cf7mls-next-btn-cf7mls_step-4').replaceWith(`<a href="${window.location.origin}/myextra/motorcycle-request-form/esoa/" target="_blank" rel="noopener noreferrer" class="orange_btn">Refund of Excess Payment</a>`)
        } else if (this.value === 'Refund of Excess Payment') {
            $('button#cf7mls-next-btn-cf7mls_step-4').replaceWith(`<a href="${window.location.origin}/myextra/motorcycle-request-form/excess-payment/" target="_blank" rel="noopener noreferrer" class="orange_btn">Refund of Excess Payment</a>`)
        } else if (this.value === 'Update Mobile Number') {
            $('button#cf7mls-next-btn-cf7mls_step-4').replaceWith(`<input class="wpcf7-form-control wpcf7-submit has-spinner orange_btn" type="submit" value="Submit" id="loan_document_submit"><span class="wpcf7-spinner"></span>`)
        }

        else {
            $('fieldset[data-cf7mls-order="3"]a.orange_btn').replaceWith(`<button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next" id="cf7mls-next-btn-cf7mls_step-3">Next<img src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" alt="Step Loading" data-lazy-src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" style="display: none;"></button>`)
        }
    })

    $('select[name="type_of_complain"]').on('change', function () {
        if (this.value === 'Type of Complaint (Required)') {
            $('input#complain_submit').replaceWith(`<button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next" id="cf7mls-next-btn-cf7mls_step-3">Next<img src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" alt="Step Loading" data-lazy-src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" style="display: none;"></button>`)
        } else {
            $('button#cf7mls-next-btn-cf7mls_step-3').replaceWith(`<input class="wpcf7-form-control wpcf7-submit has-spinner orange_btn" type="submit" value="Submit" id="complain_submit">`)
        }
    });

    $('select[name="motorcycle_loan_document"]').on('change', function () {
        $('fieldset[data-cf7mls-order="4"] .orange_btn').replaceWith(`<button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next" id="cf7mls-next-btn-cf7mls_step-4">Next<img src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" alt="Step Loading" data-lazy-src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" style="display: none;"></button>`)
        if (this.value === 'Statement of Account') {
            $('fieldset[data-cf7mls-order="4"] button.cf7mls_next,fieldset[data-cf7mls-order="4"] .orange_btn,  input#loan_document_submit').replaceWith(`<a href="${window.location.origin}/myextra/motorcycle-request-form/esoa/" target="_blank" rel="noopener noreferrer" class="orange_btn">Go to E-SOA</a>`)
        }
        else if (this.value === 'Original Certificate of Registration') {
            $('fieldset[data-cf7mls-order="4"] button.cf7mls_next,fieldset[data-cf7mls-order="4"] .orange_btn, input#loan_document_submit').replaceWith(`<a href="${window.location.origin}/myextra/motorcycle-request-form/ocr/" target="_blank" rel="noopener noreferrer" class="orange_btn">Go to E-OCR</a>`)
        }

        else if (this.value === 'Others' || this.value === 'Repo Documents' || this.value === 'Loan Payment Schedule' || this.value === 'Disclosures' || this.value === 'Promisorry Note' || this.value === 'Certificate of Full Payment' || this.value === 'Official Receipts (Payment)') {
            $('fieldset[data-cf7mls-order="4"] button.cf7mls_next,fieldset[data-cf7mls-order="4"] .orange_btn').replaceWith(`<input class="wpcf7-form-control wpcf7-submit has-spinner orange_btn" type="submit" value="Submit" id="loan_document_submit"><span class="wpcf7-spinner"></span>`)
        }
        else {
            $('fieldset[data-cf7mls-order="4"] .orange_btn').replaceWith(`<button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next" id="cf7mls-next-btn-cf7mls_step-4">Next<img src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" alt="Step Loading" data-lazy-src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" style="display: none;"></button>`)
        }
    })

    


});