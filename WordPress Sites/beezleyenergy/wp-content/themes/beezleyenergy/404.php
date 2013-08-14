<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="Content">
      <div class="Page">
		<a href="index.php" class="logo">
			<img src="<?php bloginfo("template_url"); ?>/images/logo.png" width="242" height="146" alt="" />
		</a>
		
		<div class="home-details" style="min-height:300px;">
			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title" style="text-align:center;font-size:25px;"><big style="color:#C00;"><?php _e( 'Not Found', 'twentyten' ); ?></big></h1>
				
				<br />
				
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
					
					<br />
					
					<p><?php get_search_form(); ?></p>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->
		</div>
      </div>
	  
	  <br style="clear:both;" />
	  
	  <script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
    </div>
    <!--CONTENT END HERE--> 

<?php get_footer(); ?>