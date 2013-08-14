<?php
/**
 * Template Name: Inner Template
 */

get_header(); ?>

	<div id="main" class="not-home clearfix">
		<div id="content" class="full">
			<!--<div id="content" class="contact-form">-->

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
		
<?php get_footer(); ?>