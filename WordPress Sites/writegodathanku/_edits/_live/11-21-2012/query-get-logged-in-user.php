<?php	
	if(isset($_GET['session'])) $session = $_GET['session'];

	$query = "
		SELECT * 
		FROM wp_users
	";
	
	if($user != null) {
		$query.="WHERE user_login='$user'";
	} else if(isset($_GET['session'])) {
		$query.="WHERE user_login='$session'";
	} else {
		$query.="WHERE user_login='$username'";
	}
	
	$user_info = $wpdb->get_row($query);
?>