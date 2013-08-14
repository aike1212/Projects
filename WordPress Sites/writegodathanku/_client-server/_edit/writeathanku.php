<?php
	/*
	 * Template Name: Write a Thank You Template
	 */
	
	// die(function_exists('session_start'));
	
	get_header();
	
	if (isset($_SESSION['login_user'])) {
	
		include_once('get_database.php');
		
		$user = $_SESSION['login_user'];

		$query = "
				SELECT * 
				FROM wp_users 
				WHERE user_login = '$user' 
			";
			
		$result = mysql_query($query);
		$user_info = mysql_fetch_array($result);
		
		$categories = get_categories(array('hide_empty' => 0));

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
			if($_POST['post_category']) { 
			
				$my_post = array();
			  
				$my_post['post_title'] = $_POST['post_title'];
				$my_post['post_content'] = $_POST['post_content'];
				$my_post['post_status'] = 'publish';
				$my_post['post_type'] = 'post';
				$my_post['post_author'] = $user_info['ID'];
				$my_post['post_category'] = array($_POST['post_category']);
				
				wp_insert_post($my_post);	
			?>
				<p class="center" id="ty-submitted">
					You have sucessfully submitted a Thank You post. <br />
					View your thank you's <a href="<?php bloginfo( 'url' ); ?>/my-thank-yous">here</a>.
				</p>
	  <?php } else { ?>
				<form action="" method="post" id="post-ty">
					<fieldset>
						<p>
							<label for="post_category">Category: </label>
							<select id="category-list" name="post_category">
								<option selected="selected">-</option>
								<?php 
									foreach ($categories as $cat) {
										echo "<option value='" . $cat->cat_ID . "'>" . $cat->cat_name . "</option>";
									}
								?>
							</select>
						</p>
					
						<p>
							<label for="post_title">Subject: </label>
							<input type="text" id="post_title" name="post_title" value="Type in Subject of Thank You" onfocus="clearText(this);" onblur="clearText(this);" />
							<br class="clear" />
						</p>
						
						<p>
							<label for="post_content">Thank You: </label>
							<textarea id="post_content" name="post_content" rows="5" onKeyDown="limitText(this.form.post_content,this.form.countdown,1500);" onKeyUp="limitText(this.form.post_content,this.form.countdown,1500);" onfocus="writeThankYou(this);" onblur="writeThankYou(this);">Type your thank you here</textarea> 
							<br />
							
							<span id="countdown" class="block clearfix">
								(Maximum characters: 1500)
								<span class="right">You have <input readonly type="text" name="countdown" id="text-countdown" value="1500"> characters left.</span>
							</span>
							<br class="clear" />
						</p>
										
						<p class="center">
							<label for="null">&nbsp;</label>
							<input type="submit" value="Submit Thank You" />
						</p>
					</fieldset>
				</form>	
	  <?php } ?>
			
		</div>
	
		<br class="clear" />

		<?php get_footer(); ?>
<?php
	} else {
		wp_redirect($_SERVER['PHP_SELF'].'/login/');
	} 
	?>