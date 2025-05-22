$(document).ready(function () {
    const owl = $('.owl-carousel#testimonials_carousel').owlCarousel({
        loop: false,
        margin: 20,
        dots: false,
        responsiveClass: true,
        mouseDrag: false,
        nav: false,
        responsive: {
            320: {
                items: 1
            },
            768: {
                items: 2
            },
        },
    });

    // Function to check if first or last item
    function checkNavButtons(event) {
        if (!event) return; // Prevent errors if event is undefined

        var totalItems = event.item.count;  // Total slides
        var currentIndex = event.item.index; // Current visible item index

        if (currentIndex === 0) {
            $(".prev").attr("disabled", "disabled");
            $(".prev").addClass('disabled').removeClass('enabled');
        } else {
            $(".prev").removeAttr("disabled");
            $(".prev").addClass('enabled').removeClass('disabled');
        }

        if (currentIndex + event.page.size >= totalItems) {
            $(".next").attr("disabled", "disabled");
            $(".next").addClass('disabled').removeClass('enabled');
        } else {
            $(".next").removeAttr("disabled");
            $(".next").removeClass('disabled').addClass('enabled');
        }
    }

    $('.testimonials_group_button .next').click(function() {
        owl.trigger('next.owl.carousel');
        setTimeout(function() {
            owl.trigger('next.owl.carousel');
        }, 50); // Small delay to ensure smooth transition
    });

    $('.testimonials_group_button .prev').click(function() {
        owl.trigger('prev.owl.carousel');
        setTimeout(function() {
            owl.trigger('prev.owl.carousel');
        }, 50);
    });

    // Initially check navigation button states
    owl.on("initialized.owl.carousel", checkNavButtons);

    // Listen for carousel changes and update navigation buttons
    owl.on("changed.owl.carousel", checkNavButtons);
});