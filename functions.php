<?php
function enqueue_my_styles() {
    // Register and enqueue your stylesheet
    wp_enqueue_style('my-custom-style', get_template_directory_uri() . './assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . './assets/js/script.js', array('jquery'), '1.0.0', true);
    // Enqueue Slick JavaScript
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick/slick.js', array('jquery'), '1.8.1', true);
    // Enqueue Slick CSS
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/slick/slick-theme.css', array(), '1.8.1');
    // Enqueue font awesome 
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/fontawesome/css/all.css', '1.0.0', '6.5.2');
    // Enqueue matchHeight js
    wp_enqueue_script('matchHeight', get_template_directory_uri() . '/assets/js/matchHeight/jquery.matchHeight.js', array('jquery'), '1.0', true);
}
// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_my_styles');

require get_template_directory() . '/inc/pattern-category.php';