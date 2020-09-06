<?php

function alextheme_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'alextheme_theme_support');

function alextheme_menus()
{
    $location = array(
        'primary' => "Header menu",
        'footer' => "Footer menu"
    );

    register_nav_menus($location);
}

add_action('init', 'alextheme_menus');



function alextheme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('alextheme-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');
    wp_enqueue_style('alextheme-skeleton-style', get_template_directory_uri() . "/assets/css/skeleton.css", array(), '2.0.4', 'all');
}

add_action('wp_enqueue_scripts', 'alextheme_register_styles');



function alextheme_register_scripts()
{
    wp_enqueue_script('alextheme-script', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'alextheme_register_scripts');