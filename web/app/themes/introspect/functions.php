<?php

function introspect_add_theme_scriptsstyles() {
    
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '1.0', 'all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [ 'fontawesome' ], '1.0', 'all');
    wp_enqueue_style( 'main-2020', get_template_directory_uri() . '/assets/css/main-2020.css', [ 'main' ], '1.0', 'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', [], 3.5, true);
    wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array ( 'jquery' ), 1.0, true);
    wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', [], 1.0, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery', 'util', 'skel'], 1.1, true);
}
add_action('wp_enqueue_scripts', 'introspect_add_theme_scriptsstyles');


function introspect_setup() {
    // registratie van navigatiemenu
    register_nav_menus([
        'primary' => __('Hoofdmenu', 'introspect')
    ]); 

    // custom logo registreren
    add_theme_support( 'custom-logo');

    // custom header registreren
    add_theme_support( 'custom-header' );
}
add_action('after_setup_theme', 'introspect_setup');

function introspect_register_sidebars() {
    register_sidebar(
        array(
            'id'            => 'footer',
            'name'          => __( 'Footer' ),
            'description'   => __( 'Onderaan elke pagina' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'introspect_register_sidebars' );

// Register Custom Post Type
function introspect_register_stories() {

	$labels = array(
		'name'                  => _x( 'Verhalen', 'Post Type General Name', 'introspect' ),
		'singular_name'         => _x( 'Verhaal', 'Post Type Singular Name', 'introspect' ),
		'menu_name'             => __( 'Verhalen', 'introspect' ),
		'name_admin_bar'        => __( 'Verhaal', 'introspect' ),
		'archives'              => __( 'Item Archives', 'introspect' ),
		'attributes'            => __( 'Item Attributes', 'introspect' ),
		'parent_item_colon'     => __( 'Parent Item:', 'introspect' ),
		'all_items'             => __( 'All Items', 'introspect' ),
		'add_new_item'          => __( 'Add New Item', 'introspect' ),
		'add_new'               => __( 'Add New', 'introspect' ),
		'new_item'              => __( 'New Item', 'introspect' ),
		'edit_item'             => __( 'Edit Item', 'introspect' ),
		'update_item'           => __( 'Update Item', 'introspect' ),
		'view_item'             => __( 'View Item', 'introspect' ),
		'view_items'            => __( 'View Items', 'introspect' ),
		'search_items'          => __( 'Search Item', 'introspect' ),
		'not_found'             => __( 'Not found', 'introspect' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'introspect' ),
		'featured_image'        => __( 'Featured Image', 'introspect' ),
		'set_featured_image'    => __( 'Set featured image', 'introspect' ),
		'remove_featured_image' => __( 'Remove featured image', 'introspect' ),
		'use_featured_image'    => __( 'Use as featured image', 'introspect' ),
		'insert_into_item'      => __( 'Insert into item', 'introspect' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'introspect' ),
		'items_list'            => __( 'Items list', 'introspect' ),
		'items_list_navigation' => __( 'Items list navigation', 'introspect' ),
		'filter_items_list'     => __( 'Filter items list', 'introspect' ),
	);
	$args = array(
		'label'                 => __( 'Verhaal', 'introspect' ),
		'description'           => __( 'Verhalen over keizerspoort', 'introspect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'verhalen', $args );

}
add_action( 'init', 'introspect_register_stories', 0 );

// Register Custom Post Type
function introspect_register_offer() {

	$labels = array(
		'name'                  => _x( 'Aanbod', 'Post Type General Name', 'introspect' ),
		'singular_name'         => _x( 'Aanbod', 'Post Type Singular Name', 'introspect' ),
		'menu_name'             => __( 'Aanbod', 'introspect' ),
		'name_admin_bar'        => __( 'Aanbod', 'introspect' ),
		'archives'              => __( 'Item Archives', 'introspect' ),
		'attributes'            => __( 'Item Attributes', 'introspect' ),
		'parent_item_colon'     => __( 'Parent Item:', 'introspect' ),
		'all_items'             => __( 'All Items', 'introspect' ),
		'add_new_item'          => __( 'Add New Item', 'introspect' ),
		'add_new'               => __( 'Add New', 'introspect' ),
		'new_item'              => __( 'New Item', 'introspect' ),
		'edit_item'             => __( 'Edit Item', 'introspect' ),
		'update_item'           => __( 'Update Item', 'introspect' ),
		'view_item'             => __( 'View Item', 'introspect' ),
		'view_items'            => __( 'View Items', 'introspect' ),
		'search_items'          => __( 'Search Item', 'introspect' ),
		'not_found'             => __( 'Not found', 'introspect' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'introspect' ),
		'featured_image'        => __( 'Featured Image', 'introspect' ),
		'set_featured_image'    => __( 'Set featured image', 'introspect' ),
		'remove_featured_image' => __( 'Remove featured image', 'introspect' ),
		'use_featured_image'    => __( 'Use as featured image', 'introspect' ),
		'insert_into_item'      => __( 'Insert into item', 'introspect' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'introspect' ),
		'items_list'            => __( 'Items list', 'introspect' ),
		'items_list_navigation' => __( 'Items list navigation', 'introspect' ),
		'filter_items_list'     => __( 'Filter items list', 'introspect' ),
	);
	$args = array(
		'label'                 => __( 'Aanbod', 'introspect' ),
		'description'           => __( 'Aanbod van Keizerspoort', 'introspect' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'aanbod', $args );

}
add_action( 'init', 'introspect_register_offer', 0 );
