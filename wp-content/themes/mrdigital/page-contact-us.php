<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-3 ">
	<?php if( is_active_sidebar('page-sidebar')):?>
    <?php dynamic_sidebar('page-sidebar');?>
    
	<?php endif;?>
	</div>
	

	<div class="col-lg-9 ">
	<h1 class="center"><?php the_title(); ?></h1>
	<?php get_template_part('include/section','contactform') ; ?>
 </div>
</div>
</div>



<?php get_footer(); ?>
