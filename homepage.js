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

    const owl = $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        dots: false,
        autoplay: false, // Changed autoPlay to autoplay
        URLhashListener: true,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: { items: 1 },
            575: { items: 2 },
            767: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
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
