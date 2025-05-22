$(document).ready(function () {
    $("button.orange_btn.next_step").on("click", function (event) {
        event.preventDefault()
        $('.form').trigger('next.owl.carousel');
    })
});