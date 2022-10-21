<?php

/* 
Main template file.
@package Advenced
*/

if ( ! defined( 'ADVANCED_DIR_PATH' ) ) {
    define( 'ADVANCED_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'ADVANCED_DIR_URI' ) ) {
    define( 'ADVANCED_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}




require_once ADVANCED_DIR_PATH . '/inc/helpers/autoloader.php';


function advanced_get_theme_instance() {
    \ADVANCED_THEME\Inc\ADVANCED_THEME::get_instance();
}

advanced_get_theme_instance();


function advanced_enqueue_scripts() {
    
}

add_action( 'wp_enqueue_scripts', 'advanced_enqueue_scripts' );