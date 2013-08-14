<?php
/**
 * Template Name: Welcome
 *
 */

get_header(); ?>

	<div id="wrapper">
		<!-- Main -->
		<div id="main" class="clearfix">
			<div id="content" class="clearfix">
				<div id="leftContent" class="left">	
					<?php 
						if ( have_posts() )  {
							while ( have_posts() ) {
								the_post(); ?>
								<h1><?php the_title(); ?></h1>
								<br />
								<?php the_content();
							}
						}
					?>	
				
					<!--
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
					-->
				</div>
				
				<div id="rightContent">
					<h2 id="twitter-title">Twitter Feed</h2>
					
					<div id="rightContainer">		
						<h3>What's Happening?</h3>
						
						<?php dynamic_sidebar('Twitter'); ?>
					</div>
				</div>
			</div>

			<?php get_sidebar(); ?>
			
		</div>
	</div>

<?php get_footer(); ?>