<?php	
	/* This code allows us to switch from desktop/mobile site */
	
	// add this code to your application.php after @session_start();
	
	if(!isset($_SESSION['version'])) { $_SESSION['version'] = "mobile"; }
	

	if(isset($_GET['ver']))
	{
		if($_GET['ver'] == "desktop") { $_SESSION['version'] = "desktop"; }
		
		if($_GET['ver'] == "mobile") { $_SESSION['version'] = "mobile"; }
	}


	if($_SESSION['version'] == "mobile")
	{
		
	require_once('mobile_device_detect.php');
	mobile_device_detect(true,true,true,true,true,true,true,'mobile/',false);	
				
	}
	
	// put this code on the bottom of your mobile site
	// <a href="http://www.domain.com?ver=desktop">Switch to Desktop Version</a>
	
	
	// put this code on the bottom of main site
	// <a href="http://www.domain.com/mobile/index.php">Switch to Mobile Version</a>
?>	