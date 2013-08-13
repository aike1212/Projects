<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>| Contact Us</title>
		<link rel="stylesheet" type="text/css" href="styles.css" />
	</head>
	
	<body>
		<?php include('header.php'); ?>

		<div id="content">
			<h1 class="center">Contact Us</h1>
			
			<?php
				$to = "mattbslawns@yahoo.com"; //CLIENT EMAIL
				$subject = "Mobile Support Request for Matt B's Lawn Care"; //WEBSITE NAME
				$from = $_POST['email'];
				$body = 
					"Support Request from<br />
					Name: ".$_POST['name']."<br />
					Email: ".$_POST['email']."<br />
					Comments: ".$_POST['comments'];

				$headers = "From:".$_POST['name']."<".$_POST['email'].">\r\n";
				$headers .= "Reply-To: ".$to."\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

				if (mail($to, $subject, $body, $headers)) {
					echo('<p class="center">Support Request Sent! Please allow 24 hours for our response.</p>');
				} else {
					echo('<p class="center">Support Request Delivery Failed... Please Try Again.</p>');
				}
			 ?>
		</div>
		
		<?php include('footer.php'); ?>
	</body>
</html>