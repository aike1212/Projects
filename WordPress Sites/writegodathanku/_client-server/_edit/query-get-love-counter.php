<?php 
	$slug = get_the_category($post->ID); 
	$cf->category_image($slug[0]->slug); 
	
	$post_id = get_the_ID();
	
	$get_post_data = $wpdb->get_row("
		SELECT * 
		FROM wp_posts
		WHERE ID='$post_id'
	"); 
	
	$love_ctr = $get_post_data->love;
?>