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
	<div id="nav">
		<?php dynamic_sidebar('Sidebar Navigation'); ?>
	</div>
	
	<a href="http://www.facebook.com" alt="Facebook" rel="external" title="Facebook" class="social">Facebook</a>
	<a href="http://www.twitter.com" alt="Twitter" rel="external" title="Twitter" class="social">Twitter</a>
	<a href="http://www.youtube.com" alt="Youtube" rel="external" title="Youtube" class="social">Youtube</a>

	<br class="clear" />
	
	<img src="<?php bloginfo('template_url'); ?>/images/common/img_sidebarObject1.png" alt="Discover" style="margin-bottom:15px;" /> 
	<img src="<?php bloginfo('template_url'); ?>/images/common/img_sidebarObject2.png" alt="Discover" />
</div>
