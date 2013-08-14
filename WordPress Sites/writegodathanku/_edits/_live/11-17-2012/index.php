<?php
	session_start();  

	global $wpdb, $post; 
	$user = $_SESSION['login_user'];

	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */
	
	$cf = new CustomFunctions;
	//$profile = 1; /* Removes links in author profile pictures */

	//Append love it counter
	if (isset($_POST['user_id'])) include('update-love.php');
	
	get_header(); 
?>

<div id="categories"><?php include('category-list.php'); ?></div>

<!-- Main -->
<div id="wrapper">
	<div id="main" class="clearfix">
		<h3>
			<del id="header-left"></del>
			<span>Most Recent Letters</span>
			<del id="header-right"></del>
		</h3>

		<div class="post-review">
			 <!-- Show all post sorted by current month -->
			<?php 
				if(!isset($_GET['month'])) {
					query_posts('posts_per_page=-1&monthnum='.date('n', current_time('timestamp'))); 
				} else {
					query_posts('posts_per_page=-1&monthnum='.$_GET['month']); 
				}
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
</div><!-- Wrapper -->

<div class="center">
	<a href="javascript:void(0);" class="postButton accordionButton">More letters</a>

	<ul id="month-links" class="accordionContent">
		<?php include('loop-display-monthly-buttons.php'); ?>
	</ul>
</div>
		
<?php get_footer(); ?>