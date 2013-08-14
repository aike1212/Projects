<?php
	session_start();

	global $wpdb, $wp_query;
	$user = $_SESSION['login_user'];

	include_once('CustomFunctions.php');
	include('query-get-logged-in-user.php'); /* @var: user_info */

	$cf = new CustomFunctions;
	
	get_header();
	
	if (isset($_POST['user_id'])) include('update-love.php');
	
	if ( have_posts() ) {
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

	<!-- Display profile picture of the author and follow/unfollow buttons -->
	<h2 class="left">
		<?php
			include('display-profile-picture.php');
			include('follow-unfollow.php');
		?>
	</h2>
	
	<!-- Author's information -->
	<p class="center" style="padding-top:30px;"><small>Information coming soon...</small></p>

	<br class="clear" />
	
	<!-- Displays author's most recent post -->
	<div class="post-review" style="margin-left:30px;">
		<h3>Most Recent:</h3>
		
		<?php 
			wp_reset_query();
			query_posts("posts_per_page=1&author=" . $authors_id); 
		?>
		
		<span><?php the_author_meta('user_id'); ?></span>
		
		<?php 
			if ( have_posts() ) { 
				while ( have_posts() ) { 
					the_post(); 
		?>		
					<div style="margin:30px 0 0;">
						<?php
							$profile = 1; //Removes links in author profile pictures
							include('loop-display-author-profile-picture.php');
							include('loop-display-post.php');
						?>
					</div>
	<?php } ?>
				<br class="clear" />
<?php } else { ?>	
				<p class="unavailable">
					<small>There is no recent post for this user.</small>
				</p>
<?php } ?>	
	</div>

<div class="post-review">
	<h3>Most Popular:</h3>
	
	<?php 
			wp_reset_query();
			query_posts("posts_per_page=1&author=" . $authors_id); 
		?>
		
		<span><?php the_author_meta('user_id'); ?></span>
		
		<?php 
			if ( have_posts() ) { 
				while ( have_posts() ) { 
					the_post(); 
		?>		
					<div style="margin:30px 0 0;">
						<?php
							$profile = 1; //Removes links in author profile pictures
							include('loop-display-author-profile-picture.php');
							include('loop-display-post.php');
						?>
					</div>
	<?php } ?>
				<br class="clear" />
<?php } else { ?>	
				<p class="unavailable">
					<small>There is no popular post for this user.</small>
				</p>
<?php } ?>	
	</div>

<br class="clear" />

<h3 class="center">
	Category: <?=$cf->slug_define($_GET['slug']);?>
</h3> <br />

<div class="left" id="cat-list-container">
	<?php 
		$list_of_categories = array(
			"01" => "Family",
			"02" => "Kids",
			"03" => "Newborn",
			"04" => "Pets",
			"05" => "Work",
			"06" => "Friendship",
			"07" => "Nature",
			"08" => "Sports",
			"09" => "Finances",
			"10" => "God",
			"11" => "Health",
			"12" => "Marriage",
			"13" => "School",
			"14" => "Relationship",
			"15" => "Random Acts of Kindness"
		);
		
		foreach($list_of_categories AS $slug => $name) {		
			$count_category_posts = $wpdb->query("
				SELECT post.post_title, post.post_content, terms.slug, terms.name 
				FROM wp_posts AS post
				INNER JOIN wp_term_relationships AS relation
				ON relation.object_id=post.ID
				INNER JOIN wp_terms AS terms
				ON terms.term_id=relation.term_taxonomy_id
				WHERE post_type='post'
				AND post_status='publish'
				AND post_author='$authors_id'
				AND terms.slug='$slug'
			");
			
			if($count_category_posts != 0)
				echo "<a href='".add_query_arg( 'slug', $slug )."'>".$name." (".$count_category_posts.") </a><br />";	
		}	
	?>
	<br />
	<a href="<?php bloginfo('url');?>/my-thank-yous/">
		<strong>ALL (<?=count_user_posts($authors_id);?>)</strong>
	</a>
</div>


	<?php 
	wp_reset_query();
	
	$qp_args = 'author='.$authors_id;
			
	if(isset($_GET['slug'])) {
		$cat_slug = $_GET['slug'];
	
		$cat_id = $wpdb->get_var("
			SELECT term_id 
			FROM $wpdb->terms 
			WHERE slug='$cat_slug'
		");
		
		$qp_args .= '&cat='.$cat_id;
	}
	
	query_posts($qp_args); 
			
	if ( have_posts() ) : 
		while ( have_posts() ) : 
		the_post(); 
		
		global $wpdb;

		$the_author = get_the_author();		
				
		$get_the_author = $wpdb->get_row("
			SELECT * 
			FROM $wpdb->users
			WHERE user_login='$the_author';
		");
		?>
		
	<div style="width:750px;" class="right clearfix">
		<p class="avatar-container">
			<a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_nicename');?>">
				<?php if ($get_the_author->profile_picture_url == null) { ?>
					<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="80" height="80" />
				<?php } else { ?>
					<img src="<?=$get_the_author->profile_picture_url; ?>" alt="image" width="80" height="80" />
				<?php } 
				the_author();?>
			</a>
		</p>
	
		<div class="post full">
			<del class="paper-fold"></del>
			<?php 
				$slug = get_the_category($post->ID); 
				$cf->category_image($slug[0]->slug); 
			?>
			<span class="right">
				<a href="#" title="Facebook">Facebook</a>
				<a href="#" title="Love It">Love It</a>
			</span>
			<br class="clear" />
			<h2><?php the_title(); ?></h2>
			<p class="post-date">Posted on <span style="color:#054BC2;"><?=get_the_date();?></span></p>
			<p><?php the_post_thumbnail(); ?></p>
			<?php the_content(); ?>
			<span id="love-ctr"><em>Love it! :</em> 0</span>
		</div>	
	</div> <br />
	<?php endwhile; ?>
<?php else: ?>
	<p class="unavailable">
		<small>There are no available posts.</small>
	</p>
<?php endif; ?>

<?php } ?>

<?php get_footer(); ?>