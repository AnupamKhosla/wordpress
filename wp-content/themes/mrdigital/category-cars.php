<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
    <section class="row">
        <div class="col-lg-3  ">
    
    <?php if( is_active_sidebar('blog-sidebar')):?>
    <?php dynamic_sidebar('blog-sidebar');?>
    <?php endif;?>
</div>
    
   <div class="col-lg-9">

    <h1><?php echo single_cat_title() ;?></h1>
    <?php get_template_part('cars'); ?>
    <?php if(have_posts()): while(have_posts()):the_post(); ?>

<div class="card mb-3">
    <div class="card-body d-flex justify-content-center align-items-center">
        
    <?php if(has_post_thumbnail()):?>
        
        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php get_the_title() ;?>" class="img-fluid mb-3 img-thumbnail me-3">
      
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
<?php endwhile; else: endif;?>


</div>
    </section>
    <div class="pagination center"> 
    <?php 
            
    /*global $wp_query;
        $big = 999999999;
        echo paginate_links( array(
            'base'         => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'total'        => $wp_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%'
            ) );
    ?>*/

    
bittersweet_pagination(); ?>
</div>
</div>
</section>
<?php get_footer() ?>
   