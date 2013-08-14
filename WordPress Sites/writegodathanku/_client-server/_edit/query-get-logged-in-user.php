<?php	
	$user_info = $wpdb->get_row("
		SELECT * 
		FROM wp_users
		WHERE user_nicename='$user'
	");
?>