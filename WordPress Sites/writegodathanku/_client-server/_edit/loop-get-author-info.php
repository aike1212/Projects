<?php
	$curuser = get_userdata($post->post_author); 
	$the_author = get_the_author();
	$current_author_id = $curuser->ID;

	$get_the_author = $wpdb->get_row("
		SELECT * 
		FROM $wpdb->users
		WHERE ID='$current_author_id';
	");	
?>