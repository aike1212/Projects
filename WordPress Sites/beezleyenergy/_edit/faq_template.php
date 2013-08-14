<?php
/**
 * Template Name: FAQ Template
 *
 */

get_header(); ?>

<!--CONTENT START HERE-->
<div id="Content">
	<div class="Page">
		<a href="index.php" class="logo">
			<img src="<?php bloginfo("template_url"); ?>/images/logo.png" width="242" height="146" alt="" />
		</a>
		 
		<?php // include("display_facts.php");?> 
		
		<?php dynamic_sidebar('Display Faq Slideshow'); ?>
		
		<?php 
			if ( have_posts() ) : 
				while ( have_posts() ) :
					the_post();	
					include("display-faqs.php");
				endwhile;
			endif; 
		?>
	</div>
</div>
 <!--CONTENT END HERE--> 

<?php get_footer(); ?>