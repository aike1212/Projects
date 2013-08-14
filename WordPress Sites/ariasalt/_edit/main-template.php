<?php
	/**
	 * Template Name: Main Template
	 */
get_header(); ?>

<?php if (is_page('home')) { ?>
	<div id="banner" class="right clearfix">
		<?php do_shortcode( '[responsive_slider]' ); ?> 
	</div>
<?php } ?>

<div id="content" class="left <?php echo is_page('home') ? null : 'full';?>">
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				
				if(is_page('home')) { 
					null; // do nothing
				} else {
					echo "<h2>";
						the_title();
					echo "</h2>";
				}
				
				the_content();
			}
		}
	?>	
</div>

<?php get_footer(); ?>
