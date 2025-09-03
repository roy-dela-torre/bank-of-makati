function setEqualHeightForSection(sectionSelector, secondSelector, groupSizeBreakpoints) {
    var elementsToResize = $(sectionSelector).find(secondSelector);
    elementsToResize.css('height', 'auto'); // Reset height to auto first

    var windowWidth = $(window).width();
    var groupSize = 1; // default

    // Use provided breakpoints or fallback to defaults
    var breakpoints = groupSizeBreakpoints || [
        { min: 1200, size: 5 },
        { min: 991, size: 4 },
        { min: 767, size: 3 },
        { min: 575, size: 2 },
        { min: 0, size: 1 }
    ];

    for (var b = 0; b < breakpoints.length; b++) {
        if (windowWidth >= breakpoints[b].min) {
            groupSize = breakpoints[b].size;
            break;
        }
    }

    for (var i = 0; i < elementsToResize.length; i += groupSize) {
        var tallestHeight = 0;
        var group = elementsToResize.slice(i, i + groupSize);

        group.each(function () {
            var height = $(this).outerHeight();
            if (height > tallestHeight) {
                tallestHeight = height;
            }
        });

        group.height(tallestHeight);
    }
}

$(document).ready(function () {
    $(window).on('load', function () {
        $('span.select2-selection__arrow b').replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.929 7.88911L0.271999 2.23211L1.686 0.818115L6.636 5.76812L11.586 0.818115L13 2.23212L7.343 7.88911C7.15547 8.07659 6.90116 8.1819 6.636 8.1819C6.37084 8.1819 6.11653 8.07659 5.929 7.88911Z" fill="#4A4A4A"/>
        </svg>`);

        // setInterval(() => {
        //     setEqualHeightForSection("div.submenu", ".header");
        // }, 1000);

        $('img[loading="lazy"]').each(function () {
            var $img = $(this);
            var originalSrc = $img.attr('data-src') || $img.attr('src');
            if (originalSrc) {
                if ('IntersectionObserver' in window) {
                    var observer = new IntersectionObserver(function (entries, observer) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting) {
                                var img = entry.target;
                                img.src = img.getAttribute('data-src');
                                observer.unobserve(img);
                            }
                        });
                    });
                    observer.observe(this);
                } else {
                    $img.attr('src', originalSrc);
                }
                $img.on('load', function () {
                    var width = $img.width();
                    var height = $img.height();
                    $img.attr({
                        'width': width,
                        'height': height
                    });
                }).attr({
                    'data-src': originalSrc,
                    'decoding': 'async'
                }).one('error', function () {
                    $(this).attr('src', originalSrc);
                });
            }
        });

        $('header li.menu-item-has-children>a,header li.menu-item-has-children>a ul.sub-menu li>a').append(`<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.47294 7.38911L0.815945 1.73211L2.22994 0.318115L7.17995 5.26812L12.1299 0.318115L13.5439 1.73212L7.88694 7.38911C7.69942 7.57659 7.44511 7.6819 7.17995 7.6819C6.91478 7.6819 6.66047 7.57659 6.47294 7.38911Z" fill="#4A4A4A"/>
        </svg>`);
        $("header .top_nav .search,.main_nav .search").click(function () {
            $(this).toggleClass("active");
            $(".search_form").toggleClass("show");
        })

        var lastScrollTop = 0;
        $(window).scroll(function () {
            var currentScrollTop = $(this).scrollTop();
            if (currentScrollTop > lastScrollTop) {
                $(".search").removeClass("active")
                $(".search_form").removeClass("show");
            }
            lastScrollTop = currentScrollTop;
        });

        $(window).resize(function () {
            if ($(window).width() < 1200) {
                $('header li.menu-item-has-children>a>svg').remove();
            }
        }).resize();
        if ($(window).width() < 1200) {
            $("header li.menu-item-has-children").append(`<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.47294 7.38911L0.815945 1.73211L2.22994 0.318115L7.17995 5.26812L12.1299 0.318115L13.5439 1.73212L7.88694 7.38911C7.69942 7.57659 7.44511 7.6819 7.17995 7.6819C6.91478 7.6819 6.66047 7.57659 6.47294 7.38911Z" fill="#4A4A4A"/>
            </svg>`);
        }

        $("header li.menu-item-has-children").click(function () {
            $(this).toggleClass("active")
            $(this).find("ul.sub-menu").toggle()
        })

        $('.accordion-button').click(function () {
            $(this).closest('.accordion-item').toggleClass('open');
        });

        setEqualHeightForSection("section.why_should_you_open_a_personal_retirement", "h3");
        setEqualHeightForSection("section.benefits_of_having_studend", "h3");
        setEqualHeightForSection("section.application_proccess", "h3");
        setEqualHeightForSection("section.benefits_of_mse_loan", "h3");
        setEqualHeightForSection("section.other_news", "h3");
        setEqualHeightForSection("section.why_we_stand_out", "h3");
        setEqualHeightForSection("section.online_motorcycle_request_form", "h3", [
            { min: 1400, size: 4 },
            { min: 1200, size: 3 },
            { min: 991, size: 2 },
            { min: 0, size: 1 }
        ]);
        setEqualHeightForSection("section.header_with_card_no_image", "h3", [
            { min: 1400, size: 4 },
            { min: 1200, size: 3 },
            { min: 991, size: 2 },
            { min: 0, size: 1 }
        ]);
        setEqualHeightForSection("section.searchResults", "h3", [
            { min: 1200, size: 3 },
            { min: 991, size: 2 },
            { min: 0, size: 1 }
        ]);
        // $("select").select2()

        $("select").not("#loan_type, #months_to_pay, section.individual .wpcf7-select, section.motorcycle_loan_e_soa_request_form .wpcf7-select, section.request_for_refund .wpcf7-select")
            .add('section.request_for_refund .luzon, section.request_for_refund .ncr').select2();

        $(document).on('click', function (event) {
            if (!$(event.target).closest('.search_form form').length && !$(event.target).closest('.search').length) {
                $('.search_form').removeClass('show');
                $('.search').removeClass('active');
            }
        });

        $("input#datepicker").datepicker();
    });
});



// contacf form 7 step by step
// Multi-step nav for ALL CF7 forms on the page
// (function ($) {
//     $(function () {
//         $('.wpcf7-form').each(function () {
//             initMulti($(this));
//         });

//         function initMulti($form) {
//             if ($form.data('msInit')) return;
//             $form.data('msInit', true);

//             var $steps = $form.find('.fieldset-cf7mls');
//             if ($steps.length < 2) return; // not multi-step

//             var $dots = $form.find('.step-progress li');                 // optional
//             var $bar = $form.find('.progress-bar');                      // optional
//             var $mobile = $form.find('.mobile-step-text, #mobile-step-text').first(); // optional
//             var $circle = $form.find('.circle-fill, #circle-fill').first(); // optional

//             var step = 0;

//             $steps.hide().eq(0).show();
//             refreshWidgets(0);
//             updateUI(0);

//             $form.on('click', '.cf7mls_next', function (e) {
//                 e.preventDefault();
//                 if (step >= $steps.length - 1) return;
//                 if (!validateStep(step)) return;
//                 goTo(step + 1);
//             });

//             $form.on('click', '.cf7mls_back', function (e) {
//                 e.preventDefault();
//                 if (step <= 0) return;
//                 goTo(step - 1);
//             });

//             // Enter advances (not in textarea)
//             $form.on('keydown', ':input:not(textarea)', function (e) {
//                 if (e.key === 'Enter') {
//                     e.preventDefault();
//                     if (step < $steps.length - 1 && validateStep(step)) goTo(step + 1);
//                 }
//             });

//             function goTo(i) {
//                 $steps.stop(true, true).hide();
//                 step = i;
//                 $steps.eq(step).show();
//                 refreshWidgets(step);
//                 updateUI(step);
//             }

//             // Validate only visible/active inputs in current step
//             function validateStep(i) {
//                 var $fs = $steps.eq(i);
//                 var $inputs = $fs.find(':input').filter(function () {
//                     var el = this, $el = $(this);
//                     if (el.disabled || el.type === 'hidden') return false;
//                     var inHiddenGroup = $el.closest('.wpcf7cf-hidden,[style*="display: none"]').length > 0;
//                     var isSelect2Hidden = $el.hasClass('select2-hidden-accessible');
//                     if (inHiddenGroup && !isSelect2Hidden) return false;
//                     return true;
//                 });

//                 for (var k = 0; k < $inputs.length; k++) {
//                     var el = $inputs[k];
//                     if (!el.checkValidity()) {
//                         el.reportValidity && el.reportValidity();
//                         focusProxy(el);
//                         return false;
//                     }
//                 }
//                 return true;
//             }

//             function focusProxy(el) {
//                 var $el = $(el);
//                 if ($el.hasClass('select2-hidden-accessible') && $.fn.select2) {
//                     $el.select2('open');
//                 } else {
//                     try { el.focus(); } catch (_) { }
//                 }
//             }

//             function refreshWidgets(i) {
//                 var $fs = $steps.eq(i);
//                 if ($.fn.select2) {
//                     $fs.find('select.select2-hidden-accessible').each(function () {
//                         $(this).trigger('change.select2');
//                     });
//                 }
//                 $fs.find('.hasDatepicker, .datepicker').each(function () {
//                     try { $(this).datepicker('refresh'); } catch (_) { }
//                 });
//             }

//             // ---- Optional progress UI (safe if absent) ----
//             function updateUI(i) { updateDots(i); updateBar(i); updateMobile(i); }

//             function stepToDot(i) {
//                 var N = $steps.length, M = $dots.length;
//                 if (!M) return -1;
//                 return Math.min(M - 1, Math.floor((i * M) / N)); // map N steps → M dots
//             }

//             function updateDots(i) {
//                 var M = $dots.length; if (!M) return;
//                 var di = stepToDot(i);
//                 $dots.removeClass('active current').find('.step-number').removeClass('active current');
//                 if (di > 0) $dots.slice(0, di).addClass('active').find('.step-number').addClass('active');
//                 $dots.eq(di).addClass('current active').find('.step-number').addClass('current active');
//                 if (i === $steps.length - 1) { // last step -> all active
//                     $dots.addClass('active').find('.step-number').addClass('active');
//                     $dots.eq(M - 1).addClass('current').find('.step-number').addClass('current');
//                 }
//             }

//             function updateBar(i) {
//                 if (!$bar.length) return;
//                 var pct = ((i + 1) / $steps.length) * 100;
//                 $bar.css('width', pct.toFixed(0) + '%');
//             }

//             function updateMobile(i) {
//                 var cur = i + 1, total = $steps.length;
//                 if ($mobile.length) {
//                     var label = '';
//                     var di = stepToDot(i);
//                     if (di >= 0) label = ($dots.eq(di).find('.step-title').text().trim() || $dots.eq(di).text().trim() || '').replace(/\s+/g, ' ');
//                     $mobile.text(label ? `${cur} / ${total} – ${label}` : `${cur} / ${total}`);
//                 }
//                 if ($circle.length) {
//                     var pct = (cur / total) * 100;
//                     $circle.attr('stroke-dasharray', `${pct}, 100`);
//                 }
//             }
//         }
//     });

// })(jQuery);
