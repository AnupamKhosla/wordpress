<?php  

//content-video.php
?>

<article id="post-<?php the_ID()?>" <?php post_class('video'); ?> >
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>' ); ?>
		<div class="entry-meta">
			<?php echo sunset2_posted_meta(); ?>
		</div><!-- .entry-meta -->
	</header>	
	<div class="entry-content">
		<?php 
		//if has audio
		echo  sunset2_get_embedded_media(array('video','iframe')); 
		?>
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		<div class="button-container text-center">
			<a href="<?php the_permalink(); ?>" class="btn btn-sunset2"><?php _e( 'Read More' ); ?></a>
		</div>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php echo sunset2_posted_footer(); ?>
	</footer><!-- .entry-footer -->
</article>