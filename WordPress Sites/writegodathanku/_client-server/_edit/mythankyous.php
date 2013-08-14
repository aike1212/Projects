<?php
	/*
	 * Template Name: My Thank You Template
	 */
	get_header();
	include_once('CustomFunctions.php');
	$cf = new CustomFunctions; 
	 
	if (isset($_SESSION['login_user'])) {
		
		$user = $_SESSION['login_user'];
		
		include_once('get_database.php');

		$query = "
				SELECT * 
				FROM wp_users 
				WHERE user_login = '$user' 
			";
			
		$result = mysql_query($query);
		$user_info = mysql_fetch_array($result);
	
		dynamic_sidebar('profile-menu');
?>

		<h2 class="left">
			<?php if ($user_info['profile_picture_url'] == null) { ?>
				<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" />
			<?php } else { ?>
				<img src="<?=$user_info['profile_picture_url'];?>" alt="<?=$user_info['user_login'];?>" id="profile-pic" width="175" height="175" />
			<?php } 
			
			echo $user_info['user_login']; ?> 
			
			<a href="<? bloginfo('url');?>/change-profile-picture" class="user_btn change-prof-pic iframe"><small>Change Profile Picture</small></a>
		</h2>

		<p class="center" style="padding-top:30px;"><small>Information coming soon...</small></p>
		
		<br class="clear" />

		<div class="post-review" style="margin-left:30px;">
			<h3>Most Recent:</h3>
			<?php query_posts('posts_per_page=1&author='.$user_info['ID']); ?>
			
			<span><?php the_author_meta('user_id'); ?></span>
			
			<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) { the_post(); ?>
					<div style="margin:30px 0 0;">
						<p class="avatar-container">
							<?php if ($user_info['profile_picture_url'] == null) { ?>
								<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="80" height="80" />
							<?php } else { ?>
								<img src="<?=$user_info['profile_picture_url']; ?>" alt="image" width="80" height="80" />
							<?php } 
							the_author();?>
						</p>
					
						<div class="post">
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
					</div>
				<?php } ?>
				<br class="clear" />
			<?php } else { ?>	
				<p class="unavailable">
					<small>There are no recent posts for this user.</small>
				</p>
			<?php } ?>	
		</div>

		<div class="post-review">
			<h3>Most Popular:</h3>
			
			<?php query_posts('posts_per_page=1&author='.$user_info['ID']); ?>
			
			<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) { the_post(); ?>
					<div style="margin:30px 0 0;">
						<p class="avatar-container">
							<?php if ($user_info['profile_picture_url'] == null) { ?>
								<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="80" height="80" />
							<?php } else { ?>
								<img src="<?=$user_info['profile_picture_url']; ?>" alt="image" width="80" height="80" />
							<?php } 
							the_author();?>
						</p>
					
						<div class="post">
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
							<p class="post-date">Posted on <span style="color:#054BC2;"><?php the_date(); ?></span></p>
							<p><?php the_post_thumbnail(); ?></p>
							<?php the_content(); ?>
							<span id="love-ctr"><em>Love it! :</em> 0</span>
						</div>
					</div>
				<?php } ?>
				<br class="clear" />
			<?php } else { ?>	
				<p class="unavailable">
					<small>There are no liked posts for this user.</small>
				</p>
			<?php } ?>
		</div>
		
		<br class="clear" />
		
		<h3 class="center">
			Category: <?=$cf->slug_define($_GET['slug']);?>
		</h3> <br />
		
		<div class="left" id="cat-list-container">
			<?php 
				global $wpdb;
				$get_user_id = $user_info['ID'];
				
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
						AND post_author='$get_user_id'
						AND terms.slug='$slug'
					");
					
					if($count_category_posts != 0)
						echo "<a href='".add_query_arg( 'slug', $slug )."'>".$name." (".$count_category_posts.") </a><br />";	
				}	
			?>
			<br />
			<a href="<?php bloginfo('url');?>/my-thank-yous/">
				<strong>ALL (<?=count_user_posts($user_info['ID']);?>)</strong>
			</a>
		</div>
		
			<?php 
			wp_reset_query();
			
			$qp_args = 'author='.$user_info['ID'];
			
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
<?php 
		get_footer();
	} else { 
		wp_redirect($_SERVER['PHP_SELF'].'/login');
	} ?>