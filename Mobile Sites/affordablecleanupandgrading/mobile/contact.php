<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Affordable Construction Clean Up | Contact Us</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<style type="text/css">
			.fieldwidth {
				width:160px;
			}
		</style>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>
		
			<div id="content">
				<div class="clearfix" id="thumbs_container">
					<dl class="thumbs">
						<dt><img src="assets/img_thumb1.jpg" alt="Thumbnail 1" /></dt>
						<dd><a href="services.php#construction_clean_up_services">Construction Clean Up Services</a></dd>
					</dl>
					<dl class="thumbs">
						<dt><img src="assets/img_thumb2.jpg" alt="Thumbnail 2" /></dt>
						<dd><a href="services.php#grading_dirt_work">Grading And Dirt Work</a></dd>
					</dl>
					<dl class="thumbs">
						<dt><img src="assets/img_thumb3.jpg" alt="Thumbnail 3" /></dt>
						<dd><a href="services.php#irrigation_landscaping">Irrigation And Landscaping</a></dd>
					</dl>
					<dl class="thumbs">
						<dt><img src="assets/img_thumb4.jpg" alt="Thumbnail 4" /></dt>
						<dd><a href="services.php#demolition_services">Demolition Services</a></dd>
					</dl>
				</div>
					
				<br />
			
				<div class="center">
					<h2>Contact Us</h2>
					
					<p>
						You can submit a support request by providing us with your name and email.
						We'll get back to you as soon as possible. 
					</p>
					
					<form action="mailcode.php" method="post">
						<p>
							<strong>Name</strong> <br />
							<input type="text" name="name" id="name" class="fieldwidth" />
						</p>
						
						<p>
							<strong>Email</strong><br />
							<input type="text" name="email" id="email" class="fieldwidth" />
						</p>
						
						<p>
							<strong>Comments</strong> <br />
							<textarea rows="3" cols="20" id="comments" name="comments" class="fieldwidth"></textarea>
						</p>
						
						<p>
							<input type="submit" value=" Send Request" />
						</p>
					</form>
				</div>
			</div>
		</div>
		
		<?php include('footer.php'); ?>
	</body>
</html>
