<?php

//Style.css 
function blogz_resources() {
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action ('wp_enqueue_scripts', 'blogz_resources');

//Navigation Menu 
register_nav_menus(array(
    'primary' => __('Primary Menu')
));

// Featured Image
add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 180, 120, true);
add_image_size('banner-image', 920, 210, true);