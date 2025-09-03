<?php get_header();
/*Template Name: Terms and Condition*/
?>
<style>
    section.terms_and_condition p{
        margin-bottom: 30px;
    }

    section.terms_and_condition p:last-of-type{
        margin-bottom: 0;
    }
</style>
<section class="terms_and_condition">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1><?php echo get_the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>