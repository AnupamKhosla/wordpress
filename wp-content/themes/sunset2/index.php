<?php 

	/*
		@package sunse2-theme
	
	*/


	get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if( have_posts() ):

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', get_post_format() );
					
				endwhile;

			endif; ?>

		</main>
	</div><!-- #primary -->

<?php get_footer(); ?>