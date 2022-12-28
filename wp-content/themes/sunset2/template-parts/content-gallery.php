<?php

/*
	content-gallery
*/
// 			$comments = __('No Comments');


?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sunset-format-image' ); ?>>

	<header class="entry-header text-center background-image">		

		<?php 
			$attachments = get_posts( array(
				'post_type' => 'attachment',
				'posts_per_page' => 3,
				'post_parent' => get_the_ID()
			) );
			var_dump($attachments);
			//die();
			// if( sunset2_get_attachment() ):
			// 	$attatchments2 = sunset2_get_attachment(7);
			// endif;
			// foreach( $attatchments2 as $attatchment2 ):
			// 	echo "img src='". $attatchment2 ."'";
			// endforeach;
		?>


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