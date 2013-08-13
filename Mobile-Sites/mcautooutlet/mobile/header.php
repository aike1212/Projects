<?php
	$current_page = basename($_SERVER['PHP_SELF']);
	
	if ($current_page == "Index.php") {
		$current_page = strtolower($current_page); 
	}

	define('CURRENTPAGE',$current_page);
	
	function isActive($page_name) { 
		if(CURRENTPAGE === $page_name) { 
			echo " class=\"active-menu\""; 
		}
	}
?>

<!--Header -->
<div id="header">
	<h1>MC Auto Outlet</h1>
	
	<ul id="nav">
		<li><a href="index.php" <?php isActive("index.php"); ?>>Home</a></li>
		<li><a href="about.php" <?php isActive("about.php"); ?>>About Us</a></li>
		<li><a href="services.php" <?php isActive("services.php"); ?>>Services</a></li>
		<li><a href="inventory.php" <?php isActive("inventory.php"); ?>>Inventory</a></li>
		<li><a href="contact.php" <?php isActive("contact.php"); ?>>Contact Us</a></li>
	</ul>
	
	<img src="assets/img_banner.jpg" alt= "Banner" id="banner" />
</div>