<h1>Sunset2 Custom CSS</h1>

<?php settings_errors(); ?>

<?php 

//$picture = esc_attr(get_option('profile_picture2'));

?>

<form id="save-custom-css-form" class="sunset2-general-form" method="post" action="options.php">
	<?php		
		settings_fields('sunset2-custom-css-options');
		do_settings_sections('sunset2_theme_css');
		submit_button();
	?>
</form>		