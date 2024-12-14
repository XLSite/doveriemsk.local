<?php

add_action( 'wp_enqueue_scripts', 'dcenter_styles' );
add_action( 'wp_enqueue_scripts', 'dcenter_scripts', 11 );

function dcenter_styles() {
    wp_enqueue_style( 'animate-style', get_template_directory_uri(  ).'/assets/css/animate.css' );
    
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri(  ).'/assets/bootstrap/bootstrap.min.css' );
    wp_enqueue_style( 'slick-style', get_template_directory_uri(  ).'/assets/css/slick.css' );
    wp_enqueue_style( 'slicktheme-style', get_template_directory_uri(  ).'/assets/css/slick-theme.css' );
    wp_enqueue_style( 'super-style', get_template_directory_uri(  ).'/assets/css/super-classes.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );    
    wp_enqueue_style( 'mobile-style', get_template_directory_uri(  ).'/assets/css/mobile.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri(  ).'/assets/css/main.css' );
}


function dcenter_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri(  ).'/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'wow', get_template_directory_uri(  ).'/assets/js/wow.js', array('jquery') ,null,true);
    wp_enqueue_script( 'popper', get_template_directory_uri(  ).'/assets/js/popper.min.js', array('jquery') ,null,true);
    wp_enqueue_script( 'slick', get_template_directory_uri(  ).'/assets/js/slick.min.js', array('jquery') ,null,true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri(  ).'/assets/js/bootstrap.min.js', array('jquery') ,null,true);
    wp_enqueue_script( 'customjs', get_template_directory_uri(  ).'/assets/js/custom-script.js', array('jquery') ,null,true);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
