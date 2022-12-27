<h1>Sidebar Settings</h1>
<p>Below is the form</p>
<p>
	<?php bloginfo("name") ?>
</p>

<?php settings_errors(); ?>

<?php 
$firstName = esc_attr(get_option('first_name2'));
$lastName = esc_attr(get_option('last_name2'));
$fullName = $firstName . ' ' . $lastName;
$userDescription = esc_attr(get_option('user_description2'));
$picture = esc_attr(get_option('profile_picture2'));

?>

<section class="sunset2-sidebar-preview">
	<div class="sunset2-sidebar">
		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture">
				

				<img src="
				<?php 
				if(empty($picture)) { 
					print "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNk+P+/HgAFhAJ/wlseKgAAAABJRU5ErkJggg==";
				} else { 
					print $picture;
				} 
				?>" alt="Theme owner pic">
			</div>
		</div>
		<h1 class="sunset2-username"><?php echo $fullName; ?></h1>
		<h2 class="sunset2-description"><?php echo $userDescription; ?></h2>
		<div class="icons-wrapper"></div>
	</div>
</section>


<form class="sunset2-general-form" method="post" action="options.php">
	<?php		
		settings_fields('sunset2-settings-group');
		do_settings_sections('sunset2_theme');
		submit_button('Save Changes', 'primary', 'btnSubmit');
	?>
</form>		