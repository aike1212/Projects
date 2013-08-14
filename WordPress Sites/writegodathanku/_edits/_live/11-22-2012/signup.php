<?php 
	/*
	 * Template Name: Sign Up Template
	 */
	get_header(); 

	global $wpdb;
	
	$errorMessage = array();
	$validate = TRUE;
	
	if(isset($_POST['firstname'])) {		
		$validate = FALSE;
	
		include('sign-up-validation.php');
		
		require_once('recaptchalib.php');
		$privatekey = "6Lenb9kSAAAAAKSSHX_po_R1fXczCPHiz5ynqdYa";
		$resp = recaptcha_check_answer ($privatekey,
																	$_SERVER["REMOTE_ADDR"],
																	$_POST["recaptcha_challenge_field"],
																	$_POST["recaptcha_response_field"]);

		if (!$resp->is_valid ) {
			$errorMessage[] = "The captcha entered is incorrect.";
		} else {
			if($validate == TRUE) {
				$username = $_POST['username'];
				
				// Insert new record to users database
				wp_insert_user(array(
					'user_login' => $username,
					'user_password' => '1234',
					'user_email' => $_POST['email'],
					'first_name' => $_POST['firstname'],
					'last_name' => $_POST['lastname']
				));
				
				$hash = md5($username);
				
				$wpdb->update(
					'wp_users',
					array(
						'new_pass' => wp_hash_password($_POST['password']),
						'sign_up_hash' => $hash
					),
					array('user_login' => $username)
				);
				
				/*
				// Insert user meta data city
				$wpdb->insert(
					'wp_usermeta',
					array(
						'user_id' => $user_info->ID,
						'meta_key' => 'city',
						'meta_value' => $_POST['city']
					)
				);
				
				// Insert user meta data country
				$wpdb->insert(
					'wp_usermeta',
					array(
						'user_id' => $user_info->ID,
						'meta_key' => 'country',
						'meta_value' => $_POST['country']
					)
				);
				
				session_register("username");
				$_SESSION['login_user'] = $username;
				
				*/
				
				include('query-get-logged-in-user.php');
				
				// Insert new record to follow database
				$wpdb->insert(
					'wp_follow',
					array('user_id' => $user_info->ID)
				);
				
				$email = $_POST['email'];
				
				$query = $wpdb->get_row("
					SELECT *
					FROM wp_users
					LEFT JOIN wp_usermeta
					ON wp_usermeta.user_id = wp_users.ID
					WHERE wp_users.user_email='$email'
				", ARRAY_A);
				
				$sucessMessage = "Sign up confirmation has been sent to your email.";
				
				$subject = 'Write God a Thank You Sign Up Confirmation';
				$headers[] = 'From: writegodathankyou.com <info@writegodathankyou.com>' . "\r\n";
				$message = "Hi ";
				$message .= $query['meta_value'] . ",<br /><br />";
				$message .= "You recently signed up for writegodathankyou.com.<br /><br /> Please confirm your registration by following the link below:<br /><br />";
				$message .= "<a href='http://writegodathankyou.com/profile/?session=".$username."&hash_value=".$hash."'>http://writegodathankyou.com/profile/?session=on&hash_value=".$hash."</a><br /><br />";
				$message .= "Thank You,<br />- Write God a Thank You";
			
				add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
				wp_mail($email, $subject, $message, $headers);
				
				//wp_redirect($_SERVER['PHP_SELF'].'/profile');
				//echo '<meta http-equiv="refresh" content="2;url=http://writegodathankyou.com/profile">';
			}
		}
	}
?>

<div id="wrapper" style="margin:20px auto 40px !important; width:500px !important;">
	<div id="main" class="clearfix" style="padding:25px 0 0 !important; width:500px !important;">					
		<h2 class="login-header">Sign Up</h2>

		<p id="signup-free">It's FREE to JOIN!</p>
		
		<?php if($validate == FALSE) { ?>
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
		<?php } else if($validate == TRUE && $sucessMessage != null) { ?>
			<p id="display-sucess"><strong><?php echo $sucessMessage; ?></strong></p>
		<?php } ?>
		
		<form action="" method="post" class="custom_forms" id="sign_up">
			<fieldset>
				<p>
					<label for="firstname">First Name: </label>
					<input type="text" id="firstname" name="firstname" value="<?php echo (isset($_POST["firstname"]))? $_POST["firstname"] : "Enter your first name"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="lastname">Last Name: </label>
					<input type="text" id="lastname" name="lastname" value="<?php echo (isset($_POST["lastname"]))? $_POST["lastname"] : "Enter your last name"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="email">Your Email: </label>
					<input type="text" id="email" name="email" value="<?php echo (isset($_POST["email"]))? $_POST["email"] : "Enter your email"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<!--
				<p>
					<label for="city">City: </label>
					<input type="text" id="city" name="city" value="<?php echo (isset($_POST["city"]))? $_POST["city"] : "Enter your city"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="country">Country: </label>
					<input type="text" id="country" name="country" value="<?php echo (isset($_POST["country"]))? $_POST["country"] : "Enter your country"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				-->
				
				<p>
					<label for="username">Create a Username: </label>
					<input type="text" id="username" name="username" value="<?php echo (isset($_POST["username"]))? $_POST["username"] : "Enter your username"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="password">Create a Password: </label>
					<input type="password" id="password" name="password"  value="" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="cpassword">Confirm Password: </label>
					<input type="password" id="cpassword" name="cpassword"  value="" />
					<br class="clear" />
				</p>
				
				<!--
				<p>
					<label for="password">I am: </label>
					<select name="sex">
						<option selected="selected">Select Sex</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<br class="clear" />
				</p>
				-->
				
				<p>
					<label for="birthday">Birthday: </label>
					<input type="text" id="birthday" name="birthday" value=""  />
					<br class="clear" />
				</p>
				
				<!-- Insert Captcha here -->
				<?php
          require_once('recaptchalib.php');
          $publickey = "6Lenb9kSAAAAAPNdcLQ8XwWWtBEDp8rukSTt7u0t"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
				
				<p id="agreement">
					By clicking Sign Up, you are indicating that you have read and <br />
					agree to the <a href="<?php bloginfo('url'); ?>/write-god-a-thank-you-terms-of-service">Terms of Use</a> and <a href="<?php bloginfo('url'); ?>/write-god-a-thank-you-privacy-policy">Privacy Policy</a>.
				</p>
				
				<p class="center" style="margin:20px 0 35px;">
					<input type="submit" value="Sign up now" />
				</p>
			</fieldset>
		</form>
	</div> <!-- Main -->
</div> <!-- Wrapper -->

<?php get_footer(); ?>
