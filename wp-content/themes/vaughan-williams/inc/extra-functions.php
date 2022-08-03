<?php

add_action('wp_ajax_nopriv_logout_user_starter_theme', 'logout_user');
add_action('wp_ajax_logout_user_starter_theme', 'logout_user');

function logout_user() {
	wp_logout();
	die;
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Configuration',
		'menu_title'	=> 'Theme configuration',
		'menu_slug' 	=> 'theme-configuration-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-configuration-settings',
	));
}