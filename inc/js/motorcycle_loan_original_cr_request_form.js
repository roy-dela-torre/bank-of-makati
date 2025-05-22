function printData() {
    var modalContent = document.querySelector("#exampleModal .modal-content");

    if (!modalContent) {
        console.error("Modal content not found!");
        return;
    }

    // Clone the modal content
    var clonedContent = modalContent.cloneNode(true);

    // Ensure input values are retained
    var originalInputs = modalContent.querySelectorAll("input, textarea, select");
    var clonedInputs = clonedContent.querySelectorAll("input, textarea, select");

    originalInputs.forEach((input, index) => {
        if (input.type === "checkbox" || input.type === "radio") {
            clonedInputs[index].checked = input.checked; // Copy checked state
        } else {
            clonedInputs[index].value = input.value; // Copy text values
        }
    });

    // Open a new print window
    var printWindow = window.open("https://bankofmakati.innovnational.com/myextras/motorcycle-request-form/original-cr/", "");

    // Write the content to the new window, ensuring styles are applied
    printWindow.document.write(`
        <html>
        <head>
            <title>Request for release of Original Certificate of Registration (CR)</title>
            <link rel="stylesheet" href="https://bankofmakati.innovnational.com/wp-content/themes/Bank%20of%20Makati/inc/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://bankofmakati.innovnational.com/wp-content/themes/Bank%20of%20Makati/inc/css/global.css">
            
            <style>
                .modal-footer {
                    display: none;
                }

                .modal-content .modal-header {
                    border: none;
                    margin-bottom: 50px;
                    padding: 0;
                }

                .modal-content div#modalContent {
                    display: flex;
                    flex-direction: column;
                    gap: 50px 0;
                    padding: 0;
                }

                .modal-content label {
                    color: var(--Black, #4A4A4A);
                    font-family: 'Montserrat', sans-serif;
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 25px;
                    margin-bottom: 10px;
                }

                .modal-content .step .row {
                    display: flex;
                    gap: 20px 0;
                }

                .modal-content .form-control:focus {
                    box-shadow: none;
                    border: 1px solid #C1C1C1;
                    outline: none;
                }

                .modal-content .form-control {
                    padding: 10px 15px;
                    border-radius: 1px;
                    border: 1px solid #C1C1C1;
                    color: #ADADAD;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 25px;
                    /* 178.571% */
                }

                .modal-content .form-control::placeholder {
                    color: #ADADAD;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 14px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 25px;
                    /* 178.571% */
                }

                .modal-content .modal-content {
                    padding: 40px;
                    border-radius: 5px;
                    border: 1px solid var(--Gray, #F2F2F2);
                    background: #FFF;
                    box-shadow: 0px 12px 18.3px 0px rgba(0, 0, 0, 0.05);
                }

                .modal-content .modal.fade .modal-dialog {
                    max-width: 1576px;
                    width: 100%;
                }
            </style>
        </head>
        <body>
            <div class="modal-content">${clonedContent.innerHTML}</div>
            <script>
                // Ensure input values are copied correctly before printing
                document.addEventListener("DOMContentLoaded", function () {
                    var originalInputs = window.opener.document.querySelector("#exampleModal .modal-content").querySelectorAll("input, textarea, select");
                    var clonedInputs = document.querySelector(".modal-content").querySelectorAll("input, textarea, select");

                    originalInputs.forEach((input, index) => {
                        if (input.type === "checkbox" || input.type === "radio") {
                            clonedInputs[index].checked = input.checked;
                        } else {
                            clonedInputs[index].value = input.value;
                        }
                    });

                    // Print after ensuring all values are copied
                    window.print();
                    setTimeout(() => window.close(), 500);
                });
            </script>
        </body>
        </html>
    `);

    printWindow.document.close();
    $("[type='submit']").click()
}



$(document).ready(function () {
    $("[type='submit']").on("click", function (event) {
        event.preventDefault(); // Prevent form submission

        let formData = {
            loanAccountNumber: $("input[name='loan_account_number']").val(),
            firstName: $("input[name='first_name']").val(),
            surname: $("input[name='surname']").val(),
            primaryprimaryNumber: $("input[name='primary_mobile']").val(),
            otherContactNumber: $("input[name='other_contact']").val(),
            emailAddress: $("input[name='email_address']").val(),
            receiptDate: $("input#datepicker").val(),
            receiptNumber: $("input[name='receipt_number']").val(),
            amount: $("input[name='amount']").val(),
            pickupLocation: $("select[name='pickup_location']").val(),
            area: $("select[name='bmi_area']").val(),
            bmiBranch: $("select[name='bmi_branches']").val(),
            remarks: $("input[name='remarks']").val(),
            copyOfCertificate: $("select[name='remarks_options']").val()
        };

        console.log("Form Data:", formData); // Debugging: Log all form data

        // Fill modal fields
        $("#loanAccountNumber").val(formData.loanAccountNumber);
        $("#firstName").val(formData.firstName);
        $("#surname").val(formData.surname);
        $("#primaryprimaryNumber").val(formData.primaryprimaryNumber);
        $("#otherContactNumber").val(formData.otherContactNumber);
        $("#emailAddress").val(formData.emailAddress);
        if (formData.receiptDate) {
            console.log("Receipt Date:", formData.receiptDate); // Debugging
            $("#receiptDate").val(formData.receiptDate); // For Native Date Input
        } else {
            console.warn("Receipt date is empty or undefined.");
        }
        $("#receiptNumber").val(formData.receiptNumber);
        $("#amount").val(formData.amount);
        $("#pickupLocation").val(formData.pickupLocation);
        $("#area").val(formData.area);
        $("#bmiBranch").val(formData.bmiBranch);
        $("#remarks").val(formData.remarks);
        $("#copyOfCertificate").val(formData.copyOfCertificate);

        // Show modal
        let bootstrapModal = new bootstrap.Modal($("#exampleModal")[0]);

        if (!hasError && $("span#select2-remarks_options-ms-container").text().trim() === "true") {
            Swal.fire({
            title: "Success",
            text: "All validations passed!",
            icon: "success"
            }).then(() => {
            bootstrapModal.show();
            });
        }
    });

    $("#downlaod_pdf").click(function () {
        $("form.wpcf7-form.init").submit();
    })

    let $input = $("span.wpcf7-form-control-wrap input[name='loan_account_number']");

    // Enforce type as text (since pattern doesn't work on number fields)
    $input.attr("type", "text");

    // Apply pattern to restrict exactly 10 digits
    $input.attr("pattern", "^\\d{10}$");

    // Optional: Enforce max length
    $input.attr("maxlength", "10");

    // Prevent non-numeric input
    $input.on("input", function () {
        this.value = this.value.replace(/\D/g, "").substring(0, 10);
    });

    $('#exampleModal').on('hidden.bs.modal', function () {
        $("form.wpcf7-form.init").submit();
    });

    // $(".form_step4 .next_step").click(function (e) {
    //     e.preventDefault();
    //     $('select[name="bmi_area"]').prepend('<option value="" disabled selected>Area (Required)</option>');
    // });


    $(".next_step,.group_button input[type='submit']").click(function (event) {
        event.preventDefault(); // Prevent default form submission
        let currentStep = $(this).closest(".owl-item").find("div").attr("class");
        let errors = []; // Array to store error messages
        let hasError = false; // Flag to track errors

        // Remove previous error styles
        $("input, select").css("border-color", "");

        // Step 1: Data Privacy Agreement
        if (currentStep.includes("form_step1")) {
            if (!$("input[name='checkbox-508[]']").is(":checked")) {
                errors.push("You must agree to the Data Privacy Statement.");
                $("input[name='checkbox-508[]']").css("border", "1px solid red");
                hasError = true;
            }
        }

        // Step 2: Loan Borrower Information
        if (currentStep.includes("form_step2")) {
            let loanAccountNumber = $("input[name='loan_account_number']");
            let firstName = $("input[name='first_name']");
            let middleName = $("input[name='middle_name']");
            let surname = $("input[name='surname']");

            if (!loanAccountNumber.val().match(/^\d{10}$/)) {
                errors.push("Loan Account Number must be exactly 10 digits.");
                loanAccountNumber.css("border-color", "red");
                hasError = true;
            }
            if (firstName.val().trim() === "" || /[^a-zA-Z\s]/.test(firstName.val())) {
                errors.push("First Name is required and should not contain numbers or special characters.");
                firstName.css("border-color", "red");
                hasError = true;
            }
            if (middleName.val().trim() === "" || /[^a-zA-Z\s]/.test(middleName.val())) {
                errors.push("Middle Name is required and should not contain numbers or special characters.");
                middleName.css("border-color", "red");
                hasError = true;
            }
            if (surname.val().trim() === "" || /[^a-zA-Z\s]/.test(surname.val())) {
                errors.push("Surname is required and should not contain numbers or special characters.");
                surname.css("border-color", "red");
                hasError = true;
            }
        }

        // Step 3: Contact Information
        if (currentStep.includes("form_step3")) {
            let primaryNumber = $("input[name='primary_mobile']");
            let secondaryNumber = $("input[name='other_contact']");
            let email = $("input[name='email_address']");
            let mobilePattern = /^[0-9]{10,11}$/;
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let secondaryNumberPattern = /^[0-9]{10,11}$/;

            if (!mobilePattern.test(primaryNumber.val())) {
                errors.push("Please enter a valid mobile number (10-11 digits).");
                primaryNumber.css("border-color", "red");
                hasError = true;
            }
            if (!secondaryNumberPattern.test(secondaryNumber.val())) {
                errors.push("Please enter a valid mobile number (10-11 digits).");
                secondaryNumber.css("border-color", "red");
                hasError = true;
            }
            if (email.val().trim() !== "" && !emailPattern.test(email.val())) {
                errors.push("Invalid email format.");
                email.css("border-color", "red");
                hasError = true;
            }
        }

        // Step 4: Last Payment Details
        if (currentStep.includes("form_step4")) {
            let receiptDate = $("input[name='text-796']");
            let receiptNumber = $("input[name='receipt_number']");
            let amount = $("input[name='amount']");

            if (receiptDate.val().trim() === "") {
                errors.push("Receipt Date is required.");
                receiptDate.css("border-color", "red");
                hasError = true;
            }
            if (receiptNumber.val().trim() === "") {
                errors.push("Receipt Number is required.");
                receiptNumber.css("border-color", "red");
                hasError = true;
            }
            if (amount.val().trim() === "" || isNaN(amount.val()) || parseFloat(amount.val()) <= 0) {
                errors.push("Amount must be a valid number greater than zero.");
                amount.css("border-color", "red");
                hasError = true;
            }
        }

        // Step 5: Pickup Location Selection
        if (currentStep.includes("form_step5")) {
            let pickupLocation = $("select[name='pickup_location']");
            let bmiBranch = $("data-class='wpcf7cf_group'>span>select");
            let bmiArea = $("select[name='bmi_area']");
            let dealerBranch = $("select[name='motortrade_dealers']");
            let province = $("select[name='province']"); // Target province field

            if (pickupLocation.val() === "Pick up location (Required)") {
                errors.push("Please select a pickup location.");
                pickupLocation.next(".select2-container").css("border", "1px solid red");
                hasError = true;
            } else {
                pickupLocation.next(".select2-container").css("border", "");
            }

            if (pickupLocation.val() === "Bank of Makati Branch") {
                if (!bmiArea.val() || bmiArea.val().trim() === "") {
                    errors.push("Please select a valid BMI Area.");
                    bmiArea.next(".select2-container").css("border", "1px solid red");
                    hasError = true;
                } else {
                    bmiArea.next(".select2-container").css("border", "");
                }

                if (!bmiBranch.val() || bmiBranch.val().trim() === "") {
                    errors.push("Please select a valid BMI Branch.");
                    bmiBranch.next(".select2-container").css("border", "1px solid red");
                    hasError = true;
                } else {
                    bmiBranch.next(".select2-container").css("border", "");
                }
            }

            if (pickupLocation.val() === "Motortrade Dealer") {
                if (!province.val() || province.val().trim() === "") {
                    errors.push("Please select a valid Province.");
                    province.next(".select2-container").css("border", "1px solid red");
                    hasError = true;
                } else {
                    province.next(".select2-container").css("border", "");
                }

                if (!dealerBranch.val() || dealerBranch.val().trim() === "") {
                    errors.push("Please select a valid Motortrade Dealer.");
                    dealerBranch.next(".select2-container").css("border", "1px solid red");
                    hasError = true;
                } else {
                    dealerBranch.next(".select2-container").css("border", "");
                }
            }
        }

        // Step 6: Remarks Validation
        if (currentStep.includes("form_step6")) {
            let remarks = $("input[name='remarks']");
            let remarksOptions = $("select[name='remarks_options']");

            // Validate remarks input field
            if (remarks.val().trim() === "") {
                errors.push("Please enter remarks.");
                remarks.css("border-color", "red");
                hasError = true;
            } else {
                remarks.css("border-color", ""); // Reset border if valid
            }

            // Validate Select2 dropdown for remarks_options
            if (!remarksOptions.val() || remarksOptions.val().trim() === "") {
                errors.push("Please select an option for 'Do you want a copy of Certificate of Full Payment?'.");

                // Apply red border to the Select2 container
                let select2Container = remarksOptions.next(".select2-container");
                select2Container.css("border", "1px solid red");

                hasError = true;
            } else {
                // Reset border if valid
                remarksOptions.next(".select2-container").css("border", "");
            }
        }

        // Remove red border when user selects an option
        $("select[name='remarks_options']").on("change", function () {
            $(this).next(".select2-container").css("border", "");
        });



        // Show error messages in Swal alert
        if (hasError) {
            Swal.fire({
                title: "Error",
                html: errors.join("<br>"), // Display all errors
                icon: "error"
            });
        } else {
            // Move to the next step if no errors or submit the form if it's the last step
            console.log("triggering next step")
            $('.form').trigger('next.owl.carousel');
        }
    });


});