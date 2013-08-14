<?php 

	switch ($current_page) {
		case 'index.php':
			$page_title 	= "Page Title";
			$page_desc 		= "Page Description";
			$page_keyword 	= "Page Keywords";
			break;
		default:
			$page_title 	= $websiteInfo['website_name'];
			$page_desc 		= "Default Page Decription";
			$page_keyword 	= "Default Page Keywords";
	}
	
?>