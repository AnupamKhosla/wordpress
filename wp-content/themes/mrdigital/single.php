<?php get_header(); ?>

<div class="container">
	<?php if(has_post_thumbnail()):?>
      	
      	<img src="<?php the_post_thumbnail_url("blog-large"); ?>" alt="<?php the_title() ;?>" class="img-fluid mb-3 img-thumbnail">
      
      <?php endif;?>
	

	<h1><?php the_title(); ?></h1>
	<?php get_template_part('include/section','blogcontent') ; ?>

</div>





<?php get_footer(); ?>