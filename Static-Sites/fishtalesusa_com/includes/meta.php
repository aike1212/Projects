<?php require_once('includes/application.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo PAGETITLE; ?></title>
	<meta http-equiv="Content-Language" content="en-us" />
	<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="<?php echo PAGEDESCRIPTION; ?>" /> 
    <meta name="Keywords" content="<?php echo PAGEKEYWORDS; ?>" /> 
	<link href="<?php echo REALPATH; ?>styles/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo REALPATH; ?>styles/contact.css" rel="stylesheet" type="text/css" />
    
	<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.js"></script>
	<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/javascripts.js"></script>
	<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/gen_validatorv31.js"></script>
	
	<?php if (CURRENTPAGE == 'gallery.php') { ?>	
		<link href="<?php echo REALPATH; ?>styles/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.fancybox-1.3.1.js"></script>
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.mousewheel-3.0.2.pack.js"></script>
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/jquery.pajinate.2.js"></script>
		<script type="text/javascript" src="<?php echo REALPATH; ?>scripts/fancybox.js"></script>
	<?php } ?>

</head>
<body onload="blankTargetFix();" <?php if(CURRENTPAGE != 'index.php'){ echo 'id="inner"'; } ?>>
<!-- Main -->
<div id="main" class="clearfix">