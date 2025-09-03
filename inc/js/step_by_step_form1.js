$(document).ready(function () {
    // var $fieldsets = $(".fieldset-cf7mls");
    // var $progressbar = $("#progressbar li");
    // var totalSteps = $fieldsets.length;
    // var progressSteps = $progressbar.length;
    // var currentStep = 0;

    // showStep(currentStep);

    // function showStep(step) {
    //     $fieldsets.hide().eq(step).show();
    //     updateProgressbar(step);
    //     setProgressBar(step + 1);
    //     updateMobileStepIndicator(step + 1, totalSteps);
    // }

    // $(".cf7mls_next").click(function () {
    //     setTimeout(() => {
    //         var $btn = $(this);
    //         $btn.find("img").show();

    //         var $currentFieldset = $fieldsets.eq(currentStep);
    //         var hasInvalid = $currentFieldset.find(".cf7mls-invalid, .wpcf7-not-valid").length > 0;

    //         $btn.find("img").hide();

    //         if (!hasInvalid && currentStep < totalSteps - 1) {
    //             currentStep++;
    //             showStep(currentStep);
    //         }
    //     }, 1000);
    // });

    // $(".cf7mls_back").click(function () {
    //     if (currentStep > 0) {
    //         currentStep--;
    //         showStep(currentStep);
    //     }
    // });

    // function updateProgressbar(step) {
    //     $progressbar.removeClass("active current");

    //     var pbIndex = Math.round((step / (totalSteps - 1)) * (progressSteps - 1));

    //     for (var i = 0; i <= pbIndex; i++) {
    //         $progressbar.eq(i).addClass("active");
    //     }

    //     $progressbar.eq(pbIndex).addClass("current");
    // }

    // function setProgressBar(curStep) {
    //     var percent = parseFloat(100 / totalSteps) * curStep;
    //     percent = percent.toFixed();
    //     $(".progress-bar").css("width", percent + "%");
    // }

    // function updateMobileStepIndicator(current, total) {
    //     // Get the current step label from desktop progress bar
    //     var stepLabel = $progressbar.eq(current - 1).text().trim();

    //     // Update mobile step text: "2 / 6 - Contact Details"
    //     $("#mobile-step-text").text(current + " / " + total + " – " + stepLabel);

    //     // Update circular stroke
    //     var percent = (current / total) * 100;
    //     $("#circle-fill").attr("stroke-dasharray", percent + ", 100");
    // }

    function updateMobileStepIndicator(current, total) {
        // Get the current step title ONLY
        var stepLabel = $progressbar.eq(current - 1).find('.step-title').text().trim();

        // Clean up extra newlines and multiple spaces
        stepLabel = stepLabel.replace(/\s+/g, ' ');

        // Update mobile step text
        $("#mobile-step-text").text(current + " / " + total + " – " + stepLabel);

        // Update circular stroke
        var percent = (current / total) * 100;
        $("#circle-fill").attr("stroke-dasharray", percent + ", 100");
    }


    $( ".datepicker" ).datepicker();


    // new indicator progress bar
    var $fieldsets = $(".fieldset-cf7mls");
    var $progressbar = $(".step-progress li");
    var totalSteps = $fieldsets.length;
    var progressSteps = $progressbar.length;
    var currentStep = 0;

    showStep(currentStep);

    function showStep(step) {
        $fieldsets.hide().eq(step).show();
        updateProgressbar(step);
        setProgressBar(step + 1);
        updateMobileStepIndicator(step + 1, totalSteps);
    }

    $(".cf7mls_next").click(function () {
        setTimeout(() => {
            var $btn = $(this);
            $btn.find("img").show();

            var $currentFieldset = $fieldsets.eq(currentStep);
            var hasInvalid = $currentFieldset.find(".cf7mls-invalid, .wpcf7-not-valid").length > 0;

            $btn.find("img").hide();

            if (!hasInvalid && currentStep < totalSteps - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }, 1000);
    });

    $(".cf7mls_back").click(function () {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    function updateProgressbar(step) {
        $progressbar.removeClass("active current");

        var pbIndex = Math.round((step / (totalSteps - 1)) * (progressSteps - 1));

        for (var i = 0; i <= pbIndex; i++) {
            $progressbar.eq(i).addClass("active");
        }

        $progressbar.eq(pbIndex).addClass("current");
    }

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / totalSteps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width", percent + "%");
    }

    // function updateMobileStepIndicator(current, total) {
    //     var stepLabel = $progressbar.eq(current - 1).find(".step-title").text().trim();

    //     $("#mobile-step-text").text(current + " / " + total + " – " + stepLabel);

    //     var percent = (current / total) * 100;
    //     $("#circle-fill").attr("stroke-dasharray", percent + ", 100");
    // }

    function dropDownIconSelect() {
        const svgIcon = `
            <span class="select-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9" viewBox="0 0 14 9" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.9915 7.88741L0.334499 2.23041L1.7485 0.816406L6.6985 5.76641L11.6485 0.816406L13.0625 2.23041L7.4055 7.88741C7.21797 8.07488 6.96366 8.18019 6.6985 8.18019C6.43334 8.18019 6.17903 8.07488 5.9915 7.88741Z" fill="#4A4A4A"/>
            </svg>
            </span>
        `;

        const $select = $('select');

        if ($select.length) {
            $select.each(function () {
            const $this = $(this);

            // Wrap the select
            $this.wrap('<div class="select-wrapper"></div>');

            // Append the icon after it
            $this.after(svgIcon);
            });
        }
    }
    dropDownIconSelect();

});