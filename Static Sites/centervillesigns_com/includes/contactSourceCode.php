<?php
	
	$errorBit = 1;
	if(isset($_POST['recaptcha_response_field'])){
		$errorBit = 0;
		
		require_once('includes/recaptchalib.php');
		$privatekey = CAPTCHAPRIVATEKEY;
		$resp = recaptcha_check_answer ($privatekey,
		$_SERVER["REMOTE_ADDR"],
		$_POST["recaptcha_challenge_field"],
		$_POST["recaptcha_response_field"]);
		
		if (!$resp->is_valid) {
			// What happens when the CAPTCHA was entered incorrectly
			echo '<p style="font-size:14px; margin:0 !important; padding:15px !important; color:#FF0000 !important; font-weight:bold; text-align:center;">The reCAPTCHA code wasn\'t entered correctly.<br /> Please try again.</p>
			<form action="contact.php" method="post">
			<div style="text-align:center;">
<script>
function goBack()
  {
  window.history.back()
  }
</script>
<input type="button" value="Back" onclick="goBack()">

			</div>
			</form>';	
		}
		else 
		{
			
			
			if($_POST['email2'] == "" && $_POST['phone2'] == "") {
				
				include ('functions.php');
				include('emailTemplate.php');
				
				$from = trim($_POST['EmailTxt']) ;
				$headers[] = 'From: '.trim($_POST['NameTxt']).' <'.$from . '>' . "\r\n";
				$headers[] = "content-type: text/html\r\n";
				
				
				
				
				
				$subject = "Contact Inquiry for ".WEBSITENAME;
			    $msg = $message;
				$clientmail = CLIENTNAME."<".CLIENTEMAIL.">";
				$is_sent = wp_mail( $clientmail, $subject, $msg, $headers );	 
				if($is_sent)
				{ $headers = array();
					$headers[] = 'From: '.WEBSITENAME.' <'.CLIENTEMAIL . '>' . "\r\n";
					$headers[] = "content-type: text/html\r\n";

					$subject = "Confirmation for contact inquiry from ".WEBSITENAME;
					$msg = "<p>This is to confirm that you have sent the information below to ".WEBSITENAME.".</p><br />".$message;
					$is_sent_fc = wp_mail( trim($_POST['EmailTxt']), $subject, $msg, $headers );	 
				}
				
				if(!$is_sent)
				{ echo '<p>Message Not Sent..!</p>'; }
				else
				{ include('emailMessage.php'); echo $message; }
				if(!$is_sent_fc)
				{ echo '<p>Confirmation Message Not Sent..!</p>'; }
				
				
			}
			
			
		} 
		
	}
?>
