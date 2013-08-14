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

		<!-- Footer -->
		<div id="footer" class="clearfix">
			<?php dynamic_sidebar('Footer Menu'); ?>
			
			<!--
			<a href="#" title="home">Home</a>
			<a href="#" title="join">Join Us</a>
			<a href="#" title="fint">Find Us</a>
			<a href="#" title="testing">Metabolic Testing</a>
			<a href="#" title="about">About Dr. Adamcik</a>
			<a href="#" title="special">Specials</a>
			<a href="#" title="contact">Contact</a>
			-->
			<span id="copyright" class="right">Copyright 2012. Renew Youth. All rights reserved.</span>
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
