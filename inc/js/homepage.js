function setEqualHeightForSection(sectionSelector, secondSelector) {
    var elementsToResize = $(sectionSelector).find(secondSelector);
    var tallestHeight = 0;
    elementsToResize.each(function () {
        var height = $(this).height();
        if (height > tallestHeight) {
            tallestHeight = height;
        }
    });
    elementsToResize.css('height', tallestHeight);
}

function setEqualHeightForSection1(section, element) {
    const elements = $(section).find(element);

    // Check if the window width is 768px or above
    if ($(window).width() >= 768) {
        elements.css('height', ''); // Reset the height first
        const maxHeight = Math.max(...elements.map(function () {
            return $(this).height();
        }).get());
        elements.height(maxHeight);
    } else {
        elements.css('height', ''); // Reset height to default for smaller screens
    }
}

function updateHeights() {
    setEqualHeightForSection1('section.product_and_services .content', '.all-h3');
    setEqualHeightForSection1('section.product_and_services .content', '.mymoney-h3');
    setEqualHeightForSection1('section.product_and_services .content', '.mybusiness-h3');
    setEqualHeightForSection1('section.product_and_services .content', '.myextras-h3');
}

function select2(selector) {
    // Highlight select2 if invalid on submit
    $(document).on('submit', 'form.wpcf7-form', function (e) {
        var $form = $(this);
        var $select = $form.find(selector);
        var $select2 = $select.siblings('.select2').find('.select2-selection--single');

        // Remove previous error state
        $select2.removeClass('wpcf7-not-valid');

        // If select is empty or default
        if (!$select.val() || $select.val().trim() === '') {
            e.preventDefault();
            $select2.addClass('wpcf7-not-valid');
        }
    });

    // Remove error highlight when user selects a value
    $(document).on('change', selector, function () {
        var $select2 = $(this).siblings('.select2').find('.select2-selection--single');
        if ($(this).val() && $(this).val().trim() !== '') {
            $select2.removeClass('wpcf7-not-valid');
        }
    });
}

$(document).ready(function () {

    $("section.contact_us button.orange_btn").click(function (e) {
        $("span.select2-selection__arrow b").replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="13" viewBox="0 0 24 13" fill="none">
            <g clip-path="url(#clip0_4098_28020)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2891 10.6569L5.63211 4.99994L7.04611 3.58594L11.9961 8.53594L16.9461 3.58594L18.3601 4.99994L12.7031 10.6569C12.5156 10.8444 12.2613 10.9497 11.9961 10.9497C11.7309 10.9497 11.4766 10.8444 11.2891 10.6569Z" fill="#C1C1C1"/>
            </g>
            <defs>
                <clipPath id="clip0_4098_28020">
                <rect width="12" height="24" fill="white" transform="translate(24 0.5) rotate(90)"/>
                </clipPath>
            </defs>
        </svg>`);
    });


    $("ul#product_and_services button").on("click", function () {
        if ($(this).attr("id") === "all") {
            $(".right_content").show();
        } else {
            $(".right_content").hide();
        }
    });

    const owl = $('div#post_carousel').owlCarousel({
        loop: false,
        margin: 10,
        dots: false,
        autoplay: false,
        URLhashListener: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                navText: [
                    `<svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.305119 5.83344L5.63856 0.5L6.97168 1.83312L2.3048 6.5L6.97168 11.1669L5.63856 12.5L0.305119 7.16656C0.12837 6.98976 0.0290785 6.75 0.0290785 6.5C0.0290786 6.25 0.12837 6.01024 0.305119 5.83344Z"
                            fill="white" />
                    </svg>
                    <span class="visually-hidden">Previous</span>`,
                    `<svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.69488 7.16656L1.36144 12.5L0.0283203 11.1669L4.6952 6.5L0.0283203 1.83312L1.36144 0.5L6.69488 5.83344C6.87163 6.01024 6.97092 6.25 6.97092 6.5C6.97092 6.75 6.87163 6.98976 6.69488 7.16656Z"
                            fill="white" />
                    </svg>
                    <span class="visually-hidden">Next</span>`
                ]
            },
            575: { items: 2 },
            991: { items: 2 },
            1366: { items: 3 },
            1400: { items: 4 }
        },
        startPosition: 'URLHash'
    });

    // Custom Next Button
    $('.group_button .next').click(function () {
        const visibleItems = getVisibleItems(); // Calculate the number of visible items
        const currentIndex = owl.find('.owl-item.active').first().index(); // Get the index of the first visible item
        const newIndex = currentIndex + visibleItems; // Calculate the target index

        owl.trigger('to.owl.carousel', [newIndex]); // Jump to the new index
        setEqualHeightForSection(".owl-item.active .item", "h3");
    });

    // Custom Prev Button
    $('.group_button .prev').click(function () {
        const visibleItems = getVisibleItems(); // Calculate the number of visible items
        const currentIndex = owl.find('.owl-item.active').first().index(); // Get the index of the first visible item
        const newIndex = currentIndex - visibleItems; // Calculate the target index

        owl.trigger('to.owl.carousel', [newIndex]); // Jump to the new index
        setEqualHeightForSection(".owl-item.active .item", "h3");
    });

    // Function to get the number of visible items based on the current breakpoint
    function getVisibleItems() {
        const width = $(window).width();
        if (width >= 1200) return 4;
        if (width >= 991) return 3;
        if (width >= 767) return 2;
        if (width >= 575) return 2;
        return 1;
    }

    // Update Button States
    owl.on('changed.owl.carousel', function (event) {
        const currentIndex = event.item.index; // Current index of the first visible item
        const totalItems = event.item.count; // Total items in the carousel
        const visibleItems = getVisibleItems(); // Get visible items based on the breakpoint

        // Disable 'prev' if at the start
        $('.group_button .prev').prop('disabled', currentIndex === 0);

        // Disable 'next' if at the end
        $('.group_button .next').prop('disabled', currentIndex + visibleItems >= totalItems);
    });


    setTimeout(function () {
        setEqualHeightForSection(".owl-item.active .item", "h3");
    }, 1000)


    $(document).on('click', '.select2-container', function (e) {
        e.stopPropagation();
    });

    $('span.wpcf7-form-control-wrap[data-name="inquiry"] b[role="presentation"]').replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="13" viewBox="0 0 24 13" fill="none">
        <g clip-path="url(#clip0_4098_28020)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2891 10.6569L5.63211 4.99994L7.04611 3.58594L11.9961 8.53594L16.9461 3.58594L18.3601 4.99994L12.7031 10.6569C12.5156 10.8444 12.2613 10.9497 11.9961 10.9497C11.7309 10.9497 11.4766 10.8444 11.2891 10.6569Z" fill="#C1C1C1"/>
        </g>
        <defs>
            <clipPath id="clip0_4098_28020">
            <rect width="12" height="24" fill="white" transform="translate(24 0.5) rotate(90)"/>
            </clipPath>
        </defs>
    </svg>`)


    // Initial + on resize (as you had)
    $(window).on('load resize', function () {
        updateHeights();
    });

    // 🔔 Re-run when a tab is shown
    // Use delegated handler in case tabs are added later
    $(document).on('shown.bs.tab', 'button[data-bs-toggle="tab"]', function () {
        // Wait for layout to settle after the pane becomes visible
        requestAnimationFrame(function () {
            setTimeout(updateHeights, 0);
        });
    });

    // 📷 If images inside the content load later, recalc heights
    $(document).on('load', 'section.product_and_services .content img', function () {
        updateHeights();
    });

    // SweetAlert validation for Full Name (no special characters or numbers)

    // Usage example for form submission (Form 1)
    $('div#wpcf7-f142-o1 input[type="submit"]').click(function (e) {
        var full_name = $('div#wpcf7-f142-o1 input[name="full_name"]').val();
        var email_address = $('div#wpcf7-f142-o1 input[name="email_address"]').val();
        $('.wpcf7-response-output').hide();
        var errors = [];
        if (!full_name || full_name === "") {
            errors.push('Full Name is required.');
        } else if (!window.validateFullName(full_name)) {
            errors.push('Full Name must not contain numbers or special characters.');
        }
        if (!email_address || email_address === "") {
            errors.push('Email Address is required.');
        } else if (!window.validateEmail(email_address)) {
            errors.push('Please enter a valid Email Address.');
        }

        if (errors.length < 2) {
            e.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Form Error',
                html: errors.join('<br>'),
                confirmButtonColor: '#ff6600'
            });
            return false;
        }
        window.showResponseAlert('div#wpcf7-f263-o2 .wpcf7-response-output');

    });

    // Usage example for form submission (Form 2)
    $('div#wpcf7-f263-o2 input[type="submit"]').click(function (e) {
        var inquiry = $('div#wpcf7-f263-o2 select[name="inquiry"]').val();
        var fullName = $('div#wpcf7-f263-o2 input[name="full_name"]').val();
        var contactNumber = $('div#wpcf7-f263-o2 input[name="contact_number"]').val();
        var emailAddress = $('div#wpcf7-f263-o2 input[name="email_address"]').val();
        var message = $('div#wpcf7-f263-o2 textarea[name="message"]').val();
        $('.wpcf7-response-output').hide();
        var errors = [];
        if (!inquiry || inquiry === "") {
            errors.push('Please select a Type of Inquiry.');
        }
        if (!window.validateFullName(fullName)) {
            errors.push('Full Name must not contain numbers or special characters.');
        }
        if (!window.validateContactNumber(contactNumber)) {
            errors.push('Please enter a valid Contact Number.');
        }
        if (!window.validateEmail(emailAddress)) {
            errors.push('Please enter a valid Email Address.');
        }
        if (!window.validateMessage(message)) {
            errors.push('Message cannot be empty.');
        }

        if (errors.length > 0 && errors.length < 5) {
            e.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Form Error',
                html: errors.join('<br>'),
                confirmButtonColor: '#ff6600'
            });
            return false;
        }

        window.showResponseAlert('div#wpcf7-f263-o2 .wpcf7-response-output');

        if (typeof select2 === 'function') {
            select2('select[name="inquiry"]');
        }
    });
});
