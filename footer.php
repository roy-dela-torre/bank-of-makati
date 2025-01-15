<?php $home_url = get_home_url(); ?>
<footer>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="footer_content">
                        <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/logo.png" alt="Bank of Makati" class="logo">
                        </a>
                        <p class="text-white">Bank of Makati offers a wide range of banking services designed to help you achieve your financial goals. Visit us today to explore how we can assist you in your financial journey.</p>
                        <div class="bottom_content">
                            <p>A proud member of:</p>
                            <div class="logos">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/banko_central_ng_pilipinas.png" alt="Bangko Central ng Pilipinas">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/bank_net.png" alt="BancNet">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/global/ctb.png" alt="Chamber of Thrift Banks">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="footer_quick_links">
                        <div class="quick_links">
                            <span>Quick Links</span>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">About BMI</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">Blogs</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">Careers</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">FAQS</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                        </div>
                        <div class="services">
                            <span>Services</span>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">MyMoney</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">MyBusiness</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">MyExtras</a>
                        </div>
                        <div class="connect_with_bmi">
                            <span>Connect With BMI </span>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">Contact Us</a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">Deposit Rates </a>
                            <a href="<?php echo $home_url; ?>" target="_blank" rel="noopener noreferrer">Credit Application Form</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="copy_right">
                        <p class="text-white mb-0">Deposits are insured by PDIC up to P500,000 per depositor</p>
                        <p class="text-white mb-0">Copyright © <?php echo date('Y'); ?> <a href="<?php echo $home_url; ?>/sitemap_index.xml/" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">Bank of Makati</a> | <a href="https://seo-hacker.com/seo-philippines/" target="_blank" rel="noopener noreferrer">SEO</a> by <a href="https://seo-hacker.net/" target="_blank" rel="noopener noreferrer">SEO-Hacker</a>. Optimized and maintained by <a href="https://sean.si/" target="_blank" rel="noopener noreferrer">Sean Si</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<?php wp_footer();
include('script-manager.php');
?>

</html>