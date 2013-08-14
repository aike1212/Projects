<?php
	$post = 1;
			
	if($_POST['firstname'] == null || $_POST['firstname'] == "Enter your first name") {
		$errorMessage[] = "First name is required.";
	} else if(!ctype_alpha($_POST['firstname'])) {
		$errorMessage[] = "First name must be letters only.";
	}
	
	if($_POST['lastname'] == null || $_POST['lastname'] == "Enter your last name") {
		$errorMessage[] = "Last name is required.";
	} else if(!ctype_alpha($_POST['lastname'])) {
		$errorMessage[] = "Last name must be letters only.";
	}
	
	$email_format = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
	$user_email = $_POST['email'];
	
	$search_email = $wpdb->query("
		SELECT * 
		FROM wp_users
		WHERE user_email = '$user_email'
	");
	
	if($user_email == null || $user_email == "Enter your email") {
		$errorMessage[] = "Email is required.";
	} else if(!preg_match($email_format, $user_email)) {
		$errorMessage[] = "Email entered is invalid.";
	} else if($search_email != null) {
		$errorMessage[] = "Email entered is already taken. Please enter another email.";
	}
	
	/*
	if($_POST['city'] == null || $_POST['city'] == "Enter your city") {
		$errorMessage[] = "City is required.";
	} else if(!ctype_alpha(str_replace(' ', '', ($_POST['city'])))) {
		$errorMessage[] = "City must be letters only.";
	}
	
	if($_POST['country'] == null || $_POST['country'] == "Enter your country") {
		$errorMessage[] = "Country is required.";
	} else if(!ctype_alpha(str_replace(' ', '', ($_POST['country'])))) {
		$errorMessage[] = "Country must be letters only.";
	}
	*/
	
	if($_POST['username'] == null || $_POST['username'] == "Enter your username") {
		$errorMessage[] = "Username is required.";
	} else if(strlen($_POST['username']) < 4) {
		$errorMessage[] = "Username must be at least 4 characters long.";
	}
	
	if($_POST['password'] == null) {
		$errorMessage[] = "Password is required.";
	} else if(strlen($_POST['password']) < 8) {
		$errorMessage[] = "Password must be at least 8 characters long.";
	} 
	
	if($_POST['cpassword'] != $_POST['password']) {
		$errorMessage[] = "Password and confirm password does not match.";
	}
	
	if($_POST['birthday'] == null || $_POST['birthday'] == "Enter your birthday") {
		$errorMessage[] = "Birthday is required.";
	} else {
		$birthday = explode("/",$_POST['birthday']);
		$current_date = explode("/",date('m/d/Y'));
		
		$birthday = (double)$birthday[2];
		$current_date = (double)$current_date[2];
		
		if(($current_date - $birthday) < 13) $errorMessage[] = "You must be at least 13 years old to sign up.";
	}
	
	if($errorMessage == null) { 
		$validate = TRUE;
		$sucessMessage = "Thank you for signing up. You will be redirected shortly.";
	}
?>