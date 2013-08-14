<?php
/**
 * Template Name: Full Page
 *
 */

get_header(); ?>

	<div id="wrapper">
		<!-- Main -->
		<div id="main" class="clearfix" style="background:#FFF;">
			<div id="content" class="clearfix" style="width:100%">
				<div class="tab">
					<?php
						$class = null;
						
						if (is_page("Shane's Portfolio")) :
							$class = 'class="active"';
						endif;
					?>
					<a href="<?php echo get_option('Home'); ?>/shanes-portfolio" <?php echo $class; ?>>Shane's Portfolio</a>
				</div>
			
				<?php 
					if ( have_posts() )  {
						while ( have_posts() ) {
							the_post(); ?>
							<!--<h1><?php // the_title(); ?></h1>-->
							<br />
							<?php the_content();
						}
					}
				?>	
			</div>
		</div>
	</div>

<?php get_footer(); ?>