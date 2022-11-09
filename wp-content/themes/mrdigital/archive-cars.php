 
 <?php get_header(); ?>
<section class="page-wrap">
<div class="container">
    
	 
	<?php get_template_part('archive') ; ?>
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
</secion>



<?php get_footer(); ?>