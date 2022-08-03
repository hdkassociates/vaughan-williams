<?php

function register_posttypes() {

	$labels = array(
		'name' => _x('Letters', 'post type general name'),
		'singular_name' => _x('Letter', 'post type singular name'),
		'add_new' => _x('Add New', 'Letter item'),
		'add_new_item' => __('Add New Letter Item'),
		'edit_item' => __('Edit Letter Item'),
		'new_item' => __('New Letter Item'),
		'view_item' => __('View Letter Item'),
		'search_items' => __('Search Letters'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-media-document',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','author', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields')
	);

	register_post_type( 'letter' , $args );

	$labels = array(
		'name' => _x('Who we are', 'post type general name'),
		'singular_name' => _x('Who we are', 'post type singular name'),
		'add_new' => _x('Add New', 'Who we are item'),
		'add_new_item' => __('Add New Who we are item'),
		'edit_item' => __('Edit Who we are item'),
		'new_item' => __('New Who we are item'),
		'view_item' => __('View Who we are item'),
		'search_items' => __('Search Who we are'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-businesswoman',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','author', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields')
	);

	register_post_type( 'who-we-are' , $args );

	$labels = array(
		'name' => _x('Publishers', 'post type general name'),
		'singular_name' => _x('Publisher', 'post type singular name'),
		'add_new' => _x('Add New', 'Publisher item'),
		'add_new_item' => __('Add New Publisher item'),
		'edit_item' => __('Edit Publisher item'),
		'new_item' => __('New Publisher item'),
		'view_item' => __('View Publisher item'),
		'search_items' => __('Search Publishers'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_in_rest' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-star-empty',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','author', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields')
	);

	register_post_type( 'publisher' , $args );
}

add_action('init', 'register_posttypes');


?>