<div class="post <?=$love_button_type == 3 ? 'full' : null;?>">
	<del class="paper-fold"></del>
	
	<!-- Display Facebook share and Love It counter when user is logged in -->
	<?php 
		include('query-get-love-counter.php');
		if ($user != null) { ?>
			<span class="right">
				<a href="#" title="Facebook" id="fb-button">Facebook</a>
				<?php if ($cf->check_if_following($get_post_data->love_users, $user_info->ID) != TRUE) { ?>
					<a href="#" title="Love It" class="love-button" id="love-button_<?php $cf->detect_love_button_type($love_button_type); ?><?=$post_id?>" rel="<?=$post_id?>" name="<?=$user_info->ID?>">Love It</a>
				<?php } ?>
			</span>
  <?php } ?>
	
	<br class="clear" />
	
	<!-- Display the posts -->
	<h2><?php the_title(); ?></h2>
	<p class="post-date">Posted on <span style="color:#054BC2;"><?=get_the_date();?></span></p>
		<?php if($post == null) { ?>
			<p><?php the_post_thumbnail(); ?></p>
			<?php the_content(); ?>
		<?php } else { ?>
			<p><?php echo $post->post_content ?></p>
		<?php } ?>
	<span id="love-ctr"><em>Love it! :</em> <strong id="love-count_<?php $cf->detect_love_button_type($love_button_type); ?><?=$post_id?>"><?php echo $love_ctr;?></strong></span>
</div>