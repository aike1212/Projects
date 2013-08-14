<?php
	/*
	 * Template Name: Following Template
	 */
	get_header();
	
	$user = $_SESSION['login_user'];
	
	include_once('get_database.php');

	$query = "
			SELECT * 
			FROM wp_users 
			WHERE user_login = '$user' 
		";
		
	$result = mysql_query($query);
	$user_info = mysql_fetch_array($result);
	
	$categories = get_categories(array('hide_empty' => 0));
	
	if ($user != null) {
		dynamic_sidebar('profile-menu');
?>
		<h2 class="left">
			<?php if ($user_info['profile_picture_url'] == null) { ?>
				<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" />
			<?php } else { ?>
				<img src="<?=$user_info['profile_picture_url'];?>" alt="<?=$user_info['user_login'];?>" id="profile-pic" width="175" height="175" />
			<?php } 
			
			echo $user_info['user_login']; ?> 
			
			<a href="<? bloginfo('url');?>/change-profile-picture" class="user_btn change-prof-pic iframe"><small>Change Profile Picture</small></a>
		</h2>
	
	<div id="profile-thank-yous" class="right">
		<?php 
		global $wpdb;
		$get_user_id = $user_info['ID'];
		$query = $wpdb->get_row("
			SELECT *
			FROM wp_follow
			WHERE user_id = '$get_user_id'
		");
		
		if ($query->following == null) { 
		?>
			<p class="unavailable">
				<small>You are not following anyone.</small>
			</p>
			
  <?php } else {			
			$following = $query->following;
		
			$get_user_data = $wpdb->get_results("
				SELECT *
				FROM wp_users
				WHERE ID IN ($following);
			");
		?>
		
		<p class="center" style="color:#FFF;">I'm following <?php echo count(explode(", ", $following)); ?> user(s).</p>

  <?php foreach ($get_user_data as $user_data) { ?>
			<div class="follow-container">
				<a href="<?php bloginfo('url'); ?>/author/<?=$user_data->user_nicename?>">
					<?php if ($user_data->profile_picture_url == null) { ?>
						<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" class="profile-pic" width="100" height="100" />
					<?php } else { ?>
						<img src="<?=$user_data->profile_picture_url; ?>" alt="image" width="100" height="100" class="profile-pic" />
					<?php } 
					the_author();?>
					<span class="center block" style="margin-bottom:10px;"><?php echo $user_data->user_login; ?></span>
					
					<small>
						Thanks: 0 <br />
						Categories: 0
					</small>
				</a>
			</div>
  <?php } 
	} ?>
	</div>
	
	<br class="clear" />
	
	<?php get_footer(); ?>
<?php 
	} else { 
		wp_redirect($_SERVER['PHP_SELF'].'/login');
	} ?>