<h1>Custom Contact Form</h1>

<?php settings_errors(); ?>

<?php 
// $firstName = esc_attr(get_option('first_name2'));
// $lastName = esc_attr(get_option('last_name2'));
// $fullName = $firstName . ' ' . $lastName;
// $userDescription = esc_attr(get_option('user_description2'));
// $picture = esc_attr(get_option('profile_picture2'));

?>

<form class="sunset2-general-form" method="post" action="options.php">
	<?php		
		settings_fields('sunset2-contact-options');
		do_settings_sections('sunset2_theme_contact');
		submit_button('Save Changes', 'primary', 'btnSubmit');
	?>
</form>		