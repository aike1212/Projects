<?php
/**
 * Template Name: Inner Page Template
 */

get_header(); ?>

	<!-- Main -->
	<div id="main" class="clearfix">
		<?php 
			include('banner.php'); 
			include('navigation.php'); 
			include('topContents.php'); 
		?>
	
		<!-- Content -->	
		<div id="content" class="full">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1>
						<?php the_title(); ?>
						<del id="header-divider"></del>	
					</h1>

					<?php the_content(); ?>		
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	
<?php get_footer(); ?>
