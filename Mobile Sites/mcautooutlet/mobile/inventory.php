<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>MC Auto Outlet | Inventory</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">
				<?php include('topContent.php'); ?>
				
				<h2><span>Inventory</span></h2> <br />
				
				<div>
					<a href="viewInventory.php?item=pontiac">
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_pontiac-tm.jpg" alt="2006 Pontiac GTO" /></dt>
							<dd>2006 Pontiac GTO</dd>
						</dl>
					</a>
					<a href="viewInventory.php?item=buick">
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_buick-tm.jpg" alt="2007 Buick Lacrosse CXS" /></dt>
							<dd>2007 Buick Lacrosse CXS</dd>
						</dl>
					</a>
					<a href="viewInventory.php?item=dodge">	
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_dodge-tm.jpg" alt="2007 Dodge Caliber SXT" /></dt>
							<dd>2007 Dodge Caliber SXT</dd>
						</dl>
					</a>
					<a href="viewInventory.php?item=saturn">	
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_saturn-tm.jpg" alt="2008 Saturn Aura XE" /></dt>
							<dd>2008 Saturn Aura XE</dd>
						</dl>
					</a>
					<a href="viewInventory.php?item=chevy">	
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_chevy-tm.jpg" alt="2008 Chevy HHR LS" /></dt>
							<dd>2008 Chevy HHR LS</dd>
						</dl>
					</a>
					<a href="viewInventory.php?item=cobalt">	
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_cobalt-tm.jpg" alt="2009 Chevrolet Cobalt LT" /></dt>
							<dd>2009 Chevrolet Cobalt LT</dd>
						</dl>
					</a>
					<a href="viewInventory.php?item=sebring">	
						<dl class="gallery-thumb">
							<dt><img src="assets/gallery/img_sebring-tm.jpg" alt="2010 Chysler Sebring limited" /></dt>
							<dd>2010 Chysler Sebring limited</dd>
						</dl>
					</a>
				</div>
				
				<?php // include('bottomContent.php'); ?>
			</div>
			
			<?php include('footer.php'); ?>
		</div>	
	</body>
</html>