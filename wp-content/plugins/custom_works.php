<?php 

/*
Plugin Name:Praxis Works Post
Description: For Wordpress Theme Development.
Author:Sharmin Akter
Author Uri:http://www.msecreative.com

*/

add_action( 'init', 'praxis_work_init' );
/**
 * Register a works post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function praxis_work_init() {
	$labels = array(
		'name'               => _x( 'Works', 'post type general name', 'praxis' ),
		'singular_name'      => _x( 'Work', 'post type singular name', 'praxis' ),
		'menu_name'          => _x( 'Works', 'admin menu', 'praxis' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'praxis' ),
		'add_new'            => _x( 'Add New', 'work', 'praxis' ),
		'add_new_item'       => __( 'Add New Work', 'praxis' ),
		'new_item'           => __( 'New Work', 'praxis' ),
		'edit_item'          => __( 'Edit Work', 'praxis' ),
		'view_item'          => __( 'View Work', 'praxis' ),
		'all_items'          => __( 'All Works', 'praxis' ),
		'search_items'       => __( 'Search Works', 'praxis' ),
		'parent_item_colon'  => __( 'Parent Works:', 'praxis' ),
		'not_found'          => __( 'No work found.', 'praxis' ),
		'not_found_in_trash' => __( 'No work found in Trash.', 'praxis' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'praxis' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', )
	);

	register_post_type( 'work', $args );
}


// Register Custom Taxanomy
add_action( 'init', 'praxis_work_category', 0 );

// create two taxonomies, genres and Works for the post type "book"
function praxis_work_category() {

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Categories', 'taxonomy general name', 'praxis' ),
		'singular_name'              => _x( 'Category', 'taxonomy singular name', 'praxis' ),
		'search_items'               => __( 'Search Categories', 'praxis' ),
		'popular_items'              => __( 'Popular Categories', 'praxis' ),
		'all_items'                  => __( 'All Categories', 'praxis' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Category', 'praxis' ),
		'update_item'                => __( 'Update Category', 'praxis' ),
		'add_new_item'               => __( 'Add New Category', 'praxis' ),
		'new_item_name'              => __( 'New Category Name', 'praxis' ),
		'separate_items_with_commas' => __( 'Separate Categories with commas', 'praxis' ),
		'add_or_remove_items'        => __( 'Add or remove Categories', 'praxis' ),
		'choose_from_most_used'      => __( 'Choose from the most used Categories', 'praxis' ),
		'not_found'                  => __( 'No Categories found.', 'praxis' ),
		'menu_name'                  => __( 'Categories', 'praxis' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'cateogry' ),
	);

	register_taxonomy( 'works_cateogry', 'work', $args );
}

 ?>