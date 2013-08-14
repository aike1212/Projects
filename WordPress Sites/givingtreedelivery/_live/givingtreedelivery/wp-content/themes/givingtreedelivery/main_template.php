<?php
/**
 * Template Name: Main Template
 */

get_header(); ?>

	<div id="main" class="clearfix">
	
		<div id="content" class="index">
	
			<!--<div id="content" class="contact-form">-->

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			
			<?php do_shortcode('[responsive_slider]'); ?>
		</div>

		<?php get_sidebar(); ?>
	</div>
		
<?php get_footer(); ?>
