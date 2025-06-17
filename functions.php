<?php
// Theme setup 
function cbkladno_setup() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'cbkladno_setup');
function cbkladno_enqueue_scripts() {
  wp_enqueue_style('cbkladno-style', get_stylesheet_uri()); 
}
add_action('wp_enqueue_scripts', 'cbkladno_enqueue_scripts');