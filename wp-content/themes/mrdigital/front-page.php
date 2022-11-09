<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
	<h1><?php the_title(); ?></h1>
	<div class="margin" ><?php get_template_part('include/section','content') ; ?>
	
</div>
<?php  get_template_part('include/search','form') ;?>
<br>
<br>
science <?php  get_template_part('include/search','form2') ;?>
</div>



</section>

 <?php get_footer(); ?>
