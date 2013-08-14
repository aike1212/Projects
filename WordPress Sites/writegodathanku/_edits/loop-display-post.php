<div class="post <?php echo $love_button_type == 3 ? 'full' : null;?>">
	<!-- Display Facebook share and Love It counter when user is logged in -->
	<?php 
		include('query-get-love-counter.php');
		$profiler == 'on' ? include('query-get-user-followers.php') : include('query-get-author-followers.php'); /* @var: follow_unfollow */
		include('query-count-posts.php'); /* @var: count_posts */
	?>
	<small class="right post-stats">
		<span id="letters"><?php echo $count_posts != null ? $count_posts : '0'; ?> &nbsp;letter(s)</span>
		<span id="following"><?php echo $follow_unfollow->following != null ? count(explode(", ", $follow_unfollow->following)) : '0'; ?> &nbsp;following</span>
		<span id="followers"><?php echo $follow_unfollow->followers != null ? count(explode(", ", $follow_unfollow->followers)) : '0'; ?> &nbsp;follower(s)</span>
	</small>
	
	<br class="clear" />
	
	<!-- Display the posts -->
	<!--<h2><?php // the_title(); ?></h2>-->	
	<?php if($post == null) { ?>
		<p><?php the_post_thumbnail(); ?></p>
		<?php the_content(); ?>
	<?php } else { ?>
		<p><?php echo $post->post_content ?></p>
	<?php } ?>
	
	<small class="post-date left">Posted on <span><?php echo get_the_date();?></span></small>
	
	<!--<img src="<?php bloginfo('template_url'); ?>/images/content/img_share-dummy.png" alt="Social Share Dummy" class="share" />-->
	<!--
	<span class='st_twitter_hcount' displayText='Tweet'></span>
	<span class='st_facebook_hcount' displayText='Facebook'></span>
	<span class='st_pinterest_hcount' displayText='Pinterest'></span>
	<span class='st_tumblr_hcount' displayText='Tumblr'></span>
	-->
	
	<a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode($post->post_content); ?>&count=10" class="twitter-share-button" data-via="writegodathankyou" data-lang="en">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	<strong id="love-ctr">
		<?php 
			if ($user != null) {
				if ($cf->check_if_following($get_post_data->love_users, $user_info->ID) != TRUE) { ?>
					<a href="#" title="Love It" class="love-button" id="love-button_<?php $cf->detect_love_button_type($love_button_type); ?><?php echo $post_id?>" rel="<?php echo $post_id?>" name="<?php echo $user_info->ID?>">Love It</a>
		<?php
				}
			} 
		?>
		Love It! :  
		<span id="love-count_<?php $cf->detect_love_button_type($love_button_type); ?><?php echo $post_id?>"><?php echo $love_ctr;?></span>
	</strong>
</div>