<?php 
/**
 * Template Name: Clean Guy Template
 */
get_header(); ?>

<div id="content">
	<?php
		if ( have_posts() ) :
			while ( have_posts() ) : 
				the_post();
	?>
	
	<h1><?php the_title(); ?></h1>
	
	<?php
				the_content();
			endwhile;
		endif;
	?>
</div>

<?php get_sidebar(); ?>

<br class="clear" />

</div> <!-- Main -->
</div> <!-- Header Wrapper -->
</div> <!-- Main Wrapper -->

<?php 
	get_template_part( 'bottom-content', 'page' ); 
	get_footer();
?> 
