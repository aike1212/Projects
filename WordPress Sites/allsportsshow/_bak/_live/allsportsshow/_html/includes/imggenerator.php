<?php 

	session_start();
	
	$alphanum = "ABCDEFGHJKMNPQRSTUVWXYZ23456789";
	
	// generate the verication code
	$rand = substr(str_shuffle($alphanum), 0, 6);
	
	// create the hash for the random number and put it in the session
	$_SESSION['img_code_val'] = md5($rand);
	
	// create the image
	$image = imagecreate(60, 15);
	
	// use white as the background image
	$bgColor = imagecolorallocate ($image, 246, 241, 230);
	
	// the text color is black
	$textColor = imagecolorallocate ($image, 0, 0, 0);
	
	// write the random number
	imagestring ($image, 5, 5, 2, $rand, $textColor);
	
	// send several headers to make sure the image is not cached
	// taken directly from the PHP Manual
	
	// Date in the past
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	
	// always modified
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	
	// HTTP/1.1
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	
	// HTTP/1.0
	header("Pragma: no-cache");
	
	// send the content type header so the image is displayed properly
	header('Content-type: image/jpeg');
	
	// send the image to the browser
	imagejpeg($image);
	
	// destroy the image to free up the memory
	imagedestroy($image);

?>