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
 *
 * Template Name: New Front Page
 */

get_header(); ?>

		<div id="main" class="clearfix">
			<div id="content">
				<h1>
					All Sports Show <br />
					<small>March 30-31, 2013 <span style="color:#FFF;">&bull;</span> Arapahoe County Fairgrounds, Aurora, CO</small>
				</h1>
				
				<div class="contentContainer">
					<del class="containerTop"></del>
					<p class="containerMid">
						It's time to mark your calendar! Please join The All Sports Show and Expo, the Rocky Mountain Regions premiere "Interactive"
						trade show. The All Sports Show is the Rocky Mountain Regions only total sports event. 
					</p>
					
					<p class="containerMid">
						Whether your business is new or old, large or small, sports or nutrition focused exhibiting at the "All Sports Show" is a prime
						business opportunity to meet your potential customers face-to-face and increase your visibility within the sports community. 
						Attendees are seeking education on new products, services, and concepts by the industry professionals. This opportunity will be 
						enhanced through the use of demo areas, seminars, discussions, lectures, product sampling and hands on experiences. You will 
						maximize your exposure and enhance consumer knowledge by presenting your products and services at this consumer based event. 
						The attendees and exhibitors will also enjoy on-site food and beverage concessions...
					</p>
					<del class="containerBtm"></del>
					
					<a href="#" class="moreBtn">&raquo; Read More</a>
				</div>
				
				<div class="contentContainer">
					<del class="containerTop"></del>
					<p class="containerMid">
						<?php get_template_part( 'loop', 'index' ); ?>
					</p>
					<del class="containerBtm"></del>
					
					<a href="#" class="moreBtn">&raquo; Other Posts</a>
				</div>
				
				<span id="imgContainer" class="right" >
					<img src="<?php bloginfo('template_url'); ?>/images/common/img_logoSmall.jpg" alt="Logo" />
				</span>
				
				<h3>Introduce your new Products, Equipment, or Technology at the All Sports Show!!</h3>
				
				<address>
					All Sports Show, c/o Joe Imbriani, PO Box 462583, Aurora, CO 80046 <br />
					Phone: 303-868-7863 Fax: 720-870-6300 <br />
					vendor@allsportsshow.com
				</address>
			</div> <!-- content -->
			
			<?php get_sidebar(); ?>
			
		</div> <!-- main -->

		<?php
		/* Run the loop to output the posts.
		 * If you want to overload this in a child theme then include a file
		 * called loop-index.php and that will be used instead.
		 */
		// get_template_part( 'loop', 'index' );
		?>
		
<?php get_footer(); ?>
