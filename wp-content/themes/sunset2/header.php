<?php 
	/*
		This is the template for the header

		@package sunset2-theme

	*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta name="description" content="<?php  bloginfo('description'); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	 <div class="container">		
		<div class="row">
			<div class="col-xs-12">				
				<div class="header-container background-image text-center" style="background-image: url(<?php header_image(); ?>);">					
					<header class="header-content table">
						<div class="table-cell">
							<h1 class="site-title sunset-icon">
								<span class="sunset-logo"></span>
								<span class=""><?php bloginfo( 'name' ); ?></span>
							</h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div><!-- .table-cell -->
					</header><!-- .header-content -->					
					<div class="nav-container">
						<?php 
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'primary-menu sunset-icon',
								'walker' => new Sunset2_Walker_Nav_Primary()
							) );
						?>
					</div><!-- .nav-container -->					
				</div><!-- .header-container -->				
			</div><!-- .col-xs-12 -->
		</div><!-- .row -->		
	</div><!-- .container-fluid -->