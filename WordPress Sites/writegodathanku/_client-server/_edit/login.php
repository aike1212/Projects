<?php
	/*
	 * Template Name: Login Template
	 */
	
	global $wpdb;
	
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
		
		if (wp_check_password($mypassword,$query['user_pass'],"")) {
			session_start();
			session_register("myusername");
			$_SESSION['login_user'] = $myusername;
			wp_redirect($_SERVER['PHP_SELF'].'/profile');
			// echo "<meta http-equiv='refresh' content='2;url=http://writegodathankyou.net/writegodathanku/profile'>";
		} else {
			echo "Your Username or Password is invalid";
		}
	} else {
	
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
		
		get_header();
?>

		<h2 class="login-header">LOGIN</h2>

		<form action="" method="post" id="login">
			<fieldset>
				<p>
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" value="Enter your username" onfocus="clearText(this);" onblur="clearText(this);" maxlength="10" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p class="center">
					<label for="null">&nbsp;</label>
					<input type="submit" value="Login" />
				</p>
			</fieldset>
		</form>

		<p class="center" id="login-support">
			<a href="<?php bloginfo ( 'url' ); ?>">Forgot your password?</a> <br />
			If not a member, please <a href="<?php bloginfo ( 'url' ); ?>/sign-up">sign up</a> <br />
			or you can <a href="<?php echo $facebook->getLoginUrl(); ?>">Login with Facebook</a>
		</p>
<?php 
	} ?>

<?php get_footer(); ?>
