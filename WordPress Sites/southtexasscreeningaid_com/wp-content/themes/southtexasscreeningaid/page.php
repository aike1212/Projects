<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	
	<div id="main" class="clearfix">
		<?php get_template_part( 'topContent', 'page' ); ?>
		
		<div id="content" class="clearfix">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<h2 <?php echo is_page('home') ? 'style="display:none"' : null; ?>><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		<?php get_template_part( 'bottomContent', 'page' ); ?>
	</div>

<?php get_footer(); ?>
