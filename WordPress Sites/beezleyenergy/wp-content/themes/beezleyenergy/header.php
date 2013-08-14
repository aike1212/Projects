<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
			<?php
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

				?>
		</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css" />
		
		<!--[if IE 7]>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/ie7.css">      
		<![endif]-->

		<!--[if IE 8]>
				<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/ie8.css">
		<![endif]-->
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<?php if (is_page("about")) : ?>
			<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.7.1.min.js"></script>
			<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
		<?php endif; ?>
		
		<?php if (is_page("frequently-asked-questions")) : ?>
			<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/a-jquery.js"></script>
			<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
			<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/accordion.js"></script>
			<script type="text/javascript">
				jQuery().ready(function(){	
					// applying the settings
					jQuery('#theMenu').Accordion({
						active: 'h3.selected',
						header: 'h3.head',
						alwaysOpen: false,
						animated: true,
						showSpeed: 400,
						hideSpeed: 800
					});
					
				});	
			</script>
		<?php endif; ?>
		
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
	</head>

	<body <?php body_class(); ?>>
		<!--WRAPPER START HERE-->
		<?php $current_page = explode('/', current_page_url()); ?>
		<div id="Wrapper" <?php wrapperPicker($current_page[4]); ?>> 
		
		<!--HEADER START HERE-->
		
		<div class="header"> 
		  
		  <!--PAGE START HERE-->
		  <div class="Page">
		  
			<!--
			<ul>
			  <li><a href="#" class="active">Home</a></li>
			  <li><a href="#">About Us</a></li>
			  <li><a href="#">Services</a></li>
			  <li><a href="#">Clients</a></li>
			  <li><a href="#">News</a></li>
			  <li><a href="#">FAQ</a></li>
			  <li><a href="#">Contact Us</a></li>
			</ul>
			-->
			
			<?php dynamic_sidebar("Navigation"); ?>
		  
		  </div>
		  
		  <!--PAGE END HERE--> 
		</div>
		
		<!--HEADER END HERE-->