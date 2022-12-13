<?php
/*
	@package sunset2-theme
	========================
		ADMIN PAGE
	========================
*/	

function sunset2_add_admin_page(){
	//Generate Sunset2 Admin Page
	add_menu_page( 'Sunset2 Theme Options', 'Sunset2', 'manage_options', 'sunset2_theme', 'sunset2_theme_create_page', get_template_directory_uri().'/img/sun.png', 110 );
	
	//Generate Sunset2 Admin Sub Pages
	add_submenu_page( 'sunset2_theme', 'Sunset2 2Theme Options', 'General', 'manage_options', 'sunset2_theme', 'sunset2_theme_create_page' );
	add_submenu_page( 'sunset2_theme', 'Sunset2 Settings', 'Settings', 'manage_options', 'sunset2_theme_settings', 'sunset2_theme_create_settings_page' );
}
add_action( 'admin_menu', 'sunset2_add_admin_page' );
function sunset2_theme_create_page() { //parent page
	require_once( get_template_directory() . '/inc/templates/sunset2-admin.php' );
}
function sunset2_theme_create_settings_page() {
	echo '<h1>Sunset2 Theme General Options</h1>';
}



function sunset2_custom_admin() {   
    $url = get_template_directory_uri() . '/css/wp-admin.css';
    echo '<!-- custom admin css -->
          <link rel="stylesheet" type="text/css" href="' . $url . '" />
          <!-- /end custom adming css -->';
}
add_action('admin_head', 'sunset2_custom_admin');
