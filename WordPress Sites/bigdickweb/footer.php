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
	// get_sidebar( 'footer' );
?>

</div>	

<!-- Footer -->
<div id="footer-wrapper">
	<div id="footer">
		<!--
		<p id="footer-nav">
			<a href="#">Home</a> &bull;
			<a href="#">Services</a> &bull;
			<a href="#">Portfolio</a> &bull;
			<a href="#">Pricing</a> &bull;
			<a href="#">Contact</a> &bull;
			<a href="#">Links</a>
		</p>
		
		<p id="payments" class="clearfix">
			<a href="" class="payment" title="visa">Visa</a>
			<a href="" class="payment" title="mastercard">Mastercard</a>
			<a href="" class="payment" title="amex">American Express</a>
			<a href="" class="payment" title="discover">Discover</a>
		</p>
		
		<p id="footer-nav-small">
			<a href="#">Legal</a> &nbsp; | &nbsp;
			<a href="#">Privacy Statement</a> &nbsp; | &nbsp;
			<a href="#">Anti-spam Policy</a> &nbsp; | &nbsp;
			<a href="#">Terms &amp; Conditions</a>
			
			<br />
			
			<span style="color:#FFF;">Copyright &copy; 2012 Big Dick Web. All Rights Reserved</span>
		</p>
		-->
		<img src="<?php bloginfo('template_url'); ?>/images/common/img_payments.png" alt="payments" id="payments" />
		
		<?php dynamic_sidebar("footer-navigation"); ?>
		
		<span style="color:#FFF;">Copyright &copy; 2012 Big Dick Web. All Rights Reserved</span>
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
