<?php
/*
	@package sunset2-theme
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/	

function sunset2_load_admin_scripts($hook2){	
	if('toplevel_page_sunset2_theme' != $hook2){
		return;
	}
	//css for name and description section
	wp_register_style( 'sunset2_admin', get_template_directory_uri() . '/css/sunset2.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'sunset2_admin' );	

	//media uploader js
	wp_enqueue_media();


	//js for media upload
	wp_register_script( 'sunset2-admin-script', get_template_directory_uri() . '/js/sunset2.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'sunset2-admin-script' );
}
add_action( 'admin_enqueue_scripts', 'sunset2_load_admin_scripts' );
