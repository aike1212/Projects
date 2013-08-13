<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>MC Auto Outlet | Home</title>
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
				
				<h2>Welcome to <span>MC Auto Outlet</span></h2>
				
				<p>
					MC Auto Outlet is owned and operated by C.W. Cheney and Jason Mader. We also provide professional detailing. 
					Contact us for a full range of auto detailing options.
				</p>
				
				<p>
					If you have any questions or inquiries, please contact our sales department at <strong>(785) 460 - AUTO</strong>
					or email us at <strong>mcauto@st-tel.net.</strong>
				</p>
				
				<?php include('bottomContent.php'); ?>
			</div>
			
			<?php include('footer.php'); ?>
		</div>	
	</body>
</html>