<?php
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
?>