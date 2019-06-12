<?php 

/*
Plugin Name:Praxis Custom Slider
Description: For Wordpress Theme Development.
Author:Sharmin Akter
Author Uri:http://www.msecreative.com

*/

add_action( 'init', 'praxis_slider_init' );
/**
 * Register a slider post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function praxis_slider_init() {
	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'praxis' ),
		'singular_name'      => _x( 'Slider', 'post type singular name', 'praxis' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'praxis' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'praxis' ),
		'add_new'            => _x( 'Add New', 'slider', 'praxis' ),
		'add_new_item'       => __( 'Add New Slider', 'praxis' ),
		'new_item'           => __( 'New Slider', 'praxis' ),
		'edit_item'          => __( 'Edit Slider', 'praxis' ),
		'view_item'          => __( 'View Slider', 'praxis' ),
		'all_items'          => __( 'All Sliders', 'praxis' ),
		'search_items'       => __( 'Search Sliders', 'praxis' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'praxis' ),
		'not_found'          => __( 'No slider found.', 'praxis' ),
		'not_found_in_trash' => __( 'No slider found in Trash.', 'praxis' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'praxis' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'slider', $args );
}
 ?>