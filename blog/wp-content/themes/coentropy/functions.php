<?php
/**
 * CoEntropy Theme Functions
 */

// Theme setup
function coentropy_setup() {
    // Allow WordPress to manage the document title
    add_theme_support('title-tag');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Enable HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register nav menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'coentropy'),
    ));
}
add_action('after_setup_theme', 'coentropy_setup');

// Enqueue styles
function coentropy_scripts() {
    wp_enqueue_style(
        'coentropy-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'coentropy_scripts');

// Register sidebar widget area
function coentropy_widgets_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'coentropy'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown in the blog sidebar.', 'coentropy'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'coentropy_widgets_init');

// Add excerpt read more link
function coentropy_excerpt_more($more) {
    return '&hellip; <a class="read-more-link" href="' . get_permalink() . '">Read more &rarr;</a>';
}
add_filter('excerpt_more', 'coentropy_excerpt_more');

// Set excerpt length
function coentropy_excerpt_length($length) {
    return 40;
}
add_filter('excerpt_length', 'coentropy_excerpt_length');
