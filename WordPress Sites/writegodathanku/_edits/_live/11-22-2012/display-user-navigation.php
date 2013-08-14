<!-- Author Profile Navigation -->
	<div id="nav-wrapper" class="left">
		<ul id="menu-profile-menu">
			<li>
				<?php if (is_page('profile') || (is_page('profile') && isset($_GET['search'])) || (is_page('profile') && $_GET['page'] == 'edit')) $profile_class = "class='active-menu'"; ?>
				<a href="<?php bloginfo('url'); ?>/profile/" <?php echo $profile_class; ?>>Profile</a>
			</li>
			<li><a href="<?php bloginfo('url'); ?>/write-a-thank-you/" <?php echo is_page('write-a-thank-you') ? "class='active-menu'" : null; ?>>Write a Thank You</a></li>
			<li>
				<a href="javascript:void(0)" title="My Thank You's" style="background:none;">My Thank You's</a>
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/profile/?page=recent" <?php echo $_GET['page'] == 'recent' ? "class='active-menu'" : null; ?>>Most Recent</a></li>
					<li><a href="<?php bloginfo('url'); ?>/profile/?page=popular" <?php echo $_GET['page'] == 'popular' ? "class='active-menu'" : null; ?>>Most Popular</a></li>
					<li>
						<a href="javascript:void(0)" id="category" class="accordionButton <?php echo isset($_GET['slug']) ? "open" : null; ?>">Categories</a>
						<ul class="accordionContent categs">
							<?php include_once('loop-display-all-categories.php'); ?>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="<?php bloginfo('url'); ?>/profile/?page=following" <?php echo $_GET['page'] == 'following' ? "class='active-menu'" : null; ?>>Following</a></li>
			<li><a href="<?php bloginfo('url'); ?>/profile/?page=followers" <?php echo $_GET['page'] == 'followers' ? "class='active-menu'" : null; ?>>Followers</a></li>
			<li><a href="<?php bloginfo('url'); ?>/profile/?page=gratitude" <?php echo $_GET['page'] == 'gratitude' ? "class='active-menu'" : null; ?>>Gratitude List</a></li>
			<li><a href="<?php bloginfo('url'); ?>/profile/?page=prayer" <?php echo $_GET['page'] == 'prayer' ? "class='active-menu'" : null; ?>>Prayer Journal</a></li>
		</ul>
	</div>