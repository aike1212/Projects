<?php 	
	$is_following = $wpdb->get_row("
		SELECT * 
		FROM wp_follow
		WHERE user_id = '$get_the_author->ID'
	");
?>	