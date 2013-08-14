<?php
/**
 * Template Name: Index Template
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
					
					<img src="<?php bloginfo('template_url');?>/images/common/img_logo.png" alt="LOGO" width="180" style="margin:10px auto;" />
					
					<p class="call">	
						Call <br />
						<a href="#">1-800-123-4567</a>
					</p>
					
					<a href="mailto:info@bigdickweb.com" rel="external" id="email">info@bigdickweb.com</a>
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
			</div>
		</div>

		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>
