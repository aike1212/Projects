<?php	
	$myposts = $wpdb->get_results("
		SELECT * 
		FROM wp_posts
		WHERE post_type='post'
		AND post_status='publish'
		ORDER BY love DESC
	");
?>