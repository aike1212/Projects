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

	<!--FOOTER START HERE-->
		<div class="footer">
		  <div class="Page">
			<div class="navigation">
			  <?php dynamic_sidebar("Footer Navigation"); ?>
			  
			  <!--
			  <ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Clients</a></li>
				<li><a href="#">News</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">Contact</a></li>
			  </ul>
			  -->
			</div>
			<div class="navigation">
			  <ul class="none">
				<li>23632 Calabasas Road</li>
				<li>Suite 105</li>
				<li class="none">Calabasas, CA 91302</li>
				<li>Tel. 818.591.8555</li>
				<li>Fax: 818.591.8556</li>
				<li class="none"><a href="mailto:info@beezleyenergy.com">info@beezleyenergy.com</a></li>
				<li class="none"><a href="http://www.ladesignstudio.com" target="_blank">By the Web Design Company</a></li>
			  </ul>
			</div>
		  </div>
		</div>
		
		<!--FOOTER END HERE--> 
		
	  </div>
	  <!--WRAPPER END HERE--> 
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