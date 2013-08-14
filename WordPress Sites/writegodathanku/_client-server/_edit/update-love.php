<?php
	$input_post_id = $_POST['post_id'];
	$input_user_id = $_POST['user_id'];
	
	$get_post_info = $wpdb->get_row("
		SELECT *
		FROM wp_posts
		WHERE ID='$input_post_id'
	");
	
	$total_love = $get_post_info->love + 1;
	$total_user_love = $cf->add_followers($get_post_info->love_users,$input_user_id);

	$wpdb->update(
		'wp_posts',
		array(
			'love' => $total_love,
			'love_users' => $total_user_love
		),
		array('ID' => $input_post_id)
	);
	
	echo $total_love;
	exit;
?>

