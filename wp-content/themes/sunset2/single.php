<?php 

	/*
		@package sunse2-theme
	
	*/
		

	get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container ">
				<?php 
					if( have_posts() ):
						
						while( have_posts() ): the_post();
							$class = 'reveal';
							set_query_var( 'class', $class );
							get_template_part( 'template-parts/single', get_post_format() );	

							
							// echo get_previous_post_link("XXX%linkXXX");
							// the_post_navigation();
							if( comments_open() || get_comments_number() ):
								comments_template();
							endif;
						endwhile;
						
					endif; 
				?>
			</div>
			
		</main>
	</div><!-- #primary -->

<?php get_footer(); ?>