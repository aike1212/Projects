<?php
	session_start();  

	global $wpdb, $post; 
	$user = $_SESSION['login_user'];

	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */

	$cf = new CustomFunctions;

	//Append love it counter
	if (isset($_POST['user_id'])) include('update-love.php');

	get_header(); 
?>

	<div id="categories"><?php include('category-list.php'); ?></div>
	
	<div class="post-review">
		<h3>Most Recent:</h3>
		
		<?php query_posts('showposts=-1'); ?> <!-- Show all post sorted by date -->
		
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
		<h3>Most Popular:</h3>
		
		<div style="margin:30px 0 0;">
			<ul style="padding:0;">
				<?php
					/**
					 * Get all posts ordered by most number of loves
					 * @var: myposts
					 */
					include('query-get-all-post.php'); 
				
					foreach( $myposts as $post ) {
				
						include('loop-get-author-info.php'); /* @var: the_author */
				?>
						<!-- Display format of the post -->
						<li class="clearfix">
							<?php 
								$love_button_type = 2; 
								include('loop-display-author-profile-picture.php'); 
								include('loop-display-post.php');
							?>
						</li>
			  <?php } ?>
			</ul>
		</div>
	</div>
	
<?php get_footer(); ?>