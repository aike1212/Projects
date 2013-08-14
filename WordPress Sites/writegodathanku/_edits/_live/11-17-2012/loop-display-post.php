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
	
	<table id="share" style="margin-left:70px;">
		<tr>
			<td><a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode($post->post_content); ?>&count=10" class="twitter-share-button" data-via="writegodathankyou" data-lang="en">Tweet</a></td>
			<td>
				<?php 
					$img_url = get_site_url(); 
					$get_the_author->profile_picture_url == null ? $img_url .= '/wp-content/themes/writegodathanku/images/content/no image.jpg' : $img_url .= $get_the_author->profile_picture_url; 
				?>
				<a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwritegodathankyou.com&media=<?php echo rawurlencode($img_url); ?>&description=<?php echo rawurlencode($post->post_content); ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
			</td>
			<td style="margin:0 10px;"><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('http://platform.tumblr.com/v1/share_3.png') top left no-repeat transparent;">Share on Tumblr</a></td>
			<td>
				<!--<a href="http://www.facebook.com/sharer.php?u=<?php // the_permalink();?>&t=<?php // the_title(); ?>" title="Facebook share button" id="fb-like"></a>-->
				<a href="<?php bloginfo('url'); ?>/facebook-share-api/?post_id=<?php echo $post == null ? get_the_ID() : $post->ID; ?>" id="fb-like"></a>
			</td>
		</tr>
	</table>
	
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