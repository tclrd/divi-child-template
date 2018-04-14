<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/* Pulling Modules */
require_once( __DIR__ . '/php/wp-admin.php');
require_once( __DIR__ . '/php/shortcodes/main.php');
require_once( __DIR__ . '/php/custom-post-types.php');
require_once( __DIR__ . '/php/custom-fields.php');