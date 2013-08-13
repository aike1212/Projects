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
<div id="header" class="center">
	<a href="index.php">
		<img src="assets/img_logo.png" alt="Logo" id="logo" style="border:none;" />
	</a>
	
	<p id="nav">
		<a href="index.php" <?php isActive("index.php"); ?>>Home</a> |
		<a href="services.php" <?php isActive("services.php"); ?>>Services</a> |
		<a href="gallery.php?page=1#gallery" <?php isActive("gallery.php"); ?>>Gallery</a> |
		<a href="about.php" <?php isActive("about.php"); ?>>About Us</a> |
		<a href="contact.php" <?php isActive("contact.php"); ?>>Contact Us</a>
	</p>
	
	<div id="banner">
		<img src="assets/img_banner.png" alt="Banner" />
	</div>
</div>

<p class="center">
	<img src="../images/content/image_top_1.png" alt="Content Image 1" style="display:inline; margin:0 10px 10px 0;" />
	<img src="../images/content/image_top_2.png" alt="Content Image 2" style="display:inline; margin:0 10px 10px 0;" />
	<img src="../images/content/image_top_3.png" alt="Content Image 3" style="display:inline; margin:0 10px 10px 0;" />
	<img src="../images/content/image_top_4.png" alt="Content Image 4" style="display:inline; margin:0 10px 10px 0;" />
</p>