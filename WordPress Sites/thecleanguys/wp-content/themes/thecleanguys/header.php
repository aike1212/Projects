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

<link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="main-wrapper">
<div id="header-wrapper">
<del id="header-bg"></del>
<!-- Main -->
<div id="main">

<div id="header">
	<del id="first-nav-divider"></del>
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/common/header-logo.png" alt="" class="header-logo" /></a>
	<h6>Call Us Today!</h6>
	<h3>801.486.3441</h3>
	<a href="mailto:service@thecleanguys.com" class="hd-email">service@thecleanguys.com</a>
	
	<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
	
	<div id="hd-form">
		<big>Quick Quote Form</big>
		<em>Have a question about any of our services?</em>
		<em>Get a quick answer by filling out our quick form.</em>
		<?php echo do_shortcode('[contact-form-7 id="34" title="Quick Quote Form"]'); ?>
	</div>
	
	<?php wp_nav_menu(array('menu' => 'Navigation', 'container' => null)); ?>
</div>

	