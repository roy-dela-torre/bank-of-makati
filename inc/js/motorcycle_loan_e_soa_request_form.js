function updateStepProgress() {
    $(".step-progress li").each(function () {
        var $nextLi = $(this).next();
        if ($nextLi.length && $nextLi.hasClass("d-none")) {
            $(this).addClass("no-after");
        } else {
            $(this).removeClass("no-after");
        }
    });
}

// Your function (unchanged)
// function updateStep3Button() {
//     var $step3 = $('.step-progress li').eq(2); // Step 3 <li>
//     var requesterVal = $('.requester').val();
//     var $nextBtn = $('#cf7mls-next-btn-cf7mls_step-3');

//     if ($step3.hasClass('active') && $step3.hasClass('current') && requesterVal === 'Loan Borrower') {
//         $nextBtn.text('Submit').attr('type', 'submit')
//         .attr('class', 'wpcf7-form-control wpcf7-submit has-spinner orange_btn');
//     } else {
//         // Optional: revert if conditions aren't met
//         $nextBtn.text('Next').attr('type', 'button');
//     }
// }

// Helpers
function isAccountNumberValid() {
    return $('.account_number').val().replace(/\D/g, '').length === 10;
}

function showAccountNumberError() {
    var $input = $('.account_number');
    $input.next('.wpcf7-not-valid-tip').remove();
    $input.after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Account number should be 10 digits.</span>');
}

function removeAccountNumberError() {
    $('.account_number').next('.wpcf7-not-valid-tip').remove();
}

$(document).ready(function () {
    // --- Watch for step-progress class changes ---
    // var targetNode = document.querySelector('.step-progress');
    // if (targetNode) {
    //     var observer = new MutationObserver(function() {
    //         updateStep3Button();
    //     });

    //     observer.observe(targetNode, {
    //         attributes: true,
    //         subtree: true,
    //         attributeFilter: ['class']
    //     });
    // }

    // Run once at page load
    updateStepProgress();

    // Watch for class changes in .step-progress
    var targetNode = document.querySelector(".step-progress");
    if (targetNode) {
        var observer = new MutationObserver(function () {
            updateStepProgress();
        });

        observer.observe(targetNode, {
            attributes: true,
            subtree: true,
            attributeFilter: ["class"],
        });
    }

    // step 3 click back
    $(document).on("click", "#cf7mls-back-btn-cf7mls_step-3", function () {
        var choice = $(".requester").val();
        var $step3 = $(".step-progress li").eq(2); // step 3
        var $step4 = $(".step-progress li").eq(3); // step 4

        if (choice === "Loan Borrower") {
            // Hide step 3 only
            $step3.addClass("d-none no-after");
        } else if (choice === "Authorized Representative") {
            // Hide step 4 only
            $step4.addClass("d-none no-after");
            $step3.addClass("d-none no-after");
        }
    });

    $(".requester").on("change", function () {
        var value = $(this).val();

        if (value === "Loan Borrower") {
            $(".loan_borrower").removeClass("d-none");
            $(".authorize").addClass("d-none");
        } else if (value === "Authorized Representative") {
            $(".authorize").removeClass("d-none");
            $(".loan_borrower").addClass("d-none");
        } else {
            // Hide both if no valid selection
            $(".loan_borrower, .authorize").addClass("d-none");
        }
    });

    // Works even if the button is injected later
    // Works even if the button is injected later
    $(document).on("click", "#cf7mls-next-btn-cf7mls_step-2", function () {
        var choice = $(".requester").val();

        var $steps = $(".step-progress li");
        var $step3 = $steps.eq(2); // Step 3
        var $step4 = $steps.eq(3); // Step 4

        if (choice === "Loan Borrower") {
            // Show step 3 only
            $step3.removeClass("d-none no-after");
            $step4.addClass("d-none"); // keep step 4 hidden

            $step3.find(".step-title").hide(); // hide all titles
            $step3
                .find('.step-title:contains("Loan Borrower\'s Information")')
                .show();
        } else if (choice === "Authorized Representative") {
            // Show step 3 and 4, and ensure step 3 has no 'no-after'
            $step3.removeClass("d-none no-after");
            $step4.removeClass("d-none");

            $step3.find(".step-title").hide(); // hide all titles
            $step3
                .find(
                    '.step-title:contains("Authorized Representative\'s Information")'
                )
                .show();
        } else {
            // Fallback: hide both if no valid selection
            $step3.addClass("d-none no-after");
            $step4.addClass("d-none");
        }
    });

    $('select[name="requester_type"').on("change", function () {
        if ($(this).val() === "Loan Borrower") {
            $("button#cf7mls-next-btn-cf7mls_step-3").replaceWith(
                `<input class="wpcf7-form-control wpcf7-submit has-spinner submit_step_3 orange_btn" id="submit_step_3" type="submit" value="Submit">
                <span class="wpcf7-spinner"></span>`
            );
        } else {
            $("input#submit_step_3").replaceWith(`
                <button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next" id="cf7mls-next-btn-cf7mls_step-3">
                    Next<img src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" alt="Step Loading" data-lazy-src="${window.location.origin}/wp-content/plugins/cf7-multi-step/assets/frontend/img/loader.svg" style="display: none;">
                </button>
            `);
        }
    });

    // Limit input to 10 digits
    $('.account_number')
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
        const btn = e.target.closest('#cf7mls-next-btn-cf7mls_step-2');
        if (btn && !isAccountNumberValid()) {
            e.preventDefault();
            e.stopImmediatePropagation(); // Block CF7MLS from advancing
            showAccountNumberError();
            $('.account_number').focus();
        }
    }, true); // capture phase
});
