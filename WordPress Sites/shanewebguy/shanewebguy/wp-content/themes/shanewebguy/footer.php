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
	

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<!-- Footer -->
<div id="footer">
	<p id="footer-nav">
		<a href="#">Home</a> &nbsp; | &nbsp;
		<a href="#">About Shane</a> &nbsp; | &nbsp;
		<a href="#">Shane's Portfolio</a> &nbsp; | &nbsp;
		<a href="#">Shane's Blog</a> &nbsp; | &nbsp;
		<a href="#">Shane's Resume</a> &nbsp; | &nbsp;
		<a href="#">Contact Me</a>
	
		<br class="block" style="margin:40px 0 0;" />
	
		<small style="font-size:10px;">
			Legal | Privacy Statement | Anti-Spam Policy | Terms &amp; Conditions <br />
			Copyright &copy; 2012. Shane Web Guy. All Rights Reserved
		</small>
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
