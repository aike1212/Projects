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
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/fonts.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/styles.css" />
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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32859604-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

</head>

<body <?php body_class(); ?>>
	<div id="wrapper">		
		<!-- Header -->
		<div id="header-wrapper">
			<div id="header" class="clearfix">
				<span class="hidden">Big Dick Web</span>
				
				<a href="http://www.bigdickweb.com">
					<img src="<?php bloginfo('template_url');?>/images/common/img_logo.png" alt="LOGO" class="left" />
				</a>
				
				<span id="header-title">Web Design for the Adult Industry</span>
				
				<a href="http://www.youtube.com" title="youtube" class="social-panel" rel="external">Youtube</a>
				<a href="http://www.twitter.com" title="twitter" class="social-panel" rel="external">Twitter</a>
				<a href="http://www.facebook.com" title="facebook" class="social-panel" rel="external">Facebook</a>
				
				<br class="clearfix" />
					
				<p class="right call">	
					Call <a href="http://www.bigdickweb.com/contact">1-800-123-4567</a>
				</p>
			</div>
		</div>