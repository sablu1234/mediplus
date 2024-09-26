<?php 
// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'sablu_hasan' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'sablu_hasan' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'sablu_hasan' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'sablu_hasan' ),
		'archives' => __( 'portfolio Archives', 'sablu_hasan' ),
		'attributes' => __( 'portfolio Attributes', 'sablu_hasan' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'sablu_hasan' ),
		'all_items' => __( 'All portfolios', 'sablu_hasan' ),
		'add_new_item' => __( 'Add New portfolio', 'sablu_hasan' ),
		'add_new' => __( 'Add New', 'sablu_hasan' ),
		'new_item' => __( 'New portfolio', 'sablu_hasan' ),
		'edit_item' => __( 'Edit portfolio', 'sablu_hasan' ),
		'update_item' => __( 'Update portfolio', 'sablu_hasan' ),
		'view_item' => __( 'View portfolio', 'sablu_hasan' ),
		'view_items' => __( 'View portfolios', 'sablu_hasan' ),
		'search_items' => __( 'Search portfolio', 'sablu_hasan' ),
		'not_found' => __( 'Not found', 'sablu_hasan' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sablu_hasan' ),
		'featured_image' => __( 'Featured Image', 'sablu_hasan' ),
		'set_featured_image' => __( 'Set featured image', 'sablu_hasan' ),
		'remove_featured_image' => __( 'Remove featured image', 'sablu_hasan' ),
		'use_featured_image' => __( 'Use as featured image', 'sablu_hasan' ),
		'insert_into_item' => __( 'Insert into portfolio', 'sablu_hasan' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'sablu_hasan' ),
		'items_list' => __( 'portfolios list', 'sablu_hasan' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'sablu_hasan' ),
		'filter_items_list' => __( 'Filter portfolios list', 'sablu_hasan' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'sablu_hasan' ),
		'description' => __( 'portfolio', 'sablu_hasan' ),
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
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

?>