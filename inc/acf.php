<?php

//Functions Relating To Advanced Custom Fields

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


}
