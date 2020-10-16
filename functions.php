<?php

define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function boot_carousel_default_function() {
    add_theme_support('post-thumbnails');

    register_post_type('bcarousel', array(
        'labels' => array(
            'name' => "CmpSlider Options",
            'add_new_item' => 'Ajouter'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-art',
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}

function boot_carousel_css_js () {
    wp_enqueue_style('carousel_style', get_stylesheet_directory_uri().'/slider/style.css');
    wp_enqueue_script('carousel_js', get_stylesheet_directory_uri().'/slider/main.js');
}

// add_action('wp_enqueue_scripts', 'boot_carousel_css_js');
add_action('after_setup_theme', 'boot_carousel_default_function');
?>