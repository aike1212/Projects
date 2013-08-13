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
	<h1>
		<a href="index.php">
			<img src="../images/common/img_logo.png" alt="A Anchor Remodeling" />
			<span class="hidden">A Anchor Remodeling</span>
		</a>
	</h1>
	
	<img src="assets/img_banner.jpg" alt="Banner" id="banner" />
	
	<ul id="nav" class="clearfix">
		<li><a href="index.php" <?php isActive("index.php"); ?>>Home</a></li>
		<li><a href="about.php" <?php isActive("about.php"); ?>>About Us</a></li>
		<li><a href="gallery.php?page=1#gallery" <?php isActive("gallery.php"); ?>>Gallery</a></li>
		<li><a href="services.php" <?php isActive("services.php"); ?>>Services</a></li>
		<li><a href="contact.php" <?php isActive("contact.php"); ?>>Contact Us</a></li>
	</ul>
</div>
