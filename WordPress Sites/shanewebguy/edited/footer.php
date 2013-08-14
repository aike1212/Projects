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
		<?php 
			dynamic_sidebar('Footer Navigation');
			dynamic_sidebar('Footer Navigation 2');
		?>
		
	<p id="footer-nav">	
		<small style="font-size:10px;">
			Copyright &copy; 2012. Shane Web Guy. All Rights Reserved
		</small> 
		
		<br /> <br />
		
		<!--<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fshanewebguy.com%2F" rel="external"><img src="<?php bloginfo('template_url');?>/images/common/img_css-w3c.png" /></a>-->
		<a href="http://validator.w3.org/check?uri=referer" rel="external"><img src="<?php bloginfo('template_url');?>/images/common/img_xhtml-w3c.png" /></a>
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
