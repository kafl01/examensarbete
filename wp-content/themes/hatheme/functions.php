<?php

function setup_hatheme()
{
    //add theme support
    add_theme_support(feature: 'post-thumbnails');
    add_theme_support(feature: 'automatic-feed-links');
    add_theme_support(feature: 'custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
    add_theme_support(feature: 'title-tag');
    add_theme_support(feature: 'responsive-embeds');
    //create our menu locations
    register_nav_menus(
        [
            'primary' => __('Main navigation', 'hatheme'),
            'footer'  => __('Footer navigation', 'hatheme'),
        ]
    );

    load_theme_textdomain('mytheme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'setup_hatheme');

// Styles
function hatheme_styles()
{
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Roboto+Slab&display=swap');
    wp_enqueue_style('hatheme-style', get_theme_file_uri('style.css'));
}
add_action('wp_enqueue_scripts', 'hatheme_styles');
