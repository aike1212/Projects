<?php
	/**
	 * Error reporting
	 */
	error_reporting( E_ALL & ~E_NOTICE );
	error_reporting( 0 );

	session_start();
	
	/* Edit this part */
	
	$websiteInfo = array(
		"website_name"			=> "Renovations By Total",
		"server_path"			=> "renovationsbytotal_com/",
		"subfolder_path"		=> "R/" // Change the letter here to subfolder used on server
		);
	
	$clientInfo = array(
		"name_of_client"		=> "Chris Edwards",
		"client_email"			=> "chris.edwards@totalremodeling.com",
		"client_web_address"	=> "www.esilverconnect.com",
		"client_smtp_email"		=> "mail.contactmailer@gmail.com", //no need to change unless SMTP account created by IT
		"client_email_password"	=> "xiU6XX4vqsqFuAg",			   //no need to change unless SMTP account created by IT
		"captcha_public_key" 	=> "6LdWh8YSAAAAALQFyEF_uR9cljh9U-HPqYZleko_",  //recaptcha public key - go to recaptcha.net
		"captcha_private_key" 	=> "6LdWh8YSAAAAAINIH6kgVXQobTVClOe5sZtN77aO"  //recaptcha private key
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
		$uri .= "betasites/".$websiteInfo['subfolder_path'].$websiteInfo['server_path'];
	}
	
	else if($_SERVER['HTTP_HOST'] == "www.scxserv.com" || $_SERVER['HTTP_HOST'] == "scxserv.com")//<---- set this to the host
	{
		$uri .= "".$websiteInfo['server_path'];
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
	define('CLIENTSMTPEMAIL',$clientInfo['client_smtp_email']);
	define('CLIENTEMAILPASSWORD',$clientInfo['client_email_password']);
	define('CLIENTWEBADDRESS',$clientInfo['client_web_address']);
	define('CAPTCHAPRIVATEKEY',$clientInfo['captcha_private_key']);
	define('CAPTCHAPUBLICKEY',$clientInfo['captcha_public_key']);
	define('PAGETITLE',$page_title);
	define('PAGEDESCRIPTION',$page_desc);
	define('PAGEKEYWORDS',$page_keyword);
	define('USECAPTCHA',$websiteSetting['use_captcha']);
	
	/* Function */
	
	function isActiveMenu($page_name){
		
		if(basename($_SERVER['PHP_SELF']) === $page_name){
			echo " class=\"active-menu\"";
		}
		
	}

?>