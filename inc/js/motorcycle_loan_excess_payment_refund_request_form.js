// function printData() {
//     var modalContent = document.querySelector("#exampleModal .modal-content");

//     if (!modalContent) {
//         console.error("Modal content not found!");
//         return;
//     }

//     // Clone the modal content
//     var clonedContent = modalContent.cloneNode(true);

//     // Ensure input values are retained
//     var originalInputs = modalContent.querySelectorAll("input, textarea, select");
//     var clonedInputs = clonedContent.querySelectorAll("input, textarea, select");

//     originalInputs.forEach((input, index) => {
//         if (input.type === "checkbox" || input.type === "radio") {
//             clonedInputs[index].checked = input.checked; // Copy checked state
//         } else {
//             clonedInputs[index].value = input.value; // Copy text values
//         }
//     });

//     // Open a new print window
//     var printWindow = window.open("https://bankofmakati.innovnational.com/myextras/motorcycle-request-form/original-cr/", "");

//     // Write the content to the new window, ensuring styles are applied
//     printWindow.document.write(`
//         <html>
//         <head>
//             <title>Request for release of Original Certificate of Registration (CR)</title>
//             <link rel="stylesheet" href="https://bankofmakati.innovnational.com/wp-content/themes/Bank%20of%20Makati/inc/css/bootstrap.min.css">
//             <link rel="stylesheet" href="https://bankofmakati.innovnational.com/wp-content/themes/Bank%20of%20Makati/inc/css/global.css">

//             <style>
//                 .modal-footer {
//                     display: none;
//                 }

//                 .modal-content .modal-header {
//                     border: none;
//                     margin-bottom: 50px;
//                     padding: 0;
//                 }

//                 .modal-content div#modalContent {
//                     display: flex;
//                     flex-direction: column;
//                     gap: 50px 0;
//                     padding: 0;
//                 }

//                 .modal-content label {
//                     color: var(--Black, #4A4A4A);
//                     font-family: 'Montserrat', sans-serif;
//                     font-size: 14px;
//                     font-style: normal;
//                     font-weight: 400;
//                     line-height: 25px;
//                     margin-bottom: 10px;
//                 }

//                 .modal-content .step .row {
//                     display: flex;
//                     gap: 20px 0;
//                 }

//                 .modal-content .form-control:focus {
//                     box-shadow: none;
//                     border: 1px solid #C1C1C1;
//                     outline: none;
//                 }

//                 .modal-content .form-control {
//                     padding: 10px 15px;
//                     border-radius: 1px;
//                     border: 1px solid #C1C1C1;
//                     color: #ADADAD;
//                     font-family: 'Montserrat', sans-serif;
//                     font-size: 14px;
//                     font-style: normal;
//                     font-weight: 400;
//                     line-height: 25px;
//                     /* 178.571% */
//                 }

//                 .modal-content .form-control::placeholder {
//                     color: #ADADAD;
//                     font-family: 'Montserrat', sans-serif;
//                     font-size: 14px;
//                     font-style: normal;
//                     font-weight: 400;
//                     line-height: 25px;
//                     /* 178.571% */
//                 }

//                 .modal-content .modal-content {
//                     padding: 40px;
//                     border-radius: 5px;
//                     border: 1px solid var(--Gray, #F2F2F2);
//                     background: #FFF;
//                     box-shadow: 0px 12px 18.3px 0px rgba(0, 0, 0, 0.05);
//                 }

//                 .modal-content .modal.fade .modal-dialog {
//                     max-width: 1576px;
//                     width: 100%;
//                 }
//             </style>
//         </head>
//         <body>
//             <div class="modal-content">${clonedContent.innerHTML}</div>
//             <script>
//                 // Ensure input values are copied correctly before printing
//                 document.addEventListener("DOMContentLoaded", function () {
//                     var originalInputs = window.opener.document.querySelector("#exampleModal .modal-content").querySelectorAll("input, textarea, select");
//                     var clonedInputs = document.querySelector(".modal-content").querySelectorAll("input, textarea, select");

//                     originalInputs.forEach((input, index) => {
//                         if (input.type === "checkbox" || input.type === "radio") {
//                             clonedInputs[index].checked = input.checked;
//                         } else {
//                             clonedInputs[index].value = input.value;
//                         }
//                     });

//                     // Print after ensuring all values are copied
//                     window.print();
//                     setTimeout(() => window.close(), 500);
//                 });
//             </script>
//         </body>
//         </html>
//     `);

//     printWindow.document.close();
//     $("[type='submit']").click()
// }

// $(document).ready(function () {

//     $("[type='submit']").on("click", function (event) {
//         event.preventDefault();

//         let formData = {
//             // Step 2: Borrower’s Information and Contact Details
//             fullName: $("input[name='full_name']").val(),
//             primaryMobileNumber: $("input[name='mobile_number']").val(),
//             secondMobileNumber: $("input[name='second_mobile_number']").val(),
//             emailAddress: $("input[name='email_address']").val(),
//             validId: $("input[name='valid_id']")[0]?.files[0],

//             // Step 3: Account Information
//             accountNumber: $("input[name='account_number']").val(),
//             maturityDate: $("input[name='maturity_date']").val(),
//             loanTerm: $("select[name='loan_term']").val(),
//             excessPayment: $("input[name='excess_payment']").val(),
//             refundAmount: $("select[name='refund_amount']").val(),

//             // Step 4: Mode of Receipt
//             modeOfReceipt: $("select[name='mode_of_receipt']").val(),

//             // Step 5: Bank Information
//             refundMethod: $("select[name='bank']").val(),
//             bankBranch: $("input[name='bank_branch']").val(),
//             bankAccountNumber: $("input[name='bank_account_number']").val(),
//             accountType: $("select[name='account_type']").val(),

//             // Consent Agreement
//             consentAccepted: $("input[name='consent-accept']").is(":checked"),
//             detailsConfirmed: $("input[name='acceptance-201']").is(":checked"),
//         };

//         console.log(formData); // Log form data for debugging

//         // Map form data to modal fields
//         $("#fullName").val(formData.fullName);
//         $("#primaryMobileNumber").val(formData.primaryMobileNumber);
//         $("#secondMobileNumber").val(formData.secondMobileNumber);
//         $("#emailAddress").val(formData.emailAddress);
//         $("input[name='valid_id']").on("change", function () {
//             let fileName = $(this)[0].files[0]?.name || "No file selected";
//             $("#validIdDisplay").val(validId);
//         });

//         $("#consent").val(formData.consent);
//         $("#full_name").val(formData.fullName);
//         $("#mobile_number").val(formData.primaryMobileNumber);
//         $("#second_mobile_number").val(formData.secondMobileNumber);
//         $("#email_address").val(formData.emailAddress);
//         $("#valid_id").val(formData.validId);

//         $("#account_number").val(formData.accountNumber);
//         $("#maturity_date").val(formData.maturityDate);
//         $("#loan_term").val(formData.loanTerm);
//         $("#excess_payment").val(formData.excessPayment);
//         $("#refund_amount").val(formData.refundAmount);

//         $("#mode_of_receipt").val(formData.modeOfReceipt);

//         $("#remarks").val(formData.remarks);
//         $("#pickupLocation").val(formData.pickupLocation);

//         // Handle file selection display
//         $("input[name='valid_id']").on("change", function () {
//             let fileName = $(this)[0].files[0]?.name || "No file selected";
//             $("#valid_id").val(fileName);
//         });

//         // Show the modal
//         let bootstrapModal = new bootstrap.Modal($("#exampleModal")[0]);
//         bootstrapModal.show();
//     });

//     $(".next_step,.group_button input[type='submit']").click(function (event) {
//         event.preventDefault(); // Prevent default form submission
//         let currentStep = $(this).closest(".owl-item").find("div").attr("class");
//         let errors = []; // Array to store error messages
//         let hasError = false; // Flag to track errors

//         // Remove previous error styles
//         $("input, select").css("border-color", "");

//         // Step 1: Data Privacy Agreement
//         if (currentStep.includes("form_step1")) {
//             if (!$("input[name='consent-accept']").is(":checked")) {
//                 errors.push("You must agree to the Data Privacy Statement.");
//                 $("input[name='consent-accept']").css("border", "1px solid red");
//                 hasError = true;
//             }
//         }

//         // Step 2: Loan Borrower Information
//         if (currentStep.includes("form_step2")) {
//             let fullName = $("input[name='full_name']");
//             let primaryNumber = $("input[name='mobile_number']");
//             let secondaryNumber = $("input[name='second_mobile_number']");
//             let email = $("input[name='email_address']");
//             let validID = $("input[name='valid_id']");

//             let mobilePattern = /^[0-9]{10,11}$/;
//             let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//             // Full Name validation
//             if (fullName.val().trim() === "" || /[^a-zA-Z\s]/.test(fullName.val())) {
//                 errors.push("Full Name is required and should not contain numbers or special characters.");
//                 fullName.css("border-color", "red");
//                 hasError = true;
//             }

//             // Primary Mobile Number validation
//             if (!mobilePattern.test(primaryNumber.val())) {
//                 errors.push("Please enter a valid Primary Mobile Number (10-11 digits).");
//                 primaryNumber.css("border-color", "red");
//                 hasError = true;
//             }

//             // Secondary Contact Number validation (optional but should be valid if filled)
//             if (secondaryNumber.val().trim() !== "" && !mobilePattern.test(secondaryNumber.val())) {
//                 errors.push("Please enter a valid Secondary Contact Number (10-11 digits) or leave it blank.");
//                 secondaryNumber.css("border-color", "red");
//                 hasError = true;
//             }

//             // Email validation
//             if (email.val().trim() === "" || !emailPattern.test(email.val())) {
//                 errors.push("Please enter a valid Email Address.");
//                 email.css("border-color", "red");
//                 hasError = true;
//             }

//             // Valid ID file validation
//             if (validID.val().trim() === "") {
//                 errors.push("Please upload a valid ID.");
//                 validID.css("border-color", "red");
//                 hasError = true;
//             }
//         }

//         if (currentStep.includes("form_step3")) {
//             let accountNumber = $("input[name='account_number']");
//             let maturityDate = $("input[name='maturity_date']");
//             let loanTerm = $("select[name='loan_term']");
//             let excessPayment = $("input[name='excess_payment']");
//             let refundAmount = $("select[name='refund_amount']");

//             let accountPattern = /^\d{10}$/; // Ensures exactly 10 digits

//             // Account Number validation
//             if (!accountPattern.test(accountNumber.val())) {
//                 errors.push("Account Number must be exactly 10 digits.");
//                 accountNumber.css("border-color", "red");
//                 hasError = true;
//             }

//             // Maturity Date validation
//             if (maturityDate.val().trim() === "") {
//                 errors.push("Maturity Date is required.");
//                 maturityDate.css("border-color", "red");
//                 hasError = true;
//             }

//             // Loan Term validation
//             if (loanTerm.val().trim() === "") {
//                 errors.push("Please select a Loan Term.");
//                 loanTerm.css("border-color", "red");
//                 hasError = true;
//             }

//             // Excess Payment validation
//             if (excessPayment.val().trim() === "" || isNaN(excessPayment.val()) || parseFloat(excessPayment.val()) <= 0) {
//                 errors.push("Please enter a valid Excess Payment amount.");
//                 excessPayment.css("border-color", "red");
//                 hasError = true;
//             }

//             // Refund Amount validation
//             if (refundAmount.val().trim() === "") {
//                 errors.push("Please select a Requested Refund Amount.");
//                 refundAmount.css("border-color", "red");
//                 hasError = true;
//             }
//         }

//         // Step 4: Mode of Receipt Validation
//         if (currentStep.includes("form_step4")) {
//             let modeOfReceipt = $("select[name='mode_of_receipt']");

//             // Ensure a valid mode of receipt is selected
//             if (modeOfReceipt.val().trim() === "" || modeOfReceipt.val().includes("Please select")) {
//                 errors.push("Please select a valid mode of receipt.");
//                 modeOfReceipt.css("border-color", "red");
//                 hasError = true;
//             }
//         }

//         // Step 5: Mode of Refund Receipt Validation
//         if (currentStep.includes("form_step5")) {
//             let refundMethod = $("select[name='bank']");
//             let bankBranch = $("input[name='bank_branch']");
//             let bankAccountNumber = $("input[name='bank_account_number']");
//             let accountType = $("select[name='account_type']");
//             let confirmationCheckbox = $("input[name='acceptance-201']");

//             // Validate Refund Method selection
//             if (!refundMethod.val() || refundMethod.val().includes("Refund Method (Required)")) {
//                 errors.push("Please select a valid refund method.");
//                 refundMethod.css("border-color", "red");
//                 hasError = true;
//             }

//             // Validate Bank Branch input
//             if (!bankBranch.val().trim()) {
//                 errors.push("Please enter a valid bank branch.");
//                 bankBranch.css("border-color", "red");
//                 hasError = true;
//             }

//             // Validate Bank Account Number input
//             if (!bankAccountNumber.val().trim()) {
//                 errors.push("Please enter a valid bank account number.");
//                 bankAccountNumber.css("border-color", "red");
//                 hasError = true;
//             }

//             // Validate Account Type selection
//             if (!accountType.val() || accountType.val().includes("Account Type (Required)")) {
//                 errors.push("Please select a valid account type.");
//                 accountType.css("border-color", "red");
//                 hasError = true;
//             }

//             // Ensure confirmation checkbox is checked
//             if (!confirmationCheckbox.is(":checked")) {
//                 errors.push("You must confirm that the details are correct.");
//                 confirmationCheckbox.parent().css("border", "1px solid red");
//                 hasError = true;
//             }
//         }

//         if (hasError) {
//             Swal.fire({
//                 title: "Error",
//                 html: errors.join("<br>"),
//                 icon: "error"
//             });
//         } else {
//             console.log("triggering next step");
//             $('.form').trigger('next.owl.carousel');
//         }
//     });

//     $("section.request_for_refund .form_step2 span.orange_text").click(function(){

//     })
// });

// Helpers
function isAccountNumberValid() {
    return $('.acc_number_ten_digit').val().replace(/\D/g, '').length === 10;
}

function showAccountNumberError() {
    var $input = $('.acc_number_ten_digit');
    $input.next('.wpcf7-not-valid-tip').remove();
    $input.after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Account number should be 10 digits.</span>');
}

function removeAccountNumberError() {
    $('.acc_number_ten_digit').next('.wpcf7-not-valid-tip').remove();
}

$(document).ready(function () {
    // Limit input to 10 digits
    $('.acc_number_ten_digit')
        .on('input', function () {
            var v = $(this).val().replace(/\D/g, '');
            if (v.length > 10) v = v.slice(0, 10);
            $(this).val(v);

            // If it becomes valid after typing, remove error
            if (isAccountNumberValid()) {
                removeAccountNumberError();
            }
        })
        .on('keydown', function (e) {
            if (
                e.key === '+' || e.key === '-' || e.key === 'e' || e.key === '.' ||
                e.keyCode === 38 || e.keyCode === 40
            ) {
                e.preventDefault();
            }
        });

    // Intercept NEXT click before CF7MLS runs
    document.addEventListener('click', function (e) {
        const btn = e.target.closest('#cf7mls-next-btn-cf7mls_step-3');
        if (btn && !isAccountNumberValid()) {
            e.preventDefault();
            e.stopImmediatePropagation(); // Block CF7MLS from advancing
            showAccountNumberError();
            $('.acc_number_ten_digit').focus();
        }
    }, true); // capture phase


    var $step5 = $(".step-progress li").eq(4);

    // 🔹 Hide "Request for Issuance Of Check" on page load
    $step5.find('.step-title:contains("Request for Issuance Of Check")').hide();
    $step5.find('.step-title:contains("Credit to GCash")').hide();

    // 🔹 Handle next button click
    $(document).on("click", "#cf7mls-next-btn-cf7mls_step-4", function () {
        var choice = $(".mode_of_receipt").val();

        // Hide both first
        $step5.find('.step-title:contains("Deposit to Account")').hide();
        $step5.find('.step-title:contains("Request for Issuance Of Check")').hide();
        $step5.find('.step-title:contains("Credit to GCash")').hide();

        if (choice === "Deposit to Account (Selected Banks)") {
            $step5.find('.step-title:contains("Deposit to Account")').show();
        } else if (choice === "Issuance of Check") {
            $step5.find('.step-title:contains("Request for Issuance Of Check")').show();
        } else if (choice === "Credit to GCash") {
            $step5.find('.step-title:contains("Credit to GCash")').show();
        } else {
            $step5.find('.step-title:contains("Deposit to Account")').show();
        }
    });



});
