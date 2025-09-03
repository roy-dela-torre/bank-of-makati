// function handleOthersField(selectSelector, inputSelector, matchText = 'Others (Please specify)') {
//   $(document).on('change', selectSelector, function () {
//     const $select = $(this);
//     const $input = $(this).closest('form').find(inputSelector);

//     if ($select.val() === matchText) {
//       $input.prop('readonly', false)
//       .val('')
//         .addClass('wpcf7-validates-as-required')
//         .attr('aria-required', 'true');
//     } else {
//       $input
//         .prop('readonly', true)
//         .val('')
//         .removeClass('wpcf7-validates-as-required')
//         .removeAttr('aria-required');
//     }
//   });
// }

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

    disableFields(".loan_secured, .loan_movable");
    disableFields(".loan_movable_others", true);

    $(".loan_type").on("change", function () {
        if ($(this).val() === "Secured Loan") {
            enableFields(".loan_secured");
        } else {
            disableFields(".loan_secured, .loan_movable");
            disableFields(".loan_movable_others", true);
        }
    });

    $(".loan_secured").on("change", function () {
        if ($(this).val() === "Loan secured by movable property") {
            enableFields(".loan_movable");
        } else {
            disableFields(".loan_movable");
            disableFields(".loan_movable_others", true);
        }
    });

    $(".loan_movable").on("change", function () {
        if ($(this).val() === "Others (Please specify)") {
            enableFields(".loan_movable_others", true);
        } else {
            disableFields(".loan_movable_others", true);
        }
    });
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


function toggleReadonlyDeposit(selectClass, textClass) {

    $(textClass)
                .attr("readonly", "readonly")
                .val("")
                .css("background", "#ddd")
                .removeClass("wpcf7-validates-as-required")
                .removeAttr("aria-required");

    $(selectClass).on("change", function() {
        if ($(this).val() === "Widowed" || $(this).val() === "Legally separated") {
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

function civilStatus(selectClass, textClass) {
    // Initial setup: make the text field read-only and disable pointer events
    $(textClass)
        .attr("readonly", "readonly")
        .val("")
        .css({
            "background": "#ddd",
            "pointer-events": "none"
        })
        .removeClass("wpcf7-validates-as-required")
        .removeAttr("aria-required");

    $(selectClass).on("change", function () {
        if ($(this).val() === "Married") {
            $(textClass)
                .removeAttr("readonly")
                .css({
                    "background": "#fff",
                    "pointer-events": "auto"
                })
                .addClass("wpcf7-validates-as-required")
                .attr("aria-required", "true");
        } else {
            $(textClass)
                .attr("readonly", "readonly")
                .val("")
                .css({
                    "background": "#ddd",
                    "pointer-events": "none"
                })
                .removeClass("wpcf7-validates-as-required")
                .removeAttr("aria-required");
        }
    });

    // Initialize background and pointer-events on page load
    $(textClass).each(function () {
        if ($(this).attr("readonly")) {
            $(this).css({
                "background": "#ddd",
                "pointer-events": "none"
            });
        }
    });
}


function GrantedMatureDate() {
    const selectors = [
        ".finance_date_granted_loan1",
        ".finance_mature_date_loan1",
        ".finance_date_granted_loan2",
        ".finance_mature_date_loan2",
        ".finance_date_granted_loan3",
        ".finance_mature_date_loan3",
        ".existing_date_granted_loan1",
        ".existing_mature_date_loan1",
        ".existing_date_granted_loan2",
        ".existing_mature_date_loan2",
        ".existing_date_granted_loan3",
        ".existing_mature_date_loan3"
    ].join(", ");

    $(selectors).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: "MM yy",
        onClose: function(dateText, inst) {
            const $dpDiv = $("#ui-datepicker-div");
            const month = $dpDiv.find(".ui-datepicker-month :selected").val();
            const year = $dpDiv.find(".ui-datepicker-year :selected").val();
            if (month !== undefined && year !== undefined) {
                $(this).datepicker("setDate", new Date(year, month, 1));
            }
        },
        beforeShow: function(input, inst) {
            $(inst.dpDiv).addClass('month-year-picker');
        }
    });
}

function setTodayEsignDate() {
    var today = new Date().toISOString().split('T')[0];
    $('.esigndate1').val(today);
    $('.esigndate2').val(today);
}

// function YearOpen() {
//     $(".finance_year_open1, .finance_year_open2, .finance_year_open3").datepicker({
//         changeYear: true,
//         showButtonPanel: true,
//         dateFormat: 'yy',
//         onClose: function(dateText, inst) {
//             var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
//             $(this).datepicker('setDate', new Date(year, 0, 1)); // Set date to Jan 1 of selected year
//         },
//         beforeShow: function(input, inst) {
//             $(inst.dpDiv).addClass('year-only-picker');

//             // Hide month selector after a short delay to allow DOM to render
//             setTimeout(function() {
//                 $("#ui-datepicker-div .ui-datepicker-month").hide();
//             }, 1);
//         }
//     });
// }

function YearOpen() {
    const currentYear = new Date().getFullYear();

    $(".finance_year_open1, .finance_year_open2, .finance_year_open3, .existing_year_open1, .existing_year_open2, .existing_year_open3").datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        yearRange: 'c-100:c', // Show up to 100 years back from current
        maxDate: new Date(currentYear, 11, 31), // Prevent selecting future years
        onClose: function(dateText, inst) {
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 0, 1));
        },
        beforeShow: function(input, inst) {
            $(inst.dpDiv).addClass('year-only-picker');

            // Hide month dropdown
            setTimeout(function() {
                $("#ui-datepicker-div .ui-datepicker-month").hide();
            }, 1);
        }
    });
}

function StepSixOthers() {
	$('.personal_income input[type="checkbox"]').on('change', function() {
        var otherIncomeCheckbox = $('.personal_income input[type="checkbox"][value="Proof of other income"]');
        var inputField = $('.other_proof_income_input');

        if (otherIncomeCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");;
        }
    });
}


function StepSixOthers1() {
	$('.business_docs input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.business_docs input[type="checkbox"][value="Others (please specify)"]');
        var inputField = $('.others_specify1');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");;
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");;
        }
    });
} 

function StepSixOthers2() {
	$('.other_pre_app input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.other_pre_app input[type="checkbox"][value="Others (please specify)"]');
        var inputField = $('.others_specify2');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
} 

function StepSixOthers3() {
	$('.security_docs_others input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.security_docs_others input[type="checkbox"][value="Additional security documents (please specify)"]');
        var inputField = $('.add_sec_docs');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
} 

function StepSixOthers4() {
	$('.post_approval input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.post_approval input[type="checkbox"][value="Others (please specify)"]');
        var inputField = $('.others_specify3');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
} 

// corporation
function StepSixOthers5() {
	$('.income_docs input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.income_docs input[type="checkbox"][value="Business background/Company profile Proof of other income, if any:"]');
        var inputField = $('.proof_income_docs');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
} 

function StepSixOthers6() {
	$('.support_docs input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.support_docs input[type="checkbox"][value="Others (please specify):"]');
        var inputField = $('.support_docs_others');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
} 

function StepSixOthers7() {
	$('.others_docs input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.others_docs input[type="checkbox"][value="Additional security documents (please specify):"]');
        var inputField = $('.add_security_docs');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
} 

function StepSixOthers8() {
	$('.post_approval input[type="checkbox"]').on('change', function() {
        var othersCheckbox = $('.post_approval input[type="checkbox"][value="Others (please specify):"]');
        var inputField = $('.post_approval_others');

        if (othersCheckbox.is(':checked')) {
            inputField.prop('readonly', false).css('background', '').addClass("wpcf7-validates-as-required").attr("aria-required", "true");
        } else {
            inputField.prop('readonly', true).val('').css('background', '#ddd').removeClass("wpcf7-validates-as-required").removeAttr("aria-required");
        }
    });
}

// Example usage:
$(document).ready(function () {


//     handleOthersField('.loan_frequency', '.loan_others1');
//     handleOthersField('.loan_facility', '.loan_others2');
//     handleOthersField('.loan_purpose', '.loan_others3');
  
	// function for step three
	StepThreeFunction();
	
	//readonly toggle
    // individual
	toggleReadonly('.loan_frequency', '.loan_others1');
	toggleReadonly('.loan_facility', '.others2'); 
	toggleReadonly('.loan_purpose', '.loan_others3');
    toggleReadonly('.finance_acc_type1', '.finance_step4_others1');
    toggleReadonly('.finance_acc_type2', '.finance_step4_others2');
    toggleReadonly('.finance_acc_type3', '.finance_step4_others3');


    // corporation
    toggleReadonly('.source', '.source_others');

    toggleReadonly('.acc_type1', '.existing_others1');
    toggleReadonly('.acc_type2', '.existing_others2');
    toggleReadonly('.acc_type3', '.existing_others3');
	
	// YearOpened();
	GrantedMatureDate();

    YearOpen();
    // Add more as needed:
    // handleOthersField('.other_dropdown', '.other_input');
    // 
    StepSixOthers();
	StepSixOthers1(); 
	StepSixOthers2(); 
	StepSixOthers3();
	StepSixOthers4();

    //corporation
    StepSixOthers5();
    StepSixOthers6();
    StepSixOthers7();
    StepSixOthers8();

    
    toggleReadonlyDeposit('.civil_status', '.many_years');

    setTodayEsignDate();

    civilStatus('.borrower_civil_status', '.borrower_name_of_spouse');
    civilStatus('.borrower_civil_status', '.borrower_spouse_birthday');

    toggleReadonly('.finance_source', '.finance_others');
});
