jQuery(function ($) {
    // $('input[type="number"]').on('keydown', function (e) {
    //     if (e.key === 'e' || e.key === 'E' || e.key === '+' || e.key === '-') {
    //         e.preventDefault();
    //     }
    // });

    // $('input[type="number"]').on('paste', function (e) {
    //     const clipboard = (e.originalEvent || e).clipboardData.getData('text');
    //     if (/[eE\+\-]/.test(clipboard)) {
    //         e.preventDefault();
    //     }
    // });

    // $('input:not([type="hidden"]):not([type="submit"]), textarea').on('paste', function (e) {
    //     e.preventDefault();
    // });

    // $('input:not([type="hidden"]):not([type="submit"]), textarea').on('contextmenu', function (e) {
    //     e.preventDefault();
    // });

    // $('input[type="number"]').on('keydown', function (e) {
    //     if (['e', 'E', '+', '-'].includes(e.key)) {
    //         e.preventDefault();
    //     }
    // });
    // --- Validation functions ---
    /* ---------- Utilities ---------- */


    // --- Validation functions ---
    window.validateFullName = function (fullName) {
        // Allow only letters, spaces, apostrophes, and hyphens
        return /^[A-Za-z\s'-]+$/.test(fullName.trim());
    };

    window.validateContactNumber = function (number) {
        // Accept only 11 digits starting with '09'
        var cleaned = number.replace(/[^\d]/g, '');
        return /^09\d{9}$/.test(cleaned);
    };

    window.validateEmail = function (email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.trim());
    };

    window.validateMessage = function (msg) {
        return msg.trim().length > 0;
    };

    window.validateAddress = function (address) {
        // Allow letters, numbers, spaces, commas, periods, apostrophes, hyphens, and hash
        return /^[A-Za-z0-9\s,'\.\-#]+$/.test(address.trim()) && address.trim().length > 3;
    };

    window.validateAgreement = function (selector) {
        // Checks if any radio button inside the given .wpcf7-form-control.wpcf7-radio is checked
        return $(selector).find('input[type="radio"]:checked').length > 0;
    };

    window.validateSelectField = function (value, select2Selector) {
        // If value is empty or only whitespace, invalid
        if (!value || !value.trim()) return false;

        // Find the first option value in the original select element (usually the placeholder)
        let placeholderValue = "";
        if (select2Selector) {
            const $select = $(select2Selector).closest('.select2-container').prev('select');
            if ($select.length) {
                const $firstOption = $select.find('option').first();
                if ($firstOption.length) {
                    placeholderValue = $firstOption.val().trim().toLowerCase();
                }
            }
        }

        const val = value.trim().toLowerCase();
        // If value matches the placeholder value, invalid
        if (placeholderValue && val === placeholderValue) return false;

        return true;
    };

    window.validateDate = function (dateStr) {
        // Format: MM/DD/YYYY
        if (!/^\d{2}\/\d{2}\/\d{4}$/.test(dateStr.trim())) return false;
        var parts = dateStr.split('/');
        var month = parseInt(parts[0], 10);
        var day = parseInt(parts[1], 10);
        var year = parseInt(parts[2], 10);

        // Check valid month, day, year
        if (month < 1 || month > 12) return false;
        if (day < 1 || day > 31) return false;
        if (year < 1000 || year > 9999) return false;

        // Check for valid day in month
        var date = new Date(year, month - 1, day);
        return (
            date.getFullYear() === year &&
            date.getMonth() === month - 1 &&
            date.getDate() === day
        );
    };



    // Show SweetAlert with response text if present
    window.showResponseAlert = function (selector) {
        setTimeout(function () {
            var responseText = $(selector).text().trim();
            if (responseText) {
                Swal.fire({
                    icon: 'info',
                    title: 'Notice',
                    text: responseText,
                    confirmButtonColor: '#ff6600'
                });
            }
        }, 1000);
    };
});
