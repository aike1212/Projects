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
	<a href="index.php" id="logo" title="Affordable Construction Clean Up">
		<h1 class="hidden">Affordable Construction Clean Up</h1>
	</a>
	
	<p id="header-contact">
		Contact Us Today <big>361.765.8157</big> 
		<br />
		<em>bgoulet809@aol.com</em>
		<br />
		<em id="exp">Over 12 years in experience</em>
	</p>
	
	<br class="clear" />
	
	<ul id="nav" class="clearfix">
		<li <?php isActive("index.php"); ?>><a href="index.php">Home</a></li>
		<li <?php isActive("services.php"); ?>><a href="services.php">Services</a></li>
		<li <?php isActive("gallery.php"); ?>><a href="gallery.php?page=1#gallery">Gallery</a></li>
		<li <?php isActive("about.php"); ?>><a href="about.php">About Us</a></li>
		<li <?php isActive("contact.php"); ?>><a href="contact.php">Contact</a></li>
	</ul>
</div>
