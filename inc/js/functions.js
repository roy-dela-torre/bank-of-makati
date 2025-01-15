$(document).ready(function () {
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
    $(".search").click(function () {
        $(this).toggleClass("active");
        $(".search_form").toggleClass("show");
    })

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
});
