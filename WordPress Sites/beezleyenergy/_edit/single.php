<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="Content">
		<div class="Page">
			<a href="index.php" class="logo">
				<img src="<?php bloginfo("template_url"); ?>/images/logo.png" width="242" height="146" alt="" />
			</a>
		
			<div class="contact-area">
				<div class="home-details none" style="padding-top: 0px;">

				<?php
				/* Run the loop to output the post.
				 * If you want to overload this in a child theme then include a file
				 * called loop-single.php and that will be used instead.
				 */
				get_template_part( 'loop', 'single' );
				?>
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
