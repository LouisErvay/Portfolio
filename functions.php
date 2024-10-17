<?php

function load_scripts(){
    wp_enqueue_style( 'style', get_template_directory_uri(  ) . '/style.css', array(), '1.0', 'all' );

    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2', 'all' );
}
add_action( 'wp_enqueue_scripts','load_scripts' );

function register_menu(){
    register_nav_menu( 'header', __('header_menu') );
    register_nav_menu( 'footer', __('footer_menu') );
}
add_action( 'init', 'register_menu' );

function load_google_fonts(){
    wp_enqueue_style( "Roboto", "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap", array(), '1.0', false );
}