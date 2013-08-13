<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>MC Auto Outlet | Contact Us</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<style type="text/css">
			.fieldwidth {
				width:255px;
			}
		</style>
	</head>
	
	<body>
		<?php include('header.php'); ?>
		
		<div id="content">
			<h2>Contact Us</h2>
		
			<div class="btm-container block contact-details">
				<p>Phone : <strong>(785) 460 - AUTO</strong></p>
				<p>Fax : <strong>(785) 460 - 0030</strong></p>
				<p>
					C.W. Cheney: <strong>(785) 443-1481</strong> <br />
					Jason Mader: <strong>(785) 675-8685</strong> <br />
					Garrett Whorton: <strong>(620) 242-4081</strong> <br />
					<strong>mcauto@st-tel.net</strong>
				</p>
				<p>
					<strong>Business Hours</strong> <br />
 					Monday - Friday <strong>8am - 6pm</strong> <br />
					Saturday <strong>8am - 2pm</strong>
				</p>
				<p>
					Address:
					855 Davis Ave.
					Colby, KS 67701
				</p>
			</div>
		
			<div class="btm-container block form">	
				<br />
			
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
		
		<?php include('footer.php'); ?>
	</body>
</html>
