<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>A Anchor Remodeling | Home</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">
				<div id="us-flag"></div>
				
				<?php include('top-content.php'); ?>
				
				<h2>Our Special Services</h2>
				
				<ul class="services">
					<li>Kitchen and bathroom</li>
					<li>General Remodeling</li>
					<li>Bathroom Remodeling</li>
					<li>Door Installation</li>
				</ul>
				
				<ul class="services">
					<li>Hardwood Flooring</li>
					<li>Tile Installation</li>
					<li>Roof Installation</li>
					<li>Fence Installation</li>
				</ul>
				
				<a href="#" id="more">And Much More...</a>
				
				<h3>
					<small style="color:#646464;">
						Call 
						<big style="color:#063159;">Aanchor Remodeling</big> 
						today at 
						<big style="color:#590000;">281-358-0281</big>
					</small>
				</h3>
			</div>
			
			<?php include('footer.php'); ?>
		</div>	
	</body>
</html>