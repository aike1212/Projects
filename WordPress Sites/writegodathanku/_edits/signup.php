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
		
		if($validate == TRUE) {
			$username = $_POST['username'];
			
			// Insert new record to users database
			wp_insert_user(array(
				'user_login' => $username,
				'user_pass' => $_POST['password'],
				'user_email' => $_POST['email'],
				'first_name' => $_POST['firstname'],
				'last_name' => $_POST['lastname']
			));
			
			include('query-get-logged-in-user.php');
			
			// Insert new record to follow database
			$wpdb->insert(
				'wp_follow',
				array('user_id' => $user_info->ID)
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
			*/
			
			session_register("username");
			$_SESSION['login_user'] = $username;
			
			//wp_redirect($_SERVER['PHP_SELF'].'/profile');
			echo '<meta http-equiv="refresh" content="2;url=http://writegodathanku.scxserv.com/profile">';
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
				
				<p class="center" style="margin:35px 0 0;">
					<input type="submit" value="Sign up now" />
				</p>
			</fieldset>
		</form>

		<p id="agreement">
			By clicking Sign Up, you are indicating that you have read and <br />
			agree to the Terms of Use and Privacy Policy.
		</p>
	</div> <!-- Main -->
</div> <!-- Wrapper -->

<?php get_footer(); ?>
