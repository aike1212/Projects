<?php
	session_start();

	global $wpdb, $wp_query;
	$user = $_SESSION['login_user'];

	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */
	
	$cf = new CustomFunctions;
	$profile = 1; /* Removes links in author profile pictures */
	
	get_header();
	
	if (isset($_POST['user_id'])) include('update-love.php');
	
	//if ( have_posts() ) {
	the_post();	
	
	include('query-get-post-author.php'); /* @var: get_the_author */
	
	$user_info_id = $user_info->ID;
	$authors_id = $get_the_author->ID;
	
	/**
	 * Check if a follower or not 
	 * @var: is_following
	 */	
	include('query-check-if-following.php'); 
?>

	<?php 
		include('display-profile-picture.php'); 
		$path = $_SERVER['REQUEST_URI'];
	?>

		<div id="main2" class="clearfix" style="margin:0 auto 50px;">
			<?php include('display-author-navigation.php'); ?>

			<div id="profile-post-wrapper" class="right">
				<div id="profile-post-container">	
					<!-- Displays author's most recent post in a category -->
					<div class="post-review short" style="margin-left:30px;">
						<?php 
							switch($_GET['page']) {
								case null: 
									include('loop-display-author-posts.php');
									break;
								case 'popular':
									include('loop-display-author-posts-by-popularity.php');
									break;	
								case 'following':
									include('query-get-author-followers.php');
									include('following.php');
									break;
								case 'followers':
									include('query-get-author-followers.php');
									include('followers.php');
									break;	
							} 
						?>
					</div>				
				</div> <!-- Container -->
			</div> <!-- Wrapper -->
			
			<?php
			if($_GET['page'] != 'following') { 
				if($_GET['page'] != 'followers') {?>	
					<div style="width:705px;" class="right center">
						<a href="javascript:void(0);" class="postButton accordionButton">More letters</a>

						<ul id="month-links" class="accordionContent">
							<?php include('loop-display-monthly-buttons.php'); ?>
						</ul>
					</div>
			<?php 
				} 
			}	
			?>
			
		</div> <!-- Main 2 -->

<?php
	//} 
	get_footer();
?>