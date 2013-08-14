<?php	
// Set query post arguments
		$profiler == 'on' ? $qp_args = "author=" . $user_info_id : $qp_args = "author=" . $authors_id;
		
		if ($profiler == 'on' && !isset($_GET['page'])) {
			$qp_args .= ", " . $follow_unfollow->following;
		}
		
		isset($_GET['slug']) ? $qp_args .= "&category_name=" . $_GET['slug'] : null; // Append category slug if there is
		isset($_GET['month']) ? $qp_args .= '&monthnum='.$_GET['month'] : $qp_args .= '&monthnum='.date('n', current_time('timestamp')); //Append month if there is
		wp_reset_query();
		query_posts($qp_args . '&posts_per_page=-1'); 
?>
	
		<span><?php the_author_meta('user_id'); ?></span>
		
		<?php 
			if ( have_posts() ) { 
				while ( have_posts() ) { 
					the_post(); 
		?>		
					<div style="margin:30px 0 0;">
						<?php 
							if (isset($_GET['page'])) {
								include('loop-display-letters.php'); 
							} else {
								include('query-get-post-author.php');
								include('loop-display-user-following-letters.php');
							}
						?>
					</div>
	<?php } ?>
				<br class="clear" />
<?php } else { ?>	
				<p class="unavailable">
					<?php echo $profiler == 'on' ? '<small>You have no available letters.</small>' : '<small>There are no available letters for this user.</small>'; ?>
				</p>
<?php } 