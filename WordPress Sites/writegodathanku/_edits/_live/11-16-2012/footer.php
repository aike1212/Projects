		<!-- Footer -->
		<div id="footer">
			<p>
				<span class="left">
					<a href="<?php bloginfo('url'); ?>">Home</a>								
					<?php if (isset($_SESSION['login_user'])) { ?>					
						<a href="<?php bloginfo('url'); ?>/profile">My Profile</a>					
						<a href="<?php bloginfo('url'); ?>/logout">Logout</a>				
					<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>/login">Login</a>
						<a href="<?php bloginfo('url'); ?>/sign-up">Signup</a>				
					<?php } ?>
				</span>
				
				Writegodathankyou.com <a href="<?php bloginfo('url'); ?>/write-god-a-thank-you-privacy-policy" style="padding-left:10px;">Privacy Policy.</a> <a href="<?php bloginfo('url'); ?>/write-god-a-thank-you-terms-of-service" style="padding-left:10px;">Terms of Service.</a>
			</p>
		</div>
		<script src="http://platform.tumblr.com/v1/share.js"></script>
		<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
