<?php
	if(isset($_POST['hide_id'])) {
		$wpdb->update(
			'wp_users',
			array('hidden' => $_POST['hide_value'] ),
			array('ID' => $_POST['hide_id'])
		);
	}
	
	switch ($profiler) {
		case null:
?>
			<div id="profile-container" class="clearfix">	
				<?php if ($get_the_author->profile_picture_url == null) { ?>
					<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" width="158" height="135" />
				<?php } else { ?>
					<img src="<?php echo $get_the_author->profile_picture_url;?>" alt="<?php echo $get_the_author->user_login;?>" id="profile-pic" width="158" height="135" />
				<?php } 
				
				if ($_POST['follow']) {
					echo "<p id='confirm'>You are now following <big>".$get_the_author->display_name."</big></p>";
				}	else if ($_POST['unfollow']) {
					echo "<p id='cancel'>You are no longer following <big>".$get_the_author->display_name."</big></p>";
				}		
				?>
				
				<div id="profile-info">
					<?php
						//include('query-get-user-followers.php'); /* @var: follow_unfollow */
						include('query-count-posts.php'); /* @var: count_posts */
						//include('follow-unfollow.php');
						
						if (get_the_author() != null) {
							echo "<span id='nicename'>".get_the_author()."</span>";
						} else {
							echo "<span id='nicename'>".$get_the_author->user_login."</span>";
						}
					?>
					
					<br class="clear" />
					
					<?php if ($get_the_author->hidden == '1') echo "<p id='hide-note-author'><big><strong>This user account is set to private.</strong></big></p>"; ?>
					
					<small class="right post-stats">
						<span id="letters"><?php echo $count_posts != null ? $count_posts : '0'; ?> &nbsp;letter(s)</span>
						<span id="following"><?php echo $is_following->following != null ? count(explode(", ", $is_following->following)) : '0'; ?> &nbsp;following</span>
						<span id="followers"><?php echo $is_following->followers != null ? count(explode(", ", $is_following->followers)) : '0'; ?> &nbsp;follower(s)</span>
					</small>	
				</div>
				
			<!-- Hide follow/unfollow button when not logged in -->
			<?php 
				if($get_the_author->hidden == '0') {
					include('follow-unfollow.php');

					if ($user != null && $user_info->ID != $is_following->user_id) { ?> 
						<form action="" method="post" class="right" id="follow-me">
							<?php 
								$following_str = $follow_unfollow->following;
								if ($cf->check_if_following($following_str, $authors_id)) { ?>
									<input type="submit" class="user_btn" value="(+) Follow Me" />
									<input type="submit" id="unfollow" name="unfollow" class="user_btn open_btn" value="(-) Unfollow Me" />
				<?php } else { ?>	
									<input type="submit" id="follow" name="follow" class="user_btn open_btn" value="(+) Follow Me" />
									<input type="submit" class="user_btn" value="(-) Unfollow Me" />
				<?php } ?>
						</form>
			<?php 
					} 
				}
			?>
			</div>
<?php 
			break; 
		case 'on':		
?>
			<div id="profile-container" class="clearfix">	
				<?php if ($user_info->profile_picture_url == null) { ?>
					<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" width="158" height="135" />
				<?php } else { ?>
					<?php $img = 'http://writegodathankyou.com'.$user_info->profile_picture_url; //die($img); ?>
					<img src="<?php /*thumbGen($img,360,270,'crop=1');*/ echo $user_info->profile_picture_url; ?>" alt="<?php echo $user_info->user_login;?>" id="profile-pic" width="158" height="135" />
				<?php } ?>
				
				<div id="profile-info">
					<?php
						//include('query-get-user-followers.php'); /* @var: follow_unfollow */
						include('query-count-posts.php'); /* @var: count_posts */
						//include('follow-unfollow.php');
						
						echo "<span id='nicename'>".$user_info->user_login."</span>";
					?>
					
					<br class="clear" />
					
					<small class="right post-stats">
						<span id="letters"><?php echo $count_posts != null ? $count_posts : '0'; ?> &nbsp;letter(s)</span>
						<span id="following"><?php echo $is_following->following != null ? count(explode(", ", $is_following->following)) : '0'; ?> &nbsp;following</span>
						<span id="followers"><?php echo $is_following->followers != null ? count(explode(", ", $is_following->followers)) : '0'; ?> &nbsp;follower(s)</span>
					</small>	
				</div>
				
				<!--
				<ul id="hide-note">
					<li>Hidden account letters CAN still be viewed by other users.</li>
					<li>Hidden account followers and following CANNOT be viewed by other users.</li>
					<li>Hidden accounts CANNOT be followed.</li>
				</ul>
				-->
				
				<form method="get" action="<?php bloginfo('url'); ?>/profile" id="search-form" class="right">
					<fieldset>
						<input type="text" name="search" id="search" value="Search by Name" onfocus="clearText(this);" onblur="clearText(this);" />
						<label>OR</label>
						<!--
						<select id="filter" name="filter">
							<option selected="selected">-</option>
							<option value="firstname">first name</option>
							<option value="lastname">last name</option>
							<option value="username">username</option>
						</select>
						-->
						<input type="text" name="search_username" id="search_username" value="Search by Username" onfocus="clearText(this);" onblur="clearText(this);" style="margin-left:10px;" />
						<input type="submit" value="Search" />
					</fieldset>
					
					<!--
					<fieldset id="hide">
						<?php // $user_info->hidden == '1' ? $check = 'checked="checked"' : null; ?>
						<input type="checkbox" id="<?php // echo $user_info->ID ?>" name="hide-user" <?php // echo $check ?> />
						<span id="hide-text">Hide my account</span>
					</fieldset>	
					-->
				</form>
				
				<a href="<?php bloginfo('url'); ?>/profile/?page=edit" id="edit-profile">Edit Profile</a>
			</div>
<?php
			break;
	}
?>
