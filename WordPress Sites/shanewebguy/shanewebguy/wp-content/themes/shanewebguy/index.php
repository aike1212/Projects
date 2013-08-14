<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="wrapper">
		<!-- Main -->
		<div id="main" class="clearfix">
			<div id="content" class="clearfix">
				<div id="leftContent" class="left">
					<h1>Welcome to my site!</h1>	
					
					<p class="firstContent"> 
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
						suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
						vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
						et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
					</p>
					
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
						dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
						suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
						vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
						et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
					</p>
				</div>
				
				<div id="rightContent">
					<h2 id="twitter-title">Twitter Feed</h2>
					
					<div id="rightContainer">
						<?php dynamic_sidebar('Twitter'); ?>
						
						<!--
						<h3>What's Happening?</h3>
						
						<ul id="tweets">
							<li class="clearfix tweet">
								<img src="<?php bloginfo('template_url'); ?>/images/content/img_logo-thumb.jpg" alt="Pic" class="left" style="margin: 0 10px;" />
								
								<span class="twitter-name">ShaneWebGuy</span>
								
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonu<br />
								
								<small class="twit-time">2 minutes ago via twitter feed</small>
							</li>
							
							<li class="clearfix tweet">
								<img src="<?php bloginfo('template_url'); ?>/images/content/img_logo-thumb.jpg" alt="Pic" class="left" style="margin: 0 10px;" />
								
								<span class="twitter-name">ShaneWebGuy</span>
								
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonu<br />
								
								<small class="twit-time">2 minutes ago via twitter feed</small>
							</li>
							
							<li class="clearfix tweet">
								<img src="<?php bloginfo('template_url'); ?>/images/content/img_logo-thumb.jpg" alt="Pic" class="left" style="margin: 0 10px;" />
								
								<span class="twitter-name">ShaneWebGuy</span>
								
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonu<br />
								
								<small class="twit-time">2 minutes ago via twitter feed</small>
							</li>
							
							<li class="clearfix tweet">
								<img src="<?php bloginfo('template_url'); ?>/images/content/img_logo-thumb.jpg" alt="Pic" class="left" style="margin: 0 10px;" />
								
								<span class="twitter-name">ShaneWebGuy</span>
								
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonu<br />
								
								<small class="twit-time">2 minutes ago via twitter feed</small>
							</li>
							
							<li class="clearfix tweet">
								<img src="<?php bloginfo('template_url'); ?>/images/content/img_logo-thumb.jpg" alt="Pic" class="left" style="margin: 0 10px;" />
								
								<span class="twitter-name">ShaneWebGuy</span>
								
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonu<br />
								
								<small class="twit-time">2 minutes ago via twitter feed</small>
							</li>
							
							<li class="tweet">
								<img src="<?php bloginfo('template_url'); ?>/images/content/loading.gif" alt="loading..." class="block" style="margin:10px auto;" />
							</li>
						</ul>
						-->
					</div>
				</div>
			</div>

			<?php get_sidebar(); ?>
			
		</div>
	</div>
	
<?php get_footer(); ?>
