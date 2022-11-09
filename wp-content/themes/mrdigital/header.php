<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<?php wp_head() ; ?>
</head>
<body>
	<header>
		This is a header
	</header>
	<div class=' nav_menus'>
		<?php
           
        wp_nav_menu(
   
        array(
      'theme-location'=> 'top-menu',
      'menu_class'=>'top_bar'
 
        ) 

        );

        

		 ?>
		</div>

