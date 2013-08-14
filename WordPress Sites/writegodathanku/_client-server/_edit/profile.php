<?php
	/*
	 * Template Name: Profile Template
	 */
	
	include_once('CustomFunctions.php');
	$cf = new CustomFunctions;
	
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
	$get_user_id = $user_info['ID'];
	
	$get_user = $wpdb->get_row("
		SELECT * 
		FROM wp_follow
		WHERE user_id = '$get_user_id'
	");
		
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
			$author_tys = 'author=' . $user_info['ID'] . ", " . $get_user->following . ", " . $get_user->followers;
			//die($author_tys);
			query_posts($author_tys); 
		
			if ( have_posts() ) {
				while ( have_posts() ) { 
					the_post();
					$the_author = get_the_author();

					$get_the_author = $wpdb->get_row("
						SELECT * 
						FROM $wpdb->users
						WHERE user_login='$the_author';
					");
					?>
					<div style="margin:30px 0 0;" class="clearfix">
						<p class="avatar-container">
							<a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_nicename');?>">
								<?php if ($get_the_author->profile_picture_url == null) { ?>
									<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="80" height="80" />
								<?php } else { ?>
									<img src="<?=$get_the_author->profile_picture_url;?>" alt="image" width="80" height="80" />
								<?php } 
								the_author();?>
							</a>
						</p>
					
						<div class="post">
							<del class="paper-fold"></del>
							<?php 
								$slug = get_the_category($post->ID); 
								$cf->category_image($slug[0]->slug); 
							?>
							<span class="right">
								<a href="#" title="Facebook">Facebook</a>
								<a href="#" title="Love It">Love It</a>
							</span>
							<br class="clear" />
							<h2><?php the_title(); ?></h2>
							<p class="post-date">Posted on <span style="color:#054BC2;"><?=get_the_date();?></span></p>
							<p><?php the_post_thumbnail(); ?></p>
							<?php the_content(); ?>
							<span id="love-ctr"><em>Love it! :</em> 0</span>
						</div>
					</div>
		  <?php } 				
			} else { ?>
				<p class="unavailable">
					<small>You have no available Thank You posts.</small>
				</p>
	  <?php } ?>
		</div>
		
		<br class="clear" />
<?php
		get_footer(); 
	} else { 
		//wp_redirect($_SERVER['PHP_SELF'].'/login');
		echo "<meta http-equiv='refresh' content='0;url=http://writegodathankyou.net/writegodathanku/login'>";
	} ?>