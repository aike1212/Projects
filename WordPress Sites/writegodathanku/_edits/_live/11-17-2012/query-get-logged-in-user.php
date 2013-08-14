<?php	
	$query = "
		SELECT * 
		FROM wp_users
	";
	
	if($user != null) {
		$query.="WHERE user_login='$user'";
	} else {
		$query.="WHERE user_login='$username'";
	}
	
	$user_info = $wpdb->get_row($query);
?>