		<?php	
			include('query-get-user-followers.php'); /* @var: follow_unfollow */

			if($_POST['follow']) { //Follow 	 
			
				$add_author = $cf->add_followers($follow_unfollow->following, $authors_id);
				$add_follower = $cf->add_followers($is_following->followers, $user_info_id);
				
				include('add-update-followers.php');
				
				/* CHANGE WHEN UPLOADED TO LIVE */
				//echo "<meta http-equiv='refresh' content='0;url=http://writegodathankyou.net/writegodathanku/author/".$get_the_author->user_nicename."'>"; 
				//echo "<meta http-equiv='refresh' content='0;url=http://localhost/author/".$get_the_author->user_nicename."'>";
				echo "<meta http-equiv='refresh' content='0;url=http://writegodathanku.scxserv.com/author/".$get_the_author->user_nicename."'>";
				
			} else if($_POST['unfollow']) { //Unfollow
			
				$remove_author = $cf->unset_followers($follow_unfollow->following, $authors_id);
				$remove_follower = $cf->unset_followers($is_following->followers, $user_info_id);
				
				include('remove-followers.php');
				
				/* CHANGE WHEN UPLOADED TO LIVE */
				//echo "<meta http-equiv='refresh' content='0;url=http://writegodathankyou.net/writegodathanku/author/".$get_the_author->user_nicename."'>"; 
				//echo "<meta http-equiv='refresh' content='0;url=http://localhost/author/".$get_the_author->user_nicename."'>";
				echo "<meta http-equiv='refresh' content='0;url=http://writegodathanku.scxserv.com/author/".$get_the_author->user_nicename."'>";
			} else { ?>
				<!-- DO NOTHING! -->
<?php } ?>	
