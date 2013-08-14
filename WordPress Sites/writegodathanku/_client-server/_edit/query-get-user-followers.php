<?php
	$follow_unfollow = $wpdb->get_row("
		SELECT * 
		FROM wp_follow
		WHERE user_id='$user_info->ID'
	");
?>