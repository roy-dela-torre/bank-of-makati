<?php get_header();
$banner_header = ["Manage Your Finances with Mymoney", "Fuel Your Business Growth with MyBusiness Solutions", "Enjoy Exclusive Perks with MyExtras", "Start Your Journey with Bank of Makati Today"];
$banner_description = ["MyMoney helps you manage your finances effortlessly. Whether you're saving, investing, or planning for the future, we provide the tools to help you achieve your financial goals.", "MyBusiness offers a range of banking products tailored to support your business's growth. From managing cash flow to securing funding, we're here to help you thrive.", "Myextras gives you access to a wide variety of perks and rewards. Enjoy special offers and privileges designed to enhance your banking experience.", "Filling out your application form is the first step to unlocking a world of banking solutions. Submit your details securely and begin your journey toward achieving your financial goals."];
$img_path = get_stylesheet_directory_uri() . '/assets/images/homepage/';
$banner_url = ["mymoney", "mybusiness", "myextra", "mybusiness/credit-application-form"];
$home_url = get_home_url();
?>
<section class="banner p-0">
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade px-0">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? "active" : "" ?>"
                            aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <div class="carousel-item <?php echo $i == 1 ? "active" : ""; ?>">
                            <!-- Desktop Image -->
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/homepage/banner' . $i . '.jpg'; ?>"
                                class="d-none d-xl-block w-100" alt="">

                            <!-- Tablet Image -->
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/homepage/banner_tablet' . $i . '.jpg'; ?>"
                                class="d-none d-lg-block d-xl-none w-100" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/homepage/banner_tablet' . $i . '.jpg'; ?>"
                                class="d-none d-md-block d-lg-none w-100" alt="">

                            <!-- Mobile Image -->
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/homepage/banner_mobile' . $i . '.jpg'; ?>"
                                class="d-block d-md-none w-100" alt="">

                            <div class="carousel-caption">
                                <<?php echo $i == 1 ? "h1" : "p"; ?> class="text-white">
                                    <?php echo $banner_header[$i - 1]; ?>
                                </<?php echo $i == 1 ? "h1" : "p"; ?>>
                                <p class="text-white"><?php echo $banner_description[$i - 1]; ?></p>
                                <a href="<?php echo get_home_url() . '/' . $banner_url[$i - 1]; ?>" target="_blank" rel="noopener noreferrer" class="white_btn"><?php echo $i == 4 ? 'Apply Now' : 'View Service' ?></a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.305119 5.83344L5.63856 0.5L6.97168 1.83312L2.3048 6.5L6.97168 11.1669L5.63856 12.5L0.305119 7.16656C0.12837 6.98976 0.0290785 6.75 0.0290785 6.5C0.0290786 6.25 0.12837 6.01024 0.305119 5.83344Z"
                            fill="white" />
                    </svg>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" viewBox="0 0 7 13" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6.69488 7.16656L1.36144 12.5L0.0283203 11.1669L4.6952 6.5L0.0283203 1.83312L1.36144 0.5L6.69488 5.83344C6.87163 6.01024 6.97092 6.25 6.97092 6.5C6.97092 6.75 6.87163 6.98976 6.69488 7.16656Z"
                            fill="white" />
                    </svg>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="product_and_services">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="categories">
                    <ul class="nav nav-tabs" id="product_and_services" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all" data-bs-toggle="tab" data-bs-target="#all-pane" type="button" role="tab" aria-controls="all-pane" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mymoney-tab" data-bs-toggle="tab" data-bs-target="#my_money" type="button" role="tab" aria-controls="my_money" aria-selected="false">MyMoney</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="mybusiness-tab" data-bs-toggle="tab" data-bs-target="#my_business" type="button" role="tab" aria-controls="my_business" aria-selected="false">MyBusiness</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="myextras-tab" data-bs-toggle="tab" data-bs-target="#my_extrass" type="button" role="tab" aria-controls="my_extrass" aria-selected="false" myextras>MyExtras</button>
                        </li>
                    </ul>
                </div>
                <div class="header">
                    <div class="left_content">
                        <span class="orange_text">Products & Services</span>
                        <h2>Explore Our Wide Range of Products and Services</h2>
                        <p>Bank of Makati offers a diverse selection of products and services to help you manage your finances and achieve your goals.</p>
                    </div>
                    <div class="right_content">
                        <div class="group_button">
                            <button class="prev" disabled>
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.305119 5.33344L5.63856 9.79705e-08L6.97168 1.33312L2.3048 6L6.97168 10.6669L5.63856 12L0.305119 6.66656C0.12837 6.48976 0.0290785 6.25 0.0290785 6C0.0290786 5.75 0.12837 5.51024 0.305119 5.33344Z" fill="white" />
                                </svg>
                            </button>
                            <button class="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.69488 6.66656L1.36144 12L0.0283203 10.6669L4.6952 6L0.0283203 1.33312L1.36144 0L6.69488 5.33344C6.87163 5.51024 6.97092 5.75 6.97092 6C6.97092 6.25 6.87163 6.48976 6.69488 6.66656Z" fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-pane" role="tabpanel" aria-labelledby="all" tabindex="0">
                        <div id="post_carousel" class="owl-carousel owl-theme all-pane">
                            <?php
                            $all_posts = get_field('all_post', 1044); // Get the ACF field containing the posts

                            if ($all_posts):
                                foreach ($all_posts as $post):
                                    setup_postdata($post);
                                    $id = get_the_ID();
                                    $date = get_the_date();
                                    $title = get_the_title();
                                    $description = get_the_excerpt();
                                    $link = get_permalink();
                                    $icons = get_field('icon', $id);
                                    $img_url = get_the_post_thumbnail_url($id, 'full')
                                        ? get_the_post_thumbnail_url($id, 'full')
                                        : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                            ?>
                                    <div class="item animate__fadeIn">
                                        <div class="content">
                                            <div class="image">
                                                <img loading="lazy" src="<?php echo esc_url($icons); ?>" alt="" class="icons">
                                                <img loading="lazy" src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                                            </div>
                                            <div class="main_content">
                                                <h3 class="all-h3"><?php echo $title; ?></h3>
                                                <p class="description"><?php echo $description; ?></p>
                                                <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="my_money" role="tabpanel" aria-labelledby="mymoney-tab" tabindex="0">
                        <div class="my_money">
                            <div class="row">
                                <?php
                                $all_posts = get_field('mymoney', 1044); // Get the ACF field containing the posts

                                if ($all_posts):
                                    foreach ($all_posts as $post):
                                        setup_postdata($post);
                                        $id = get_the_ID();
                                        $date = get_the_date();
                                        $title = get_the_title();
                                        $description = get_the_excerpt();
                                        $link = get_permalink();
                                        $icons = get_field('icon', $id);
                                        $img_url = get_the_post_thumbnail_url($id, 'full')
                                            ? get_the_post_thumbnail_url($id, 'full')
                                            : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                                ?>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                                            <div class="content">
                                                <div class="image">
                                                    <img loading="lazy" src="<?php echo esc_url($icons); ?>" alt="" class="icons">
                                                    <img loading="lazy" src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                                                </div>
                                                <div class="main_content">
                                                    <h3 class="mymoney-h3"><?php echo $title; ?></h3>
                                                    <p class="description"><?php echo $description; ?></p>
                                                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="my_business" role="tabpanel" aria-labelledby="mybusiness-tab" tabindex="0">
                        <div class="my_business">
                            <div class="row">
                                <?php
                                $all_posts = get_field('mybusiness', 1044); // Get the ACF field containing the posts

                                if ($all_posts):
                                    foreach ($all_posts as $post):
                                        setup_postdata($post);
                                        $id = get_the_ID();
                                        $date = get_the_date();
                                        $title = get_the_title();
                                        $description = get_the_excerpt();
                                        $link = get_permalink();
                                        $icons = get_field('icon', $id);
                                        $img_url = get_the_post_thumbnail_url($id, 'full')
                                            ? get_the_post_thumbnail_url($id, 'full')
                                            : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                                ?>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                                            <div class="content">
                                                <div class="image">
                                                    <img loading="lazy" src="<?php echo esc_url($icons); ?>" alt="" class="icons">
                                                    <img loading="lazy" src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                                                </div>
                                                <div class="main_content">
                                                    <h3 class="mybusiness-h3"><?php echo $title; ?></h3>
                                                    <p class="description"><?php echo $description; ?></p>
                                                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="my_extrass" role="tabpanel" aria-labelledby="myextras-tab" tabindex="0">
                        <div class="my_extrass">
                            <div class="row">
                                <?php
                                $all_posts = get_field('myextras', 1044); // Get the ACF field containing the posts

                                if ($all_posts):
                                    foreach ($all_posts as $post):
                                        setup_postdata($post);
                                        $id = get_the_ID();
                                        $date = get_the_date();
                                        $title = get_the_title();
                                        $description = get_the_excerpt();
                                        $link = get_permalink();
                                        $icons = get_field('icon', $id);
                                        $img_url = get_the_post_thumbnail_url($id, 'full')
                                            ? get_the_post_thumbnail_url($id, 'full')
                                            : get_home_url() . '/wp-content/uploads/woocommerce-placeholder.png';
                                ?>
                                        <div class="col-xxl-3 col-xl-6 col-lg-6">
                                            <div class="content">
                                                <div class="image">
                                                    <img loading="lazy" src="<?php echo esc_url($icons); ?>" alt="" class="icons">
                                                    <img loading="lazy" src="<?php echo $img_url; ?>" alt="<?php echo $title; ?>" class="img-fluid w-100">
                                                </div>
                                                <div class="main_content">
                                                    <h3 class="myextras-h3"><?php echo $title; ?></h3>
                                                    <p class="description"><?php echo $description; ?></p>
                                                    <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="content_bg">
                        <div class="main_content">
                            <span class="text-white">Loan Calculator</span>
                            <h2 class="text-white">Calculate Your Loan Easily with Us</h2>
                            <p class="text-white">Our loan calculator helps you estimate your monthly payments based on the loan amount, term, and interest rate. Get an instant preview of your potential loan details and plan your finances better.</p>
                            <a href="<?php echo get_home_url(); ?>/loan-calculator/" target="_blank" rel="noopener noreferrer" class="orange_btn">Calculate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="get_to_know_bank_of_makati">
    <div class="wrapper">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-12">
                        <div class="content">
                            <span class="orange_text">About Us</span>
                            <h2>Get to Know Bank of Makati</h2>
                            <p class="mb-20">At Bank of Makati, we are committed to providing accessible and personalized banking services. Our goal is to empower individuals and businesses to achieve their financial aspirations through innovative solutions.</p>
                            <div class="counter">
                                <p class="mb-20">Our financial performance at glance:</p>
                                <div class="group_counter">
                                    <div class="counting">
                                        <span class="numbers">20.6%</span>
                                        <p>Return on Equity</p>
                                    </div>
                                    <div class="counting">
                                        <span class="numbers">3.24 B</span>
                                        <p>Net Income</p>
                                    </div>
                                    <div class="counting">
                                        <span class="numbers">32.57%</span>
                                        <p>Capital Adequacy Ratio</p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo get_home_url(); ?>/about-us/" target="_blank" rel="noopener noreferrer" class="orange_btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why_partnet_with_bmi">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <div class="content">
                        <span class="orange_text">Why Partner with BMI</span>
                        <h2>Partner with Bank of Makati for Your Financial Success</h2>
                        <p>Partnering with us means gaining access to tailored financial solutions that support your growth. Whether you’re an individual or a business, we’re here to help you achieve long-term success.</p>
                        <div class="business_oppurtunities">
                            <img loading="lazy" src="<?php echo $img_path; ?>Business Opportunities.gif" alt="Business Opportunities">
                            <h4>Business Opportunities</h4>
                            <p>Collaborating with us offers you the financial tools and expertise to fuel your business ambitions. Together, we can build a solid foundation for your growth.</p>
                        </div>
                        <div class="sustainable_growth">
                            <img loading="lazy" src="<?php echo $img_path; ?>Sustainable Growth.gif" alt="Sustainable Growth">
                            <h4>Sustainable Growth</h4>
                            <p>With our diverse range of financial products and personalized approach, we’re here to ensure your business thrives. Partner with us for a reliable and growth-oriented banking relationship.</p>
                        </div>
                        <div class="empowered_futured">
                            <img loading="lazy" src="<?php echo $img_path; ?>Empowered Future.gif" alt="Empowered Future">
                            <h4>Empowered Future</h4>
                            <p>We focus on understanding your needs and delivering solutions that enhance your financial future. Let’s partner to help you achieve your goals with confidence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img loading="lazy" src="<?php echo $img_path; ?>Partner with Bank of Makati for Your Financial Success.jpg" alt="Partner with Bank of Makati for Your Financial Success" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
set_query_var('post_type', 'news');
echo get_template_part('template/blogs') ?>

<section class="contact_us">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <div class="content">
                        <span class="orange_text">Contact Us</span>
                        <h2>Get in Touch with Us</h2>
                        <p class="mb-20">Have questions or need assistance? Contact us today through our available channels, and we'll be happy to assist you with your banking needs.</p>
                        <div class="group_button">
                            <button type="button" class="orange_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Online Information</button>
                            <a href="<?= $home_url ?>/contact-us/#your_opinion_counts" target="_blank" rel="noopener noreferrer" class="transparent_btn">Help Us Improve</a>
                        </div>
                        <div class="head_office">
                            <img loading="lazy" src="<?php echo $img_path; ?>Head Office.gif" alt="Head Office">
                            <h4 class="blue_text">Head Office</h4>
                            <p>Ayala Avenue near corner Metropolitan Avenue, <br> Makati City</p>
                        </div>
                        <div class="telephone_number">
                            <img loading="lazy" src="<?php echo $img_path; ?>Telephone Number.gif" alt="Telephone Number">
                            <h4 class="blue_text">Telephone Number</h4>
                            <p><a href="tel:+(632) 889-0000">(632) 889-0000</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img loading="lazy" src="<?php echo $img_path; ?>Get in Touch with Us.jpg" alt="Get in Touch with Us" class="w-100 img-fluid">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="content_bg">
                        <div class="main_content">
                            <h2 class="text-center text-white">Subscribe to Our Newsletter</h2>
                            <p class="text-center text-white">Stay updated on our latest offers, services, and financial tips. Subscribe to our newsletter and never miss out on important news from Bank of Makati.</p>
                            <?php echo do_shortcode('[contact-form-7 id="68e7d41" title="Subscribe to Our Newsletter"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Request for Online Information</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="fccfe22" title="Request for Online Information"]') ?>
            </div>
        </div>
    </div>
</div>


<button type="button" id="pop_up_button" popovertarget="pop_up" hidden></button>
<div class="pop_up" popover id="pop_up">
    <div class="content">
        <div class="image">
            <img src="<?= $img_path; ?>Helping You Browse Smarter and Safer.jpg" alt="Helping You Browse Smarter and Safer">
        </div>
        <div class="main_content" style="background: url('<?= $img_path; ?>Helping You Browse Smarter and Safer BG.jpg') no-repeat center center/cover;">
            <h2 class="text-white">Helping You Browse Smarter and Safer</h2>
            <p class="text-white">We use third-party cookies to personalize content and to analyze web traffic. By clicking “Accept” you agree we can store cookies on your device in accordance with our <a href="http://example.com" target="_blank" rel="noopener noreferrer">Data Privacy Statement.</a></p>
            <div class="group_button">
                <button class="transparent_btn">Decline</button>
                <button type="button" class="white_btn">Accept</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script>
    $(document).ready(function() {
        // Show popup only if not shown before
        if (!localStorage.getItem('bmi_popup_shown')) {
            setTimeout(function() {
                $("button#pop_up_button").trigger("click");
                localStorage.setItem('bmi_popup_shown', '1');
            }, 5000);
        }

        // Optional: allow manual trigger (e.g., from a button)
        $("div#pop_up .group_button button").click(function() {
            $("button#pop_up_button").trigger("click");
        });

        // Optional: reset popup for testing
        // localStorage.removeItem('bmi_popup_shown');
    });
</script>