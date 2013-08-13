<?php
$errorBit = 1;		// Error Indicator
$formError = ""; 	// Error Message
if(isset($_POST['NameTxt'])){
	
	$_SESSION['crt']++;
			
		
			
	if ($_SESSION['crt'] <= 99 ) {	
	
  $errorBit = 0;		// Error Indicator Set to True
  if(USECAPTCHA == true AND isset($_SESSION['img_code_val'])){
    $secCode = strtoupper(trim($_POST['CaptchaTxt'])); // Convert entered Captcha Code to uppercase
    if($_SESSION['img_code_val'] != md5($secCode)){
      $formError = "<div id=\"errorCode\">The security code that you entered is wrong.</div>";
      $errorBit = 1;
    }
  }
  if($errorBit == 0){
  
	require 'class.phpmailer.php';
	
	$mail = new PHPMailer(); //New instance, with exceptions enabled


	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 465;                    // set the SMTP server port
	$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
	$mail->Username   = CLIENTEMAIL;     // SMTP server username
	$mail->Password   = CLIENTEMAILPASSWORD;            // SMTP server password
	$mail->SMTPDebug = 1;
	
	$mail->AddReplyTo(CLIENTEMAIL,CLIENTNAME);

	$mail->From       = CLIENTEMAIL;
	$mail->FromName   = CLIENTNAME;


	$to = trim($clientInfo[client_email]);
	$mail->AddAddress($to);
	$mail->Subject  = "Contact Inquiry for ".WEBSITENAME;
	$mail->WordWrap   = 80; // set word wrap
    include('emailTemplate.php');
	$mail->MsgHTML($message);
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
    $message = "<p>This is to confirm that you have sent the information below to ".WEBSITENAME.".</p><br />".$message;
	$mail->MsgHTML($message);
	
    if(!$mail->Send()){
      $formError = "Confirmation email was not sent.";
    }
	
	} else {	
	echo "Please Try Again Later";
	}		 

	
	} else {
  ?>
    <div id="Error-Message">
      <?php echo $formError; ?>
    </div>
    <?php
  }
}
?>
