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
