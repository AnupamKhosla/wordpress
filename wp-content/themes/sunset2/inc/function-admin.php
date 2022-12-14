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

	//Activate custom settings, only if custom admin pages exists
	add_action( 'admin_init', 'sunset2_custom_settings' ); 
}
add_action( 'admin_menu', 'sunset2_add_admin_page' );  //when menu is loaded


function sunset2_custom_settings() {
	register_setting( 'sunset2-settings-group', 'first_name2' );
	register_setting( 'sunset2-settings-group', 'last_name2' );
	register_setting( 'sunset2-settings-group', 'twitter_handler2', 'sunset2_sanitize_twitter_handler' );
	add_settings_section( 'sunset2-sidebar-options', 'Sidebar Options', 'sunset2_sidebar_options', 'sunset2_theme' );
	add_settings_field( 'sidebar2-name', 'Full Name', 'sunset2_sidebar_name', 'sunset2_theme', 'sunset2-sidebar-options' );
	add_settings_field( 'sidebar2-twitter', 'Twitter Handler', 'sunset2_sidebar_twitter', 'sunset2_theme', 'sunset2-sidebar-options' );
	add_settings_field( 'sidebar2-facebook', 'Facebook Handler', 'sunset2_sidebar_facebook', 'sunset2_theme', 'sunset2-sidebar-options' );
	add_settings_field( 'sidebar2-gplus', 'Google+ Handler', 'sunset2_sidebar_gplus', 'sunset2_theme', 'sunset2-sidebar-options' );
}
function sunset2_sidebar_options() {
	echo 'Customize your Sidebar Information';
}
function sunset2_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name2' ) );
	$lastName = esc_attr( get_option( 'last_name2' ) );
	echo '<input type="text" name="first_name2" value="' . $firstName . '"placeholder="First Name" /><input type="text" name="last_name2" value="' . $lastName . '"placeholder="Last Name" />';
}
function sunset2_sidebar_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handler2' ) );
	echo '<input type="text" name="twitter_handler2" value="' . $twitter . '"placeholder="Twitter Handler" /><p class="description">Input your Twitter username without the @ character.</p>';
}
function sunset2_sidebar_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handler2' ) );
	echo '<input type="text" name="facebook_handler2" value="' . $facebook . '"placeholder="Facebook Handler" />';
}
function sunset2_sidebar_gplus() {
	$gplus = esc_attr( get_option( 'gplus_handler2' ) );
	echo '<input type="text" name="gplus_handler2" value="' . $gplus . '"placeholder="Google+ Handler" />';
}



function sunset2_theme_create_page() { //parent page
	require_once(get_template_directory() . '/inc/templates/sunset2-admin.php');
}
function sunset2_theme_create_settings_page() {
	echo '<h1>Sunset2 Theme General Options</h1>';
}


//sanitize settings
function sunset2_sanitize_twitter_handler( $input ) {
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;
}




function sunset2_custom_admin() {   
    $url = get_template_directory_uri() . '/css/wp-admin.css';
    echo '<!-- custom admin css -->
          <link rel="stylesheet" type="text/css" href="' . $url . '" />
          <!-- /end custom adming css -->';
}
add_action('admin_head', 'sunset2_custom_admin');
