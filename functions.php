<?php
// Load CSS & JS
function wineclub_enqueue_scripts() {
    wp_enqueue_style('wineclub-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'wineclub_enqueue_scripts');


// Register Custom Post Types
function wineclub_register_post_types() {
    // Wine
    register_post_type('wine', array(
        'labels' => array(
            'name' => 'Wines',
            'singular_name' => 'Wine',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-wine',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'wines'),
        'show_in_rest' => true, // enable Gutenberg + REST API
    ));

    // Review
    register_post_type('review', array(
        'labels' => array(
            'name' => 'Reviews',
            'singular_name' => 'Review',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-status',
        'supports' => array('title', 'editor', 'author', 'custom-fields'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'reviews'),
        'show_in_rest' => true,
    ));

    // Member
    register_post_type('member', array(
        'labels' => array(
            'name' => 'Members',
            'singular_name' => 'Member',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'members'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'wineclub_register_post_types');