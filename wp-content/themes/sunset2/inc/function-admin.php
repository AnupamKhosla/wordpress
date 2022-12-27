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
	add_submenu_page( 'sunset2_theme', 'Sunset2 2Theme Options', 'Sidebar', 'manage_options', 'sunset2_theme', 'sunset2_theme_create_page' );		
	add_submenu_page( 'sunset2_theme', 'Sunset2 Theme Options', 'Options', 'manage_options', 'sunset2_theme_options', 'sunset2_theme_create_options_page' );
	add_submenu_page( 'sunset2_theme', 'Contact Form', 'Contact Form', 'manage_options', 'sunset2_theme_contact', 'sunset2_theme_contact_page' );

	add_submenu_page( 'sunset2_theme', 'Sunset2 CSS Options', 'Custom CSS', 'manage_options', 'sunset2_theme_css', 'sunset2_theme_create_css_page' );


	//Activate custom settings, only if custom admin pages exists
	add_action( 'admin_init', 'sunset2_custom_settings' ); 
}
add_action( 'admin_menu', 'sunset2_add_admin_page' );  //when menu is loaded


function sunset2_custom_settings() {
	//Sidebar Options
	register_setting( 'sunset2-settings-group', 'first_name2' );
	register_setting( 'sunset2-settings-group', 'last_name2' );
	register_setting('sunset2-settings-group','user_description2');
	register_setting('sunset2-settings-group','profile_picture2');
	register_setting( 'sunset2-settings-group', 'twitter_handler2', 'sunset2_sanitize_twitter_handler' );
	add_settings_section( 'sunset2-sidebar-options', 'Sidebar Options', 'sunset2_sidebar_options', 'sunset2_theme' );
	add_settings_field( 'sidebar2-name', 'Full Name', 'sunset2_sidebar_name', 'sunset2_theme', 'sunset2-sidebar-options' );
	add_settings_field('sidebar2-description', 'description', 'sunset2_sidebar_description', 'sunset2_theme', 'sunset2-sidebar-options');
	add_settings_field('sidebar2-profile-picture', 'Profile Pic', 'sunset2_sidebar_picture', 'sunset2_theme', 'sunset2-sidebar-options');
	add_settings_field( 'sidebar2-twitter', 'Twitter Handler', 'sunset2_sidebar_twitter', 'sunset2_theme', 'sunset2-sidebar-options' );
	add_settings_field( 'sidebar2-facebook', 'Facebook Handler', 'sunset2_sidebar_facebook', 'sunset2_theme', 'sunset2-sidebar-options' );
	add_settings_field( 'sidebar2-gplus', 'Google+ Handler', 'sunset2_sidebar_gplus', 'sunset2_theme', 'sunset2-sidebar-options' );


	//Theme Support Options
	register_setting( 'sunset2-theme-support', 'post_formats', 'sunset2_sanitize_post_formats' );
	register_setting( 'sunset2-theme-support', 'custom_header' );
	register_setting( 'sunset2-theme-support', 'custom_background' );
	add_settings_section( 'sunset2-post-formats', 'Post Formats', 'sunset2_post_formats', 'sunset2_theme_options' );
	add_settings_field( 'post-formats', 'Activate Post Formats', 'sunset2_post_formats_callback', 'sunset2_theme_options', 'sunset2-post-formats' );
	add_settings_field( 'custom-header', 'Activate Custom Header', 'sunset2_custom_header', 'sunset2_theme_options', 'sunset2-post-formats' );
	add_settings_field( 'custom-background', 'Activate Custom Background', 'sunset2_custom_background', 'sunset2_theme_options', 'sunset2-post-formats' );


	// Contact Form Options
	register_setting( 'sunset2-contact-options', 'activate_contact' );
	add_settings_section( 'sunset2-contact-section', 'Contact Form', 'sunset2_contact_section', 'sunset2_theme_contact' );
	add_settings_field( 'activate-form', 'Activate Contact Form', 'sunset2_activate_contact', 'sunset2_theme_contact', 'sunset2-contact-section' );

	// Custom CSS Options
	register_setting( 'sunset2-custom-css-options', 'sunset2_css', 'sunset2_sanitize_custom_css' );
	add_settings_section( 'sunset2-custom-css-section', 'Custom CSS', 'sunset2_custom_css_section_callback', 'sunset2_theme_css' );
	add_settings_field( 'custom-css', 'Insert your Custom CSS', 'sunset2_custom_css_callback', 'sunset2_theme_css', 'sunset2-custom-css-section' );

}
function sunset2_sidebar_options() {
	echo 'Customize your Sidebar Information';
}
function sunset2_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name2' ) );
	$lastName = esc_attr( get_option( 'last_name2' ) );
	echo '<input type="text" name="first_name2" value="' . $firstName . '"placeholder="First Name" /><input type="text" name="last_name2" value="' . $lastName . '"placeholder="Last Name" />';
}
function sunset2_sidebar_description() {
	$description = esc_attr( get_option( 'user_description2' ) );
	echo  '<input type="text" name="user_description2" value="' . $description . '" placeholder="Description" />';
}
function sunset2_sidebar_picture() {
	$picture = esc_attr( get_option( 'profile_picture2' ) );
	if(empty($picture)) {
		echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button" /><input type="hidden" id="profile-picture" name="profile_picture2" value="" />';
	} else {
		echo '<input type="button" class="button button-secondary" value="Replace Profile Picture" id="upload-button" /><input type="hidden" id="profile-picture" name="profile_picture2" value="'.$picture.'" /><input type="button" class="button button-secondary remove-button" value="Remove" id="remove-picture" />';
	}	
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


//pages
function sunset2_theme_create_page() { //parent page
	require_once(get_template_directory() . '/inc/templates/sunset2-admin.php');
}
function sunset2_theme_contact_page() { //child page
	require_once(get_template_directory() . '/inc/templates/sunset2-contact-form.php');
}
function sunset2_theme_create_options_page() {
	require_once(get_template_directory() . '/inc/templates/sunset2-theme-support.php');
}
function sunset2_theme_create_css_page() {
	require_once(get_template_directory() . '/inc/templates/sunset2-custom-css.php');
}




function sunset2_sanitize_twitter_handler( $input ) {
	$output = sanitize_text_field( $input );
	$output = str_replace( '@', '', $output );
	return $output;
}
//post formats
function sunset2_sanitize_post_formats( $input ) {
	return $input;
}
function sunset2_post_formats() {
	echo 'Activate and Deactivate Post Formats';
}
function sunset2_post_formats_callback() {
	$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	$output = '';
	foreach ( $formats as $format ) {
		$checked = ( @get_option( 'post_formats' )[$format] == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="' . $format . '" name="post_formats[' . $format . ']" value="1" ' . $checked . ' />' . $format . '</label><br>';
	}
	echo $output;
}
function sunset2_custom_header() {
	$options = get_option( 'custom_header' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" ' . $checked . ' />Activate the Custom Header</label>';
}
function sunset2_custom_background() {
	$options = get_option( 'custom_background' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" ' . $checked . ' />Activate the Custom Background</label>';
}


//contact-form-setting section
function sunset2_contact_section() {
	echo 'Activate and Deactivate the Built-in Contact Form';
}
function sunset2_activate_contact() {
	$options = get_option( 'activate_contact' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" ' . $checked . ' />Activate the Contact Form</label>';
}



// custom css section
function sunset2_custom_css_section_callback() {
	echo 'Customize Sunset Theme with your own CSS';
}
function sunset2_custom_css_callback() {
	$css = get_option( 'sunset2_css' );	
	$css = ( empty($css) ? '/* Sunset Theme Custom CSS22 */' : $css );
	echo '<div id="customCss">' . $css . '</div><textarea id="sunset2_css" name="sunset2_css" style="display:none;visibility:hidden;">' . $css . '</textarea>';
}
function sunset2_sanitize_custom_css($css) {
	$css2 = esc_textarea( $_POST['sunset2_css'] );	
	return $css2;
}





function sunset2_custom_admin() {   
    $url = get_template_directory_uri() . '/css/wp-admin.css';
    echo '<!-- custom admin css -->
          <link rel="stylesheet" type="text/css" href="' . $url . '" />
          <!-- /end custom adming css -->';
}
add_action('admin_head', 'sunset2_custom_admin');
