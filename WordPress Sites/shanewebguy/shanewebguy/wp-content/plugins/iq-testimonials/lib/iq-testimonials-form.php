<?php
// Function to allow users to submit testimonials through a form
function iq_testimonials_form(){
	// Variables
	$clientname = $_POST['clientname'];
	$email = $_POST['email'];
	$location = $_POST['location'];
//	$testimonial = $_POST['testimonial'];
	$testimonial = trim($_POST['testimonial']);
	$testimonial = nl2br($testimonial);
	$testimonial = stripslashes($testimonial);
	$website = $_POST['website'];
	$bloginfo = get_bloginfo('name');
	$html = '';
	$filename = $_FILES['imagefile']['name'];
	


	// Required for all WordPress database manipulations
	global $wpdb;
	
	// Grabbing DB prefix and settings table names to variable
	$testimonials = $wpdb->prefix . "iq_testimonials";
	$iq_testimonials_settings = $wpdb->prefix . "iq_testimonials_settings";
	
	$paragraph = '<p class="iq-testimonials-info">Please fill in the form below to submit your testimonial<br /><em>Required fields are marked *</em></p>';
	
	
	// Ensuring the website URL has http://
	$website_final = '';
	if (!empty($website)){
		$website_final = (substr(ltrim($website), 0, 7) != 'http://' ? 'http://' : '') . $website;
	}

	if (isset($_POST['submit'])){ // check if form has been submitted

		// start an empty array
		$formerrors = array();
		$formerrorBits = array();

		if (empty($clientname)){
			$formerrorBits['clientname'] = true;
		}
	
		if (empty($email)){
			$formerrorBits['email'] = true;
		}
	
		if (empty($testimonial)){
			$formerrorBits['testimonial'] = true;
		}

		if (empty($clientname) || empty($email) || empty($testimonial)){
			$formerrors[] = "<p class=\"iq-testimonials-error\">Please fill in all required fields.</p>\n";
		}

		if (!empty($email) && !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]*)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$email)){
			$formerrors[] = "<p class=\"iq-testimonials-error\">Please enter a valid email address.</p>\n";
			$formerrorBits['email'] = true;
		}
		
		if (!empty($filename)) {

		if (($_FILES["imagefile"]["type"] == "image/gif")
  		|| ($_FILES["imagefile"]["type"] == "image/jpeg")
  		|| ($_FILES["imagefile"]["type"] == "image/png" )) {
			$imagelink = process_image_upload('imagefile');
//			list($width, $height) = getimagesize($finalfile);
//			echo '<img src="'.$finalfile.'" width="'.$width.'" height="'.$height.'" />';		
		}
		else
		{
			$formerrors[] = "<p class=\"iq-testimonials-error\">File must be .gif, .jpg, or .png</p>\n";
			$formerrorBits['imagefile'] = true;	
		}
		}

		// Check for errors before_title sending email
		if (!count($formerrors)){

			
			$insert = "INSERT INTO " . $testimonials .
			" (id, status, name, location, quote, website, imagelink) " .
			"VALUES ('','" . $wpdb->escape('2') . "','" . $wpdb->escape($clientname) . "','" . $wpdb->escape($location) . "','" . $wpdb->escape($testimonial) . "','" . $wpdb->escape($website_final) . "','" . $wpdb->escape($imagelink) . "')";
			$results = $wpdb->query($insert);
			
			$to = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='admin_email'", ARRAY_A);		
			$to = $to['value'];
			$subject = "Testimonail Added on ".$bloginfo;
			$body = "Name: ".$clientname."\n"
					."Email: ".$email."\n"
					."Location: ".$location."\n"
					."Testimonial: ".stripcslashes($testimonial)."\n"
					."Website: ".$website."\n"
					."Image Link: ".$imagelink."\n"
					."\n"
					."Please log into your WordPress Dashboard and approve the testimonial by clicking on Edit, and setting the status to \"Public\".";
					
			$from = "From: $name <$email>\r\n";

			mail($to, $subject, $body, $from);

			$html .= "<p class=\"iq-testimonials-success\">Thanks for adding your Testimonial. Please wait for an administrator to approve it.</p>";
		}

		else {
			$html .= $paragraph;
			// now output the errors for user to see
			foreach ($formerrors as $msg)
			$html .= $msg;
		}
	}

	if (!isset($_POST['submit'])){
		$html .= $paragraph;
	}

	// if the form hasn't been submitted or it has and there were errors, the form will be written
	if (!isset($_POST['submit']) || (isset($formerrorBits) && count($formerrorBits))){

	$html .= '<form enctype="multipart/form-data" action="" id="iq-testimonials-form" name="iq-testimonials" method="post">
		<p';
		
		if($formerrorBits['clientname'] == true){$html .= ' class="iq-testimonials-error"';}
	
	$html .= '><label for="clientname" id="iq-testimonials-label">Name: *</label>
		<input type="text" name="clientname" id="iq-testimonials-input" value="';
		
		if(isset($clientname)){$html .= $clientname;}
	
	$html .= '" /></p>
		
		<p';
	
		if($formerrorBits['email'] == true){$html .= ' class="iq-testimonials-error"';}
	
	$html .= '><label for="email" id="iq-testimonials-label">Email: *</label>
		<input type="text" name="email" id="iq-testimonials-input" value="';
		
		if(isset($email)){$html .= $email;}
	
	$html .= '" /></p>
		
		<p';
	
		if($formerrorBits['location'] == true){$html .= ' class="iq-testimonials-error"';}
	
	$html .= '><label for="location" id="iq-testimonials-label">Location: </label>
		<input type="text" name="location" id="iq-testimonials-input" value="';
		
		if(isset($location)){$html .= $location;}
		
	$html .= '" /></p>
		
		<p';
		
		if($formerrorBits['website'] == true){$html .= ' class="iq-testimonials-error"';}
		
	$html .= '><label for="website" id="iq-testimonials-label">Website: </label>
		<input type="text" name="website" id="iq-testimonials-input" value="';
		
		if(isset($website)){$html .= $website;}
	
	$html .= '" /></p>
	
		<p';
		
		if($formerrorBits['imagelink'] == true){$html .= ' class="iq-testimonials-error"';}
	
	$html .= '><label for="imagefile" id="iq-testimonials-label">Your image: </label><input type="file" name="imagefile" id="iq-testimonials-input" /></p>
	
		<p';

		if($formerrorBits['testimonial'] == true){$html .= ' class="iq-testimonials-error"';}
	
	$html .= '><label for="testimonial" id="iq-testimonials-label">Testimonial: *</label>
		<textarea name="testimonial" id="iq-testimonials-input" rows="8">';
		
		if(isset($testimonial)){$html .= $testimonial;}
		
	$html .= '</textarea></p>';	
	
	$html .= '<p><input type="submit" name="submit" value="Submit" id="submit" /></p>
	</form>';
		
	}

	// mysql_free_result($results);
	
	return $html;
}

  function process_image_upload( $Field )
  {
  			$target_path = ABSPATH.'wp-content/uploads/iqt-images';

			if(!file_exists($target_path)) { @mkdir($target_path."/"); }
			
    $temp_file_path = $_FILES[ $Field ][ 'tmp_name' ];
    $temp_file_name = $_FILES[ $Field ][ 'name' ];
	
	if (!is_dir(CREATED_IMAGE_PATH)) {
			mkdir(CREATED_IMAGE_PATH, 0755);
	}

    list( , , $temp_type ) = getimagesize( $temp_file_path );

    if ( $temp_type === NULL )
    {
      return false;
    }

    switch ( $temp_type )
    {
      case IMAGETYPE_GIF:
        break;
      case IMAGETYPE_JPEG:
        break;
      case IMAGETYPE_PNG:
        break;
      default:
        return false;
    }
    $uploaded_file_path = UPLOADED_IMAGE_DESTINATION . $temp_file_name;
    $processed_file_path = PROCESSED_IMAGE_DESTINATION . $temp_file_name;
	$processed_file_path = strtolower($processed_file_path);
	$processed_file_path = str_replace(' ', '-', $processed_file_path);
	$uploaded_file_path = strtolower($uploaded_file_path);
	$uploaded_file_path = str_replace(' ', '-', $uploaded_file_path);

	if (file_exists($uploaded_file_path)) {
		$file_extn = substr($uploaded_file_path, strrpos($uploaded_file_path, '.')+1);
//		$temp_processed_file_path = str_replace('.'.$file_extn, '', $processed_file_path);
//		$temp_uploaded_file_path = str_replace('.'.$file_extn, '', $uploaded_file_path);
		while (file_exists($uploaded_file_path)) {
			$i++;
			if ($i == 1) {
			$uploaded_file_path = str_replace('.'.$file_extn, '-'.$i.'.'.$file_extn, $uploaded_file_path);
			$processed_file_path = str_replace('.'.$file_extn, '-'.$i.'.'.$file_extn, $processed_file_path);				
			}
			else
			{
			$uploaded_file_path = str_replace('-'.($i-1).'.'.$file_extn, '-'.$i.'.'.$file_extn, $uploaded_file_path);
			$processed_file_path = str_replace('-'.($i-1).'.'.$file_extn, '-'.$i.'.'.$file_extn, $processed_file_path);
			}
		}
	}


if (!move_uploaded_file($temp_file_path, $uploaded_file_path)) echo "CANNOT MOVE {$_FILES["imagefile"]["name"]}" . PHP_EOL;
	$result = resize_uploaded_image($uploaded_file_path);

    if ( $result === false )
    {
      return false;
    }
    else
    {
      return $processed_file_path;
    }
  }

  //--------------------------------
  // END OF FUNCTIONS
  //--------------------------------

function resize_uploaded_image($filename) {
global $wpdb;
	
// Grabbing DB prefix and settings table names to variable
$testimonials = $wpdb->prefix . "iq_testimonials";
$iq_testimonials_settings = $wpdb->prefix . "iq_testimonials_settings";

// Set a maximum width and height
	$max_image_width = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='max_image_width'", ARRAY_A);
	$max_image_width = $max_image_width['value'];
	$max_image_height = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='max_image_height'", ARRAY_A);
	$max_image_height = $max_image_height['value'];

// Content type
//header('Content-Type: image/jpeg');

// Get new dimensions
list($width_orig, $height_orig, $source_type) = getimagesize($filename);

    if ( $source_type === NULL )
    {
      return false;
    }

    switch ( $source_type )
    {
      case IMAGETYPE_GIF:
        $source_gd_image = imagecreatefromgif( $filename );
        break;
      case IMAGETYPE_JPEG:
        $source_gd_image = imagecreatefromjpeg( $filename );
        break;
      case IMAGETYPE_PNG:
        $source_gd_image = imagecreatefrompng( $filename );
        break;
      default:
        return false;
    }

$ratio_orig = $width_orig/$height_orig;

if ($max_image_width/$max_image_height > $ratio_orig) {
   $max_image_width = $max_image_height*$ratio_orig;
} else {
   $max_image_height = $max_image_width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($max_image_width, $max_image_height);
//$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $source_gd_image, 0, 0, 0, 0, $max_image_width, $max_image_height, $width_orig, $height_orig);

// Output
//imagejpeg($image_p, null, 100);
    imagejpeg( $image_p, $filename, 100 );
	
	return true;
}
?>