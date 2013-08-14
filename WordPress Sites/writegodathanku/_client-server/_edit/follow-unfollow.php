		<?php	
			include('query-get-user-followers.php'); /* @var: follow_unfollow */
		
			if($_POST['follow']) { //Follow 	 
				
				if($user_info->user_id != $is_following->user_id) {
					$add_author = $cf->add_followers($follow_unfollow->following, $authors_id);
					$add_follower = $cf->add_followers($is_following->followers, $user_info_id);
					
					include('add-update-followers.php');
					
					echo "<meta http-equiv='refresh' content='0;url=http://writegodathankyou.net/writegodathanku/author/".$get_the_author->user_nicename."'>";
				} else {
					echo "You cannot follow yourself!";
				}
				
			} else if($_POST['unfollow']) { //Unfollow
			
				$remove_author = $cf->unset_followers($follow_unfollow->following, $authors_id);
				$remove_follower = $cf->unset_followers($is_following->followers, $user_info_id);

				include('remove-followers.php');
				
				echo "<meta http-equiv='refresh' content='0;url=http://writegodathankyou.net/writegodathanku/author/".$get_the_author->user_nicename."'>";
			} else { ?>
			
			<!-- Hide follow/unfollow button when not logged in -->
			<?php 
				if ($user != null) { ?> 
					<form action="" method="post">
						<?php 
							$following_str = $follow_unfollow->following;
							if ($cf->check_if_following($following_str, $authors_id)) { ?>
								<input type="submit" class="user_btn" value="(+) Follow Me" />
								<input type="submit" id="unfollow" name="unfollow" class="user_btn open" value="(-) Unfollow Me" />
				<?php } else { ?>	
								<input type="submit" id="follow" name="follow" class="user_btn open" value="(+) Follow Me" />
								<input type="submit" class="user_btn" value="(-) Unfollow Me" />
			  <?php } ?>
					</form>
	<?php } ?>	
<?php } ?>