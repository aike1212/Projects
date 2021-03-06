<?php
/**
* Template Name: Front Page
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
					
					<?php echo do_shortcode('[contact-form-7 id="132" title="All Sports Show Contact Form"]');?>
				
				</fieldset>
			</form>
		</div>
	</div>



<div id="main" class="clearfix">
			<div id="content" class="clearfix">
				<h1>
					All Sports Show <br />
					<small>March 30-31, 2013 <span style="color:#FFF;">&bull;</span> Arapahoe County Fairgrounds, Aurora, CO</small>
				</h1>
				
				<div class="contentContainer">
					<del class="containerTop"></del>
					<p class="containerMid" style="padding:0 20px 25px; width:712px;">
						It's time to mark your calendar! Please join The All Sports Show and Expo, the Rocky Mountain Regions premiere "Interactive"
						trade show. The All Sports Show is the Rocky Mountain Regions only total sports event. 
					</p>
					
					<p class="containerMid" style="padding:0 20px 25px; width:712px;">
						Whether your business is new or old, large or small, sports or nutrition focused exhibiting at the "All Sports Show" is a prime
						business opportunity to meet your potential customers face-to-face and increase your visibility within the sports community. 
						Attendees are seeking education on new products, services, and concepts by the industry professionals. This opportunity will be 
						enhanced through the use of demo areas, seminars, discussions, lectures, product sampling and hands on experiences. You will 
						maximize your exposure and enhance consumer knowledge by presenting your products and services at this consumer based event. 
						The attendees and exhibitors will also enjoy on-site food and beverage concessions...
					</p>
					<del class="containerBtm"></del>
					
					<a href="#" class="moreBtn">&raquo; Read More</a>
				</div>
				
				<div class="contentContainer">
					<del class="containerTop"></del>
					<h4>Recent Blogs</h4>
					
					<div class="containerMid">
						<?php get_template_part( 'loop', 'index' ); ?>
					</div>
					<del class="containerBtm"></del>
					
					<a href="#" class="moreBtn">&raquo; Other Posts</a>
				</div>
				
				<span id="imgContainer" class="right" >
					<img src="<?php bloginfo('template_url'); ?>/images/common/img_logoSmall.jpg" alt="Logo" />
				</span>
				
				<h3>Introduce your new Products, Equipment, or Technology at the All Sports Show!!</h3>
				
				<address>
					All Sports Show, c/o Joe Imbriani, PO Box 462583, Aurora, CO 80046 <br />
					Phone: 303-868-7863 Fax: 720-870-6300 <br />
					vendor@allsportsshow.com
				</address>
			</div>
			
			<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
?>

<!-- Sidebar -->
<div id="sidebar">
	<!--
	<ul id="nav">
		<li><a href="#">Home</a></li>
		<li><a href="#">EXPO</a></li>
		<li><a href="#">Event Schedule</a></li>
		<li><a href="#">Sponsors</a></li>
		<li><a href="#">Tickets</a></li>
		<li><a href="#">Vendor Info</a></li>
		<li><a href="#">Visitor Info</a></li>
		<li><a href="#">FAQ</a></li>
		<li><a href="#">Previous Events</a></li>
		<li><a href="#">Scholarships</a></li>
		<li><a href="#">Testimonials</a></li>
		<li><a href="#">Blog</a></li>
	</ul>
	-->
	<div id="nav">
		<?php dynamic_sidebar('Sidebar Navigation'); ?>
	</div>
	
	<img src="<?php bloginfo('template_url'); ?>/images/common/img_sidebarObject1.png" alt="Discover" style="margin-bottom:15px;" /> 
	<img src="<?php bloginfo('template_url'); ?>/images/common/img_sidebarObject2.png" alt="Discover" />
</div>

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

</div> <!-- main -->

<!-- Footer -->
<div id="footer" style="width:100%;">
	<p id="copyright" class="clearfix">
		Copyright &copy; All Sports Show 2012. All Right Reserved.
		<span class="right">web design by windowsandweb.com</span>
	</p>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
