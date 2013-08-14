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

<div id="footer">
	<div id="footer-wrap">
		<!--
		<ul id="footer-nav" class="left">
			<li><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Menu</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">FAQ</a></li>
			<li><a href="#">Terms of Use</a></li>
			<li><a href="#">Charity</a></li>
			<li><a href="#">Medical Mj Info</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Links</a></li>
		</ul>
		-->
		
		<?php dynamic_sidebar("Footer Navigation"); ?>
		
		<p id="copyright" class="right">
			&copy; 2012 Giving Tree Delivery. All Rights Reserved.
		</p>
		
		<br class="clear" />
	</div>
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
