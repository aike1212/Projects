<?php
/**
 * Template Name: Change Profile Picture
 * 
 * Example file
 *
 * @author   Marcos Thiago <fabismt@yahoo.com.br>
 * @version  1.0
 * @since    06/2004
 * @package  UPLOAD_FILES
 */
 
session_start();

require_once("class_UPLOAD.php");
$upload =& new UPLOAD_FILES();

if($_FILES){

  foreach($_FILES as $key => $file){
    $upload->set("name",$file["name"]); // Uploaded file name.
    $upload->set("type",$file["type"]); // Uploaded file type.
    $upload->set("tmp_name",$file["tmp_name"]); // Uploaded tmp file name. 
    $upload->set("error",$file["error"]); // Uploaded file error.
    $upload->set("size",$file["size"]); // Uploaded file size.
    $upload->set("fld_name",$key); // Uploaded file field name.
    $upload->set("max_file_size",102400); // Max size allowed for uploaded file in bytes = 100 KB.
    $upload->set("supported_extensions",array("gif" => "image/gif" ,"jpg" => "image/jpeg","jpeg" => "image/jpeg" ,"png" => "image/png")); // Allowed extensions and types for uploaded file.
    $upload->set("randon_name",TRUE); // Generate a unique name for uploaded file? bool(true/false).
    $upload->set("replace",TRUE); // Replace existent files or not? bool(true/false).
    $upload->set("file_perm",0444); // Permission for uploaded file. 0444 (Read only).
    $upload->set("dst_dir", $_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/'); // Destination directory for uploaded files.
    $result = $upload->moveFileToDestination(); // $result = bool (true/false). Succeed or not.
  }
}

global $wpdb;

	if(isset($_POST['change-username']) && $_POST['change-username'] != 'Enter your new username here') {
		$new_name = mysql_real_escape_string(strip_tags($_POST['change-username']));
		
		try {
			$db = new PDO('mysql:host=localhost;dbname=scxserv_writegodathanku;charset=utf8', 'scxserv_aike', 'qwerty321!@#', array(PDO::ATTR_PERSISTENT => True));
		} catch(PDOException $e) {
			die($e->getMessage());
		}

		$query = $db->prepare("
			 UPDATE wp_users 
			 SET display_name='$new_name', user_login='$new_name'
			 WHERE user_nicename='$user'
		");

		$query->execute();
	}

if($upload->succeed_files_track || $upload->fail_files_track) {	
	/*
	echo "<pre>";
	print_r($upload);
	print_r($upload->succeed_files_track);
	print_r($upload->fail_files_track);
	echo "</pre>";
	exit;
	*/
	//if(isset($_POST['change-prof-pic'])) {
		if($upload->error == 0 && $upload->fail_files_track == null) {
			$valid = '1';
			$msg = $upload->succeed_files_track[0]['msg'];
		
			$logged_in = $_SESSION['login_user'];
			$prof_pic_url = $_SERVER['PHP_SELF'] . '/wp-content/uploads/' . $upload->succeed_files_track[0]['new_file_name'];
			
			$wpdb->update(
				'wp_users',
				array('profile_picture_url' => $prof_pic_url),
				array('user_login' => $logged_in)
			);
			
			//header('Location: '.$_SERVER['REQUEST_URI']);
			echo '<meta http-equiv="refresh" content="2;url=http://writegodathanku.scxserv.com/profile">';
		} else {
			$valid = '0';
			$msg = $upload->fail_files_track[0]['msg'];
		}
	//}
}
?>
		
<h4 id="edit-header" class="center" style="margin-right: 30px;">Edit Profile</h4>

<?php if($upload->fail_files_track) { // if(isset($_POST['change-username']) || isset($_POST['change-prof-pic'])) { ?>
	<div id="display-error" style="margin:15px 35px 0 90px;">
		<p style=""><big><strong>The following errors have occured:</strong></big></p>
		<ul><?php echo "<li>".$msg."</li>"; ?></ul>
	</div>
<?php } else if($upload->succeed_files_track) { ?>
  <br />
	<p id="display-sucess"><?php echo $msg != null ? $msg : 'Your username has been changed.'; ?></p>
<?php } ?>

<form name="upload" id="prof-pic" method="POST" enctype="multipart/form-data" action="">
	<fieldset>
		<p class="clearfix">
			<label for="change-username">Change Username:</label>
			<input type="text" name="change-username" value="Enter your new username here" onfocus="clearText(this);" onblur="clearText(this);" />
		</p>
		<p style="position:relative; margin:20px 0 8px;" class="clearfix">
			<label for="change-prof-pic">Change Profile Picture:</label>
			<input type="text" name="change-prof-pic" id="text-file" value="" />
			<input type="file" name="file" id="file" class="file" size="39" />
		</p>
		<small class="center block" style="font-size:10px; margin:0 0 20px 110px;">(100kb max)</small>
		<p style="margin-top:30px;">
			<input type="submit" value="Update" />
		</p>
	</fieldset>
</form>