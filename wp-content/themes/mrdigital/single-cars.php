<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class = "col-lg-9">
	<h1><?php the_title(); ?></h1>

	<?php if(has_post_thumbnail()):?>
      	
      	<img src="<?php the_post_thumbnail_url("blog-large"); ?>" alt="<?php the_title() ;?>" class="img-fluid mb-3 img-thumbnail">
      
      <?php endif;?>
	
  
	
	<?php get_template_part('include/section','cars') ; ?>
</div>
<div class="col-lg-3">
	<h3> Specifications</h3>
<ul>


<?php 


/*if(get_post_meta($post->ID, 'color', true)) :?>

	<li>color:<?php echo get_post_meta($post->ID, 'color', true);?>
</li>
<?php endif ;?>
<?php if(get_post_meta($post->ID, 'Registration', true)) ?>
	<li>Registration:<?php echo get_post_meta($post->ID, 'Registration', true);*/

echo "<li>" .the_field('color'). "</li>";
echo "<li>" .the_field('registration'). "</li>";

?>
	

</ul>
	</div>
</div>

</div>


<?php get_footer(); ?>