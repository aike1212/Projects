<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">	
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         /*wp_title(''); echo ' - ';*/ }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
<meta name="msvalidate.01" content="3873092F1547A502DA618981917D4E15" />
<meta name="google-site-verification" content="yqeiUvabCdIOvo_84W4HyhMzhq-XfIttNH-xUJwSeSk" />	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="author" content="Mario Joseph Esteban" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon" />
	
	<!-- PNG FIX for IE6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/pngfix/supersleight-min.js"></script>
	<![endif]-->
	<!-- Global IE fix to avoid layout crash when single word size wider than column width and image pixelation  enhancement in IE for resize-->
      <!--[if IE]>
      <style type="text/css"> body {word-wrap: break-word;} img{ -ms-interpolation-mode: bicubic;}</style>
      <![endif]-->
	
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/class.css" />	
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/font.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/demo_page.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/demo_table.css" />
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/demo_table_jui.css" />
	
	<link type="text/css" media="screen" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
	<!-- put all scripts after wp_head()-->
	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/scripts/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/scripts/javascripts.js"></script>		
	<!--<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/scripts/mobile.js"></script>-->
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="<?php bloginfo("template_url"); ?>/assets/css/responsive.css" />-->
	<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="<?php bloginfo("template_url"); ?>/assets/css/small-device.css" />-->
	
</head>

<body 
<?php 
	body_class(); 
	if(is_page("about-us") || is_page("services") || is_page("contact-us")) { 
		echo 'id="inner1"';
	}
	
	if(is_page("inventory")) {
		echo 'id="inner2"';
	}
?>
>

	
	<div id="page-wrap">