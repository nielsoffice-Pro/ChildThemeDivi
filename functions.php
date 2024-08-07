<?php
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_styles');
function my_child_theme_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style('divi-parent-style', get_template_directory_uri() . '/style.css');
    // Enqueue child theme stylesheet
    wp_enqueue_style('divi-child-style', get_stylesheet_directory_uri() . '/style.css', array('divi-parent-style'));
}


// Enqueue JavaScript file
add_action('wp_enqueue_scripts', 'enqueue_child_theme_scripts');
function enqueue_child_theme_scripts() {
    wp_enqueue_script(
        'child-theme-js', // Handle
        get_stylesheet_directory_uri() . '/js-child.js', // Path to the JS file
        array('jquery'), // Dependencies (optional, e.g., jQuery)
        null, // Version number (optional)
        true // Load in footer (true) or header (false)
    );
}


