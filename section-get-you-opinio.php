<?php get_header();
//Template Name: Get Your Opinion
?>
<section class="your_opinion_count">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="orange_text text-center">Your Opinion Counts</span>
                        <h2 class="text-center">Help Us Serve You Better</h2>
                        <p class="text-center">We value your opinions and suggestions as we look for ways to improve our service. Please take a few moments to let us know how we are doing.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form_second">
                        <!-- <div id="mobile-step-indicator1" class=" align-items-center justify-content-center gap-4 d-flex d-md-none">
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
                            <span class="ms-2" id="mobile-step-text1">1 / 2</span>
                        </div>
                        <ul class="step-progress1 d-md-flex d-none">
                            <li class="active">
                                <div class="step-number">1</div>
                                <div class="step-title">Lorem Ipsum</div>
                            </li>
                            <li>
                                <div class="step-number">2</div>
                                <div class="step-title">Lorem Ipsum</div>
                            </li>
                            <li>
                                <div class="step-number">3</div>
                                <div class="step-title">Feedback</div>
                            </li>
                        </ul> -->
                        <?php echo do_shortcode('[contact-form-7 id="3961901" title="Help Us Serve You Better"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>