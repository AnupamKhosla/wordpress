<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
	<h1><?php echo single_cat_title() ;?></h1>
	<?php get_template_part('include/section','archive') ; ?>
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
