<?php
function divi_child() {

    $parent_style = 'divi-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'divi-child' );


/* Pulling Modules */
require_once( __DIR__ . '/php/wp-admin.php');
require_once( __DIR__ . '/php/shortcodes/main.php');
require_once( __DIR__ . '/php/custom-post-types.php');
require_once( __DIR__ . '/php/custom-fields.php');

