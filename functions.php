<?php
/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 if ($_ENV['WP_ENV'] === 'dev') {
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );
 } else {
    wp_enqueue_style( 'parent', get_template_directory_uri().'/assets/style.min.css' );
 }
                     
}

function montheme_supports() {
    add_theme_support( 'custom-logo', array(
        'height'               => 210,
        'width'                => 240,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    ));
    register_nav_menu('foot','Menu du bas');
 
   
}

add_action('after_setup_theme','montheme_supports');
 
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');