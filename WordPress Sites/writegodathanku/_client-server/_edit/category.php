<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
 
	session_start();

	global $wpdb, $wp_query;
	$user = $_SESSION['login_user'];

	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */

	$cf = new CustomFunctions;

	get_header(); 

	$category_slug = $wp_query->query_vars['category_name'];  //Get category information
	$cat_name = $wp_query->queried_object->cat_name; 		  		//Set the current category

	//Append love it counter
	if (isset($_POST['user_id'])) include('update-love.php');
?>
	<div id="categories"><?php include('category-list.php'); ?></div>
	
	<div class="post-review">
		<h3>Most Recent: <?=$cat_name?></h3>
		
		<?php 
			$qp_args = 'showposts=-1&category_name='.$category_slug;
			query_posts($qp_args); 
		?>
		
		<span><?php the_author_meta('user_id'); ?></span>
		
		<?php 
			if ( have_posts() ) { 
				while ( have_posts() ) { 
					the_post(); 
				 
					include('query-get-post-author.php'); /* @var: the_author */
		?>
				<!-- Display format of the post -->
				<div style="margin:30px 0 0;">
					<?php 
						include('loop-display-author-profile-picture.php'); 
						include('loop-display-post.php'); 
					?>
				</div>
  <?php } ?>
				<br class="clear" />
<?php } else { ?>	
				<p class="unavailable">
					<small>There are no available posts.</small>
				</p>
<?php } ?>	
	</div>
	
	<div class="post-review" style="margin-left:30px;">
		<h3>Most Popular: <?=$cat_name?></h3>
	
		<div style="margin:30px 0 0;">
			<ul style="padding:0;">
				<?php
					/**
					 * Get all posts on a category ordered by most number of loves
					 * @var: myposts
					 */
					include('query-get-post-on-category.php'); 
				
					if($myposts != null) {
				
						foreach( $myposts as $post ) {
						
							include('loop-get-author-info.php'); ?>
						
							<!-- Display format of the post -->
							<li class="clearfix">
								<?php 
									$love_button_type = 2; 
									include('loop-display-author-profile-picture.php'); 
									include('loop-display-post.php');
								?>
							</li>
				  <?php } ?>
					
				<?php } else { ?>
					<p class="unavailable">
						<small>There are no available posts.</small>
					</p>
				<?php } ?>
			</ul>
		</div>
	</div>

	<br class="clear" />
	
	<div id="container" class="clearfix">
		<?php wp_reset_query(); ?>
		
		<div class="left" id="cat-list-container">
			<?php 
				$count_posts = wp_count_posts();
				wp_list_categories('show_count=1&title_li='); 
			?>
		</div>
		
		<div id="content" role="main">
			<!-- Defaults -->
			<h1 class="page-title">
				<?php printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
			</h1>
			
			<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) ) echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Custom */
				if ( have_posts() ) { 
					while ( have_posts() ) {
						the_post(); 
						
						include('query-get-post-author.php'); /* @var: the_author */
			?>
			
					<!-- Display format of the post -->
					<div style="margin:30px 0 0;" class="clearfix">
						<?php 
							$love_button_type = 3; 
							include('loop-display-author-profile-picture.php'); 
							include('loop-display-post.php');
						?>
					</div>
			  <?php } 
				} else { ?>
					<p class="unavailable">
						<small>There are no available posts.</small>
					</p>
		  <?php } ?>
		</div>
	</div>
<?php get_footer(); ?>
