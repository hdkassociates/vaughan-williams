<?php 

function custom_taxonomies() {
	
	// Add new taxonomy, make it hierarchical like categories
	$labels = array(
		'name' => _x('Staff Categories', 'taxonomy general name'),
		'singular_name' => _x('Staff Category', 'taxonomy singular name'),
		'search_items' =>  __('Search Staff Category'),
		'all_items' => __('All Staff Categories'),
		'parent_item' => __('Parent Staff Category'),
		'parent_item_colon' => __('Parent Staff Category'),
		'edit_item' => __('Edit Staff Category'), 
		'update_item' => __('Update Staff Category'),
		'add_new_item' => __('Add New Staff Category'),
		'new_item_name' => __('New Staff Category'),
		'menu_name' => __('Staff Categoryies'),
	);	
	
	// Register the taxonomy
	register_taxonomy('staff-cat',array('who-we-are'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_in_rest' => true, // Needed for tax to appear in Gutenberg editor.
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	));

}
//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'custom_taxonomies', 0);
?>