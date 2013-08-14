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
	//$profile = 1; /* Removes links in author profile pictures */

	get_header(); 

	$category_slug = $wp_query->query_vars['category_name'];  //Get category information
	$cat_name = $wp_query->queried_object->cat_name; 		  		//Set the current category
	
	//Append love it counter
	if (isset($_POST['user_id'])) include('update-love.php');
?>

<div id="categories"><?php include('category-list.php'); ?></div>

<!-- Main -->
<div id="wrapper">
	<div id="main" class="clearfix">
		<h3>
			<del id="header-left"></del>
			<span><?php printf(__('Category Archives: %s', 'twentyten'), single_cat_title('', false)); ?></span>
			<del id="header-right"></del>
		</h3>
	
		<div class="post-review">
			 <!-- Show all post by category -->
			<?php 
				$qp_args = 'category_name='.$category_slug;
				// Displays all post by category on current month if no get string month value is specified
				isset($_GET['month']) ? $qp_args .= '&monthnum='.$_GET['month'] : $qp_args .= '&monthnum='.date('n', current_time('timestamp')); ; 
				query_posts($qp_args); 
			?>
			
			<span><?php the_author_meta('user_id'); ?></span>
			
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) { 
						the_post();
						include('query-get-post-author.php'); /* @var: get_the_author */
			?>		
					<!-- Display format of the post -->
					<div class="clearfix">
						<?php 
							$authors_id = $get_the_author->ID;
							include('loop-display-author-profile-picture.php'); 
							include('loop-display-post.php'); 
						?>
					</div>
				<?php } ?>
				<br class="clear" />
			<?php } else { ?>	
					<p class="unavailable">
						<small>There are no available posts for this month.</small>
					</p>
			<?php } ?>
		</div>
	</div> <!-- Main -->
</div> <!-- Wrapper -->

<div class="center">
	<a href="javascript:void(0);" class="postButton accordionButton">More letters</a>

	<ul id="month-links" class="accordionContent">
		<?php include('loop-display-monthly-buttons.php'); ?>
	</ul>
</div>

<?php get_footer(); ?>
