<?php

add_action('wp_ajax_nopriv_logout_user_starter_theme', 'logout_user');
add_action('wp_ajax_logout_user_starter_theme', 'logout_user');

function logout_user() {
	wp_logout();
	die;
}

if (!class_exists('ACF')) {
	$theme_configuration = acf_add_options_page( [ 
	    'page_title'  => __('Theme configuration', 'cogpress'),
	    'menu_title'  => __('Configuration', 'cogpress'),
	    'capability'  => 'manage_options'
	   ]
	);

}