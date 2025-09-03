<?php get_header();
/*Template Name: Faqs*/
get_template_part('template/banner_php'); ?>
<section class="faqs_about_out_savings d-none">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="header">
                    <h2 class="text-center">Frequently Asked Questions</h2>
                </div>

                <!-- FAQ 1 -->
                <div class="col-lg-6">
                    <div class="accordion" id="accordionOne">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What documents do I need to open an account?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>To open a student bank account at the Bank of Makati, the following documents are required:</p>
                                    <ul>
                                        <li>A valid identification</li>
                                        <li>An initial deposit</li>
                                        <li>Additional information, such as a parent or guardian’s consent if the student is a minor.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="col-lg-6">
                    <div class="accordion" id="accordionTwo">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What happens when I turn 25?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionTwo">
                                <div class="accordion-body">
                                    <p>When you turn 25, your student account, like the Young Savers Account at Bank of Makati, may change to a regular savings account. This change could come with updated requirements, such as higher maintaining balances and different fees.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="col-lg-6">
                    <div class="accordion" id="accordionThree">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are there any fees associated with these accounts?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionThree">
                                <div class="accordion-body">
                                    <p>When opening an account at the Bank of Makati, different types of accounts may have varying fees. For the Young Savers Account, the required initial deposit is ₱100.00, and to earn interest, a minimum maintaining balance of ₱500.00 is needed. This account offers an interest rate of up to 0.625% per annum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFour">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can I withdraw money from my account?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFour">
                                <div class="accordion-body">
                                    <p>You can use your ATM card at any BancNet ATM for cash withdrawals, keeping in mind daily limits and fees for out-of-network ATMs. Alternatively, visit any Bank of Makati branch with your ID and passbook or account number to withdraw over the counter. If linked to digital payment platforms, you can also make cashless transactions for purchases or payments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /.row -->
        </div>
    </div>
</section>
<?php get_footer(); ?>
