function showMap() {
    $('.maps').each(function () {
        $(this).find('img.maps_placeholder').hover(function () { // Hover over the img
            $(this).hide(); // Hide the img
            $(this).siblings('iframe').show(); // Show the iframe sibling
            console.log('iframe shown');
        });
    });
}
$(document).ready(function () {

    showMap()

    $(".group_button button").click(function () {
        var term = $(this).attr('id') === 'regular_rranches' ? 'regular-branches' : 'microfinance-branches';

        // Optional: Add logic to handle pagination here, if necessary.
        var paged = 1; // Set it to the first page by default, or get the page number dynamically

        $.ajax({
            url: bmiAjax.ajaxurl, // Ensure you pass the localized AJAX URL
            type: 'POST',
            data: {
                action: 'get_branches',
                term: term,
                paged: paged // Add pagination if needed
            },
            beforeSend: function () {
                $(".loading").show();  // Show loading spinner before request
            },
            success: function (response) {
                $('.maps_list').html(response);  // Update the content
            },
            complete: function () {
                $(".loading").hide();  // Hide loading spinner after request is complete
                showMap()
            }
        });

    });

    $(".group_button button").click(function () {
        $(".group_button button").removeClass("active"); // Remove "active" from all buttons
        $(this).addClass("active"); // Add "active" to the clicked button
    });

});