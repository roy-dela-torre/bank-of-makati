function ProceedStepTwo() {
    $(document).on('click', '.step1.next_form', function () {
        let isValid = true;

        // Find all required input and select fields
        $('.form_step1 .wpcf7-validates-as-required').each(function () {
            let field = $(this);
            field.css("border", ""); // Reset border

            if (field.val().trim() === "") {
                isValid = false;
                field.css("border", "1px solid red");
            }
        });

        // Set border color for non-required fields
        $('input, textarea, select').not('.wpcf7-validates-as-required').each(function () {
            $(this).css("border", "1px solid #C1C1C1");
        });

        if (!isValid) {
            Swal.fire({
                title: "Error",
                html: "Please fill out all the required fields.",
                icon: "error"
            });
        } else {
            $(".individual__forms").trigger("next.owl.carousel");
        }
    });
    
}

function ProceedStepThree() {
    $(document).on('click', '.step2.next_form', function () {
        let isValid = true;

        // Find all required input and select fields
        $('.form_step2 .wpcf7-validates-as-required').each(function () {
            let field = $(this);
            field.css("border", ""); // Reset border

            if (field.val().trim() === "") {
                isValid = false;
                field.css("border", "1px solid red");
            }
        });

        // Set border color for non-required fields
        $('input, textarea, select').not('.wpcf7-validates-as-required').each(function () {
            $(this).css("border", "1px solid #C1C1C1");
        });

        if (!isValid) {
            Swal.fire({
                title: "Error",
                html: "Please fill out all the required fields.",
                icon: "error"
            });
        } else {
            $(".individual__forms").trigger("next.owl.carousel");
        }
    });
    
}

function ProceedStepFour() {
    $(document).on('click', '.step3.next_form', function () {
        let isValid = true;

        // Find all required input and select fields
        $('.form_step3 .wpcf7-validates-as-required').each(function () {
            let field = $(this);
            field.css("border", ""); // Reset border

            if (field.val().trim() === "") {
                isValid = false;
                field.css("border", "1px solid red");
            }
        });

        // Set border color for non-required fields
        $('input, textarea, select').not('.wpcf7-validates-as-required').each(function () {
            $(this).css("border", "1px solid #C1C1C1");
        });

        if (!isValid) {
            Swal.fire({
                title: "Error",
                html: "Please fill out all the required fields.",
                icon: "error"
            });
        } else {
            $(".individual__forms").trigger("next.owl.carousel");
        }
    });
    
}

function ProceedStepFive() {
    $(document).on('click', '.step4.next_form', function () {
        let isValid = true;

        // Find all required input and select fields
        $('.form_step4 .wpcf7-validates-as-required').each(function () {
            let field = $(this);
            field.css("border", ""); // Reset border

            if (field.val().trim() === "") {
                isValid = false;
                field.css("border", "1px solid red");
            }
        });

        // Set border color for non-required fields
        $('input, textarea, select').not('.wpcf7-validates-as-required').each(function () {
            $(this).css("border", "1px solid #C1C1C1");
        });

        if (!isValid) {
            Swal.fire({
                title: "Error",
                html: "Please fill out all the required fields.",
                icon: "error"
            });
        } else {
            $(".individual__forms").trigger("next.owl.carousel");
        }
    });
    
}

function ProceedStepSix() {
    $(document).on('click', '.step5.next_form', function () {
        let isValid = true;

        // Find all required input and select fields
        $('.form_step5 .wpcf7-validates-as-required').each(function () {
            let field = $(this);
            field.css("border", ""); // Reset border

            if (field.val().trim() === "") {
                isValid = false;
                field[0].style.setProperty("border-bottom", "1px solid red", "important");
            }
        });

        // Set border color for non-required fields
        $('input, textarea, select').not('.wpcf7-validates-as-required').each(function () {
            $(this).css("border-bottom", "1px solid #C1C1C1");
        });

        if (!isValid) {
            Swal.fire({
                title: "Error",
                html: "Please fill out all the required fields.",
                icon: "error"
            });
        } else {
            $(".individual__forms").trigger("next.owl.carousel");
        }
    });
    
}

function ProceedSubmit() {
    $(document).on('click', '.submit_individual_form', function () {
        let isValid = true;
        let $form = $(this).closest('form'); // Target the closest form

        // Find required fields within the form
        $form.find('.wpcf7-validates-as-required').each(function () {
            let field = $(this);
            field.css("border", ""); // Reset border

            if (field.val().trim() === "") {
                isValid = false;
                field[0].style.setProperty("border-bottom", "1px solid red", "important");
            }
        });

        // Set default border for other inputs
        $form.find('input, textarea, select').not('.wpcf7-validates-as-required').each(function () {
            $(this).css("border-bottom", "1px solid #C1C1C1");
        });

        if (!isValid) {
            Swal.fire({
                title: "Error",
                html: "Please fill out all the required fields.",
                icon: "error"
            });
        } else {
            // If valid, trigger the native submit action
            $form.submit();
        }
    });

    // // Add the submit listener only once
    // document.addEventListener('wpcf7submit', function (event) {
    //     console.log('Form submitted!', event);
    //     // Additional actions after successful submit
    // }, false);
}



function toggleReadonly(selectClass, textClass) {

    $(textClass)
                .attr("readonly", "readonly")
                .val("")
                .css("background", "#ddd")
                .removeClass("wpcf7-validates-as-required")
                .removeAttr("aria-required");

    $(selectClass).on("change", function() {
        if ($(this).val() === "Others (Please specify)") {
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
    $(textClass).each(function() {
        if ($(this).attr("readonly")) {
            $(this).css("background", "#ddd");
        }
    });
}


function StepThreeFunction() {
    function disableFields(selectors, isReadonly = false) {
        $(selectors)
            .prop(isReadonly ? "readonly" : "disabled", true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");
    }

    function enableFields(selectors, isReadonly = false) {
        $(selectors)
            .prop(isReadonly ? "readonly" : "disabled", false)
            .css("background", "")
            .addClass("wpcf7-validates-as-required")
            .attr("aria-required", "true");
    }

    disableFields(".secured, .movable");
    disableFields(".movable_others", true);

    $(".type_loan").on("change", function () {
        if ($(this).val() === "Secured Loan") {
            enableFields(".secured");
        } else {
            disableFields(".secured, .movable");
            disableFields(".movable_others", true);
        }
    });

    $(".secured").on("change", function () {
        if ($(this).val() === "Loan secured by movable property") {
            enableFields(".movable");
        } else {
            disableFields(".movable");
            disableFields(".movable_others", true);
        }
    });

    $(".movable").on("change", function () {
        if ($(this).val() === "Others (Please specify)") {
            enableFields(".movable_others", true);
        } else {
            disableFields(".movable_others", true);
        }
    });
}


// function restrictYearInput(inputClass) {
//     $(inputClass).on("input", function () {
//         // Remove non-digits and limit to 4 characters
//         this.value = this.value.replace(/\D/g, '').slice(0, 4);
//     });

//     $(inputClass).on("keydown", function (e) {
//         // Prevent e, +, -, arrow up/down
//         if (
//             e.key === 'e' ||
//             e.key === 'E' ||
//             e.key === '+' ||
//             e.key === '-' ||
//             e.keyCode === 38 || // up
//             e.keyCode === 40    // down
//         ) {
//             e.preventDefault();
//         }
//     });

//     $(inputClass).on("wheel", function(e) {
//         e.preventDefault(); // Disable scroll input
//     });
// }

// // Show Swal alert if not exactly 4 digits
// function validateYearLength(inputClass) {
//     let isValid = true;

//     $(inputClass).each(function () {
//         const val = $(this).val();
//         if (val.length !== 4) {
//             isValid = false;
//         }
//     });

//     if (!isValid) {
//         Swal.fire({
//             title: "Error",
//             html: "Please fill out all the required fields with 4-digit years.",
//             icon: "error"
//         });
//     }

//     return isValid;
// }

function YearOpened() {
    const currentYear = new Date().getFullYear();

    // Loop through each select with class year_open1, year_open2, year_open3
    $('.year_open1, .year_open2, .year_open3').each(function() {
        const select = $(this);

        // Clear existing options
        select.empty();

        // Add default label
        select.append($('<option>', {
            value: '',
            text: 'Year Opened'
        }));

        // Append options from current year down to 1500
        for (let year = currentYear; year >= 1920; year--) {
            select.append($('<option>', {
                value: year,
                text: year
            }));
        }
    });
}

function GrantedMatureDate() {
    $(".date_granted_loan1, .mature_date_loan1, .date_granted_loan2, .mature_date_loan2, .date_granted_loan3, .mature_date_loan3").datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: "MM yy",
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker("setDate", new Date(year, month, 1));
        },
        beforeShow: function(input, inst) {
            $(inst.dpDiv).addClass('month-year-picker');
        }
    });
}

function OtherProofIncome() {

    $('.other_proof_income_input')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");

    // When any radio button with name="personal_income" changes
    $('input[name="personal_income"]').on('change', function () {
        const selectedValue = $('input[name="personal_income"]:checked').val();

        if (selectedValue === "Proof of other income") {
        $('.other_proof_income_input')
            .prop('readonly', false)
            .css("background", "#fff")
            .addClass("wpcf7-validates-as-required")
            .attr("aria-required", "true");
        } else {
        $('.other_proof_income_input')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");
        }
    });
}

function OtherSpecify1() {

    $('.others_specify1')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");

    // When any radio button with name="personal_income" changes
    $('input[name="business_docs"]').on('change', function () {
        const selectedValue = $('input[name="business_docs"]:checked').val();

        if (selectedValue === "Others (please specify") {
        $('.others_specify1')
            .prop('readonly', false)
            .css("background", "#fff")
            .addClass("wpcf7-validates-as-required")
            .attr("aria-required", "true");
        } else {
        $('.others_specify1')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");
        }
    });
}

function OtherSpecify2() {

    $('.others_specify2')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");

    // When any radio button with name="personal_income" changes
    $('input[name="other_pre_app"]').on('change', function () {
        const selectedValue = $('input[name="other_pre_app"]:checked').val();

        if (selectedValue === "Others (please specify)") {
        $('.others_specify2')
            .prop('readonly', false)
            .css("background", "#fff")
            .addClass("wpcf7-validates-as-required")
            .attr("aria-required", "true");
        } else {
        $('.others_specify2')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");
        }
    });
}

function AddSecurityDocs() {

    $('.add_sec_docs')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");

    // When any radio button with name="personal_income" changes
    $('input[name="security_docs_others"]').on('change', function () {
        const selectedValue = $('input[name="security_docs_others"]:checked').val();

        if (selectedValue === "Additional security documents (please specify)") {
        $('.add_sec_docs')
            .prop('readonly', false)
            .css("background", "#fff")
            .addClass("wpcf7-validates-as-required")
            .attr("aria-required", "true");
        } else {
        $('.add_sec_docs')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");
        }
    });
}

function OthersSpecify3() {

    $('.others_specify3')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");

    // When any radio button with name="personal_income" changes
    $('input[name="post_approval"]').on('change', function () {
        const selectedValue = $('input[name="post_approval"]:checked').val();

        if (selectedValue === "Others (please specify)") {
        $('.others_specify3')
            .prop('readonly', false)
            .css("background", "#fff")
            .addClass("wpcf7-validates-as-required")
            .attr("aria-required", "true");
        } else {
        $('.others_specify3')
            .prop('readonly', true)
            .css("background", "#ddd")
            .removeClass("wpcf7-validates-as-required")
            .removeAttr("aria-required")
            .val("");
        }
    });
}

$(document).ready(function () {
    const selectors = `
        section.individual .birthdate, 
        section.individual .spouse_birthday, 
        section.individual .business_reg_date1, 
        section.individual .exp_reg_date1,
        section.individual .business_reg_date2, 
        section.individual .exp_reg_date2,
        section.individual .business_reg_date3, 
        section.individual .exp_reg_date3,
        section.individual .business_reg_date4, 
        section.individual .exp_reg_date4
    `;

    jQuery(selectors).datepicker();

    // $(document).on("click", ".next_form", function(){
    //     $(".individual__forms").trigger("next.owl.carousel");
    // });

    // $(document).on("click", ".prev_form", function(){
    //     $(".individual__forms").trigger("prev.owl.carousel");
    // });

    // step three toggle
    toggleReadonly(".frequency", ".others1");
    toggleReadonly(".loan_facility", ".others2");
    toggleReadonly(".loan_purpose", ".others3");

    // step four toggle
    toggleReadonly(".source", ".step4_others");
    toggleReadonly(".acc_type1", ".step4_others1");
    toggleReadonly(".acc_type2", ".step4_others2");
    toggleReadonly(".acc_type3", ".step4_others3");

    ProceedStepTwo();
    ProceedStepThree();
    ProceedStepFour();
    ProceedStepFive();
    ProceedStepSix();
    ProceedSubmit();


    StepThreeFunction();

    YearOpened();

    $(".year_open1, .year_open2, .year_open3").select2();

    GrantedMatureDate();

    jQuery(".wpcf7-select").each(function () {
        if (jQuery(this).hasClass("select2-hidden-accessible")) {
          jQuery(this).select2("destroy");
        }
    });

    var today = new Date().toISOString().split('T')[0];
    $('.esigndate1').val(today);
    $('.esigndate2').val(today);

    // other proof income step 6
    OtherProofIncome();
    OtherSpecify1();
    OtherSpecify2();
    AddSecurityDocs();
    OthersSpecify3();

    // restrictYearInput(".year_open1, .year_open2, .year_open3");
});



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
            } else if (input.type === "date") {
                input.value = new Date().toISOString().split("T")[0]; // today
            } else if (input.type === "number") {
                input.value = 42;
            }
        });

        // Autofill radio buttons (pick first option in each group)
        const radioGroups = new Set();
        document.querySelectorAll('form input[type="radio"]').forEach(function (radio) {
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