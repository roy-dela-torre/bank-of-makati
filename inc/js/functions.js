function setEqualHeightForSection(sectionSelector, secondSelector) {
    var elementsToResize = $(sectionSelector).find(secondSelector);
    elementsToResize.css('height', 'auto'); // Reset height to auto first

    var isDesktop = $(window).width() > 991;
    var groupSize = isDesktop ? 3 : 2;

    for (var i = 0; i < elementsToResize.length; i += groupSize) {
        var tallestHeight = 0;
        var group = elementsToResize.slice(i, i + groupSize); // Select the next group based on groupSize

        // Find the tallest height in the current group
        group.each(function () {
            var height = $(this).height();
            if (height > tallestHeight) {
                tallestHeight = height;
            }
        });

        // Apply tallest height to all elements in the group
        group.height(tallestHeight);
    }
}

$(document).ready(function () {
    $(window).on('load', function () {
        $('span.select2-selection__arrow b').replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.929 7.88911L0.271999 2.23211L1.686 0.818115L6.636 5.76812L11.586 0.818115L13 2.23212L7.343 7.88911C7.15547 8.07659 6.90116 8.1819 6.636 8.1819C6.37084 8.1819 6.11653 8.07659 5.929 7.88911Z" fill="#4A4A4A"/>
        </svg>`);

        setInterval(() => {
            setEqualHeightForSection("div.submenu", ".header");
        }, 1000);

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

        $('header li.menu-item-has-children>a').append(`<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
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
        setEqualHeightForSection("section.online_motorcycle_request_form", "h3");
        

        // $("select").select2()

        $("select").not("#loan_type, #months_to_pay, section.individual .wpcf7-select").select2();

        $(document).on('click', function (event) {
            if (!$(event.target).closest('.search_form form').length && !$(event.target).closest('.search').length) {
                $('.search_form').removeClass('show');
                $('.search').removeClass('active');
            }
        });
    });
});
