<?php get_header();
/*Template Name: About Us*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/about_us/';
get_template_part('template/banner_php'); ?>
<section class="bmi_milestone">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="text-center orange_text">Bank History</span>
                        <h2 class="text-center">BMI Milestones</h2>
                        <p class="text-center">Bank of Makati on March 23, 2015 joined the big players in the
                            banking industry as it officially became Bank of Makati (A Savings Bank), Inc.</p>
                        <p class="text-center">Built on more than 60 years of experience in community banking, BMI was
                            originally founded as a rural bank in July 1956. Since then, it has helped countless
                            Filipino savers and entrepreneurs achieve their dreams.</p>
                    </div>
                </div>
                <?php
                $image = ["2001", "2006", "2009", "2013", "2014", "2015", "2016", "2017"];
                $content = [
                    "BMI gained stronger capability with the coming in of new shareholders, a new management and bigger capitalization.",
                    "BMI reached the elite list of the Top 1,000 Corporations in the Philippines, the first rural bank to do so. With total assets of Php5.2 billion and a net worth of over Php800 million, the Bank was recognized in the same year as the biggest rural bank in the Philippines – bigger, in fact, than most savings bank.",
                    "BMI sported a new logo. Corollary to this, a new tagline came into being: “Malalapitan, Maaasahang Kaibigan.” The tagline depicted the Bank as a friend who reaches out, understands and can be counted on in times of need.",
                    "The Bank stepped up preparations for a seamless upgrade to savings bank with the implementation of a new five-year plan. It became an allied member of the Bancnet ATM Consortium, expanded its reach in Metro Manila with its microfinance-oriented branches and opened more loan centers.",
                    "BMI converted its core banking system to Finacle, an integrated system that automates both deposit and loan processing to support ATM, mobile and internet banking.",
                    "In the past couple of years, BMI’s growth was nothing short of phenomenal. The Bank's capital now stands at almost Php5.8 billion. It has deployed 10 ATMs and will soon issue its own ATM cards. A network of 19 full-service branches, 24 loan centers and 13 microfinance-oriented Metro Manila branches are now in place, with more in the pipeline. Following the approval by the Bangko Sentral ng Pilipinas to operate as a thrift bank, BMI on April 28, 2015 officially became a savings bank.",
                    "On this year, BMI marked its 60th anniversary, continuing its strong financial performance. With the conversion of its loan centers, BMI closed the year with 60 branches, including 14 microfinance-oriented ones located in Metro Manila. The Bank put in place an automated credit investigation system that uses android phones to better serve our borrowing public. It became 100% compliant with guidelines on the new check clearing system (CICs).",
                    "Bank of Makati (A Savings Bank), Inc. sees no let up in its bid to make a significant contribution to nation-building. It is committed to serve and to make better banking options available to the public. Its vision is to be the Micro, Small and Medium Enterprises (MSME) bank of choice."
                ];
                ?>
                <div class="col-md-12">
                    <div id="mile_stone" class="owl-carousel owl-theme">
                        <?php foreach ($image as $index => $year): ?>
                            <div class="item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="image">
                                            <img src="<?php echo $img_path; ?><?php echo $year; ?>.jpg"
                                                alt="Milestone <?php echo $year; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ps-lg-5">
                                        <div class="content">
                                            <div class="main_content">
                                                <h3><?php echo $year; ?></h3>
                                                <p><?php echo $content[$index]; ?></p>
                                            </div>
                                            <div class="group_button">
                                                <button class="prev" disabled>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12"
                                                        viewBox="0 0 7 12" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M0.306095 5.33344L5.63953 -1.16545e-07L6.97266 1.33312L2.30578 6L6.97266 10.6669L5.63953 12L0.306095 6.66656C0.129347 6.48976 0.0300551 6.25 0.0300551 6C0.0300551 5.75 0.129347 5.51024 0.306095 5.33344Z"
                                                            fill="#4A4A4A" />
                                                    </svg>
                                                </button>
                                                <button class="next">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12"
                                                        viewBox="0 0 7 12" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M6.69391 6.66656L1.36047 12L0.0273438 10.6669L4.69422 6L0.0273438 1.33312L1.36047 0L6.69391 5.33344C6.87065 5.51024 6.96995 5.75 6.96995 6C6.96995 6.25 6.87065 6.48976 6.69391 6.66656Z"
                                                            fill="white" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vission_and_mission pt-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <span class="orange_text">Vision and Mission</span>
                        <h2>Growing Together, Every Step of the Way</h2>
                        <p>LWe’re here to help Filipinos build a secure and prosperous future with reliable banking
                            solutions.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <span class="count">1</span>
                        <h3>Our Vision</h3>
                        <p>Bank of Makati envisions itself as a leading thrift bank that fuels the growth of aspiring
                            and existing mSMEs as well as advocates for the financial inclusion of the ordinary and
                            unbanked Filipino.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <span class="count">2</span>
                        <h3>Our Mission</h3>
                        <p>Bank of Makati is committed to realizing its vision by offering simple, convenient, and
                            transparent financial products and services, meeting customer needs through an integrated
                            network of touchpoints. The bank pursues consistent growth and profitability while
                            supporting sustainability. Internally, it fosters a culture emphasizing customer
                            understanding, service urgency, and accountability, creating a workplace that encourages
                            employee excellence and commitment to the bank’s purpose.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what_we_are pt-0" id="who-we-are">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row alig-items-center">
                <div class="col-xl-6 pe-xl-5">
                    <div class="content">
                        <span class="orange_text">Who We Are</span>
                        <h2>Banking that Works for You</h2>
                        <img src="<?php echo $img_path; ?>Who We Are.jpg" alt="Who We Are"
                            class="d-block d-xl-none mb-20 w-100 img-fluid">
                        <p>With deep roots in banking, the Bank of Makati has been a trusted partner in financial
                            growth. Our solutions make banking accessible and reliable for individuals and businesses in
                            the Philippines.</p>
                        <div class="group_content">
                            <div class="list_content">
                                <img loading="lazy" src="<?= $img_path; ?>A Bank that Understands You.png" alt="">
                                <h3>A Bank that Understands You</h3>
                                <p>We make banking simple and built around your needs, making managing your finances
                                    effortless.</p>
                            </div>
                            <div class="list_content">
                                <img src="<?= $img_path; ?>Supporting Your Financial Journey.png" alt="Supporting Your Financial Journey" loading="lazy">
                                <h3>Supporting Your Financial Journey</h3>
                                <p>From saving for the future to expanding your business, we’re here to help you reach
                                    your goals.</p>
                            </div>
                            <div class="list_content">
                                <img src="<?= $img_path; ?>Growing with You.png" alt="Growing with You" loading="lazy">
                                <h3>Growing with You</h3>
                                <p>Wherever life takes you, Bank of Makati is here to provide the banking support you
                                    need.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="image">
                        <img src="<?php echo $img_path; ?>Who We Are.jpg" alt="Who We Are" class="w-100 img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="board_of_director pb-0" id="meet-our-leaders">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?php echo $img_path; ?>Board of Directors.jpg" alt="Board of Directors"
                            class="w-100 img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="content right">
                        <span class="orange_text">Meet Our Leaders</span>
                        <h2>Guided by Experience, Committed to You</h2>
                        <img src="<?php echo $img_path; ?>Board of Directors.jpg" alt="Board of Directors"
                            class="w-100 img-fluid d-block d-lg-none mb-20">
                        <p class="mb-30">At Bank of Makati, our leaders bring expertise and vision to ensure we provide
                            secure and
                            accessible financial solutions that help you grow.</p>
                        <button class="orange_btn view_board_of_director" popovertarget="view_board_of_director">View Now</button>
                        <div class="view_board_of_director" popover id="view_board_of_director">
                            <div class="main_content">
                                <button class="close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <path d="M1.4 14L0 12.6L5.6 7L0 1.4L1.4 0L7 5.6L12.6 0L14 1.4L8.4 7L14 12.6L12.6 14L7 8.4L1.4 14Z" fill="#4A4A4A" />
                                    </svg>
                                </button>
                                <img src="<?php echo $img_path ?>/BODWeb.jpg" alt="BODWeb.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-5">
                    <div class="content">
                        <span class="orange_text">Organizational Chart</span>
                        <h2>Leadership that Works for You</h2>
                        <img src="<?php echo $img_path; ?>Organizational Chart.jpg" alt="Organizational Chart"
                            class="w-100 img-fluid d-block d-lg-none mb-20">
                        <p class="mb-30">At BMI, our leadership team is committed to making banking simple, efficient,
                            and accessible.
                            With a structure built for innovation and reliability, we ensure our services support your
                            financial growth.</p>
                        <button class="orange_btn organizational_chart" popovertarget="organizational_chart">View Now</button>
                        <div class="organizational_chart" popover id="organizational_chart">
                            <div class="main_content">
                                <button class="close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <path d="M1.4 14L0 12.6L5.6 7L0 1.4L1.4 0L7 5.6L12.6 0L14 1.4L8.4 7L14 12.6L12.6 14L7 8.4L1.4 14Z" fill="#4A4A4A" />
                                    </svg>
                                </button>
                                <img src="<?php echo $img_path ?>/OrgChartWeb.jpg" alt="OrgChartWeb.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?php echo $img_path; ?>Organizational Chart.jpg" alt="Organizational Chart"
                            class="w-100 img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="investor_relation">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?php echo $img_path; ?>Investor Relations.jpg" alt="Investor Relations"
                            class="w-100 img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="content right">
                        <span class="orange_text">Investor Relations</span>
                        <h2>Lorem ipsum dolor sit amet</h2>
                        <img src="<?php echo $img_path; ?>Investor Relations.jpg" alt="Investor Relations"
                            class="w-100 img-fluid d-block d-lg-none mb-20">
                        <p>Bank of Makati’s Investor Relations (IR) ensures that all corporate information is delivered
                            and made accessible to its stakeholders, potential investors and the public in a credible
                            manner. Such information includes those that concern business performance, plans and
                            developments.</p>
                        <p>IR connects the Bank to its investors, shareholders, government organizations and the overall
                            financial community to communicate all possible aspects of the business and to guarantee
                            fair valuation in the marketplace. Transparency is also a responsibility of IR, as it
                            ensures compliance with the reporting and disclosure standards set by the Philippine Stock
                            Exchange (PSE), as well as the Securities and Exchange Commission (SEC).</p>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-5">
                    <div class="content">
                        <img src="<?php echo $img_path; ?>Investor Relations-1.jpg" alt="Investor Relations-1"
                            class="w-100 img-fluid d-block d-lg-none mb-20">
                        <p>The Bank informs the market of the following:</p>
                        <ul>
                            <li>
                                <a href="<?= get_home_url() ?>/disclosure" target="_blank" rel="noopener noreferrer">Disclosure Statements via PSE and filings with SEC</a>
                            </li>
                            <li>
                                <button popovertarget="financial_report">Financial Report</button>
                                <img src="<?= $img_path ?>/December-2024-Balance-Sheet.jpg" alt="Financial Report" id="financial_report" popover>
                            </li>
                            <li>
                                <a href="<?= get_home_url() ?>/pdf-sample.pdf" download>Stock Information</a>
                            </li>
                            <li>
                                <a href="<?= get_home_url() ?>?bmi_today" target="_blank" rel="noopener noreferrer">Company News</a>
                            </li>
                            <li>
                                <a href="<?= get_home_url() ?>/pdf-sample2.pdf" target="_blank" rel="noopener noreferrer">Investor FAQs</a>
                            </li>
                        </ul>
                        <p>For inquiries on investments and market participation, interested parties may get in touch
                            with</p>
                        <div class="bottom_content">
                            <p>ROWEL A. UMALI</p>
                            <p>Investor Relations Officer</p>
                            <p>8890000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?php echo $img_path; ?>Investor Relations-1.jpg" alt="Investor Relations-1"
                            class="w-100 img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php get_template_part('template/contact-us');
get_footer(); ?>
<script>
    jQuery(document).ready(function($) {
        var owl = $('#mile_stone');
        owl.owlCarousel({
            items: 1,
            autoplay: false,
            loop: false,
            margin: 0,
            nav: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
        });
        $(".next").click(function() {
            owl.trigger("next.owl.carousel");
            checkButtons();
        });

        $(".prev").click(function() {
            owl.trigger("prev.owl.carousel");
            checkButtons();
        });

        function checkButtons() {
            setTimeout(function() {
                if ($(".owl-item").first().hasClass("active")) {
                    $(".prev").attr("disabled", true);
                } else {
                    $(".prev").attr("disabled", false);
                }

                if ($(".owl-item").last().hasClass("active")) {
                    $(".next").attr("disabled", true);
                } else {
                    $(".next").attr("disabled", false);
                }
            }, 100); // Delay to allow carousel update
        }
        checkButtons();

        $("div#view_board_of_director button.close").click(function(e) {
            $("button.orange_btn.view_board_of_director").click();
        });

          $("div#organizational_chart button.close").click(function(e) {
            $("button.orange_btn.organizational_chart").click();
        });
    });
</script>