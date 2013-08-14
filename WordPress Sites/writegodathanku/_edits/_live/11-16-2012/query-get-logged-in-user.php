<?php	
	$query = "
		SELECT * 
		FROM wp_users
	";
	
	$query.="WHERE user_login='$user'";
	
	$user_info = $wpdb->get_row($query);
?>