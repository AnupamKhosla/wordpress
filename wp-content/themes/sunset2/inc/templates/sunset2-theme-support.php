<h1>Sunset2 Theme Support</h1>

<?php settings_errors(); ?>

<?php 

//$picture = esc_attr(get_option('profile_picture2'));

?>

<form class="sunset2-general-form" method="post" action="options.php">
	<?php		
		settings_fields('sunset2-theme-support');
		do_settings_sections('sunset2_theme_options');
		submit_button();
	?>
</form>		