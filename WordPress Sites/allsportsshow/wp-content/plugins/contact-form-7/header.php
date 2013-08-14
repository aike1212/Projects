<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/scripts/accordion_modified.js"></script>

<!--
<script>
	$(document).ready(function() {
		$('#Name').focus(function () {
		if (this.value == "name")
			this.value = "";    
		}).blur(function () {
			if (this.value == "")
				this.value = "name";    
		});
	});
</script>
-->

</head>

<body <?php body_class(); ?>>
	<div id="header">
		<div id="banner" class="clearfix">
			
			<span class="hidden"> ALL SPORTS SHOW </span>
			
			<a href="http://www.scxserv.com/allsportsshow/index.php">
				<img src="<?php bloginfo('template_url'); ?>/images/common/img_logo.png" alt="Logo" class="left" height="279" width="191" style="margin-top:0.50px;" />
			</a>

			<?php echo do_shortcode('[meteor_slideshow]');?>
			
			<p id="slideshow" class="left">
				<span class="titleColor">The All Sports Show</span> <br />
				offers the purchasing power of thousands of attendees, athletes, coaches, families, and manufacturers resulting in unmatched 
				revenue and brand awareness opportunities. 
				<!--
				<br />
				<img src="<?php bloginfo('template_url'); ?>/images/common/img_bannerSelector.png" alt="Banner Selector" class="block" style="margin:20px auto;" />
				-->
			</p>
			
			<form id="contactForm" method="post" action="">
				<fieldset class="right">
					<h2>
						Join Our Sports <br />
						<big style="font-size:25px">Community</big>
					</h2>
					
					<p>
						Fill out this short form and we will get back to you as soon as possible with a reply. 
					</p>
					
					<!--
					<input type="text" value="name" class="block" onfocus='this.value="";' /> 
					<input type="text" value="email" class="block" onfocus='this.value="";' /> 
					<textarea rows="2" cols="18" onfocus='this.value="";'>message</textarea>
					
					<input type="submit" value="Send Information" class="right" ></input>
					-->
					
					<?php echo do_shortcode('[contact-form-7 id="215" title="All Sports Show Contact Form"]');?>
				
				</fieldset>
			</form>
		</div>
	</div>

