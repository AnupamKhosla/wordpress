<?php

/*
	content-gallery
*/
// 			$comments = __('No Comments');



?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array('sunset-format-image', get_query_var('class')) ); ?>>

	<header class="entry-header text-center background-image">		

		<?php 
			if( sunset2_get_attachment() ): 
				$attachment = sunset2_get_attachment( 7 ); //forces to be array
				foreach( $attachment as $attachment ): 
					echo "<img src='". wp_get_attachment_url( $attachment->ID ) ."' alt=''>";
					echo "<span class='image-caption'>". $attachment->post_excerpt ."</span>";
				endforeach;
			endif; 
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