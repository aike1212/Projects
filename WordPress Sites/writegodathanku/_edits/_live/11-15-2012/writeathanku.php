<?php
	session_start();

	global $wpdb, $wp_query;
	$user = $_SESSION['login_user'];

	$validate = FALSE;
	$errorMessage = array();
	
if ($user != null) {	
	
	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */
	
	$cf = new CustomFunctions;
	$profile = 1; /* Removes links in author profile pictures */
	$profiler = 'on';
	
	get_header();
		
		if ( have_posts() ) {
			the_post();
			
			include('query-get-post-author.php'); /* @var: get_the_author */
			
			$user_info_id = $user_info->ID;
			
			/**
			 * Check if a follower or not 
			 * @var: is_following
			 */
			include('query-check-if-following.php'); 
			include('query-get-user-followers.php'); //@var: follow_unfollow

			include('display-profile-picture.php'); 
			$path = $_SERVER['REQUEST_URI'];
?>
			<div id="main2" class="clearfix">
				<?php include('display-user-navigation.php'); ?>

				<div id="profile-post-wrapper" class="right">
					<div id="profile-post-container">	
						
						<div id="profile-thank-yous" class="right">
							<?php 
							if(isset($_POST['post_category'])) { 
							
								/*
								echo "<pre>";
								print_r($_POST); 
								exit;
								echo "</pre>";
								*/
							
								$post = '1';
								
								if($_POST['post_category'] == 'Pick a category') {
									$errorMessage[] = 'Please choose a category.';
								}
								
								if($_POST['post_title'] == 'Type in Subject of Thank You') {
									$errorMessage[] = 'Enter a subject/title for your thank you letter.';
								}
								
								if($_POST['post_content'] == '' || $_POST['countdown'] == 1500) {
									$errorMessage[] = 'Enter your thank you letter.';
								}
									
								if($errorMessage == null) {
									$_SESSION['message'] = "Your letter has been included. You will be redirected shortly.";
									
									$my_post = array();
									
									$my_post['post_title'] = $_POST['post_title'];
									$my_post['post_content'] = $_POST['post_content'];
									$my_post['post_status'] = 'publish';
									$my_post['post_type'] = 'post';
									$my_post['post_author'] = $user_info->ID;
									$my_post['post_category'] = array($_POST['post_category']);
									
									wp_insert_post($my_post);	
									
									//wp_redirect($_SERVER['PHP_SELF'].'/profile/?page=recent');
									echo "<meta http-equiv='refresh' content='0;url=http://writegodathankyou.com/profile/?page=recent'>";
								}
							}
							?>
						
						<?php if($errorMessage != null || !empty($errorMessage)) { ?>
							<div id="display-error">
								<p style=""><big><strong>The following errors have occured:</strong></big></p>
								<ul>
									<?php
										foreach ($errorMessage as $error) {
											echo "<li>" . $error . "</li>";
										}
									?>
								</ul>
							</div>
						<?php } else if(isset($_SESSION['message'])) { ?>
							<p id='display-sucess' style="margin:20px 20px 20px 60px;padding:5px;"><strong style="color:#3C0;"><?php echo $_SESSION['message']; ?></strong></p>
							<?php unset($_SESSION['message']); ?>
						<?php } ?>
						
								<!--<p id='display-sucess' style="margin:20px 20px 20px 60px;padding:5px;"><strong style="color:#3C0;">Your letter has been included. You will be redirected shortly.</strong></p>-->
						
								<form action="" method="post" id="post-ty">
									<fieldset>
										<p>
											<label for="post_category">Category: </label>
											<select id="category-list" name="post_category">
												<option selected="selected">Pick a category</option>
												<?php 
													$categories = get_categories(array('hide_empty' => 0));
													foreach ($categories as $cat) {
														echo "<option value='" . $cat->cat_ID . "'>" . $cat->cat_name . "</option>";
													}
												?>
											</select>
										</p>
									
										<p>
											<label for="post_title">Subject: </label>
											<input type="text" id="post_title" name="post_title" value="<?php echo (isset($_POST["post_title"]))? $_POST["post_title"] : "Type in Subject of Thank You"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
											<br class="clear" />
										</p>
										
										<p>
											<label for="post_content">Thank You: </label>
											<textarea id="post_content" name="post_content" rows="5" onKeyDown="limitText(this.form.post_content,this.form.countdown,1500);" onKeyUp="limitText(this.form.post_content,this.form.countdown,1500);" onfocus="writeThankYou(this);" onblur="writeThankYou(this);"></textarea> 
											<br />
											
											<span id="countdown" class="block clearfix">
												(Maximum characters: 1500)
												<span class="right">You have <input readonly type="text" name="countdown" id="text-countdown" value="1500"> characters left.</span>
											</span>
											<br class="clear" />
										</p>
														
										<p class="center" style="margin: 0 0 25px 45px;">
											<input type="submit" value="Include" />
										</p>
									</fieldset>
								</form>	
						</div>
					
						<br class="clear" />
					</div> <!-- Container -->
				</div> <!-- Wrapper -->
			</div> <!-- Main 2 -->
<?php
		} 
		get_footer();
	} else {
		echo '<meta http-equiv="refresh" content="0;url=http://writegodathanku.scxserv.com/login">';
	}
?>