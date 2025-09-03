<?php get_header();
/*Template Name: Privacy Policy*/
?>
<section class="privacy_policy">
    <div class="wrapper">
        <div class="container-fludi">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1>
                            <?php echo get_the_title(); ?>
                        </h1>
                        <?php the_content(); ?>
                        <div class="row align-items-center">
                            <div class="col-lg-8 pe-lg-5">
                                <div class="content lg-mb-0 mb-30">
                                    <h2>Contact Our Data Protection Officer (DPO)</h2>
                                    <p>For any privacy concern, you may reach our Data Protection Officer through the following means:</p>
                                    <p>
                                        <strong>Email</strong>: <a href="mailto:privacyconcern@bankofmakati.com.ph" target="_blank" rel="noopener noreferrer" class="text-decoration-underline">privacyconcern@bankofmakati.com.ph</a>
                                        <br>
                                        <strong>Contact No</strong>: <a href="tel:+8889-0000">8889-0000</a> loc. 1113 or <a href="tel:+1601-09255-256683">1601 09255-256683</a>
                                        <br>
                                        <strong>Address</strong>: The Data Protection Officer – Bank of Makati (A Savings Bank), Inc. Bank of Makati Bldg. Ayala Ave Extension near cor Metropolitan Ave, Brgy. Bel-air, Makati City
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="image d-flex">
                                    <img fetchpriority="high" decoding="async" class="alignnone size-full wp-image-1156 mx-auto" src="<?= get_home_url() ?>/wp-content/uploads/2025/06/dpo.png" sizes="(max-width: 380px) 100vw, 380px" srcset="<?= get_home_url() ?>/wp-content/uploads/2025/06/dpo.png 380w, <?= get_home_url() ?>/wp-content/uploads/2025/06/dpo-163x300.png 163w" alt="" width="380" height="700">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>