<?php 
// Register Custom Post Type client
function create_client_cpt() {

	$labels = array(
		'name' => _x( 'client', 'Post Type General Name', 'sablu_hasan' ),
		'singular_name' => _x( 'client', 'Post Type Singular Name', 'sablu_hasan' ),
		'menu_name' => _x( 'client', 'Admin Menu text', 'sablu_hasan' ),
		'name_admin_bar' => _x( 'client', 'Add New on Toolbar', 'sablu_hasan' ),
		'archives' => __( 'client Archives', 'sablu_hasan' ),
		'attributes' => __( 'client Attributes', 'sablu_hasan' ),
		'parent_item_colon' => __( 'Parent client:', 'sablu_hasan' ),
		'all_items' => __( 'All client', 'sablu_hasan' ),
		'add_new_item' => __( 'Add New client', 'sablu_hasan' ),
		'add_new' => __( 'Add New', 'sablu_hasan' ),
		'new_item' => __( 'New client', 'sablu_hasan' ),
		'edit_item' => __( 'Edit client', 'sablu_hasan' ),
		'update_item' => __( 'Update client', 'sablu_hasan' ),
		'view_item' => __( 'View client', 'sablu_hasan' ),
		'view_items' => __( 'View client', 'sablu_hasan' ),
		'search_items' => __( 'Search client', 'sablu_hasan' ),
		'not_found' => __( 'Not found', 'sablu_hasan' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sablu_hasan' ),
		'featured_image' => __( 'Featured Image', 'sablu_hasan' ),
		'set_featured_image' => __( 'Set featured image', 'sablu_hasan' ),
		'remove_featured_image' => __( 'Remove featured image', 'sablu_hasan' ),
		'use_featured_image' => __( 'Use as featured image', 'sablu_hasan' ),
		'insert_into_item' => __( 'Insert into client', 'sablu_hasan' ),
		'uploaded_to_this_item' => __( 'Uploaded to this client', 'sablu_hasan' ),
		'items_list' => __( 'client list', 'sablu_hasan' ),
		'items_list_navigation' => __( 'client list navigation', 'sablu_hasan' ),
		'filter_items_list' => __( 'Filter client list', 'sablu_hasan' ),
	);
	$args = array(
		'label' => __( 'client', 'sablu_hasan' ),
		'description' => __( 'client', 'sablu_hasan' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'client', $args );

}
add_action( 'init', 'create_client_cpt', 0 );

?>