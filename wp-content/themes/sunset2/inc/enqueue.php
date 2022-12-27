<?php
/*
	@package sunset2-theme
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/	

function sunset2_load_admin_scripts($hook2){	
	if('toplevel_page_sunset2_theme' == $hook2) {		
		//css for name and description section
		wp_register_style( 'sunset2_admin', get_template_directory_uri() . '/css/sunset2.admin.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'sunset2_admin' );	

		//media uploader js
		wp_enqueue_media();

		//js for media upload
		wp_register_script( 'sunset2-admin-script', get_template_directory_uri() . '/js/sunset2.admin.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'sunset2-admin-script' );
	} else if('sunset2_page_sunset2_theme_css' == $hook2) {		
		//css for name and description section
		wp_register_style( 'ace', get_template_directory_uri() . '/css/sunset2.ace.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'ace', get_template_directory_uri() . '/css/sunset2.ace.css', array(), '1.0.0', 'all' );
		
		wp_enqueue_script( 'ace', get_template_directory_uri() . '/js/ace/ace.js', array('jquery'), '1.2.1', true );
		wp_enqueue_script( 'sunset2-custom-css-script', get_template_directory_uri() . '/js/sunset2.custom_css.js', array('jquery'), '1.0.0', true );
	} else {
		return;
	}
}
add_action( 'admin_enqueue_scripts', 'sunset2_load_admin_scripts' );




/*

	FRONT-END ENQUEUE FUNCTIONS
	
*/
function sunset2_load_scripts() {
	//css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.4.1', 'all' );
	wp_enqueue_style( 'sunset2', get_template_directory_uri() . '/css/sunset2.css', array(), '1.0.0', 'all' );
	//enqueue raleway font
	wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:200,300,500', array(), '1.0.0', 'all' );
	//move jquery to footer
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '', true);


	//js
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.4.1', true );
	wp_enqueue_script( 'sunset2', get_template_directory_uri() . '/js/sunset2.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'sunset2_load_scripts' );
