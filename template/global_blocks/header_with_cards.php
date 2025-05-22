<?php if (have_rows('header_with_card')) : ?>
    <?php while (have_rows('header_with_card')) : the_row(); ?>

        <?php
        $section_background = get_sub_field('section_background');
        $section_classes = get_sub_field('section_classes');
        $small_text = get_sub_field('small_text');
        $header_title = get_sub_field('header_title');
        $header_description = get_sub_field('header_description');
        $background_color = get_sub_field('background_color');
        $count_cards = get_sub_field('count_cards');
        $box_shadow = get_sub_field('box_shadow');
        $card_choices = get_sub_field('card_choices');



        $count = 0;

        // Count total cards
        $card_count = 0;
        if (have_rows('cards')) {
            while (have_rows('cards')) {
                the_row();
                $card_count++;
            }
        }

        // Determine grid columns
        $grid_columns = "";
        if ($card_count == 4) {
            $grid_columns = "col-xl-3 col-lg-4 col-md-6";
        } elseif ($card_count >= 3) {
            $grid_columns = "col-lg-4 col-md-6";
        } elseif ($card_count >= 2) {
            $grid_columns = "col-lg-6";
        }

        // $display = '';
        // if($count_cards == true) {
        //     $display = "d-block";
        // } else {
        //     $display = "d-none";
        // }

        $display = '';
        if ($card_choices == "No Style") {
            $display = "d-none";
        }
        ?>

        <style>
            .card-box-shadow {
                box-shadow: 0px 12px 18.3px 0px rgba(0, 0, 0, 0.05);
            }
        </style>

        <section class="header_with_card_no_image <?php echo $section_classes; ?>" style="background: <?php echo $section_background; ?>;">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header">
                                <span class="orange_text"><?php echo $small_text; ?></span>
                                <h2><?php echo $header_title; ?></h2>
                                <?php echo $header_description; ?>
                            </div>
                        </div>
                        <?php if (have_rows('cards')): ?>
                            <?php while (have_rows('cards')): the_row();
                                $card_title = get_sub_field('card_title');
                                $card_description = get_sub_field('card_description');
                                $cards_icon = get_sub_field('cards_icon');
                                $card_link = get_sub_field('card_link');

                                $count++;
                            ?>
                                <div class="<?php echo $grid_columns; ?>">
                                    <div class="content <?php echo $box_shadow === true ? 'card-box-shadow' : ''; ?>" style="background: <?php echo $background_color; ?>;">
                                        <div class="content_numbers <?php echo $display; ?>">

                                            <?php if ($card_choices == "Card Count") { ?>
                                                <span><?php echo $count; ?></span>
                                            <?php } else if ($card_choices == "Card Icon") { ?>
                                                <img src="<?php echo $cards_icon['url']; ?>" alt="<?php echo $cards_icon['alt']; ?>">
                                            <?php } ?>
                                        </div>
                                        <h3><?php echo $card_title; ?></h3>
                                        <?php echo $card_description; ?>
                                        
                                        <?php if(!empty($card_link)) { ?>
                                            <a href="<?php echo $card_link['url']; ?>" class="orange_btn" target="_blank"><?php echo $card_link['title'] ?></a>
                                        <?php } ?>
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