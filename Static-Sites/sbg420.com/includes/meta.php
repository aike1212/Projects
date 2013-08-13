<?php require_once('includes/application.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo PAGETITLE; ?></title>
	<meta http-equiv="Content-Language" content="en-us" />
	<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="Description" content="<?php echo PAGEDESCRIPTION; ?>" /> 
    <meta name="Keywords" content="<?php echo PAGEKEYWORDS; ?>" /> 
	
	<link href="<?php echo REALPATH; ?>styles/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo REALPATH; ?>styles/class.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo REALPATH; ?>styles/contact.css" rel="stylesheet" type="text/css" />
    
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/javascripts.js"></script>
	<script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
    
	<script type="text/javascript" src="scripts/cufon-yui.js"></script>
    <script type="text/javascript" src="scripts/cufon-scripts.js"></script>
    <script type="text/javascript" src="scripts/Babylon5_400.font.js"></script>

	<!--
	<link rel="stylesheet" type="text/css" href="shadowbox-3.0.3/shadowbox.css">
	<script type="text/javascript" src="shadowbox-3.0.3/shadowbox.js"></script>
	<script type="text/javascript">Shadowbox.init();</script>
	
	<script type="text/javascript">
	$(document).ready(function(){
	  $('#link').trigger('click');
	});
	</script>
	-->
	
	<?php /*
		if(!isset($_COOKIE['no_splash'])) {
			header("Location: http://www.google.com");
			exit;
		} */
	?>
	
</head>

<body>
<!-- Main -->
<div 
	<?php if(CURRENTPAGE == 'index.php' || CURRENTPAGE == null) { 
			echo 'id="main2"'; 
		  } else {
			echo'id="main3"'; 
		  } ?>>
		  
	<div id="main" class="clearfix">
		
	<?php
		if(CURRENTPAGE == 'Tobacco-Accessories.php' || CURRENTPAGE == 'pipes.php' || CURRENTPAGE == 'decks.php') {
			include ('database/database.php'); 
		} ?>
	