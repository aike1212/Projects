<h2 class="left">
	<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" />
	<?php echo $user_info['user_login']; ?> <br />
	
	
	<form action="" method="post">
		<?php 
			global $wpdb;
			$get_user_id = $user_info['ID'];
			$query = $wpdb->query("
				SELECT *
				FROM wp_follow
				WHERE user_id = '$get_user_id'
			");
			
			if ($query == 0) {
		?>
			<input type="submit" class="user_btn open" value="(+) Follow Me" />
			<input type="submit" class="user_btn" value="(-) Unfollow Me" />
		<?php } else { ?>	
			<input type="submit" class="user_btn" value="(+) Follow Me" />
			<input type="submit" class="user_btn open" value="(-) Unfollow Me" />
		<?php } ?>
	</form>
	
	<a href="<? bloginfo('url');?>/logout" class="user_btn logout">Logout</a>
</h2>