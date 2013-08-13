<?php get_header(); ?>

		<div id="main" class="clearfix">
			<div id="content">

				<?php
				/* Run the loop to output the post.
				 * If you want to overload this in a child theme then include a file
				 * called loop-single.php and that will be used instead.
				 */
				?>
			
				<div class="contentContainer">
					<del class="containerTop"></del>			
					<div class="containerMid">
						<?php get_template_part( 'loop', 'index' ); ?>
					</div>
					<del class="containerBtm"></del>
				</div>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
		</div><!-- #container -->

<?php get_footer(); ?>
