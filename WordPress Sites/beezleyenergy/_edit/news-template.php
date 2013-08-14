<?php
/**
 * Template Name: News Template
 *
 */

get_header(); ?>

	<!--CONTENT START HERE-->
	<div id="Content">
		<div class="Page">
			<a href="index.php" class="logo">
				<img src="<?php bloginfo("template_url"); ?>/images/logo.png" width="242" height="146" alt="" />
			</a>
		
			<div class="contact-area">
				<div class="home-details none" style="padding-top: 0px;">
					<?php //echo do_shortcode("[display-posts posts_per_page='1' include_excerpt='true']"); ?>
					
					<?php 
						$last = wp_get_recent_posts('2');
						//print_r($last);
						$last_id = $last['0']['ID'];
						$second_last_url = $last['1']['guid'];
						//print_r($second_last_url);
						query_posts($last_id);
						$ctr = 0;
						while ( have_posts() ) : the_post();
							if ($ctr < 1) {
								echo '<h1 class="entry-title">';
									the_title();
								echo '</h1>';
							} 
							echo the_content();
							wp_reset_query();
							$ctr++;
						endwhile; 

						while ( have_posts() ) : the_post(); ?>
							<a href="<?php echo $second_last_url; ?>" class="news-next">Next Post &raquo;</a>
							<?php wp_reset_query();
						endwhile; 
					  ?>
					 
					 <?php // dynamic_sidebar('Display Top Post'); ?>
				</div>
				
				<div class="rightcontact">
					<div class="contact-bg-top">
						<div class="contact-bg-bot">
							<div class="contact-bg-center">
								<h3>MORE NEWS</h3>
								<?php echo do_shortcode("[display-posts order='DESC' orderby='date']"); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!--CONTENT END HERE--> 

<?php get_footer(); ?>

query_post('cat=[category_ID]');

while ( have_posts() ) : 
	the_post();
	echo '<h1>';
	the_title();
	echo '</h1>';
	the_content();
endwhile;
						