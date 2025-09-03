<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/motorcycle_loan_request_change_due_date.css">
<?php
get_template_part('template/banner_php'); ?>
<section class="motorcycle_loan_request_change_due_date">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header d-flex flex-column align-items-center mx-auto">
                        <span class="text-center orange_text">Motorcycle Loan Request for Change of Due Date</span>
                        <h2 class="text-center mb-20">Adjust Your First Payment Schedule</h2>
                        <p class="text-center">We understand that timing matters, especially when it comes to your first due date. Let us know your preferred schedule, and we’ll do our best to make it work for you.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form">
                        <div id="mobile-step-indicator" class=" align-items-center justify-content-center gap-4 d-flex d-md-none">
                            <svg id="circle-progress" width="24" height="24" viewBox="0 0 36 36">
                                <path class="circle-bg"
                                    d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none"
                                    stroke="#eee"
                                    stroke-width="2.5" />
                                <path id="circle-fill"
                                    d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                                    fill="none"
                                    stroke="#4d9ef9"
                                    stroke-width="2.5"
                                    stroke-dasharray="0, 100" />
                            </svg>
                            <span class="ms-2" id="mobile-step-text">1 / 2</span>
                        </div>

                        <ul class="step-progress d-md-flex d-none">
                            <li class="active">
                                <div class="step-number">1</div>
                                <div class="step-title">First Amortization</div>
                            </li>
                            <li>
                                <div class="step-number">2</div>
                                <div class="step-title">Loan Payment</div>
                            </li>
                        </ul>
                        <?php echo do_shortcode('[contact-form-7 id="23d095a" title="Motorcycle Loan Request for Change of Due Date"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="settle_first_payment" popover id="settle_first_payment">
    <div class="content">
        <h3>Settle First Payment</h3>
        <p>Please settle your first amortization before making this request</p>
        <div class="group_button">
            <button class="transparent_btn">Cancel</button>
            <a href="<?= get_home_url(); ?>/thank-you" title="Thank You" class="orange_btn">Okay</a>
        </div>
    </div>
</div>
<button class="d-none" popovertarget="settle_first_payment" id="show_settle_first_payment"></button>

<div class="update_loan_payment" popover id="update_loan_payment">
    <div class="content">
        <h3>Update Loan Payment</h3>
        <p>Please update your loan payment before making this request</p>
        <div class="group_button">
            <button class="transparent_btn">Cancel</button>
            <a href="<?= get_home_url(); ?>/thank-you" title="Thank You" class="orange_btn">Okay</a>
        </div>
    </div>
</div>
<button class="d-none" popovertarget="update_loan_payment" id="show_update_loan_payment"></button>

<button type="button" id="autofillBtn">Autofill</button>

<script>
    $(document).ready(function() {
        // Initialize both datepickers ONCE
        $("input#original_due_date").datepicker({
            dateFormat: "yy-mm-dd",
            onSelect: function(selectedDate) {
                updateMinDate();
            }
        });

        $("input#new_due_date").datepicker({
            dateFormat: "yy-mm-dd"
        });

        // Also update on manual change (typing)
        $("input#original_due_date").on('change', function() {
            updateMinDate();
        });

        $('button#cf7mls-next-btn-cf7mls_step-1').prop('disabled', true);

        function updateMinDate() {
            var date = $("input#original_due_date").datepicker('getDate');
            if (date) {
                date.setDate(date.getDate() + 1); // add 1 day
                $("input#new_due_date").datepicker("option", "minDate", date);
                $("input#new_due_date").prop('disabled', false); // ENABLE when date is set
            } else {
                $("input#new_due_date").datepicker("option", "minDate", null);
                $("input#new_due_date").prop('disabled', true); // DISABLE when empty
            }
        }
        $('input[name="first_amortization"]').on('change', function() {
            if ($(this).val() === 'No' && $(this).is(':checked')) {
                $("#show_settle_first_payment").click();
                $('button#cf7mls-next-btn-cf7mls_step-1').prop('disabled', true);
            } else {
                $('button#cf7mls-next-btn-cf7mls_step-1').prop('disabled', false);
            }
        });

        $("div#settle_first_payment button.transparent_btn").click(function(e) {
            e.preventDefault();
            $("button#show_settle_first_payment").click();
        });

        $("#date_picker, input#original_due_date, input#new_due_date").datepicker();

        $('input[name="loan_payment_updated"]').on('change', function() {
            if ($(this).val() === 'No' && $(this).is(':checked')) {
                $("#show_update_loan_payment").click();
            }
        });


        $('#autofillBtn').on('click', function() {
            // Text inputs
            $('input[name="full_name"]').val('John Doe');
            $('input[name="account_number"]').val('1234567890');
            $('input[name="mobile_number"]').val('09171234567');
            $('input[name="email_address"]').val('john.doe@example.com');
            $('input[name="present_residential_address"]').val('123 Main Street, Makati City');

            // Dates
            $('input#original_due_date').val('2025-08-15'); // Format depending on your datepicker
            $('input#new_due_date').val('2025-09-15');

            // Select dropdown
            $('select[name="first_as_label"]').val('Change of Payroll Schedule').trigger('change');

            // Radio buttons
            $('input[name="first_amortization"][value="Yes"]').prop('checked', true);
            $('input[name="loan_payment_updated"][value="Yes"]').prop('checked', true);

            // Number fields
            $('input[name="receipt_reference"]').val('987654');
            $('input[name="amount"]').val('5000');

            // Date of payment
            $('#date_picker').val('2025-08-12');

            console.log('Form fields autofilled!');
        });

        $("div#update_loan_payment button.transparent_btn").click(function(e) {
            e.preventDefault();
            $("button#show_update_loan_payment").click();
        });

    });
</script>