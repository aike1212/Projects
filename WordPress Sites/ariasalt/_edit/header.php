<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="google-site-verification" content="kDffZCj4O8Gew1xOj5A-SfjWfhQT_cS_XHwbrA1Y2SQ" />
	<title>
	<?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
		if ( $paged >= 2 || $page >= 2 )echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
	?>
	</title>
	<link rel="SHORTCUT ICON" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles/fonts.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles/styles.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.js"></script>	
	<?php
		if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
		if (is_page('health-conditions')) {
	?>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/fancybox.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.fancybox-1.3.1.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/styles/jquery.fancybox-1.3.1.css" />
	<?php } else if (is_page('frequently-asked-questions')) { ?>		<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/accordion_modified.js"></script>		<?php } ?>
	<!--
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#menu-navigation li a').mouseover(function() {
				alert('wakokoko');
				
				$(this).animate({
					width: '141px',
					height: '50px',
					padding: '16px 0',
					font-size: '20px',
					margin: '-10px 15px 0 -15px'
				});
			}
		});
	</script>
	-->
	<?php wp_head(); ?>
</head>

<body>
	<!-- Main -->
	<div id="main" class="clearfix">
		<div id="header" class="clearfix">
			<a href="<?php bloginfo( 'url' ); ?>" class="left">
				<h1>ARIA Salt Therapy Center</h1>
			</a>
			
			<p id="header-call" class="right">
				Call Us at <span>817-732-SALT (7258)</span>
			</p>
			
			<br class="clear" />
			
			<?php dynamic_sidebar('navigation'); ?>
		</div>
