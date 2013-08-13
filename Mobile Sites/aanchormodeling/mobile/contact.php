<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>A Anchor Remodeling | Contact Us</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<style type="text/css">
			.fieldwidth {
				width: 240px;
				margin:0 auto;
				display: block;
			}
		</style>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>
		
			<div id="content">
			
				<div id="us-flag"></div>
				
				<h2>Contact Us</h2>
				
				<p>
					You can submit a support request by providing us with your name and email.
					We'll get back to you as soon as possible. 
				</p>
				
				<div class="top-content" style="height:285px">
					<!--<img src="../images/content/img_customerservice.jpg" alt="Index Image" id="index_image" />-->
					
					<form action="mailcode.php" method="post">
					<p>
						<strong class="label">Name</strong> <br />
						<input type="text" name="name" id="name" class="fieldwidth" />
					</p>
					
					<p>
						<strong class="label">Email</strong><br />
						<input type="text" name="email" id="email" class="fieldwidth" />
					</p>
					
					<p>
						<strong class="label">Comments</strong> <br />
						<textarea rows="3" cols="20" id="comments" name="comments" class="fieldwidth"></textarea>
					</p>
					
					<p style="text-align:center; padding:0;">
						<input type="submit" value=" Send Request" />
					</p>
				</form>
				</div>
				
			</div>
			
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>
