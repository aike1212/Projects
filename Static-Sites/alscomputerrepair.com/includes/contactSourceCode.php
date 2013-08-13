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
	<input type="hidden" name="NameTxt" value="'.$_POST['NameTxt'].'" />
	<input type="hidden" name="EmailTxt" value="'.$_POST['EmailTxt'].'" />
	<input type="hidden" name="PhoneNum" value="'.$_POST['PhoneNum'].'" />
	<input type="hidden" name="SubjectTxt" value="'.$_POST['SubjectTxt'].'" />
	<input type="hidden" name="MessageTxt" value="'.$_POST['MessageTxt'].'" />
	<input type="hidden" name="email2" value="'.$_POST['email2'].'" />
	<input type="hidden" name="phone2" value="'.$_POST['phone2'].'" />
	<input type="submit" value="Back" />
	</div>
	</form>';	
  } else {
  
  
  if($_POST['email2'] == "" && $_POST['phone2'] == "") {

  
	require 'class.phpmailer.php';
	
	$mail = new PHPMailer(); //New instance, with exceptions enabled


	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 465;                    // set the SMTP server port
	$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
	$mail->Username   = CLIENTSMTPEMAIL;     	// SMTP server username
	$mail->Password   = CLIENTEMAILPASSWORD;    // SMTP server password
	$mail->SMTPDebug = 1;
	
	$mail->AddReplyTo(CLIENTEMAIL,CLIENTNAME);

	$mail->From       = CLIENTEMAIL;
	$mail->FromName   = WEBSITENAME." Mailer";


	$to = trim($clientInfo[client_email]);
	$mail->AddAddress(CLIENTEMAIL,CLIENTNAME);
	$mail->Subject  = "Contact Inquiry for ".WEBSITENAME;
	$mail->WordWrap   = 80; // set word wrap
    include('emailTemplate.php');
	$mail->MsgHTML($message."<br /><br />Do not reply to this email! This is an automated notification email.");
	$mail->IsHTML(true); // send as HTML

    // Mail it
    //@mail($toVar, $subject, $message, $headers);
    if($mail->Send()){
      include('emailMessage.php');
      echo $message;
    } else {
      $formError = "Contact email was not sent.";
      $errorBit = 1;
    }
	
	$mail->ClearAddresses();

	$to = trim($_POST['EmailTxt']);
	$mail->AddAddress($to);
	$mail->Subject  = "Confirmation email from ".WEBSITENAME;
	$mail->WordWrap   = 80; // set word wrap
    $message = "<p>This is to confirm that you have sent the information below to ".WEBSITENAME.".</p><br />".$message."<br />Do not reply to this email! This is an automated notification email.";
	$mail->MsgHTML($message);
	
	
    if(!$mail->Send()){
      $formError = "Confirmation email was not sent.";
    }

  }

	
	} 

}
?>
