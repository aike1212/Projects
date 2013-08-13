<div id="header">
	<a href="index.php" id="logo">
		<img src="images/common/img_logo.png" alt="Logo" style="border:none;" />
	</a>
	
	<p id="header-contact">
		Contact Us TODAY! <br />
		<span class="header-phone">888-235-4302</span> <br />
		<a href="#" class="emails">tsmith@totalremodeling.com</a>
		<a href="#" class="emails">jhernandez@totalremodeling.com</a>
	</p>
	
	<ul id="nav">
		<li <?php isActiveMenu("index.php"); ?>><a href="index.php">Home</a></li>
		<li <?php isActiveMenu("about.php"); ?>><a href="about.php">About Us</a></li>
		<li <?php isActiveMenu("portfolio.php"); ?>><a href="portfolio.php">Portfolio</a></li>
		<li <?php isActiveMenu("services.php"); ?>><a href="services.php">Services</a></li>
		<li <?php isActiveMenu("contact.php"); ?>><a href="contact.php">Contact Us</a></li>
	</ul>
	
	<?php if(CURRENTPAGE == 'index.php') { ?>
		<h2 class="center" id="banner-title">Over <span style="color:#000;">20 Years</span> of Expertise and Attentiveness to the Job.</h2>
		
		<p id="banner-container">
			<img src="images/common/img_banner.jpg" alt="Banner" />
		</p>
	<?php } ?>
</div>
