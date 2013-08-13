<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Matt B's Lawn Care | Contact Us</title>
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
				<div class="center">
					<h1>Contact Us</h1>
					
					<p>
						You can submit a support request by providing us with your name and email.
						We'll get back to you as soon as possible. 
					</p>
					
					<form action="mailcode.php" method="post">
						<p class="no-bg">
							<strong>Name</strong> <br />
							<input type="text" name="name" id="name" class="fieldwidth" />
						</p>
						
						<p class="no-bg">
							<strong>Email</strong><br />
							<input type="text" name="email" id="email" class="fieldwidth" />
						</p>
						
						<p class="no-bg">
							<strong>Comments</strong> <br />
							<textarea rows="3" cols="20" id="comments" name="comments" class="fieldwidth"></textarea>
						</p>
						
						<p class="no-bg">
							<input type="submit" value=" Send Request" />
						</p>
					</form>
				</div>
			</div>
		</div>
		
		<?php include('footer.php'); ?>
	</body>
</html>
