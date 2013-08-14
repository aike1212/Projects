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
		<div id="main" class="clearfix" style="background:#FFF;">
			<div id="content" class="clearfix" style="width:100%">
				<div id="leftContent" class="left full">
					<div class="tab">
						<a href="<?php echo get_option('Home'); ?>/shanes-blog" class="active">Shane's Blog</a>
					</div>
				
					<?php get_template_part( 'loop', 'single' );?>
				</div>
				
				<div id="rightContent">
					<h2 id="twitter-title">Twitter Feed</h2>
					
					<div id="rightContainer">		
						<h3 id="happening">What's Happening?</h3>
						
						<?php dynamic_sidebar('Twitter'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
