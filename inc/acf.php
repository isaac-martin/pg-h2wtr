<?php

//Functions Relating To Advanced Custom Fields


// add_filter('acf/settings/show_admin', '__return_false');

if( function_exists('acf_add_options_page') ) {

	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'redirect' 		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Top Info Bar',
		'menu_title' 	=> 'Top Bar',
		'parent_slug' 	=> $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media Accounts',
		'menu_title' 	=> 'Social Accounts',
		'parent_slug' 	=> $parent['menu_slug'],
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Newsletter Pop Up',
		'menu_title' 	=> 'Newsletter Pop Up',
		'parent_slug' 	=> $parent['menu_slug'],
	));


}
