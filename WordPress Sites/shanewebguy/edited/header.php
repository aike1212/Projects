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
	
	<link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/fonts/fonts.css" />
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

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/javascripts.js"></script>

</head>

<body onload="blankTargetFix();" <?php body_class(); ?>>
	<div id="header">
		<div id="innerHeader">
			<a href="<?php echo get_option('Home'); ?>">
				<img src="<?php bloginfo('template_url'); ?>/images/common/img_logo.png" alt="LOGO" id="logo" />
			</a>

			<p id="links" class="right clearfix">
				<!--
				<a href="#">Sign In</a> |
				<a href="#">Log In</a>

				<br class="block" style="margin:15px 0 0;" />
				-->
				<!--<span class="left">Follow Shane</span>-->
				<a href="https://www.facebook.com/ShaneWebGuy" rel="external" title="facebook" class="social">Facebook</a>
				<a href="https://twitter.com/#!/shanewebguy" rel="external" title="twitter" class="social">Twitter</a>
				<a href="http://www.youtube.com/user/shanewebguy" rel="external" title="youtube" class="social">Youtube</a>
				<a href="http://www.linkedin.com/in/shanewebguy" rel="external" title="in" class="social">In</a>
				<a href="https://plus.google.com/u/0/103732921102368559956/posts?hl=en" rel="external" title="googleplus" class="social">Google Plus</a>


			</p>

			<br class="clear" />

			<div id="navContainer">
				<del id="nav-left"></del>

				<ul id="nav" class="clearfix">
					<?php dynamic_sidebar('Navigation'); ?>
					<!--<li><br class="clear" /></li>-->
				</ul>

				<del id="nav-right"></del>
			</div>

			<div id="banner" class="clearfix">
				<!--<img src="<?php // bloginfo('template_url'); ?>/images/common/img_laptop.png" alt="Laptop" class="right" style="margin-left:40px;" />-->
				<?php echo do_shortcode('[meteor_slideshow]');?>
				<!--					<div class="right" style="margin-left:40px;">

				</div>

				<p id="bannerText">
					Shane’s Portfolio <br />
					<span class="big">Website</span>
				</p>				-->

				<a href="http://www.shanewebguy.com/shanes-portfolio/" id="launch" class="right">View Portfolio</a>
			</div>

			<del id="ellipse"></del>
		</div>
	</div>