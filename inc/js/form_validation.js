function validateFullName(fullName) {
    // Allow only letters, spaces, apostrophes, and hyphens
    return /^[A-Za-z\s'-]+$/.test(fullName.trim());
}

function validateContactNumber(number) {
    var cleaned = number.replace(/[^\d]/g, '');
    return cleaned.length >= 7;
}

function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.trim());
}

function validateMessage(msg) {
    return msg.trim().length > 0;
}
$('div#wpcf7-f763-o1 input[type="submit"]').click(function (e) {
    var businessGrad = $('div#wpcf7-f763-o1 input[name="Business_Marketing_and_Accounting_Graduates"]').val();
    var firstName = $('div#wpcf7-f763-o1 input[name="first_name"]').val();
    var lastName = $('div#wpcf7-f763-o1 input[name="last_name"]').val();
    var email = $('div#wpcf7-f763-o1 input[name="email_address"]').val();
    var mobile = $('div#wpcf7-f763-o1 input[name="mobile_number"]').val();
    var landline = $('div#wpcf7-f763-o1 input[name="landline_number"]').val();
    var file = $('div#wpcf7-f763-o1 input[name="file-323"]').val();
    var consent = $('div#wpcf7-f763-o1 input[name="consent"]').is(':checked');
    $('.wpcf7-response-output').hide();

    var errors = [];
    if (!businessGrad || businessGrad.trim() === "") {
        errors.push('Please fill out the Business Marketing and Accounting Graduates field.');
    }
    if (!validateFullName(firstName)) {
        errors.push('First Name must not contain numbers or special characters.');
    }
    if (!validateFullName(lastName)) {
        errors.push('Last Name must not contain numbers or special characters.');
    }
    if (!validateEmail(email)) {
        errors.push('Please enter a valid Email Address.');
    }
    if (!validateContactNumber(mobile)) {
        errors.push('Please enter a valid Mobile Number.');
    }
    if (!validateContactNumber(landline)) {
        errors.push('Please enter a valid Landline Number.');
    }
    if (!file) {
        errors.push('Please attach your resume.');
    }
    if (!consent) {
        errors.push('You must consent to the privacy policy.');
    }

    if (errors.length > 0) {
        e.preventDefault();
        $('button.close').click()
        Swal.fire({
            icon: 'error',
            title: 'Form Error',
            html: errors.join('<br>'),
            confirmButtonColor: '#ff6600',
        }).then((result) => {
            if (result.isConfirmed) {
                setTimeout(function () {
                    $('.accordion-item.open button.orange_btn').trigger('click');
                    console.log('clicked');
                }, 1000);
            }
        });
        return false;

    }

    showResponseAlert('div#wpcf7-f763-o1 .wpcf7-response-output');
});