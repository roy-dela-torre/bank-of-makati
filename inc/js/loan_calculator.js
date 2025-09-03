$(document).ready(function () {
    var loanRates = {
        "Enterprise Loan": {
            "months": [6, 12, 18, 24],
            "rate": { "default": (30.00 / 12).toFixed(6) }
        },
        "Microfinance Loan": {
            "months": [3, 6, 9, 12],
            "rate": { "default": (36.00 / 12).toFixed(6) }
        },
        "Powerpayday Loan": {
            "months": [6, 12, 18, 24, 36],
            "rate": {
                6: (17.88 / 12).toFixed(6),
                12: (17.88 / 12).toFixed(6),
                18: (17.88 / 12).toFixed(6),
                24: (17.88 / 12).toFixed(6),
                36: (20.28 / 12).toFixed(6)
            }
        },
        "Auto Loan": {
            "months": [12, 18, 24, 36, 48, 60],
            "rate": {
                12: (7.500 / 12).toFixed(6),
                18: (11.010 / 18).toFixed(6),
                24: (14.870 / 24).toFixed(6),
                36: (22.810 / 36).toFixed(6),
                48: (23.000 / 48).toFixed(6),
                60: (29.000 / 60).toFixed(6)
            }
        },
        "Luxury Bike": {
            "months": [12, 24, 36],
            "rate": {
                12: (9.215 / 12).toFixed(6),
                24: (18.315 / 12).toFixed(6),
                36: (27.150 / 12).toFixed(6)
            }
        }
    };

    $('#loan_type').on('change', function () {
        var selectedLoan = $(this).val();
        var $monthsToPay = $('#months_to_pay');

        $monthsToPay.empty().append('<option value="">Select months to pay</option>');

        if (loanRates[selectedLoan]) {
            $.each(loanRates[selectedLoan].months, function (index, month) {
                $monthsToPay.append('<option value="' + month + '">' + month + ' months</option>');
            });
        }

        $('#rate_per_month').val('');
        $('#monthly_amortization').val('');
    });

    $('#months_to_pay').on('change', function () {
        var selectedLoan = $('#loan_type').val();
        var selectedMonths = $(this).val();
        var rate = loanRates[selectedLoan].rate[selectedMonths] || loanRates[selectedLoan].rate["default"] || "";

        $('#rate_per_month').val(rate ? rate + '%' : '');
    });

    $('#btnCompute').on('click', function () {
        var loanAmount = parseFloat($('#loan_amount').val());
        var selectedLoan = $('#loan_type').val();
        var selectedMonths = parseInt($('#months_to_pay').val());
        var rateText = $('#rate_per_month').val();

        if (!selectedLoan || isNaN(loanAmount) || isNaN(selectedMonths) || !rateText) {
            alert("Please select a loan type, enter a valid loan amount, and select months to pay.");
            return;
        }

        var addOnRate = (parseFloat(rateText.replace('%', '')) / 100);
        var totalPayment = loanAmount + (loanAmount * addOnRate * selectedMonths);
        var monthlyPayment = totalPayment / selectedMonths;

        $('#monthly_amortization').val(monthlyPayment.toFixed(2));
    });

    $('#btnReset').on('click', function () {
        $('#loan_type, #months_to_pay').val('');
        $('#loan_amount, #rate_per_month, #monthly_amortization').val('');
        $('#months_to_pay').empty().append('<option value="">Select months to pay</option>');
    });

    // $("section.loan_calculator #loan_type, section.loan_calculator #months_to_pay").append(`
    // <svg xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19" fill="none">
    // <path d="M4 0H5C5.26522 0 5.51957 0.105357 5.70711 0.292893C5.89464 0.48043 6 0.734784 6 1V2H11V1C11 0.734784 11.1054 0.48043 11.2929 0.292893C11.4804 0.105357 11.7348 0 12 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1V2C14.7956 2 15.5587 2.31607 16.1213 2.87868C16.6839 3.44129 17 4.20435 17 5V16C17 16.7956 16.6839 17.5587 16.1213 18.1213C15.5587 18.6839 14.7956 19 14 19H3C2.20435 19 1.44129 18.6839 0.87868 18.1213C0.316071 17.5587 0 16.7956 0 16V5C0 4.20435 0.316071 3.44129 0.87868 2.87868C1.44129 2.31607 2.20435 2 3 2V1C3 0.734784 3.10536 0.48043 3.29289 0.292893C3.48043 0.105357 3.73478 0 4 0ZM12 2H13V1H12V2ZM5 2V1H4V2H5ZM3 3C2.46957 3 1.96086 3.21071 1.58579 3.58579C1.21071 3.96086 1 4.46957 1 5V6H16V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H3ZM1 16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V7H1V16ZM9 11H14V16H9V11ZM10 12V15H13V12H10Z" fill="#ADADAD"/>
    // </svg>`);

    // $('section.loan_calculator span.select2-selection__arrow b').replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
    //     <path fill-rule="evenodd" clip-rule="evenodd" d="M5.929 7.88911L0.271999 2.23211L1.686 0.818115L6.636 5.76812L11.586 0.818115L13 2.23212L7.343 7.88911C7.15547 8.07659 6.90116 8.1819 6.636 8.1819C6.37084 8.1819 6.11653 8.07659 5.929 7.88911Z" fill="#4A4A4A"/>
    // </svg>`);

    $("#loan_amount").keydown(function (e) { 
        // Prevent "e", "+", and "-"
        if (e.key === "e" || e.key === "+" || e.key === "-") {
            e.preventDefault();
        }
    
        // Prevent arrow up/down keys
        if (e.key === "ArrowUp" || e.key === "ArrowDown") {
            e.preventDefault();
        }
    });
    
});