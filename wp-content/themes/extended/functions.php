<?php 

add_action( 'wp_enqueue_scripts', 'extended_load_scripts' );
add_action('after_setup_theme', 'extended_setup_theme');

function extended_setup_theme(){
    add_theme_support( 'title-tag' );
}

function extended_load_scripts(){
    wp_enqueue_style( 'extended-style', get_stylesheet_uri());
    wp_enqueue_style('extended-flexslider', get_template_directory_uri().'/flexslider.css');
    wp_enqueue_style('extended-jquery-ui-1.9.2', get_template_directory_uri().'/css/jquery-ui-1.9.2.custom.css');

    wp_enqueue_script('extended-jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', [], null, true);
    wp_enqueue_script('extended-jquery.flexslider', get_template_directory_uri().'/js/jquery.flexslider.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-custom', get_template_directory_uri().'/js/custom.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-jquery.easing', get_template_directory_uri().'/js/jquery.easing.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-jquery.mousewheel', get_template_directory_uri().'/js/jquery.mousewheel.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-demo', get_template_directory_uri().'/js/demo.js', ['extended-jquery'], null, true);
    wp_enqueue_script('extended-jquery-ui-1.9.2.custom', get_template_directory_uri().'/js/jquery-ui-1.9.2.custom.js', ['extended-jquery'], null, true);
}

