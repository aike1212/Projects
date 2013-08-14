<?php
	/**
 * Template Name: Shane Portfolio
 * Blackat13
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
					do_action('show_portfolio');
				?>	
			</div>
		</div>
	</div>

<?php get_footer(); ?>
