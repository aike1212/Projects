<?php
	/*
	 * Template Name: Forgot Password Template
	 */
	
	get_header();
	
	global $wpdb;

	$validate = FALSE;
	$errorMessage = array();
	
	if (isset($_POST['email'])) {
		$user_email = $_POST['email'];
	
		$query = $wpdb->get_row("
			SELECT *
			FROM wp_users
			INNER JOIN wp_usermeta
			ON wp_usermeta.user_id = wp_users.ID
			WHERE wp_users.user_email='$user_email'
		", ARRAY_A);
	
		if($user_email == null || $user_email == "Enter your email") {
			$errorMessage[] = "Email is required.";
		} else if($query == null) {
			$errorMessage[] = "Email is not in our records.";	
		} 
		
		if($_POST['new-password'] == null) {
			$errorMessage[] = "Password is required.";
		} else if(strlen($_POST['new-password']) < 8) {
			$errorMessage[] = "Password must be at least 8 characters long.";
		} 
		
		if($_POST['cpassword'] != $_POST['new-password']) {
			$errorMessage[] = "Password and confirm password does not match.";
		}
		
		if($errorMessage == null || empty($errorMessage)) {
			$hash = md5($hash);
		
			$myemail = addslashes($_POST['email']); 
			$newpassword = addslashes($_POST['new-password']); 
			
			$myemail = mysql_real_escape_string($myemail);
			$newpassword = mysql_real_escape_string($newpassword);
			
			$newpassword = wp_hash_password($newpassword);
			
			$wpdb->update(
				'wp_users',
				array(
					'new_pass' => $newpassword,
					'hash' => $hash
				),
				array('user_email' => $myemail)
			);
		
			$_SESSION['message'] = "An email has been sent to you for confirmation.";
			
			$to = $myemail;
			//$headers = 'From: writegodathanku.scxserv.com' . "\r\n";
			$subject = 'Write God a Thank You Reset Password Confirmation';
			$message = "Hi ";
			$message .= $query['meta_value'] . ",\n\n\t";
			$message .= "You recently requested to reset your password at writegodathankyou.com. Please confirm your new password by following the link below:\n\n";
			$message .= "http://writegodathankyou.com/login/?new_password_request=1&hash_value=".$hash."\n\n";
			$message .= "Thank You,\n- Write God a Thank You";
		
			//add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
			wp_mail($to, $subject, $message);
		}
	}
?>

<div id="wrapper" style="margin:20px auto 40px !important; width:500px !important;">
	<div id="main" class="clearfix" style="padding:25px 0 0 !important; width:500px !important;">					
		<p id="signup-free">Enter your new password</p>
		
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
			<p id='display-sucess'><strong><?php echo $_SESSION['message']; ?></strong></p>
			<?php unset($_SESSION['message']); ?>
		<?php } ?>

		<form action="" method="post" id="recover_password" class="custom_forms">
			<fieldset>
				<p>
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" value="<?php echo (isset($_POST["email"]))? $_POST["email"] : "Enter your email"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p>
					<label for="new-password">New Password:</label>
					<input type="text" id="new-password" name="new-password" value="Enter your new password" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p style="margin:15px 0 40px;">
					<label for="cpassword">Confirm Password:</label>
					<input type="text" id="cpassword" name="cpassword" value="Confirm new password" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<p class="center">
					<input type="submit" value="Save" />
				</p>
			</fieldset>
		</form>

		<p class="center" id="login-support">
			<a href="<?php bloginfo ( 'url' ); ?>/login">&laquo; Back to Login</a> <br />
			If not a member, please <a href="<?php bloginfo ( 'url' ); ?>/sign-up">sign up</a> <br />
		</p>
	</div>
</div>

<?php get_footer(); ?>
