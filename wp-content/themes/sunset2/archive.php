<?php 

	/*
		@package sunse2-theme
		archive.php
	*/
		

	get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main archive-page" role="main">

			<?php if(is_paged()): ?>
				<div class="container text-center container-load-previous">
					<a class="btn-sunset2-load sunset2-load-more" data-prev="1" data-page="<?php echo sunset2_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
						<span class="sunset2-icon sunset2-loading"></span>
						<span class="text">Load Previous</span>
					</a>
				</div><!-- .container -->
			<?php endif; ?>


			<div class="container sunset-posts-container">
				<?php 
					if( have_posts() ):
				?>
				<header class="archive-header text-center">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						//echo type of page


					?>
				</header>
				<?php
						echo "<div class='page-limit' data-page='" . $_SERVER["REQUEST_URI"] . sunset2_check_paged() . "'>";
						while( have_posts() ): the_post();
							$class = 'reveal';
							set_query_var( 'class', $class );
							get_template_part( 'template-parts/content', get_post_format() );						
						endwhile;
						echo "</div>";
					endif; 
				?>
			</div>
			<div class="container text-center">
				<a href="#!" class="btn btn-lg btn-default sunset2-load-more" data-page="<?php echo sunset2_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php') ?>">
					<span class="sunset-icon sunset-loading"></span>
					<span class="text">Load More</span>
				</a>

			</div>
		</main>
	</div><!-- #primary -->

<?php get_footer(); ?>