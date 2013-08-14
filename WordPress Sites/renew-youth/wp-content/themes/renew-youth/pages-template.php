<?php
/**
 * Template Name: Pages Template
 */

get_header(); ?>

<!-- Main -->
<div id="main" class="clearfix">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="content" class="clearfix">
				<?php get_sidebar(); ?>
			
				<h1><?php the_title(); ?></h1>	
				
				<?php the_content(); ?>
			</div>	
		<?php endwhile; ?>
	<?php endif; ?>
	
	<br class="clear" />
	
	<?php include('bottom-content.php'); ?>
	
</div>

<?php get_footer(); ?>
