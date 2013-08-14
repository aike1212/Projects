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
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header -->
	<div id="header">
		<div id="inner-header">
			<h1 class="left"><a href="?page_id=6">First Web Inc.</a></h1>
			
			<p class="right">
				<span>Phone: <a href="tel:480.899.8676">480.899.8676</a></span>
				<span>Email: <a href="mailto:info@first-web-design.com">info@first-web-design.com</a></span>
				<br />
				
				<img src="<?php bloginfo('template_url'); ?>/images/img_bbb.png" alt="BBB" />
				<img src="<?php bloginfo('template_url'); ?>/images/img_a+.png" alt="A+" />
				<br class="clear" />
			</p>
			
			<?php wp_nav_menu(array('menu' => 'Navigation')); ?>
			
			<br class="clear" />
		</div>
	</div>
	
	<!-- Banner Area -->
	<?php if(is_page('home')) { ?>
		<div id="banner-area">
			<?php if ( function_exists('show_nivo_slider') ) { show_nivo_slider(); } ?>
		</div>
	<?php } ?>