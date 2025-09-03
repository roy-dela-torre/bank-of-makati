jQuery(document).ready(function () {
    setTimeout(function(){
        jQuery("section.request_of_release span.select2-selection.select2-selection--single b").replaceWith(`<svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.929 7.88741L0.271999 2.23041L1.686 0.816406L6.636 5.76641L11.586 0.816406L13 2.23041L7.343 7.88741C7.15547 8.07488 6.90116 8.18019 6.636 8.18019C6.37084 8.18019 6.11653 8.07488 5.929 7.88741Z" fill="#4A4A4A"/>
        </svg>`);
    },2000)

    jQuery('.form').owlCarousel({
        items: 1,
        loop: false,
        nav: false,
        dots: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoHeight: true,
        margin: 0,
        // mouseDrag: false,
        // touchDrag: false
    });

    jQuery(document).ready(function () {
        // Ensure validation triggers on change for Select2 & Datepicker
        jQuery(".select2").on("change", function () {
            jQuery(this).next(".select2").find("span#select2-remarks_options-yy-container").css("border-color", "");
        });

        jQuery(".datepicker").on("change", function () {
            jQuery(this).css("border-color", "");
        });
    });


    // Reset red border when user selects a value in Select2
    jQuery(this).next(".select2").find("span#select2-remarks_options-yy-container").css("border-color", "");


    jQuery('.prev_step').click(function (e) {
        e.preventDefault();
        jQuery('.form').trigger('prev.owl.carousel');
    });

    jQuery('.form').on('changed.owl.carousel', function (event) {
        var step = event.item.index + 1;
        jQuery('.step_by_step .step:nth-child(' + step + ')').addClass('active');
    });

    jQuery("button.transparent_btn.prev_step").click(function (e) {
        jQuery('.step_by_step div.step.active').last().removeClass('active');
    });

    jQuery("select").not("section.individual .wpcf7-select").select2();

    jQuery("section.request_of_release input#datepicker, section.request_for_refund input#maturity_date, section.individual .birthdate, section.individual .spouse_birthday").datepicker();

    jQuery("section.request_of_release .form_step4 span.wpcf7-form-control-wrap:first-child, section.request_for_refund .form_step3 span.wpcf7-form-control-wrap:nth-child(3)").append(`
      <svg xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19" fill="none">
      <path d="M4 0H5C5.26522 0 5.51957 0.105357 5.70711 0.292893C5.89464 0.48043 6 0.734784 6 1V2H11V1C11 0.734784 11.1054 0.48043 11.2929 0.292893C11.4804 0.105357 11.7348 0 12 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1V2C14.7956 2 15.5587 2.31607 16.1213 2.87868C16.6839 3.44129 17 4.20435 17 5V16C17 16.7956 16.6839 17.5587 16.1213 18.1213C15.5587 18.6839 14.7956 19 14 19H3C2.20435 19 1.44129 18.6839 0.87868 18.1213C0.316071 17.5587 0 16.7956 0 16V5C0 4.20435 0.316071 3.44129 0.87868 2.87868C1.44129 2.31607 2.20435 2 3 2V1C3 0.734784 3.10536 0.48043 3.29289 0.292893C3.48043 0.105357 3.73478 0 4 0ZM12 2H13V1H12V2ZM5 2V1H4V2H5ZM3 3C2.46957 3 1.96086 3.21071 1.58579 3.58579C1.21071 3.96086 1 4.46957 1 5V6H16V5C16 4.46957 15.7893 3.96086 15.4142 3.58579C15.0391 3.21071 14.5304 3 14 3H3ZM1 16C1 16.5304 1.21071 17.0391 1.58579 17.4142C1.96086 17.7893 2.46957 18 3 18H14C14.5304 18 15.0391 17.7893 15.4142 17.4142C15.7893 17.0391 16 16.5304 16 16V7H1V16ZM9 11H14V16H9V11ZM10 12V15H13V12H10Z" fill="#ADADAD"/>
    </svg>`);
});
