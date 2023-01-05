<?php  

//single.php
?>

<article id="post-<?php the_ID()?>" <?php post_class('sunset-format', get_query_var('class')); ?> >
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">',  '</h1>' ); ?>
		<div class="entry-meta">
			<?php echo sunset2_posted_meta(); ?>
		</div><!-- .entry-meta -->
	</header>	
	<div class="entry-content">
		<?php if( has_post_thumbnail() ): 
			
			//the_post_thumbnail( 'sunset2-featured' ); 
			
		endif; ?>
		<div class="entry-excerpt">
			<?php the_content(); ?>
		</div>
		<div class="button-container text-center">
			<a href="<?php the_permalink(); ?>" class="btn btn-sunset2"><?php _e( 'Read More' ); ?></a>
		</div>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php echo sunset2_posted_footer(); ?>
	</footer><!-- .entry-footer -->
</article>