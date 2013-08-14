<?php 
	if(get_the_author() == null) {
		$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		$author_info = explode('/', $url);	
		$author = $author_info[2];
		
		$get_the_author = $wpdb->get_row("
			SELECT * 
			FROM $wpdb->users
			WHERE user_nicename='$author';
		");
	} else {
		$the_author = get_the_author();
		
		$get_the_author = $wpdb->get_row("
			SELECT * 
			FROM $wpdb->users
			WHERE user_login='$the_author';
		");		
	}
?>