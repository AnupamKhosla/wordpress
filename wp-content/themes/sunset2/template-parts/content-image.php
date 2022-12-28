<?php

/*
	
@package sunsettheme
-- Image Post Format

*/

//if has feat image
$feat_image = '';
if( has_post_thumbnail() ): 
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
else: 
	$feat_image = sunset2_get_attachment();
endif;
		$attachments = get_posts( array (
			'post_type' => 'attachment',
			'posts_per_page' => 1,
			'post_parent' => get_the_ID()
		) );
		var_dump($attachments);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sunset-format-image' ); ?>>

	<header class="entry-header text-center background-image" style="background-image: url(<?php echo $feat_image; ?>);">		
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>		
		<div class="entry-meta">
			<?php echo sunset2_posted_meta(); ?>
		</div>		
		<div class="entry-excerpt image-caption">
			<?php the_excerpt(); ?>
		</div>		
	</header>	
	<footer class="entry-footer">
		<?php echo sunset2_posted_footer(); ?>
	</footer>	
</article>