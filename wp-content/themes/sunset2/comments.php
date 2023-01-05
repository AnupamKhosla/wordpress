<?php 

		
	printf(
				'%1$s comments on %2$s - %2$s - %2$s - %1$s',
				'XXX', 'YYY'
			);
	echo _nx( 'One comment on %2$s', '%1$s comments on %2$s', get_comments_number(), 'comments title', 'sunsettheme' );
	$args = array(
				'walker'			=> null,
				'max_depth' 		=> '',
				'style'				=> 'ol',
				'callback'			=> null,
				'end-callback'		=> null,
				'type'				=> 'all',
				'reply_text'		=> 'Reply',
				'page'				=> '',
				'per_page'			=> '',
				'avatar_size'		=> 64,
				'reverse_top_level' => null,
				'reverse_children'	=> '',
				'format'			=> 'html5',
				'short_ping'		=> false,
				'echo'				=> true
			);
			
			wp_list_comments( $args );

?>