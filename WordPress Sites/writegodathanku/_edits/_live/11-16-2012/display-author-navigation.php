<!-- Author Profile Navigation -->
	<div id="nav-wrapper" class="left">
		<ul id="menu-profile-menu">
			<li>
				<a href="javascript:void(0)" title="My Thank You's"><big><strong>My Thank You's</strong></big></a>
				<ul>
					<li><a href="<?php bloginfo('url');?>/author/<?php echo $get_the_author->user_nicename;?>" <?php echo $path  == ("/author/".$get_the_author->user_nicename."/") ? "class='active-menu'" : null; ?>>Most Recent</a></li>
					<li><a href="?page=popular" <?php echo $_GET['page'] == 'popular' ? "class='active-menu'" : null; ?>>Most Popular</a></li>
					<li>
						<a href="javascript:void(0)" class="accordionButton <?php echo isset($_GET['slug']) ? "open active-menu" : null; ?>">Categories</a>
						<ul class="accordionContent categs">
							<?php include_once('loop-display-all-categories.php'); ?>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="<?php echo $get_the_author->hidden == 0 ? '?page=following' : 'javascript:void(0)'; ?>" <?php echo $_GET['page'] == 'following' ? "class='active-menu'" : null; ?>>Following</a></li>
			<li><a href="<?php echo $get_the_author->hidden == 0 ? '?page=followers' : 'javascript:void(0)'; ?>" <?php echo $_GET['page'] == 'followers' ? "class='active-menu'" : null; ?>>Followers</a></li>
		</ul>
	</div>