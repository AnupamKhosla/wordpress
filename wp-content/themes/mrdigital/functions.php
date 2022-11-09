<?php
function load_css(){
wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
wp_enqueue_style('bootstrap');

wp_register_style('main',get_template_directory_uri().'/css/main.css', array(), false, 'all');
wp_enqueue_style('main');


}

add_action('wp_enqueue_scripts', 'load_css');

function load_js(){

	wp_enqueue_script('jquery');
	wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery', false, true );
	wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts','load_js');

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
   
    array(
     
       'top-menu'=> 'Top Menu Loctaion',
       'mobile-menu'=>'Mobile menu Location',
    )

);

 
 // add active class on state active 

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

//limit limit of word on post page
function wpdocs_custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// add class to the previous and next button


add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="btn btn-danger"';
}

// function to add bootstrap class to numbered-pagination

function bittersweet_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-wrap"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
        }
}

//blog-images
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

//Register Sidebar

function my_sidebar(){
   register_sidebar(
     array(
      'name'=> 'Page sidebar',
      'id' => 'page-sidebar',
      //'before_title' => '<h6 class-"widgets-title">',
      //'after_title' => '<h6>'
     )
   );

    register_sidebar(
     array(
      'name'=> 'Blog sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h6 class-"widgets-title">',
      'after_title' => '<h6>'
      
     )
   );
}
add_action('widgets_init','my_sidebar');


// remove default margin from top

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


// add custom class to tag
/*function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="class-name"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags');
*/


//custom page 

function my_first_post_type()
{

    $args = array(
       'labels' => array(
        'name' => 'Cars',
        'singular_name' => 'Car',
    ),
       'hierarchical' => true,
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','custom-fields'),
      'menu_icon' => 'dashicons-car',
      'show_in_menu' => true,
      'taxonomies'  => array( 'category', 'tags' ),
      //'rewrite' => array('slug' => my-cars)

    );
register_post_type('cars',$args);
}

add_action('init','my_first_post_type');


//add texonomy to customize page

function my_first_taxonomy(){

    

        $args = array(
         'labels' => array(
        'name' => 'Category',
        'singular_name' => 'Category',
        ),

         'public'=> true,
         'hierarchical' => true,

    );
        register_taxonomy('brands', array('cars'),$args);
 }
add_action('init', 'my_first_taxonomy');

// function my_second_taxonomy(){

    

//         $args = array(
//          'labels' => array(
//         'name' => 'tags',
//         'singular_name' => 'tag',
//         ),

//          'public'=> true,
//          'hierarchical' => true,

//     );
//         register_taxonomy('brands', array('cars'),$args);
// }
// add_action('init', 'my_second_taxonomy');
?>
