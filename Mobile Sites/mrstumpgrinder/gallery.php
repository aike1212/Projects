<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Mr. Stump Grinder | Gallery</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<link rel="stylesheet" type="text/css" href="fonts.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">	
				<h1 class="center">Our Gallery</h1>

				<?php
					 $cat = "first"; 
					include('database.php'); 
				?>

				<h1 class="center">"I came, I sawed, I conquered"!!!</h1>

				<?php
					 $cat = "second"; 
					include('database.php'); 
				?>
			</div>
		</div> <!-- Wrapper -->
			
		<?php include('footer.php'); ?>
	</body>
</html>