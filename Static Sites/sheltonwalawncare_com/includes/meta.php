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
   	<link rel="stylesheet" type="text/css" href="<?php echo REALPATH; ?>styles/reset.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo REALPATH; ?>styles/style.css"/>   
	<?php 
		if (CURRENTPAGE == 'contact.php') {
			//include 'includes/InteractiveMapJava.php';
			echo '<link rel="stylesheet" type="text/css" href="'.REALPATH.'styles/contact.css"/>';
		}
	?> </head>
    <?php if(CURRENTPAGE == 'contact.php'){ ?><script type="text/javascript">GetMap();</script><?php } ?>
<body onload="blankTargetFix();">
