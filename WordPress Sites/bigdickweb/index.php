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

	<!-- Main -->
	<div id="main" class="clearfix">
		<?php 
			include('banner.php'); 
			include('navigation.php'); 
			include('topContents.php'); 
		?>
	
		<!-- Content -->	
		<div id="content">
			<div id="leftContent">
				<div class="sidebar-container">
					<h3>Request Form</h3>
					
					<p>Fill out this short form and we will get back to you as soon as possible with a reply. Thank you.</p>
					
					<?php echo do_shortcode('[contact-form-7 id="5" title="Big Dick Contact Form"]'); ?>
				</div>
				
				<div class="sidebar-container clearfix" style="height:209px;">
					<h3>Contact Us</h3>
					
					<img src="<?php bloginfo('template_url');?>/images/common/img_logo.png" alt="LOGO" width="180" style="margin:10px 0;" />
					
					<p class="call">	
						Call <br />
						<a href="#">1-800-123-4567</a>
					</p>
					
					<a href="#" id="email">info@bigdickweb.com</a>
				</div>
			</div>
		
			<div id="rightContent">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<h1>
							<?php the_title(); ?>
							<del id="header-divider"></del>	
						</h1>

						<?php the_content(); ?>		
					<?php endwhile; ?>
				<?php endif; ?>
				
				<!--
				<h1>
					Welcome
					<del id="header-divider"></del>	
				</h1>	
				
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
					dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					<a href="#">Learn More</a>
				</p>
				
				<br />
				
				<img src="<?php bloginfo('template_url');?>/images/content/img_designs.png" alt="Designs" />
				-->
			</div>
		</div>

		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>
