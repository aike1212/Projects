<?php
/**
 * The Template for displaying all single posts.
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
					<?php get_template_part( 'loop', 'single' );?>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
