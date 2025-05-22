<?php if(have_rows('accordion_cards')) : ?>
    <?php while ( have_rows('accordion_cards') ) : the_row(); ?>
    
    <?php 
        $section_background_color = get_sub_field('section_background_color');
        $section_class = get_sub_field('section_class');
        $small_text = get_sub_field('small_text');
        $title = get_sub_field('title');

        $count = 0;

        // Count total cards
        $card_count = 0;
        if (have_rows('accordion_card')) {
            while (have_rows('accordion_card')) {
                the_row();
                $card_count++;
            }
        }

        $accordion_position = '';
        if($card_count % 2 == 1) {
            $accordion_position = 'accordion_left1';
        } else {
            $accordion_position = 'accordion_left2';
        }
    ?>

    <section class="accordion_cards <?php echo $section_class; ?>" style="background: <?php echo $section_background_color; ?>;">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <span class="orange_text"><?php echo $small_text; ?></span>
                            <h2><?php echo $title; ?></h2>
                        </div>
                    </div>
                    <?php if (have_rows('accordion_card')): ?>
                        <?php while (have_rows('accordion_card')): the_row(); 
                            $card_title = get_sub_field('accordion_title');
                            $card_description = get_sub_field('accordion_description');

                            $count++;
                        ?>
                        <div class="col-lg-6">
                            <div class="accordion" id="<?php echo $accordion_position; ?>">
                                <div class="accordion-item open">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?php echo $count; ?>">
                                            <h3 class="mb-0"><?php echo $card_title ?></h3>
                                        </button>
                                    </div>
                                    <div id="panelsStayOpen-collapse<?php echo $count; ?>" class="accordion-collapse collapse show" style="">
                                        <div class="accordion-body">
                                            <?php echo $card_description; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>