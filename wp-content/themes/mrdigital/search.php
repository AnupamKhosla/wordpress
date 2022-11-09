<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
    <section class="row">
        
    
   

    <h1>Searh Result for "<?php echo get_search_query() ;?>"</h1>
    <?php if(have_posts()): while(have_posts()):the_post(); ?>

<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">
        
    <?php if(has_post_thumbnail()):?>
        
        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title() ;?>" class="img-fluid mb-3 img-thumbnail me-3">
      
      <?php endif;?>
        
    
<div class="blog-content">
        
<h3> <a href="<?php the_permalink() ;?>" class="line"> <?php the_title(); ?></a></h3>
<?php the_excerpt(); ?>
<div>
<a href="<?php the_permalink() ;?>" class="btn btn-success "> Read More...</a>
</div>
</div>

</div>



</div>
<?php endwhile; else: ?>
<?php echo "<h1> No Results Found </h1><br> <h2>Try With Different Search <h2>" ;?> 



<?php endif;?>



    </section>
    <div class="pagination center"> 
    <?php 
            
    
    
bittersweet_pagination(); ?>
</div>
</div>
</section>
<?php get_footer() ?>
   