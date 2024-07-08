<?php

function herai_rafah_isp_enqueue_styles()
{
    // Custom Styles
    wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/assets/css/custom-styles.css');
    wp_enqueue_style('responsive-styles', get_stylesheet_directory_uri() . '/assets/css/responsive.css');

    // Bootstrap
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/lib/bootstrap5.1.3/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'herai_rafah_isp_enqueue_styles');


function herai_rafah_isp_enqueue_scripts()
{
    // Register and enqueue jQuery
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), '3.7.1', true);
    wp_enqueue_script('jquery');

    // Custom JavaScript Code 
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom-js.js', array(), true);
}

add_action('wp_enqueue_scripts', 'herai_rafah_isp_enqueue_scripts');
