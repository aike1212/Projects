<?php
/**
 * Template Name: Visitor
 *
 */

get_header(); ?>

		<div id="main" class="clearfix">
			<div id="content">
				<div class="contentContainer">
					<del class="containerTop"></del>
					<div class="containerMid">
						<?php 
							if ( have_posts() )  {
								while ( have_posts() ) {
									the_post(); ?>
									<h1><?php the_title(); ?></h1>
									<br />
									<?php include ('display-visitors.php');
								}
							}
						?>	
					</div>
					<del class="containerBtm"></del>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->

<?php get_footer(); ?>