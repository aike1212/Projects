		<ul style="padding:0; margin:30px 0 0;">
		<?php
			include('query-get-author-popular-post.php');		
			
			if($myposts != null) {		
				foreach( $myposts as $post ) {						
					include('loop-get-author-info.php'); ?>
				
					<!-- Display format of the post -->
					<li class="clearfix" style="margin-top:5px;">
						<?php include('loop-display-letters.php'); ?>
					</li>
	<?php } 
			} else { ?>
				<p class="unavailable">
					<?php echo $profiler == 'on' ? '<small>You have no available letters.</small>' : '<small>This user has no available letters.</small>'; ?>
				</p>
<?php } ?>
		</ul>