<?php  

//content.php
?>

<article id="post-<?php the_ID()?>" <?php post_class(array('sunset-format-quote', get_query_var($class))); ?> >
	<header class="entry-header">
		<h1 class="quote-content">
			<?php echo get_the_content(); ?>
		</h1>
		<?php the_title( '<h2 class="quote-author">', '</h2>' ); ?>
	</header>	
	
	<footer class="entry-footer">
		<?php echo sunset2_posted_footer(); ?>
	</footer><!-- .entry-footer -->
</article>