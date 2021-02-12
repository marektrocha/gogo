<?php



//  ======================= 1. STYLE AND JS ======================================================================

function load_stylesheets()
{
    // 1. Download bootstrap css from serwer (katalog otoedu)
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    // 2. Download style css from serwer (katalog otoedu)
    //    It is my style (not bootstrap). That must be second position
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);

    // add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');



//  ======================= 2. MENU =========================================================================

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('MenuUp (menu górne)', 'theme'),
        'footer-menu' => __('MenuDown (menu dolne)', 'theme'),
    )
);



//  ======================= 3. COUSTOM POST ==================================================================


// BOXES BLUE
function boxes() {

	$labels = array(
		'name'                  => _x( 'Boxes (content 1)', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Box', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Boxes (content 1)', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All boxes', 'text_domain' ),
		'add_new_item'          => __( 'Add box', 'text_domain' ),
		'add_new'               => __( 'Add box', 'text_domain' ),
		'new_item'              => __( 'New box', 'text_domain' ),
		'edit_item'             => __( 'Edit', 'text_domain' ),
		'update_item'           => __( 'Update', 'text_domain' ),
		'view_item'             => __( 'Show', 'text_domain' ),
		'view_items'            => __( 'Show', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    
	$args = array(
		'label'                 => __( 'box', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( '', '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'http://trocha.net.pl/trocha/wordpress/wp-content/themes/marek-trocha/images/portfolio.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'show_in_rest' 			=> true,
		'capability_type'       => 'page',
	);
	register_post_type( 'boxes', $args );

}
add_action( 'init', 'boxes', 0 );


// BOXES LIGHT-BLUE
function boxes2() {

	$labels = array(
		'name'                  => _x( 'Boxes (content 2)', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Box', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Boxes (content 2)', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All boxes', 'text_domain' ),
		'add_new_item'          => __( 'Add box', 'text_domain' ),
		'add_new'               => __( 'Add box', 'text_domain' ),
		'new_item'              => __( 'New box', 'text_domain' ),
		'edit_item'             => __( 'Edit', 'text_domain' ),
		'update_item'           => __( 'Update', 'text_domain' ),
		'view_item'             => __( 'Show', 'text_domain' ),
		'view_items'            => __( 'Show', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    
	$args = array(
		'label'                 => __( 'box', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( '', '' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'http://trocha.net.pl/trocha/wordpress/wp-content/themes/marek-trocha/images/portfolio.png',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'show_in_rest' 			=> true,
		'capability_type'       => 'page',
	);
	register_post_type( 'boxes2', $args );

}
add_action( 'init', 'boxes2', 0 );