function printData() {
    const src = document.querySelector("#printable_data");
    if (!src) { console.error("Modal content not found!"); return; }

    // Clone the section that you want to print
    const clone = src.cloneNode(true);

    // Copy current field values into the clone (so they survive innerHTML)
    const srcFields = src.querySelectorAll("input, textarea, select");
    const cloneFields = clone.querySelectorAll("input, textarea, select");

    srcFields.forEach((el, i) => {
        const c = cloneFields[i];
        if (!c) return;

        if (el.tagName === "TEXTAREA") {
            c.textContent = el.value;
        } else if (el.tagName === "SELECT") {
            [...c.options].forEach(o => (o.selected = o.value === el.value));
        } else if (el.type === "checkbox" || el.type === "radio") {
            c.checked = el.checked;
            if (el.checked) c.setAttribute("checked", "checked");
        } else {
            c.value = el.value;
            c.setAttribute("value", el.value);
        }
    });

    // Open a BLANK window to avoid navigation race conditions
    const printWin = window.open("", "_blank", "width=900,height=700");
    if (!printWin) { alert("Please allow pop-ups to print."); return; }

    const html = `
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Request for release of Original Certificate of Registration (CR)</title>
  <link rel="stylesheet" href="https://bankofmakati.innovnational.com/wp-content/themes/bank-of-makati/inc/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://bankofmakati.innovnational.com/wp-content/themes/bank-of-makati/inc/css/global.css">
  <style>
    div#printable_data .header { display:flex; flex-direction:column; }
    div#printable_data .content {
      background:#FFF; padding:40px; border-radius:5px; border:1px solid #F2F2F2;
      box-shadow:0 12px 18.3px rgba(0,0,0,.05); max-height:95%; overflow:auto;
    }
    div#printable_data .content::-webkit-scrollbar { display:none; }
    div#printable_data .main_content { display:flex; flex-direction:column; gap:50px; }
    div#printable_data .form_group { display:flex; flex-direction:column; gap:10px; }
    div#printable_data .form_group label { color:#4A4A4A; font:400 14px/25px 'Montserrat',sans-serif; }
    div#printable_data .form_group input {
      color:#4A4A4A; font:400 14px/25px 'Montserrat',sans-serif;
      padding:10px 15px; border:1px solid #C1C1C1; border-radius:1px;
    }
    @media print { body { -webkit-print-color-adjust: exact; print-color-adjust: exact; } }
  </style>
</head>
<body>
  <div id="printable_data">${clone.innerHTML}</div>
</body>
</html>`.trim();

    printWin.document.open();
    printWin.document.write(html);
    printWin.document.close();

    // Wait for the new window to fully load styles, then print
    const doPrint = () => {
        printWin.focus();
        printWin.print();
        setTimeout(() => { try { printWin.close(); } catch (e) { } }, 500);
    };

    // Some browsers fire 'load' on window, some better on document
    if (printWin.document.readyState === "complete") {
        // Styles may still be loading — small delay helps Safari
        setTimeout(doPrint, 150);
    } else {
        printWin.addEventListener("load", doPrint);
    }
}

function show_modal() {
    var $form = $(".wpcf7-form");

    // Gather form data from the actual form fields
    let formData = {
        loanAccountNumber: $form.find("input[name='account_number']").val(),
        firstName: $form.find("input[name='first_name']").val(),
        middleName: $form.find("input[name='middle_name']").val(),
        surname: $form.find("input[name='last_name']").val(),
        primaryMobileNumber: $form.find("input[name='primary_mobile']").val(),
        otherContactNumber: $form.find("input[name='other_contact']").val(),
        emailAddress: $form.find("input[name='email_address']").val(),
        receiptDate: $form.find("input[name='receipt_of_date']").val(),
        receiptNumber: $form.find("input[name='receipt_number']").val(),
        amount: $form.find("input[name='amount']").val(),
        pickupLocation: $form.find("select[name='pickup_location']").val(),
        area: $form.find("select[name='bmi_area']").val(),
        bmiBranchNCR: $form.find("select[name='bmi_branches_ncr_metro_manila']").val(),
        bmiBranchLuzon: $form.find("select[name='bmi_branches_luzon']").val(),
        bmiBranchVisayas: $form.find("select[name='bmi_branches_visayas']").val(),
        bmiBranchMindanao: $form.find("select[name='bmi_branches_mindanao']").val(),
        province: $form.find("select[name='province']").val(),
        remarks: $form.find("input[name='remarks']").val(),
        copyOfCertificate: $form.find("select[name='remarks_options']").val()
    };

    // Determine which branch field to use based on area
    let bmiBranch = "";
    if (formData.area === "NCR/METRO MANILA") {
        bmiBranch = formData.bmiBranchNCR;
    } else if (formData.area === "LUZON") {
        bmiBranch = formData.bmiBranchLuzon;
    } else if (formData.area === "VISAYAS") {
        bmiBranch = formData.bmiBranchVisayas;
    } else if (formData.area === "MINDANAO") {
        bmiBranch = formData.bmiBranchMindanao;
    }

    // Fill popover fields
    $("#loan_account_number_text").val(formData.loanAccountNumber);
    $("#first_name_text").val(formData.firstName);
    $("#middle_name_text").val(formData.middleName);
    $("#surname_text").val(formData.surname);
    $("#primary_mobile_number_text").val(formData.primaryMobileNumber);
    $("#other_contact_number_text").val(formData.otherContactNumber);
    $("#email_address_text").val(formData.emailAddress);
    $("#receipt_date_text").val(formData.receiptDate);
    $("#receipt_number_2_text").val(formData.receiptNumber);
    $("#amount_text").val(formData.amount);
    $("#pickup_location_text").val(formData.pickupLocation);
    $("#area_text").val(formData.area);
    $("#bmi_branch_text").val(bmiBranch);
    $("#remarks_text").val(formData.remarks);
    $("#copy_of_certificate_text").val(formData.copyOfCertificate);

    // Show popover (if using the popover API)
    const popover = document.getElementById("printable_data");
    if (popover && typeof popover.showPopover === "function") {
        popover.showPopover();
    } else {
        // fallback: show as modal if popover API is not supported
        $(popover).show();
    }

    // Remove this line to prevent immediate submission:
}


// account number code
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
    $("button#print_data").on("click", function () {
        show_modal();
    });

    $('select[name="print_data"]').on('change', function () {
        if (this.value === 'Yes') {
            // Show the print modal
            $('section.request_of_release input.wpcf7-form-control.wpcf7-submit.has-spinner.orange_btn').on('click', function (e) {
                e.preventDefault();
                show_modal();
            });

        }
    })


    // Prevent form submission and handle printing logic
    $("form.wpcf7-form").on("submit", function (e) {
        var remarksVal = $("select[name='remarks_options']").val();
        if (remarksVal === "True") {
            e.preventDefault();
            show_modal();
        }
        // else, allow normal submission
    });



    // Autofill button logic
    $(".autofill").on("click", function (event) {
        event.preventDefault();

        // Example data for autofill
        const sampleData = {
            account_number: "1234567890",
            first_name: "Juan",
            middle_name: "Dela",
            last_name: "Cruz",
            primary_mobile: "09171234567",
            other_contact: "09181234567",
            email_address: "juan.delacruz@email.com",
            receipt_of_date: "2024-06-01",
            receipt_number: "987654321",
            amount: "10000",
            pickup_location: "Bank of Makati Branch",
            bmi_area: "NCR/METRO MANILA",
            bmi_branches_ncr_metro_manila: "BMI CALOOCAN BRANCH",
            remarks: "No remarks",
            remarks_options: "True"
        };

        var $form = $(".wpcf7-form");

        // Fill text/number/email fields
        $form.find("input[name='account_number']").val(sampleData.account_number);
        $form.find("input[name='first_name']").val(sampleData.first_name);
        $form.find("input[name='middle_name']").val(sampleData.middle_name);
        $form.find("input[name='last_name']").val(sampleData.last_name);
        $form.find("input[name='primary_mobile']").val(sampleData.primary_mobile);
        $form.find("input[name='other_contact']").val(sampleData.other_contact);
        $form.find("input[name='email_address']").val(sampleData.email_address);
        $form.find("input[name='receipt_of_date']").val(sampleData.receipt_of_date);
        $form.find("input[name='receipt_number']").val(sampleData.receipt_number);
        $form.find("input[name='amount']").val(sampleData.amount);
        $form.find("input[name='remarks']").val(sampleData.remarks);

        // Fill select fields
        $form.find("select[name='pickup_location']").val(sampleData.pickup_location).trigger("change");
        $form.find("select[name='bmi_area']").val(sampleData.bmi_area).trigger("change");
        $form.find("select[name='bmi_branches_ncr_metro_manila']").val(sampleData.bmi_branches_ncr_metro_manila).trigger("change");
        $form.find("select[name='remarks_options']").val(sampleData.remarks_options).trigger("change");
    });

    // Trigger the show/hide logic on page load
    updateGroups();

    // Also trigger when any select changes
    $('select').on('change', function () {
        updateGroups();
    });

    function updateGroups() {
        // Example: Show/hide bmi_branch and motorcycle_dealer
        var pickup = $('[name="pickup_location"]').val();
        if (pickup === 'Bank of Makati Branch') {
            $('[data-id="bmi_branch"]').show();
            $('[data-id="motorcycle_dealer"]').hide();
        } else if (pickup === 'Motortrade Dealer') {
            $('[data-id="bmi_branch"]').hide();
            $('[data-id="motorcycle_dealer"]').show();
        } else {
            $('[data-id="bmi_branch"]').hide();
            $('[data-id="motorcycle_dealer"]').hide();
        }
        // Add similar logic for other dependent selects/groups as needed
    }

    // Show/hide branch selects and region groups based on bmi_area
    function updateAreaGroups() {
        var area = $('[name="bmi_area"]').val();

        // Branch selects
        $('[data-id="bmi_branches_ncr_metro_manila"]').toggle(area === "NCR/METRO MANILA");
        $('[data-id="bmi_branches_luzon"]').toggle(area === "LUZON");
        $('[data-id="bmi_branches_visayas"]').toggle(area === "VISAYAS");
        $('[data-id="bmi_branches_mindanao"]').toggle(area === "MINDANAO");

        // Region groups
        $('[data-id="luzon"]').toggle(area === "LUZON");
        $('[data-id="visayas"]').toggle(area === "VISAYAS");
        $('[data-id="mindanao"]').toggle(area === "MINDANAO");
    }

    // Call on load and whenever bmi_area changes
    updateAreaGroups();
    $('[name="bmi_area"]').on('change', updateAreaGroups);


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


    // --- helpers ---
    function $group(name) {
        // CF7 groups usually render with data-name or data-id equal to the group name
        return $('.wpcf7cf-group[data-name="' + name + '"], .wpcf7cf-group[data-id="' + name + '"], [data-name="' + name + '"], [data-id="' + name + '"]');
    }
    function hideAll(names) { names.forEach(n => $group(n).hide()); }
    function showOnly(name, pool) { hideAll(pool); $group(name).show(); }

    // Slugify province option to match your group names (g_*)
    function toSlug(txt) {
        return txt
            .toLowerCase()
            .normalize('NFD').replace(/[\u0300-\u036f]/g, '') // strip accents
            .replace(/[^a-z0-9]+/g, '_')                      // non-alnum -> _
            .replace(/^_+|_+$/g, '');                         // trim _
    }

    // --- elements ---
    const $pickup = $('select[name="pickup_location"]');
    const $bmiArea = $('select[name="bmi_area"]');
    const $province = $('select[name="province"]');

    // Pools
    const areaGroups = ['ncr_metro_manila', 'luzon', 'visayas', 'mindanao'];
    // Collect all province groups by scanning for groups that start with g_
    const provinceGroups = $('.wpcf7cf-group').map(function () {
        const dn = $(this).attr('data-name') || $(this).attr('data-id') || '';
        return dn.startsWith('g_') ? dn : null;
    }).get();

    // --- handlers ---
    function onPickupChange() {
        const val = ($pickup.val() || '').trim();
        if (val === 'Bank of Makati Branch') {
            showOnly('bmi_branch', ['bmi_branch', 'motorcycle_dealer']);
        } else if (val === 'Motortrade Dealer') {
            showOnly('motorcycle_dealer', ['bmi_branch', 'motorcycle_dealer']);
        } else {
            hideAll(['bmi_branch', 'motorcycle_dealer']);
        }
    }

    function onAreaChange() {
        // Map the exact option text to your group names
        const v = ($bmiArea.val() || '').trim();
        if (v === 'NCR/METRO MANILA') return showOnly('ncr_metro_manila', areaGroups);
        if (v === 'LUZON') return showOnly('luzon', areaGroups);
        if (v === 'VISAYAS') return showOnly('visayas', areaGroups);
        if (v === 'MINDANAO') return showOnly('mindanao', areaGroups);
        hideAll(areaGroups);
    }

    function onProvinceChange() {
        const v = ($province.val() || '').trim();     // empty when using first_as_label
        if (!v) return hideAll(provinceGroups);
        const slug = 'g_' + toSlug(v);               // e.g., "Surigao Del Norte" -> g_surigao_del_norte
        // Some data sources might have slight label/value differences — adjust here if needed.
        if (provinceGroups.includes(slug)) {
            showOnly(slug, provinceGroups);
        } else {
            // Not found? Hide all to be safe.
            hideAll(provinceGroups);
            // Uncomment to debug:
            // console.warn('No matching province group for value:', v, 'expected group:', slug);
        }
    }

    // --- wire up ---
    $pickup.on('change', onPickupChange);
    $bmiArea.on('change', onAreaChange);
    $province.on('change', onProvinceChange);

    // --- initial state ---
    // Hide everything controlled by JS, then trigger handlers to show as needed
    hideAll(['bmi_branch', 'motorcycle_dealer']);
    hideAll(areaGroups);
    hideAll(provinceGroups);

    onPickupChange();
    onAreaChange();
    onProvinceChange();

    const $provinceSelect = $('select[name="province"]');
    const provinceGroupsList = [
        "abra", "agusan_del_norte", "agusan_del_sur", "aklan", "albay", "antique", "aurora", "bataan", "batangas", "benguet", "biliran", "bohol", "bukidnon", "bulacan", "cagayan", "camarines_norte", "camarines_sur", "camiguin", "capiz", "catanduanes", "cavite", "cebu", "compostela_valley", "davao_de_oro", "davao_del_norte", "davao_del_sur", "davao_oriental", "dinagat_island", "eastern_samar", "ilocos_norte", "ilocos_sur", "iloilo", "isabela", "la_union", "laguna", "lanao_del_norte", "leyte", "marinduque", "masbate", "metro_manila", "misamis_occidental", "misamis_oriental", "negros_occidental", "negros_oriental", "north_cotabato", "northern_samar", "nueva_ecija", "nueva_vizcaya", "occidental_mindoro", "oriental_mindoro", "palawan", "pampanga", "pangasinan", "quezon", "quirino", "rizal", "romblon", "samar", "sarangani_province", "sorsogon", "south_cotabato", "southern_leyte", "sultan_kudarat", "surigao_del_norte", "surigao_del_sur", "tarlac", "western_samar", "zambales", "zamboanga_del_norte", "zamboanga_del_sur", "zamboanga_sibugay"
    ];
    function slugifyProvince(val) {
        return val
            .toLowerCase()
            .replace(/[\u0300-\u036f]/g, '') // remove accents
            .replace(/[^a-z0-9]+/g, '_')
            .replace(/^_+|_+$/g, '');
    }
    function showProvinceGroup() {
        const val = $provinceSelect.val();
        const slug = slugifyProvince(val);
        provinceGroupsList.forEach(function (name) {
            $group('g_' + name).hide();
        });
        if (provinceGroupsList.includes(slug)) {
            $group('g_' + slug).show();
        }
    }
    $provinceSelect.on('change', showProvinceGroup);
    showProvinceGroup();

    function disableSelect2OnMobile() {
        if (window.innerWidth < 767) {
            $('select').each(function () {
                if ($(this).hasClass('select2-hidden-accessible')) {
                    $(this).select2('destroy');
                }
            });
        }
    }

    // Run on load
    disableSelect2OnMobile();

    // Also run on resize (in case user resizes window)
    $(window).on('resize', function () {
        disableSelect2OnMobile();
    });

    var $pop = $('#printable_data');      // your popover element

    // Initial state
    console.log('initial:', isOpen($pop) ? 'OPEN' : 'CLOSED');

    // If modal is closed, submit the form
    // if (!isOpen($pop)) {
    //     $('section.request_of_release form.wpcf7-form').submit();
    // } else {
    //     // If modal is open, close it first, then submit after it's closed
    //     closePop($pop);
    //     setTimeout(function () {
    //         $('section.request_of_release form.wpcf7-form').submit();
    //     }, 300); // delay to allow popover to close
    // }

    // Listen to Popover events (use originalEvent.newState via jQuery)
    $pop.on('beforetoggle toggle', function (e) {
        var newState = e.originalEvent && e.originalEvent.newState; // "open" | "closed"
        if (!newState) return;
        console.log(e.type + ':', newState.toUpperCase());

        // example side-effects:
        // $('body').css('overflow', newState === 'open' ? 'hidden' : '');
    });

    // Helpers
    function isOpen($el) {
        var el = $el[0];
        return !!el && el.matches(':popover-open'); // use native matches for the new pseudo-class
    }
    function openPop($el) { var el = $el[0]; if (el && !isOpen($el)) el.showPopover(); }
    function closePop($el) { var el = $el[0]; if (el && isOpen($el)) el.hidePopover(); }
    function togglePop($el) { var el = $el[0]; if (el) el.togglePopover(); }

    // Expose if you want to call elsewhere:
    window.printablePopover = { isOpen: () => isOpen($pop), open: () => openPop($pop), close: () => closePop($pop), toggle: () => togglePop($pop) };

});