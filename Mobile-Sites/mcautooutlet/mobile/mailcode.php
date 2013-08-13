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
			
			<div class="btm-container block">			
				<?php
					$to = ""; //CLIENT EMAIL
					$subject = "Mobile Support Request for"; //WEBSITE NAME
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
		</div>
		
		<?php include('footer.php'); ?>
	</body>
</html>