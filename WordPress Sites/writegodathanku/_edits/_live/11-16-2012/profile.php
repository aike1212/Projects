<?php
	session_start();

	global $wpdb, $wp_query;
	$user = $_SESSION['login_user'];

if ($user != null) {	
	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */
	
	//print_r($user_info); exit;
	
	$cf = new CustomFunctions;
	$profile = 1; /* Removes links in author profile pictures */
	$profiler = 'on';
	
	get_header();
	
	if (isset($_POST['user_id'])) include('update-love.php');
	
	if ( have_posts() ) {
		the_post();
		
		include('query-get-post-author.php'); /* @var: get_the_author */
		
		$user_info_id = $user_info->ID;
		
		/**
		 * Check if a follower or not 
		 * @var: is_following
		 */
		include('query-check-if-following.php'); 
		include('query-get-user-followers.php'); //@var: follow_unfollow

		include('display-profile-picture.php'); 
		$path = $_SERVER['REQUEST_URI'];
?>

	<div id="main2" class="clearfix">
		<?php include('display-user-navigation.php'); ?>

		<div id="profile-post-wrapper" class="right">
			<div id="profile-post-container">	
				<!-- Displays author's most recent post in a category -->
				<div class="post-review short" style="margin-left:30px;">
					<?php 
						if ($_GET['page'] == null && $_GET['slug'] == null && $_GET['search'] == null) {
							include('loop-display-author-posts.php');
						} else if ($_GET['page'] == 'recent') {
							include('loop-display-author-posts.php');
						} else if ($_GET['page'] == 'popular') {
							include('loop-display-author-posts-by-popularity.php');
						} else if ($_GET['page'] == 'following') {
							include('following.php');
						} else if ($_GET['page'] == 'followers') {
							include('followers.php');
						} else if ($_GET['page'] == 'edit') {
							include('edit-profile.php');
						} else if ($_GET['page'] == 'gratitude') {
							include('gratitude-list.php');
						}	else if ($_GET['page'] == 'prayer') {
							include('prayer-journal.php');
						} else if (isset($_GET['slug'])) {
							include('loop-display-author-posts-by-popularity.php');
						}	else if (isset($_GET['search'])) {
							include('search-results.php');
						}
					?>
				</div>				
			</div> <!-- Container -->
		</div> <!-- Wrapper -->
		
<?php
	if(!isset($_GET['page']) || $_GET['page'] == 'recent' || $_GET['page'] == 'popular' || isset($_GET['slug'])) { 
		if(!isset($_GET['search'])) {
?>	
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
		} 
		get_footer();
	} else {
		echo '<meta http-equiv="refresh" content="0;url=http://writegodathanku.scxserv.com/login">';
	}	
?>