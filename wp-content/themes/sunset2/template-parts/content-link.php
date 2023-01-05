<?php  

 // content-link.php
 // -- Link post format
?>

<article id="post-<?php the_ID()?>" <?php post_class(array('sunset-format-link', get_query_var('class'))); ?> >
	<header class="entry-header text-center">
		<?php 
			the_title( '<h1 class="entry-title"><a href="'. esc_url( sunset2_grab_url() ) .'" target="_blank">', '<div class="link-icon"><span class="sunset-icon sunset-link"></span></div></a></h1>' );
		?>
	</header>	
</article>