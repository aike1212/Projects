<?php

	$errorBit = 1;
	if(isset($_POST['name-field'])){
	$errorBit = 0;

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
	
	$to = trim($clientInfo[client_email]); //
	$mail->AddAddress('aike_chan@yahoo.com'); //CLIENTEMAIL,CLIENTNAME
	$mail->Subject  = "Subscription Inquiry for ".WEBSITENAME;
	$mail->WordWrap   = 80; // set word wrap
    include('subscriptionEmailTemplate.php');
	$mail->MsgHTML($message."<br /><br />Do not reply to this email! This is an automated notification email.");
	$mail->IsHTML(true); // send as HTML

    // Mail it
    //@mail($toVar, $subject, $message, $headers);
    if($mail->Send()){
      include('subscriptionEmailMessage.php');
      echo $message;
    } else {
      $formError = "Subscription email was not sent.";
      $errorBit = 1;
    }
	
	$mail->ClearAddresses();

}
?>
