<?php
set_query_var('data', array(
    'banner_bg' => get_field('background', get_the_ID()),
    'header' => get_field('header'),
    'content' => get_field('banner_content'),
    'button_text' => get_field('button_text'),
    'button_link' => get_field('button_link'),
    'id' => get_the_ID(),
));
get_template_part('template/banner');
