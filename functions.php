<?php
/**
 * BlogNova Theme Functions
 */

/*
 * 1. Load the CSS file.
 */
function blognova_enqueue_styles() {
    wp_enqueue_style(
        'blognova-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'blognova_enqueue_styles');


/*
 * 2. Enable WordPress features.
 */
function blognova_setup() {

    // Let WordPress manage the <title> tag.
    add_theme_support('title-tag');

    // Allow featured images.
    add_theme_support('post-thumbnails');

    // Create a custom navigation menu location.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'blognova'),
        'footer'  => __('Footer Menu', 'blognova'),
    ));
}
add_action('after_setup_theme', 'blognova_setup');


/*
 * 3. Set the content width.
 */
function blognova_content_width() {
    $GLOBALS['content_width'] = 1120;
}
add_action('after_setup_theme', 'blognova_content_width');


/*
 * 4. Add a small helper for post dates.
 */
function blognova_post_date() {
    echo esc_html(get_the_date('F j, Y'));
}
