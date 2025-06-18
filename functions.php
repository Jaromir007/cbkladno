<?php
// Theme setup 
function cbkladno_setup() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menus(array(
        'primary' => __('Primary', 'cbkladno'),
        'footer' => __('Footer', 'cbkladno')
    ));
}

add_action('after_setup_theme', 'cbkladno_setup');
function cbkladno_enqueue_scripts() {
  wp_enqueue_style('cbkladno-style', get_stylesheet_uri()); 
}
add_action('wp_enqueue_scripts', 'cbkladno_enqueue_scripts');

// Settings for new users
add_action('user_register', function ($user_id) {
    // Set admin color scheme to "modern"
    update_user_meta($user_id, 'admin_color', 'modern');

    // Set admin language to English (en_US)
    update_user_meta($user_id, 'locale', 'en_US');
});
