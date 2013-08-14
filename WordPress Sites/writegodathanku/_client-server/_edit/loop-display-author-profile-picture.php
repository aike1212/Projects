<p class="avatar-container">
		<?php if ($profile == null) { ?>
			<a href="<?php bloginfo('url'); ?>/author/<?=$get_the_author->user_nicename;?>">
		<?php } ?>
		
		<?php if ($get_the_author->profile_picture_url == null) { ?>
			<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="80" height="80" />
		<?php } else { ?>
			<img src="<?=$get_the_author->profile_picture_url; ?>" alt="image" width="80" height="80" />
		<?php } 
		echo $get_the_author->user_login ?>
	</a>
</p>

