<?php 				
	$the_author = get_the_author();

	$get_the_author = $wpdb->get_row("
		SELECT * 
		FROM $wpdb->users
		WHERE user_login='$the_author';
	");			
?>
