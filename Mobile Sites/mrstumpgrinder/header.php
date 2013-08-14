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
	<a href="#"><img src="../images/layout/logo.png" alt="Logo" class="block" style="margin:10px auto;" width="270" /></a>
</div>

<div id="wrapper">
	<?php echo CURRENTPAGE != "index.php" ? '' : '<img src="assets/img_banner.jpg" alt="Banner" class="block" id="banner" />'; ?>

	<ul id="nav">
		<li><a href="index.php" <?php isActive("index.php"); ?>>Home</a></li>
		<li><a href="services.php" <?php isActive("services.php"); ?>>Services</a></li>
		<li><a href="gallery.php" <?php isActive("gallery.php"); ?>>Gallery</a></li>
		<li><a href="about.php" <?php isActive("about.php"); ?>>About Us</a></li>
		<li><a href="contact.php" <?php isActive("contact.php"); ?>>Contact Us</a></li>
	</ul>
