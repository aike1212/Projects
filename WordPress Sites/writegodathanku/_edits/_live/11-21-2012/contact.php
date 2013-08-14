<?php
	/**
	 * Template Name: Contact Form
	 */
	get_header();
?>

<div id="wrapper" style="margin:20px auto 40px !important; width:500px !important;">
	<div id="main" class="clearfix" style="padding:25px 0 !important; width:500px !important;">			
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<h2 class="login-header"><small><?php the_title(); ?></small></h2>
		
		<?php the_content(); ?>
			
		<?php endwhile; ?>
	<?php endif; ?>
	
	</div> <!-- main -->
</div> <!-- wrapper -->

<?php get_footer(); ?>
