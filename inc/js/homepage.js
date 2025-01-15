$(document).ready(function () {
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


    $("ul#product_and_services button").on("click", function () {
        if ($(this).attr("id") === "all") {
            $(".right_content").show();
        } else {
            $(".right_content").hide();
        }
    });

    const owl = $('div#post_carousel.owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        dots: false,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: { items: 1 },
            575: { items: 2 },
            767: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
    $('.group_button .prev').click(function () {
        setEqualHeightForSection(".owl-item.active .item", "h3");
        owl.trigger('prev.owl.carousel');
    });

    $('.group_button .next').click(function () {
        setEqualHeightForSection(".owl-item.active .item", "h3");
        owl.trigger('next.owl.carousel');
    });

    owl.on('changed.owl.carousel', function (event) {
        const currentIndex = event.item.index;
        const itemsCount = event.item.count;

        const pageSize = event.page ? event.page.size : itemsCount;

        $('.group_button .prev').prop('disabled', currentIndex === 0);
        $('.group_button .next').prop('disabled', currentIndex + pageSize >= itemsCount);
    });

    setEqualHeightForSection(".owl-item.active .item", "h3");

    $(document).on('click', '.select2-container', function (e) {
        e.stopPropagation();
    });

    // Optional: Ensure modal works properly with Select2 dropdown
    $('#exampleModal').on('shown.bs.modal', function () {
        $('div#exampleModal form p select.type-on-inqury').select2({
            dropdownParent: $('#exampleModal') // Attach dropdown to the modal
        });
    });
});
