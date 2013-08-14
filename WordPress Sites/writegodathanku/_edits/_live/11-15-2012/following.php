<?php		
	if ($follow_unfollow->following == null) { 
?>
		<p class="unavailable">
			<?php echo $profiler == 'on' ? '<small>You are not following anyone.</small>' : '<small>This user is not following anyone.</small>'; ?>
		</p>
<?php 
	} else { 
		$followers = $follow_unfollow->following;
		include('query-get-followers-info.php');
?>		
		<p class="center">I am following <strong style="color:#256DBF;"><?php echo count(explode(", ", $followers)); ?> user(s)</strong>.</p>
<?php 
		include('display-followers.php');
	} 
?>