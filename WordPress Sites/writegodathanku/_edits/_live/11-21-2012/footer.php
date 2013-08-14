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
				<a href="<?php bloginfo('url'); ?>/contact-us">Contact Us</a>
				<a href="<?php bloginfo('url'); ?>/write-god-a-thank-you-privacy-policy" style="padding-left:10px;">Privacy Policy</a> <a href="<?php bloginfo('url'); ?>/write-god-a-thank-you-terms-of-service" style="padding-left:10px;">Terms of Service</a>
			</p>
		</div>
		<script src="http://platform.tumblr.com/v1/share.js"></script>
		<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
		<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36409358-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</body>
</html>