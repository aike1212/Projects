<?php 	
	
	session_start();
	
	if(isset($_GET['switch'])) { 
			$_SESSION['views'] = "desktop";
	};
	
	if(!isset($_SESSION['views'])) {
			$_SESSION['views'] = "mobile";
	}
	if(isset($_SESSION['views'])) {
			if($_SESSION['views'] == "mobile") {
			require_once('mobile_device_detect.php');
			mobile_device_detect(true,true,true,true,true,true,true,'mobile/index.php',false);	
			};
	}
	
	/* Edit this part */
	
	$websiteInfo = array(
		"website_name"			=> "Affordable Construction Clean Up and Grading Services",
		"server_path"			=> "affordableconstructioncleanupandgradingservices_com/"
		);
	
	$clientInfo = array(
		"name_of_client"		=> "Affordable Construction Clean Up and Grading Services",
		"client_email"			=> "mail.contactmailer@gmail.com",
		"client_email_password"	=> "xiU6XX4vqsqFuAg",
		"client_web_address"	=> "www.affordableconstructioncleanupandgradingservices.com"
		);
	
	$websiteSetting = array(
		"use_captcha"			=> true,
		);
	
	/* --------------------- */
	
	if(!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS']))
	{
		$uri = 'https://';
	} 
	else
	{
		$uri = 'http://';
	}
	
	$uri .= $_SERVER['HTTP_HOST']."/"; 
	
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		//set the directoy name if its in the localhost
		$uri .= $websiteInfo['server_path'];
	}
	else if($_SERVER['HTTP_HOST'] == "www.esilverconnect.com" || $_SERVER['HTTP_HOST'] == "esilverconnect.com")//<---- set this to the host
	{
		$uri .= "programs4/".$websiteInfo['server_path'];
	}
	
	$current_page = basename($_SERVER['PHP_SELF']);
	if($current_page == "Index.php"){
		$current_page = strtolower($current_page);
	}
	
	include_once('includes/seo.php');
	
	/* Variable Definitions */

	define('REALPATH',$uri);
	define('CURRENTPAGE',$current_page);
	define('PHPSELF',$_SERVER['PHP_SELF']);
	define('WEBSITENAME',$websiteInfo['website_name']);
	define('CLIENTNAME',$clientInfo['name_of_client']);
	define('CLIENTEMAIL',$clientInfo['client_email']);
	define('CLIENTEMAILPASSWORD',$clientInfo['client_email_password']);
	define('CLIENTWEBADDRESS',$clientInfo['client_web_address']);
	define('PAGETITLE',$page_title);
	define('PAGEDESCRIPTION',$page_desc);
	define('PAGEKEYWORDS',$page_keyword);
	define('USECAPTCHA',$websiteSetting['use_captcha']);
	
	/* Function */
	
	function isActiveMenu($page_name){
		
		if(basename($_SERVER['PHP_SELF']) === $page_name){
			echo " class=\"active\"";
		}
		
	}

?>