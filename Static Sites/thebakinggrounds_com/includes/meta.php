<?php require_once('includes/application.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo PAGETITLE; ?></title>
	<meta http-equiv="Content-Language" content="en-us" />
	<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="Description" content="<?php echo PAGEDESCRIPTION; ?>" /> 
    <meta name="Keywords" content="<?php echo PAGEKEYWORDS; ?>" /> 
	<link rel="stylesheet" type="text/css" href="<?php echo REALPATH; ?>styles/font.css" />
	<link href="<?php echo REALPATH; ?>styles/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo REALPATH; ?>styles/contact.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.js"></script>
    <script type="text/javascript" src="<?php echo REALPATH; ?>scripts/javascripts.js"></script>
	<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/gen_validatorv31.js"></script>
	
	<?php if (CURRENTPAGE == 'cake.php' || CURRENTPAGE == 'gallery.php') { ?>
		<link href="<?php echo REALPATH; ?>styles/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.fancybox-1.3.1.js"></script>
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.mousewheel-3.0.2.pack.js"></script>
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/fancybox.js"></script>
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/accordion_modified.js"></script>
	<?php } ?>
	
	<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.pajinate.js"></script>

	<?php 
		if (CURRENTPAGE == 'location.php') {
			include 'includes/InteractiveMapJava.php';
		}
	?> 
</head>
<body onload="blankTargetFix();<?php if(CURRENTPAGE == 'location.php'){ ?>GetMap();<?php } ?>">
	<div id="main" class="clearfix">
