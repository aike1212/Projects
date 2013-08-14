<?php	
	$wpdb->update(
		'wp_follow',
		array('following' => $add_author),
		array('user_id' => $user_info_id)
	);

	$wpdb->update(
		'wp_follow',
		array('followers' => $add_follower),
		array('user_id' => $authors_id)
	);
?>