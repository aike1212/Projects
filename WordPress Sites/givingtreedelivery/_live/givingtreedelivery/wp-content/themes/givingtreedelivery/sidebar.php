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
	<?php dynamic_sidebar('Business Hours'); ?>
	
	<h2><span>TODAY'S</span> special</h2>
	
	<div>
		<?php dynamic_sidebar('Specials'); ?>
	
		<br class="clear" />
		
		<a href="#" class="view-details" title="special_1">view details</a>
		<a href="#" class="view-details" title="special_2">view details</a>
		
		<a href="#" id="order-btn" class="block clearfix">
			<span id="btn-arrow" class="right block"></span>
			Order Now <br />
			<small>Free Delivery</small>
		</a>
	</div>
</div>