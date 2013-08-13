<?php 
	/* Template Name: Default */
	get_header(); 
	get_template_part( 'head', 'page' );
?>

<!-- Main -->
<div id="main" class="clearfix">
	<?php get_template_part( 'banner', 'page' ); ?>
	
	<div id="content" class="left">
		<?php
			if (have_posts()) :
				while (have_posts()) : 
					the_post();
					
					is_page('home') ? $hide = 'class="hide-text"' : null;
		?>
		
		<h2 <?php echo $hide; ?>><?php the_title(); ?></h2>
		
		<?php 
					the_content(); 
				endwhile;
			endif;
			
			is_page('home') ? get_template_part( 'service-areas', 'page' ) : null;
		?>
	</div>
	
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>