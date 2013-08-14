<?php
	/*
	 * Template Name: Login Template
	 */
	session_start();
	
	global $wpdb;
	
	$validate = FALSE;
	$errorMessage = array();
	
	if(isset($_GET['new_password_request']) && isset($_GET['hash_value'])) {
		$_SESSION['message'] = "Your password has been changed.";
		
		$hash_value = $_GET['hash_value'];
		
		$update_user = $wpdb->get_row("
			SELECT *
			FROM wp_users
			WHERE hash = '$hash_value'
		");
		
		$wpdb->update(
			'wp_users',
			array('user_pass' => $update_user->new_pass),
			array('hash' => $hash_value)
		);
	}
	
	if (isset($_POST['username'])) {
		$myusername = addslashes($_POST['username']); 
		$mypassword = addslashes($_POST['password']); 
		
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		
		$query = $wpdb->get_row("
			SELECT *
			FROM $wpdb->users
			WHERE user_login='$myusername'
		", ARRAY_A);
			
		if($validate == FALSE) {
			$post = '1';
			if($query != null) {	
				if (wp_check_password($mypassword,$query['user_pass'],"")) {
					$validate = TRUE;
					session_register("myusername");
					$_SESSION['login_user'] = $myusername;
					wp_redirect($_SERVER['PHP_SELF'].'/profile');
					// echo "<meta http-equiv='refresh' content='2;url=http://writegodathankyou.net/writegodathanku/profile'>";
				} else {
					$errorMessage[] = "Invalid password.";
				}
			} else {
				$errorMessage[] = "Invalid username.";
			}
		}
	} else {
	
		/* UNCOMMENT ON LIVE */	
		require 'src/facebook.php';

		$facebook = new Facebook(array(
		  'appId'  => '284914291621404',
		  'secret' => 'c9c3332ec0a3747b45d43432e7cc7930',
		));

		$user = $facebook->getUser();

		if ($user) {
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_profile = $facebook->api('/me');
			} catch (FacebookApiException $e) {
				error_log($e);
				$user = null;
			}
			
			//echo "<pre>"; print_r($user_profile); echo "</pre>"; exit;
			
			session_start();
			session_register("myusername");
			$_SESSION['login_user'] = $user_profile['username'];
			$user_login = $_SESSION['login_user'];
			
			$check_if_new_user = $wpdb->query("
				SELECT *
				FROM wp_users
				WHERE user_login = '$user_login'
			");
			
			if ($check_if_new_user == 0) {
				$user_id = wp_insert_user(array(
					'user_login' => $user_profile['username'],
					'first_name' => $user_profile['first_name'],
					'last_name' => $user_profile['last_name']
				));
				
				$facebook_prof_pic = "https://graph.facebook.com/".$user."/picture?type=large";
				
				$wpdb->update(
					'wp_users',
					array(
						'facebook_id' => $user_profile['id'],
						'profile_picture_url' => $facebook_prof_pic
					),
					array('ID' => $user_id)
				);	
				
				$wpdb->insert(
					'wp_follow',
					array('user_id' => $user_id)
				);
			}
				
			wp_redirect($_SERVER['PHP_SELF'].'/profile');
		}
	}
		
		get_header();
?>
		<div id="wrapper" style="margin:20px auto 40px !important; width:500px !important;">
			<div id="main" class="clearfix" style="padding:25px 0 0 !important; width:500px !important;">			
			
				<h2 class="login-header">LOGIN</h2>
				
				<p id="signup-free">And write God a Thank You</p>
				
				<?php if($post == '1') { ?>
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
				<?php } else if (isset($_SESSION['message'])) { ?>
					<p id='display-sucess'><strong><?php echo $_SESSION['message']; ?></strong></p>
					<?php unset($_SESSION['message']); ?>
				<?php } ?>

				<form action="" method="post" id="login" class="custom_forms">
					<fieldset>
						<p>
							<label for="username">Username:</label>
							<input type="text" id="username" name="username" value="Enter your username" onfocus="clearText(this);" onblur="clearText(this);" />
							<br class="clear" />
						</p>
						
						<p style="margin:15px 0 40px;">
							<label for="password">Password:</label>
							<input type="text" id="password" name="password" value="Enter your password" onfocus="clearText(this);" onblur="clearText(this);" />
							<br class="clear" />
						</p>
						
						<p class="center">
							<input type="submit" value="Login" />
						</p>
					</fieldset>
				</form>

				<p class="center" id="login-support">
					<a href="<?php bloginfo ( 'url' ); ?>/forgot-password">Forgot your password?</a> <br />
					If not a member, please <a href="<?php bloginfo ( 'url' ); ?>/sign-up">sign up</a> <br />
					<!-- UNCOMMENT ON LIVE -->
					<span style="padding-right:180px;">or you can</span> 
					<a href="<?php echo $facebook->getLoginUrl(); ?>" id="connect-with-facebook">Connect with Facebook</a>
				</p>
			</div> <!-- main -->
		</div> <!-- wrapper -->

<?php get_footer(); ?>
