<?php if(have_posts()): while(have_posts()):the_post(); ?>
	

	

	
<?php the_content(); ?>


<?php 

$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
echo "Posted By:<p>$fname $lname</p>";

?>
<p><?php echo get_the_date(); ?></p>
<?php 
echo "<p>TAGS</p>";
$tags = get_the_tags();
if($tags):
foreach($tags as $tag):?>

<a href="<?php echo get_tag_link($tag->term_id); ?>" class="btn btn-primary"> <?php echo $tag->name ?> </a>

	<?php endforeach; endif?>

	<?php 
	$categories = get_the_category();
	if($categories):
	echo "<p>CATEGORY</p>";
	foreach($categories as $cat):?>
	<a href="<?php echo get_category_link($cat->term_id) ;?>" class="btn btn-success" ><?php echo $cat->name ;?></a>


    <?php endforeach; endif;?>
    <?php wp_link_pages()  ;?>

    <?php comments_template() ;?>


<?php endwhile; else: endif;?>