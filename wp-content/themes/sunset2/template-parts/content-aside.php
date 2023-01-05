<?php  

//content-aside.php
?>

<article id="post-<?php the_ID()?>" <?php post_class(array('aside', get_query_var('class'))); ?> >
	//bootstrap media
	<div class="media">
		<div class="media-left">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<img src=" <?php echo sunset2_get_attachment(); ?> " alt=""/>  
			</a>
		</div>
		<div class="media-body">
			<h4 class="media-heading">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
					<?php the_author(); ?>
				</a>
			</h4>
			<small>
				<?php the_date(); ?>
			</small>
			<?php the_content(); ?>
		</div>
</article>