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
<div id="sidebar" class="clearfix">
	<h2 id="testimonial-title">Testimonial</h2>
	
	<?php dynamic_sidebar('Testimonials'); ?>
	
	<a href="<?php echo get_option('Home'); ?>/testimonials" id="readMore">Read More Testimonials</a>
</div>
