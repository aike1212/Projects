<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<!--CONTENT START HERE-->
	<div id="Content">
      <div class="Page">
		<a href="index.php" class="logo">
			<img src="<?php bloginfo("template_url"); ?>/images/logo.png" width="242" height="146" alt="" />
		</a>
		
        <div class="home-details">  
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
      </div>
    </div>
    <!--CONTENT END HERE--> 

<?php get_footer(); ?>