<?php get_header();
/*Template Name: Contact us*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/contact_us/';
get_template_part('template/banner_php'); ?>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/inc/css/step_by_step_form.css">
<!-- <link rel="stylesheet" href="<//?= get_stylesheet_directory_uri(); ?>/inc/css/step_by_step_form1.css"> -->
<section class="communication_channel">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 pe-lg-5">
                    <div class="content">
                        <span class="orange_text">BMI Communication Channels</span>
                        <h2>Reach Us Through Multiple Channels</h2>
                        <p>Whether you have questions, concerns, or feedback, we’re here to assist. Contact us through our hotline, email, or social media platforms for prompt support.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="contacts">
                        <div class="contact_list">
                            <div class="d-flex align-items-center">
                                <?php echo file_get_contents($img_path . 'Hotline.svg'); ?>
                                <span class="blue_text">Hotline</span>
                            </div>
                           <p><a href="tel:+6328890000">(02) 889-0000</a> local 2104</p>
                        </div>
                        <div class="contact_list">
                            <div class="d-flex align-items-center">
                                <?php echo file_get_contents($img_path . 'Viber.svg'); ?>
                                <span class="blue_text">Viber</span>
                            </div>
                            <a href="viber://chat?number=+639431292559">9431292559</a>
                        </div>
                        <div class="contact_list">
                            <div class="d-flex align-items-center">
                                <?php echo file_get_contents($img_path . 'Email.svg'); ?>
                                <span class="blue_text">Email</span>
                            </div>
                            <a href="mailto:malalapitan.kaibigan@bankofmakati.com.ph">malalapitan.kaibigan@bankofmakati.com.ph</a>
                        </div>
                        <div class="contact_list">
                            <div class="d-flex align-items-center">
                                <?php echo file_get_contents($img_path . 'Facebook.svg'); ?>
                                <span class="blue_text">Facebook</span>
                            </div>
                            <a href="https://www.facebook.com/@bankofmakatiofficial" target="_blank" rel="noopener">@bankofmakatiofficial</a>
                        </div>
                        <div class="contact_list">
                            <div class="d-flex align-items-center">
                                <?php echo file_get_contents($img_path . 'Mobile.svg'); ?>
                                <span class="blue_text">Mobile</span>
                            </div>
                            <p><a href="tel:+09479939491">09479939491</a> (Smart) / <a href="tel:+09178312689">09178312689</a> (Globe)</p>
                        </div>
                        <div class="contact_list">
                            <div class="d-flex align-items-center">
                                <?php echo file_get_contents($img_path . 'Branch.svg'); ?>
                                <span class="blue_text">Branch</span>
                            </div>
                            <p>Call or visit our Branch or Branch Lite Units nearest you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customer_request_form">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="text-center orange_text">Customer Request Form</span>
                        <h2 class="text-center">We’re Ready to Hear from You</h2>
                        <p class="text-center">Whether you have a question, concern, or request, we’re here to listen. Reach out, and we’ll get back to you as soon as we can.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form">
                        <div id="mobile-step-indicator" class="align-items-center justify-content-center gap-4 d-flex d-md-none">
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
                            <span class="ms-2" id="mobile-step-text">1 / 3</span>
                        </div>
                        <ul class="step-progress d-md-flex d-none">
                            <li class="active">
                                <div class="step-number active">1</div>
                                <div class="step-title">Type of Inquiry</div>
                            </li>
                            <li class="active">
                                <div class="step-number">2</div>
                                <div class="step-title">Inquiry Details</div>
                            </li>
                            <li class="active">
                                <div class="step-number">3</div>
                                <div class="step-title">Complete the Required Information</div>
                            </li>
                        </ul>
                        <?php echo do_shortcode('[contact-form-7 id="9aff975" title="Contact Us"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="branch_locator">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto text-center">
                        <span class="orange_text">Branch Locator</span>
                        <h2>Find the Nearest BMI Branch Near You</h2>
                        <p>Locate a BMI branch that’s convenient for you. Visit us for personalized service and support wherever you are.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="searh_branch">
                        <select id="branch-select" class="js-example-basic-single" name="branch">
                            <option value="" disabled selected>Select Branch</option>
                            <?php
                            $args = array(
                                'post_type' => 'branche',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );

                            $query = new WP_Query($args);
                            $branches = [];
                            if ($query->have_posts()):
                                while ($query->have_posts()): $query->the_post();
                                    $branches[] = [
                                        'id' => get_the_ID(),
                                        'title' => get_the_title(),
                                        'location' => get_field('location'),
                                        'map' => get_field('maps'),
                                        'phones' => (function () {
                                            $phones = [];
                                            if (have_rows('telephone')) {
                                                while (have_rows('telephone')) {
                                                    the_row();
                                                    $phones[] = get_sub_field('telephone');
                                                }
                                            }
                                            return $phones;
                                        })(),
                                        'mobiles' => (function () {
                                            $mobiles = [];
                                            if (have_rows('phone_number')) {
                                                while (have_rows('phone_number')) {
                                                    the_row();
                                                    $mobiles[] = get_sub_field('phone_number');
                                                }
                                            }
                                            return $mobiles;
                                        })(),
                                    ];
                                endwhile;
                                wp_reset_postdata();

                                // Sort branches by title alphabetically
                                usort($branches, function ($a, $b) {
                                    return strcmp($a['title'], $b['title']);
                                });

                                foreach ($branches as $branch):
                            ?>
                                    <option value="<?php echo esc_attr($branch['id']); ?>"
                                        data-title="<?php echo esc_attr($branch['title']); ?>"
                                        data-location="<?php echo esc_attr($branch['location']); ?>"
                                        data-phone="<?php echo esc_attr(implode(' / ', $branch['phones'])); ?>"
                                        data-mobile="<?php echo esc_attr(implode(' / ', $branch['mobiles'])); ?>"
                                        data-map="<?php echo esc_attr($branch['map'] ?: ''); ?>">
                                        <?php echo esc_html($branch['title']); ?>
                                    </option>
                                <?php
                                endforeach;
                            else: ?>
                                <option value="">No branches found</option>
                            <?php endif; ?>
                        </select>
                        <hr>
                        <div class="branch_details">
                            <?php
                            // Get the first branch post for initial display
                            $args = array(
                                'post_type' => 'branche',
                                'posts_per_page' => 1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            );

                            $query = new WP_Query($args);
                            if ($query->have_posts()):
                                $query->the_post();
                                $location = get_field('location');
                                $phones = [];
                                if (have_rows('telephone')) {
                                    while (have_rows('telephone')) {
                                        the_row();
                                        $phones[] = get_sub_field('telephone');
                                    }
                                }
                                $mobiles = [];
                                if (have_rows('phone_number')) {
                                    while (have_rows('phone_number')) {
                                        the_row();
                                        $mobiles[] = get_sub_field('phone_number');
                                    }
                                }
                                $img_path = get_stylesheet_directory_uri() . '/assets/images/contact_us/';
                            ?>
                                <ul class="branch-detail-list">
                                    <?php if (get_the_title()) : ?>
                                        <li class="d-flex align-items-center mb-0"><?php echo file_get_contents($img_path . 'place.svg'); ?><b class=""><?php the_title(); ?></b></li>
                                    <?php endif; ?>
                                    <?php if (!empty($location)) : ?>
                                        <li class="d-flex align-items-center mb-0"><?php echo file_get_contents($img_path . 'location.svg'); ?>
                                            <span class=""><?php echo esc_html($location); ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($phones)) : ?>
                                        <li class="d-flex align-items-center mb-0"><?php echo file_get_contents($img_path . 'telephone.svg'); ?>
                                            <span class=""><?php echo esc_html(implode(' / ', $phones)); ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($mobiles)) : ?>
                                        <li class="d-flex align-items-center"><?php echo file_get_contents($img_path . 'phone.svg'); ?>
                                            <span class=""><?php echo esc_html(implode(' / ', $mobiles)); ?></span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            <?php
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="maps">
                        <div id="branch-map-container">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bmi_branch_locator/maps_placeholder.jpg" alt="Map Placeholder"
                                class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="financial_consumer">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image">
                        <img src="<?= $img_path ?>/We are Committed to Protecting Your Financial Well-being.jpg" alt="We are Committed to Protecting Your Financial Well-being" loading="lazy" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="content">
                        <span class="orange_text">Financial Consumer Protection</span>
                        <h2>We are Committed to Protecting Your Financial Well-being</h2>
                        <img src="<?= $img_path ?>/We are Committed to Protecting Your Financial Well-being.jpg" alt="We are Committed to Protecting Your Financial Well-being" loading="lazy" class="img-fluid w-100 d-block d-lg-none mb-20">
                        <p class="mb-30">At the Bank of Makati, we are dedicated to protecting your financial interests with transparency and fairness. Learn how we safeguard your rights as a valued consumer.</p>
                        <a href="<?= get_home_url() ?>/financial-consumer-protection/" target="_blank" rel="noopener noreferrer" class="orange_btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div hidden>
    <?php echo do_shortcode('[contact-form-7 id="071d1e9" title="We would like to hear from you, Kaibigan!"]'); ?>
</div>



<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/step_by_step_form1.js"></script>
<!-- <script src="<//?= get_stylesheet_directory_uri(); ?>/inc/js/step_by_step_form.js"></script> -->
<script src="<?= get_stylesheet_directory_uri(); ?>/inc/js/contact_us.js"></script>
<?php get_footer(); ?>
<script>
    $(document).ready(function() {
        $('#branch-select').on('select2:select', function(e) {
            const data = e.params.data;
            const $el = $(data.element);

            const title = $el.data('title');
            const location = $el.data('location');
            const phone = $el.data('phone');
            const mobile = $el.data('mobile');
            const map = $el.data('map');

            const placeIcon = `<?php echo trim(file_get_contents($img_path . 'place.svg')); ?>`;
            const locationIcon = `<?php echo trim(file_get_contents($img_path . 'location.svg')); ?>`;
            const phoneIcon = `<?php echo trim(file_get_contents($img_path . 'telephone.svg')); ?>`;
            const mobileIcon = `<?php echo trim(file_get_contents($img_path . 'phone.svg')); ?>`;

            const branchHtml = `
            <ul class="branch-detail-list">
                ${title ? `<li class="d-flex align-items-center mb-0">${placeIcon}<b class="">${title}</b></li>` : ''}
                ${location ? `<li class="d-flex align-items-center mb-0">${locationIcon}<span class="">${location}</span></li>` : ''}
                ${phone ? `<li class="d-flex align-items-center mb-0">${phoneIcon}<span class="">${phone}</span></li>` : ''}
                ${mobile ? `<li class="d-flex align-items-center">${mobileIcon}<span class="">${mobile}</span></li>` : ''}
            </ul>`;

            $('.branch_details').html(branchHtml);
            if (map && map.trim() !== '') {
                $('#branch-map-container').html(map);
            }
        });
    });
</script>