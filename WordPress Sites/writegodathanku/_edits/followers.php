<?php
	if ($follow_unfollow->followers == null) { 
?>
	<p class="unavailable">
		<?php echo $profiler == 'on' ? '<small>You have no followers.</small>' : '<small>This user has no followers.</small>'; ?>
	</p>
<?php } else { 
	$followers = $follow_unfollow->followers;
	include('query-get-followers-info.php');
?>		
<p class="center"><strong style="color:#256DBF;"><?php echo count(explode(", ", $followers)); ?>  user(s)</strong> are following me.</p>
<?php
		include('display-followers.php');
	} 
	?>