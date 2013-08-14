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
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Header -->
	<div id="header">
		<div id="inner-header" class="clearfix">
			<h1 class="left"><a href="#">South Texas Screening Aid</a></h1>
			
			<p class="right">
				<small>Got questions? Contact us today for answers!</small>
				<a href="tel:361-664-2195" title="phone">361 664 2195</a> Phone
				<span id="spacer">&nbsp;</span>
				<a href="tel:361-664-2197" title="fax">361 664 2197</a> Fax
			</p>
			
			<?php wp_nav_menu(array('menu' => 'Header Menu')); ?>
			
			<!--
			<ul id="nav">
				<li class="current_page_item"><a href="#">Home</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Rates</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			-->
		</div>
	</div>
	
	<!-- Banner Area -->
	<div id="banner-area">
		<img src="<?php bloginfo('template_url'); ?>/images/common/img_banner.jpg" alt="Banner" />
	</div>