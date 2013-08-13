<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Matt B's Lawn Care | Home</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">
				<h1 class="center">Matt B's Lawns</h1>
				
				<p id="all-season" class="center">
					<em>
						Taking care of your lawn needs all season.
					</em>
				</p>
				
				<p>
					<br />
					Our company is the most reliable lawn service in the area. With plenty of experience in commercial,
					residential and industrial lawn maintenance, we can take care of all your needs during each season.
				</p>
			</div>
			
			<?php include('subContent.php'); ?>
		</div>	
		
		<?php include('footer.php'); ?>
	</body>
</html>