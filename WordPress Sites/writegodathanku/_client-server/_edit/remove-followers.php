<?php	
	$wpdb->update(
		'wp_follow',
		array('following' => $remove_author),
		array('user_id' => $user_info_id)
	);

	$wpdb->update(
		'wp_follow',
		array('followers' => $remove_follower),
		array('user_id' => $get_the_author->ID)
	);	
?>