<?php
// Enqueue the main stylesheet
function mycustomtheme_enqueue_styles() {
    wp_enqueue_style('mycustomtheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_styles');


// Enable menu support
function mycustomtheme_setup() {
    add_theme_support('menus');

    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer'  => __('Footer Menu')
    ));
}
add_action('after_setup_theme', 'mycustomtheme_setup');
