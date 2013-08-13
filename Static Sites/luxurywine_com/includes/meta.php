<?php require_once('includes/application.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo PAGETITLE; ?></title>
	<meta http-equiv="Content-Language" content="en-us" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="SHORTCUT ICON" href="favicon.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="Description" content="<?php echo PAGEDESCRIPTION; ?>" /> 
    <meta name="Keywords" content="<?php echo PAGEKEYWORDS; ?>" /> 
	<link href="<?php echo REALPATH; ?>styles/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo REALPATH; ?>styles/contact.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo REALPATH; ?>styles/stylesheet.css" rel="stylesheet" type="text/css" />
       <!--[if IE ]>
		<link href="styles/iefix.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/PIE.js"></script>
</head>
<body>
<?php if(CURRENTPAGE == 'index.php') { ?>
<script type="text/javascript">
function thebackground() {
$('div.background img').css({opacity: 0.0});
$('div.background img:first').css({opacity: 1.0});
setInterval('change()', 5000);
}

function change() {
var current = ($('div.background img.show')? $('div.background img.show') : $('div.background img:first'));
if ( current.length == 0 ) current = $('div.background img:first');
var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.background img:first') :current.next()) : $('div.background img:first'));
next.css({opacity: 0.0})
.addClass('show')
.animate({opacity: 1.0}, 3000);
current.animate({opacity: 0.0}, 3000)
.removeClass('show');
};

$(document).ready(function() {
thebackground();	
$('div.background').fadeIn(3000); // works for all the browsers other than IE
$('div.background img').fadeIn(3000); // IE tweak
});

</script>
<?php } ?>
<!-- Main -->
<div id="main2" class="clearfix">
	
	<?php if(CURRENTPAGE == 'index.php') { ?>
	<div class="background">
		<img src="images/body1.jpg" alt="" class="banners" />
		<img src="images/body2.jpg" alt="" class="banners" />
		<img src="images/body3.jpg" alt="" class="banners" /> 
		<img src="images/body4.jpg" alt="" class="banners" /> 
	</div>
	<?php } else {?>
	<div class="background">
		<img src="images/body.jpg" alt="" class="banners" />
	</div>
	<?php } ?>
	
	<div id="main" class="clearfix">