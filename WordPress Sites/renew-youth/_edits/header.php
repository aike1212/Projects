<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/favicon.ico" type="image/x-icon" />
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles/fonts.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles/styles.css" />
<!--[if IE]>
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/styles/ie.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/scripts/blankTargetFix.js"></script>

</head>

<body <?php body_class(); ?> onload="blankTargetFix();">

	<!-- Header -->
	<div id="header">
		<?php dynamic_sidebar('Header Menu'); ?>
	</div>
