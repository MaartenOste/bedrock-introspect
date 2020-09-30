<?php

function introspect_add_theme_scriptsstyles() {
    
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '1.0', 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [ 'fontawesome' ], '1.0', 'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], 3.5, true);
    wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', [], 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'util', 'skel'], 1.1, true);
}
add_action('wp_enqueue_scripts', 'introspect_add_theme_scriptsstyles');


function introspect_setup() {
    register_nav_menus([
        'primary' => __('Hoofdmenu', 'introspect')
    ]); 
}
add_action('after_setup_theme', 'introspect_setup');