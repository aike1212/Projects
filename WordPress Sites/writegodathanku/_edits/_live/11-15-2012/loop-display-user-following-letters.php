<?php 
	$slug = get_the_category($post->ID); 
	
	$post_id = get_the_ID();
	
	$get_post_data = $wpdb->get_row("
		SELECT * 
		FROM wp_posts
		WHERE ID='$post_id'
	"); 
	
	$love_ctr = $get_post_data->love;
?>

<div class="avatar-container author">
	<div class="cat-thumb clearfix">
		<span class="left"><?php $cf->category_image($slug[0]->slug); ?></span>
		<p style="text-align:left;">
			<span><strong>Title:</strong> <?php the_title(); ?></span> <br />
			<span><strong>Date:</strong> <?php echo get_the_date();?></span> <br />
			<span><strong>Loves:</strong> <?php echo $love_ctr;?></span>
		</p>
	</div>
	
<?php if ($user_info->ID != $get_the_author->ID) { ?>
	<a href="<?php bloginfo('url'); ?>/author/<?php echo $get_the_author->user_nicename;?>">
<?php } else { ?>
	<a href="<?php bloginfo('url'); ?>/profile">
<?php } ?>
		<?php 
			if ($get_the_author->profile_picture_url == null) {
				echo '<img src="'.get_template_directory_uri().'/images/content/no image.jpg" alt="No Image" width="115" height="96" class="left" />';
			} else {
				echo '<img src="'.$get_the_author->profile_picture_url.'" alt="image" width="115" height="96" class="left" />';
			}
			echo '<span class="nicename" style="margin:25px 0 0 10px !important;">'.$get_the_author->user_login.'</span>';
		?>
	</a>
	
	<br class="clear" />
	
	<div style="border-bottom: 1px dashed #1658B3;">
		<p class="center open-letter accordionButton">Open Letter</p>
		
		<div class="post short accordionContent" style="margin:0 0 20px;">
			<!-- Display the posts -->
			<?php 
				if($post == null) {
					the_content();
				} else { 
			?>
				<p style="text-align:left;"><?php echo $post->post_content; ?></p>
			<?php
				} 
			?>

			<table id="share">
				<tr>
					<td><a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode($post->post_content); ?>&count=10" class="twitter-share-button" data-via="writegodathankyou" data-lang="en">Tweet</a></td>
					<td><a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwritegodathankyou.com&media=&description=<?php echo rawurlencode($post->post_content); ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></td>
					<td style="margin:0 10px;"><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('http://platform.tumblr.com/v1/share_3.png') top left no-repeat transparent;">Share on Tumblr</a></td>
					<td><div class="fb-like" data-href="http://writegodathankyou.com/" data-send="false" data-layout="button_count" data-width="75" data-show-faces="true" data-font="tahoma"></div></td>
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
	</div>
</div>