<?php

function introspect_add_theme_scriptsstyles() {
    
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '1.0', 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [ 'fontawesome' ], '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'introspect_add_theme_scriptsstyles');