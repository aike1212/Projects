		<!-- Footer -->
		<div id="footer">
			<div id="inner-footer">
				We use and customize the following systems for your site: 
				<br />
				<img src="<?php bloginfo('template_url'); ?>/images/img_progs.png" alt="Programming Languages" />
				
				<div id="footer-holder">
					<?php wp_nav_menu(array('menu' => 'Navigation')); ?>
				
					<span class="right clearfix">
						<small class="left">Get Connected </small>
						<a href="#" class="social-icn" title="Flickr"></a>
						<a href="#" class="social-icn" title="RSS Feeds"></a>
						<a href="#" class="social-icn" title="LinkedIn"></a>
						<a href="#" class="social-icn" title="Facebook"></a>
						<a href="#" class="social-icn" title="Twitter"></a>
						<a href="#" class="social-icn" title="Wordpress"></a>
					</span>
				
					<span class="left">
						First Web Incorporated. Professional Web Design. All Rights Reserved. Copyright &copy; <?php echo date('Y'); ?>. www.first-web-design.com
					</span>
					
					<br class="clear" />
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>