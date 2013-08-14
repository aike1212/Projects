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
							<h1 id="welcome"><?php the_title(); ?></h1>
							<br />
							<?php the_content();
						}
					}
				?>	
				</div>
					
				<div id="rightContent">
					<h2 id="twitter-title">Twitter Feed</h2>
					
					<div id="rightContainer">		
						<h3 id="happening">What's Happening?</h3>
						
						<?php dynamic_sidebar('Twitter'); ?>
					</div>
				</div>
			</div>

			<?php get_sidebar(); ?>
			
		</div>
	</div>

<?php get_footer(); ?>