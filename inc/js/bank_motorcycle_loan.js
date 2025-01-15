$(document).ready(function () {

    $("ul#product_and_services button").on("click", function () {
        if ($(this).attr("id") === "all") {
            $(".right_content").show();
        } else {
            $(".right_content").hide();
        }
    });

    const owl = $('div#post_carousel').owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 2
            },
            767: {
                items: 2,
            },
            991: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        }
    });

    // Custom Navigation for Owl Carousel
    $('.group_button .prev').click(function () {
        owl.trigger('prev.owl.carousel');
    });

    $('.group_button .next').click(function () {
        owl.trigger('next.owl.carousel');
    });

    // Enable/Disable Navigation Buttons based on Carousel State
    owl.on('changed.owl.carousel', function (event) {
        const currentIndex = event.item.index;
        const itemsCount = event.item.count;

        // Disable "prev" button if at the first item
        if (currentIndex === 0) {
            $('.group_button .prev').prop('disabled', true);
        } else {
            $('.group_button .prev').prop('disabled', false);
        }

        // Disable "next" button if at the last item
        if (currentIndex + event.page.size >= itemsCount) {
            $('.group_button .next').prop('disabled', true);
        } else {
            $('.group_button .next').prop('disabled', false);
        }
    });

    // Trigger the initial state for navigation buttons
    owl.trigger('changed.owl.carousel');

});