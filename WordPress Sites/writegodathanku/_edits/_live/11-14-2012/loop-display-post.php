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
	
	<span class="left center block" style="margin:0 0 0 60px; width:400px;">
		<a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode($post->post_content); ?>&count=10" class="twitter-share-button" data-via="writegodathankyou" data-lang="en">Tweet</a>
		<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwritegodathankyou.com&media=&description=<?php echo rawurlencode($post->post_content); ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
		<a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('http://platform.tumblr.com/v1/share_3.png') top left no-repeat transparent;">Share on Tumblr</a>
		<div class="fb-like" data-href="http://writegodathankyou.com" data-send="false" data-layout="button_count" data-width="75" data-show-faces="true" data-font="tahoma"></div>
	</span>
	
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