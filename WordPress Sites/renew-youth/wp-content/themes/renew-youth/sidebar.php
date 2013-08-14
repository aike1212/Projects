<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 *

 * When we call the dynamic_sidebar() function, it'll spit out
 * the widgets for that widget area. If it instead returns false,
 * then the sidebar simply doesn't exist, so we'll hard-code in
 * some default sidebar stuff just in case.
 */
?>

<!-- Sidebar -->
<div id="sidebar">
	<a href="<?php is_home(); ?>">
		<img src="<?php bloginfo( 'template_url' ); ?>/images/common/img_logo.jpg" alt="Logo" />
	</a>
	
	<br />
	
	<img src="<?php bloginfo( 'template_url' ); ?>/images/common/img_title.png" alt="Title" class="block" style="margin-top:10px;" />
</div>