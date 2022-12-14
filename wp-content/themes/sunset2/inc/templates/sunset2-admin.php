<h1>General Settings</h1>
<p>Below is the form</p>
<?php bloginfo("name") ?>
<form method="post" action="options.php">
	<?php 
		settings_errors();
		settings_fields('sunset2-settings-group');
		do_settings_sections('sunset2_theme');
		submit_button();
	?>
</form>		