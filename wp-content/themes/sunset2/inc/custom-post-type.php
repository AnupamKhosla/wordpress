<?php
/*
	@package sunset2-theme
	========================
		Theme Custom post type
	========================
*/	

$contact = get_option( 'activate_contact' );
if ( !empty($contact) && ($contact == 1) ) {
	add_action( 'init', 'sunset2_contact_custom_post_type' );
	add_filter( 'manage_sunset2-contact_posts_columns', 'sunset2_set_contact_columns' );
	add_action( 'manage_sunset2-contact_posts_custom_column', 'sunset2_contact_custom_column', 10, 2 );
	add_action( 'add_meta_boxes', 'sunset2_contact_add_meta_box' );
	add_action( 'save_post', 'sunset2_save_contact_email_data' );
}

/* CONTACT CPT */
function sunset2_contact_custom_post_type() {
	$labels = array(
		'name'					=> 'Messages2',
		'singular_name'			=> 'Message2',
		'menu_name'				=> 'Messages',
		'name_admin_bar'		=> 'Message'
	);

	$args = array(
		'labels'				=> $labels,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'capability_type'		=> 'post',
		'hierarchical'			=> false,
		'menu_position'			=> 26,
		'menu_icon'				=> 'dashicons-email-alt',
		'supports'				=> array( 'title', 'editor', 'author' )
	);

	register_post_type( 'sunset2-contact', $args );
}

function sunset2_set_contact_columns( $columns ) {
	$newColumns = array();
	$newColumns['title'] = 'Full Name';
	$newColumns['message'] = 'Message';
	$newColumns['email'] = 'Email';
	$newColumns['date'] = 'Date';
	return $newColumns;
}

function sunset2_contact_custom_column( $column, $post_id ) {
	switch( $column ) {
		case 'message' :
			echo get_the_excerpt();
			break;
		case 'email' :
			$email = get_post_meta( $post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:'.$email.'">'.$email.'</a>';
			break;
	}
}

function sunset2_contact_add_meta_box() {
	add_meta_box( 'contact_email', 'User Email', 'sunset2_contact_email_callback', 'sunset2-contact', 'side' );
}

function sunset2_contact_email_callback( $post ) {
	wp_nonce_field( 'sunset2_save_contact_email_data', 'sunset2_contact_email_meta_box_nonce' );
	$value = get_post_meta( $post->ID, '_contact_email_value_key', true );
	echo '<label for="sunset2_contact_email_field">User Email Address: </label>';
	echo '<input type="email" id="sunset2_contact_email_field" name="sunset2_contact_email_field" value="'. esc_attr( $value ) .'" size="25" />';
}

function sunset2_save_contact_email_data($post_ID) {
	if( !isset( $_POST['sunset2_contact_email_meta_box_nonce'] ) ) {
		return;
	}
	if( !wp_verify_nonce( $_POST['sunset2_contact_email_meta_box_nonce'], 'sunset2_save_contact_email_data' ) ) {
		return;
	}
	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return;
	}
	if( !current_user_can( 'edit_post', $post_ID ) ) {
		return;
	}
	if( !isset( $_POST['sunset2_contact_email_field'] ) ) {
		return;
	}
	$my_data = sanitize_text_field( $_POST['sunset2_contact_email_field'] );
	update_post_meta( $post_ID, '_contact_email_value_key', $my_data );
}






