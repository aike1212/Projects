<?php
	/*
	 * Template Name: Forgot Password Template
	 */
	
	get_header();
	
	global $wpdb;

	include_once('CustomFunctions.php');
	$cf = new CustomFunctions;
	
	//die($cf->randomPassword());
	
	$validate = FALSE;
	$errorMessage = array();
	
	if (isset($_POST['username'])) {
		$user_name = $_POST['username'];
	
		$query = $wpdb->get_row("
			SELECT *
			FROM wp_users
			INNER JOIN wp_usermeta
			ON wp_usermeta.user_id = wp_users.ID
			WHERE wp_users.user_login='$user_name'
		", ARRAY_A);
		
		//print_r($query); exit;
	
		if($user_name == null || $user_name == "Enter your username") {
			$errorMessage[] = "Username is required.";
		} else if($query == null) {
			$errorMessage[] = "Username is not in our records.";	
		} 
		
		/*
		if($_POST['new-password'] == null) {
			$errorMessage[] = "Password is required.";
		} else if(strlen($_POST['new-password']) < 8) {
			$errorMessage[] = "Password must be at least 8 characters long.";
		} 
		
		if($_POST['cpassword'] != $_POST['new-password']) {
			$errorMessage[] = "Password and confirm password does not match.";
		}
		*/
		
		if($errorMessage == null || empty($errorMessage)) {
			$hash = md5($user_name);
		
			$myusername = addslashes($_POST['username']); 
			//$newpassword = addslashes($_POST['new-password']); 
			
			$myusername = mysql_real_escape_string($myusername);
			//$newpassword = mysql_real_escape_string($newpassword);
			
			$newpass = $cf->randomPassword();
			$newpassword = wp_hash_password($newpass);
			
			$wpdb->update(
				'wp_users',
				array(
					'new_pass' => $newpassword,
					'hash' => $hash
				),
				array('user_login' => $user_name)
			);
		
			$_SESSION['message'] = "An email has been sent to you for confirmation.";
			
			$to = $query['user_email'];
			//$headers = 'From: writegodathanku.scxserv.com' . "\r\n";
			$subject = 'Write God a Thank You Reset Password Confirmation';
			$message = "Hi ";
			$message .= $query['meta_value'] . ",<br /><br />";
			$message .= "You recently requested to reset your password at writegodathankyou.com.<br /><br /> Your new password is <big><strong>".$newpass."</strong></big>. You can change your password in the profile page after loging in. <br /><br /> Please confirm your new password by following the link below:<br /><br />";
			$message .= "<a href='http://writegodathankyou.com/login/?new_password_request=1&hash_value=".$hash."'>http://writegodathankyou.com/login/?new_password_request=1&hash_value=".$hash."</a><br /><br />";
			$message .= "Thank You,<br />- Write God a Thank You";
		
			add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
			wp_mail($to, $subject, $message);
		}
	}
?>

<div id="wrapper" style="margin:20px auto 40px !important; width:500px !important;">
	<div id="main" class="clearfix" style="padding:25px 0 0 !important; width:500px !important;">					
		<p id="signup-free">Forgot Password</p>
		
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
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" value="<?php echo (isset($_POST["username"]))? $_POST["username"] : "Enter your username"; ?>" onfocus="clearText(this);" onblur="clearText(this);" />
					<br class="clear" />
				</p>
				
				<!--
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
				-->
				
				<p class="center">
					<input type="submit" value="Reset" />
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
