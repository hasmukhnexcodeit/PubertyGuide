<?php
/**
 * Astra Child Theme Functions
 */

function astra_child_enqueue_assets() {

    // Child theme stylesheet
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        array('astra-theme-css'),
        '1.0'
    );

    // Custom CSS
    wp_enqueue_style(
        'astra-child-custom-css',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        array(),
        '1.0'
    );

    // Custom JS
    wp_enqueue_script(
        'astra-child-custom-js',
        get_stylesheet_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'astra_child_enqueue_assets');