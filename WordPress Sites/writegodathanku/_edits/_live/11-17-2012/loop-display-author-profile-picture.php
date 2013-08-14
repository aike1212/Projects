<p class="avatar-container">
		<?php if($user != null) { ?>
		<a href="<?php bloginfo('url'); ?>/author/<?php echo $get_the_author->user_nicename;?>">
		<?php } ?>
			<?php if ($get_the_author->profile_picture_url == null) { ?>
				<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="115" height="96" />
			<?php } else { ?>
				<img src="<?php echo $get_the_author->profile_picture_url; ?>" alt="image" width="115" height="96" />
			<?php } ?>
			
			<span class="username"><?php echo $get_the_author->user_login ?></span>	
		<?php if($profile != null) { ?>
		</a>
		<?php } ?>
</p>

