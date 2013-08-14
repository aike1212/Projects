<?php session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top:0 !important;">
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
	
	<link rel="SHORTCUT ICON" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" type="image/x-icon" />

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/styles/styles.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/ajax.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/accordion_modified.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/gen_validatorv31.js"></script>

<!--<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );				
	wp_head();
?><?php if (isset($_SESSION['login_user'])) : ?>	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/styles/jquery.fancybox-1.3.1.css" />	
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.fancybox-1.3.1.js"></script>	
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/fancybox.js"></script>
<?php endif; ?>

<?php if (is_page('Login') || is_page('Sign Up') || is_page('Write a Thank You') || is_page('forgot-password') || is_page('profile')) : ?>	
	<script type="text/javascript">		
		function clearText(input) {			
			if(input.defaultValue==input.value){				
				input.value=""			
			} else {				
				if(input.value==""){					
					input.value=input.defaultValue				
				}			
			}		
		};				
		
		function writeThankYou(input) {		
			if(input.defaultValue==input.value){	
				input.value="Dear God, \n\t"	
			} else {		
				if(input.value==""){		
					input.value=input.defaultValue		
				}		
			}		
		};	
		
		function writePrayer(input) {		
			if(input.defaultValue==input.value){	
				input.value=""	
			} else {		
				if(input.value==""){		
					input.value=input.defaultValue		
				}		
			}		
		};
</script>
<?php endif; ?>

<?php if (is_page('Sign Up')) : ?>	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/styles/jsDatePick_ltr.min.css" />	
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/scripts/jsDatePick.min.1.3.js"></script>	
	<script type="text/javascript">	
		window.onload = function(){		
			new JsDatePick({	
				useMode:2,				
				target:"birthday",	
				dateFormat:"%n-%d-%Y"		
			});
		};	
	</script>
<?php endif; ?>

<?php if (is_page('Write a Thank You') || is_page('profile')) : ?>	
	<script language="javascript" type="text/javascript">		
		function limitText(limitField, limitCount, limitNum) {			
			if (limitField.value.length > limitNum) {				
				limitField.value = limitField.value.substring(0, limitNum);	
			} else {	
				limitCount.value = limitNum - limitField.value.length;			
			}		
		}	
	</script>
<?php endif; ?>

</head>

<body <?php body_class(); ?>>

	<!-- Header -->
	<div id="header">
		<p class="clearfix">
			<span class="left">
				<a href="<?php bloginfo('url'); ?>">Home</a>								
				<?php if (isset($_SESSION['login_user'])) { ?>					
					<a href="<?php bloginfo('url'); ?>/profile">My Profile</a>					
					<a href="<?php bloginfo('url'); ?>/logout">Logout</a>				
				<?php } else { ?>
					<a href="<?php bloginfo('url'); ?>/login">Login</a>
					<a href="<?php bloginfo('url'); ?>/sign-up">Signup</a>				
				<?php } ?>
			</span>
			
			<span id="social-panel" class="right">
				<a href="" rel="external" title="Facebook" class="social">Facebook</a>
				<a href="" rel="external" title="Twitter" class="social">Twitter</a>
				<a href="" rel="external" title="Pinterest" class="social">Pinterest</a>
				<a href="" rel="external" title="Google" class="social">Google+</a>
			</span>
			
			<?php if(is_author() || is_page('profile')) { ?>
				<img src="<?php bloginfo('template_url'); ?>/images/common/img_logo.png" alt="logo" width="310" height="35" class="right block" style="margin-top:10px;" />
			<?php } ?>
		</p>
	</div>
	
<?php if(is_author() || is_page('profile')) $hide = 'style="display:none;"'; ?>

<div id="logo-area" <?php echo $hide; ?>>
	<a href="<?php bloginfo('url'); ?>" style="text-decoration:none;">
		<h1>Write God a Thank You.</h1>
	</a>
</div>