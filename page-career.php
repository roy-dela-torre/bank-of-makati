<?php get_header();
/*Template Name: Career*/
$img_path = get_stylesheet_directory_uri() . '/assets/images/career';
get_template_part('template/banner_php'); ?>
<section class="career">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <span class="orange_text text-center">Careers</span>
                        <h2 class="text-center">Build Your Career with Bank of Makati</h2>
                        <p class="text-center">Join a team committed to excellence and innovation in banking. Explore opportunities that allow you to grow and make a meaningful impact.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="accordion_container">
                        <div class="accordion" id="careerAccordion">
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBranchManager" aria-expanded="false" aria-controls="collapseBranchManager">
                                    <h3>Branch Manager</h3>
                                    <p>Lead and motivate the branch team to deliver exceptional banking services. Drive business growth while ensuring compliance with company policies and regulations.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseBranchManager" class="accordion-collapse collapse" aria-labelledby="headingBranchManager" data-bs-parent="#careerAccordion" style="">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">The position is responsible for the profitability and over-all growth in deposit and loans of the Branch. The BM shall also be responsible for marketing, administration and servicing of high net worth individual and middle market segments and developing long-term relationship with existing and prospective clients.</p>
                                        <!-- <h4>Qualifications:</h4> -->
                                        <ul class="d-none">
                                            <li>Lorem ipsum dolor sit amet consectetur. </li>
                                            <li>Mi dignissim diam lobortis scelerisque consectetur at.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBRO" aria-expanded="false" aria-controls="collapseBRO">
                                    <h3>Branch Relations Officer (BRO)</h3>
                                    <p>Foster client relationships and drive branch growth by delivering outstanding customer service and promoting bank products. Act as a key liaison between clients and the branch team.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseBRO" class="accordion-collapse collapse" aria-labelledby="headingBRO" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">
                                            Responsible for building and maintaining strong client relationships, promoting and cross-selling bank products and services, and managing an assigned account portfolio. Ensures efficient account opening, placement renewals, and timely processing of transactions for all BMI products. Delivers prompt, high-quality service in line with the bank’s standards and supports branch business development initiatives.
                                        </p>
                                        <h4>Qualifications:</h4>
                                        <ul>
                                            <li>Bachelor’s degree in Business Administration, Banking, Finance, or related field.</li>
                                            <li>Strong interpersonal and communication skills with a customer-focused mindset.</li>
                                            <li>Experience in sales, client management, or banking operations is an advantage.</li>
                                            <li>Ability to work independently and as part of a team to achieve branch targets.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountAssociate" aria-expanded="false" aria-controls="collapseAccountAssociate">
                                    <h3>Account Associate</h3>
                                    <p>Support account management and assist customers with their banking needs. Help maintain smooth daily operations and accurate transaction processing.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseAccountAssociate" class="accordion-collapse collapse" aria-labelledby="headingAccountAssociate" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">
                                            The position shall be responsible in all administrative and operational activities in the Department. It shall ensure that all files, reports, monitoring and records are complete, up-to-date and properly safekept for easy tracking and retrieval. Likewise, it shall perform proper coordination with other units/departments to support the department's goal to achieve its loan targets, collection efficiency and compliance of loan accounts to internal and external regulatory requirements.
                                        </p>
                                        <!-- <h4>Qualifications:</h4> -->
                                        <ul class="d-none">
                                            <li>Lorem ipsum dolor sit amet consectetur. </li>
                                            <li>Mi dignissim diam lobortis scelerisque consectetur at.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountOfficer" aria-expanded="false" aria-controls="collapseAccountOfficer">
                                    <h3>Account Officer</h3>
                                    <p>Manage client accounts and coordinate loan processing efficiently. Ensure adherence to regulatory requirements and company standards.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseAccountOfficer" class="accordion-collapse collapse" aria-labelledby="headingAccountOfficer" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">
                                            The Account Officer, together with the Cluster Head and Team Leader, is responsible for generating quality new business loan accounts for the Bank. The role supports the development and execution of marketing strategies to achieve both individual and team targets. Additionally, the Account Officer maintains existing loan accounts to ensure good credit standing and to prevent or mitigate possible risk exposure for the Bank.
                                        </p>
                                        <h4>Qualifications:</h4>
                                        <ul>
                                            <li>Bachelor’s degree in Business Administration, Finance, Banking, or a related field.</li>
                                            <li>Experience in loan processing, credit analysis, or account management is an advantage.</li>
                                            <li>Strong analytical, organizational, and communication skills.</li>
                                            <li>Ability to work collaboratively within a team and meet assigned targets.</li>
                                            <li>Knowledge of banking regulations and compliance standards is preferred.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountOfficerProcessor" aria-expanded="false" aria-controls="collapseAccountOfficerProcessor">
                                    <h3>Account Officer – Processor</h3>
                                    <p>Review and process loan applications with accuracy and efficiency. Work closely with internal teams to ensure timely loan releases and strict compliance with bank policies and regulatory requirements.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseAccountOfficerProcessor" class="accordion-collapse collapse" aria-labelledby="headingAccountOfficerProcessor" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">
                                            Ensure thorough evaluation of loan applications for compliance with bank policies and procedures, mitigating potential risks. Coordinate with relevant departments to facilitate prompt loan releases and support the achievement of departmental targets, collection efficiency, and regulatory compliance.
                                        </p>
                                        <h4>Qualifications:</h4>
                                        <ul>
                                            <li>Bachelor’s degree in Business Administration, Finance, Banking, or a related field.</li>
                                            <li>Experience in loan processing or credit evaluation is an advantage.</li>
                                            <li>Strong attention to detail and organizational skills.</li>
                                            <li>Ability to coordinate with multiple teams and meet deadlines.</li>
                                            <li>Knowledge of banking regulations and compliance standards is preferred.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRemedialOfficer" aria-expanded="false" aria-controls="collapseRemedialOfficer">
                                    <h3>Remedial Officer</h3>
                                    <p>Oversee and manage delinquent accounts, collaborating with clients to resolve outstanding issues. Develop and implement effective collection strategies to minimize risk and support the bank’s financial health.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseRemedialOfficer" class="accordion-collapse collapse" aria-labelledby="headingRemedialOfficer" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">
                                            The Remedial Officer assists the Department Head in planning, area mapping, and formulating strategies to achieve collection targets. The role also guides, monitors, and validates the performance of Remedial Specialists to ensure compliance with the bank’s prescribed policies and procedures.
                                        </p>
                                        <h4>Qualifications:</h4>
                                        <ul>
                                            <li>Bachelor’s degree in Business Administration, Finance, Banking, or a related field.</li>
                                            <li>Experience in collections, credit management, or risk mitigation is an advantage.</li>
                                            <li>Strong analytical, communication, and leadership skills.</li>
                                            <li>Ability to develop strategies and work collaboratively with a team.</li>
                                            <li>Knowledge of banking regulations and compliance standards is preferred.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-button d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRemedialSpecialist" aria-expanded="false" aria-controls="collapseRemedialSpecialist">
                                    <h3>Remedial Specialist</h3>
                                    <p>Manage the recovery and collection of delinquent accounts, focusing on accounts with 151+ days past due. Act as a moderator to minimize accounts forwarded to the Collection and External Agency Department (CEAD) and support the rehabilitation of client portfolios.</p>
                                    <div class="group">
                                        <div class="full_time">
                                            <?php
                                            echo file_get_contents($img_path . '/full_time.svg');
                                            ?>
                                            <span>Full Time</span>
                                        </div>
                                        <div class="location">
                                            <?php
                                            echo file_get_contents($img_path . '/location.svg');
                                            ?>
                                            <p>Makati, Philippines</p>
                                        </div>
                                    </div>
                                </button>
                                <div id="collapseRemedialSpecialist" class="accordion-collapse collapse" aria-labelledby="headingRemedialSpecialist" data-bs-parent="#careerAccordion">
                                    <div class="accordion-body">
                                        <h4>Job Objective:</h4>
                                        <p class="mb-30">
                                            Responsible for the recovery and collection of delinquent accounts with Days Past Due (DPD) of 151 and above (7 months due). Acts as a moderator to reduce the number of deteriorating accounts forwarded to the Collection and External Agency Department (CEAD), and supports the implementation of recovery plans for non-performing accounts.
                                        </p>
                                        <h4>Qualifications:</h4>
                                        <ul>
                                            <li>Bachelor’s degree in Business Administration, Finance, Banking, or a related field.</li>
                                            <li>Experience in collections, credit management, or risk mitigation is an advantage.</li>
                                            <li>Strong analytical and communication skills.</li>
                                            <li>Ability to work independently and collaboratively within a team.</li>
                                            <li>Knowledge of banking regulations and compliance standards is preferred.</li>
                                        </ul>
                                        <button popovertarget="apply_now" class="orange_btn w-100">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="testimonial pb-0" id="testimonial_section">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header d-flex align-items-center justify-content-between">
                        <div class="left_content">
                            <span class="orange_text">Testimonials</span>
                            <h2 class="mb-20">Hear from Our Team</h2>
                            <p>At the Bank of Makati, we foster a professional and supportive environment. Discover what it’s like to work with us through our team’s experiences.</p>
                        </div>
                        <div class="right_content">

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" id="testimonial">
                        <?php
                        $testimonials = [
                            [
                                'image' => $img_path . '/Gemma Villamer -  Area Loan Operations Officer (LOD I).jpg',
                                'text' => 'BMI has been more than just a workplace - it has been a place of growth, learning, and support. Over the years, the Bank has consistently supported my professional growth by providing opportunities for training, skills, and development. Through BMI leader\'s guidance and trust in my abilities, I have gained valuable experienced and deepened my knowledge in loan operations, allowing me to contribute effectively to the company\'s goal. Through the trust, guidance, and encouragement I\'ve received for the past 18 years, I have become a more confident, capable, and purpose-driven individual.',
                                'name' => 'Gemma Villamer'
                            ],
                            [
                                'image' => $img_path . '/Ezy Marie Sumague - Sustainable Finance and ESG Specialist (TRRD).jpg',
                                'text' => 'I\'ve been working in BMI for 1 year and 3 months now, and I’m truly grateful that this is where I started my corporate journey. From the onset, I’ve felt genuinely valued and supported, not just as an employee, but as an individual. The company has played a significant role in my personal and professional development. I\'m surrounded with supportive and encouraging colleagues who make even the busiest days feel lighter. My leaders consistently provide guidance and opportunities that help me grow, whether through constructive feedback or by trusting me with responsibilities that challenge and stretch my skills. One of the most impactful experiences was being given the opportunity to present during meetings. This did not only helped me build my confidence but also sharpened how I communicate and interact with people across different levels of the organization.',
                                'name' => 'Ezy Marie Sumague'
                            ],
                            [
                                'image' => $img_path . '/Jhon Stifen Acero - Analyst Programmer (ABOSD).jpg',
                                'text' => 'The Bank has supported my growth and development since I onboarded last 2023, the department I work under provides various trainings aimed at enchancing not only our programming skills but also on how we think when solving problems. I feel truly blessed to work with intelligent and kind colleagues who have significantly contributed to my development as an Analyst Programmer.',
                                'name' => 'Jhon Stifen Acero'
                            ],
                            [
                                'image' => $img_path . '/Kenny Mher Umbac - Branch Operations Head (BBOD).jpg',
                                'text' => 'Over the past eight years, Bank of Makati  has played a pivotal role in my professional growth and development. I began my journey as a Loans Coordinator and later transitioned to a Teller position where I was given the foundation to understand core banking operations and deepened my knowledge of customer service and front-line processes. With each step, the company provided not only the opportunity but also the support and guidance necessary to help me grow. Through various training programs, mentoring from senior leaders, and a culture that values continues improvement, I\'ve been able to enhance my skills and expand my perspective on operational excellence and leadership. Today, I serve as the Branch Operations Head- an achievement that reflects not only my personal dedication, but also the company\'s commitment to recognizing and nurturing internal talent. I\'m truly grateful to be part of an organization that invest in its people and believes in developing future leaders from within.',
                                'name' => 'Kenny Mher Umbac'
                            ],
                            [
                                'image' => $img_path . '/Donna Jean A. Tomas - Branch Relations Officer (BBG).jpg',
                                'text' => 'I\'m currently a Branch Relationship Officer, a milestone in my career as I started from a Rank and file position (TELLER) to OFFICER II. The Bank has provided me an opportunity to grow professionally, be recognized, and rewarded for my achievements and contributions. These have kept me motivated all through out the years.',
                                'name' => 'Donna Jean A. Tomas'
                            ],
                        ];

                        foreach ($testimonials as $testimonial): ?>
                            <div class="item">
                                <div class="image">
                                    <img src="<?= esc_url($testimonial['image']) ?>" alt="" width="100" height="100" class="width-fit-content">
                                    <p class="name"><b><?= esc_html($testimonial['name']) ?></b></p>
                                    <p><?= esc_html($testimonial['text']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template/contact-us'); ?>

<div class="apply_now" id="apply_now" popover>
    <div class="content">
        <div class="header">
            <h3 class="mb-0">Apply Now</h3>
            <button class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path d="M1.4 14.5L0 13.1L5.6 7.5L0 1.9L1.4 0.5L7 6.1L12.6 0.5L14 1.9L8.4 7.5L14 13.1L12.6 14.5L7 8.9L1.4 14.5Z" fill="#4A4A4A" />
                </svg>
            </button>
        </div>
        <?= do_shortcode('[contact-form-7 id="ca20928" title="Career Forms"]', false) ?>
    </div>
</div>

<?php get_footer(); ?>
<script>
    $(document).ready(function() {
        $('#testimonial').owlCarousel({
            loop: false,
            rewind: true,
            margin: 20,
            nav: true,
            dots: false,
            navText: [
                '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.0957 1.33312L5.76258 0L0.429142 5.33344C0.252394 5.51024 0.153102 5.75 0.153102 6C0.153102 6.25 0.252394 6.48976 0.429142 6.66656L5.76258 12L7.0957 10.6669L2.42883 6L7.0957 1.33312Z" fill="#4A4A4A"/></svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.82086 6.66656L1.48742 12L0.154297 10.6669L4.82117 6L0.154297 1.33312L1.48742 0L6.82086 5.33344C6.99761 5.51024 7.0969 5.75 7.0969 6C7.0969 6.25 6.99761 6.48976 6.82086 6.66656Z" fill="white"/></svg>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                991: {
                    items: 2
                }
            }
        });
        var owl_nav = $("section.testimonial .owl-nav")
        owl_nav.appendTo("section.testimonial .right_content");
        $("button.close").click(function() {
            $("button[popovertarget='apply_now']").click();
        });

    });
</script>