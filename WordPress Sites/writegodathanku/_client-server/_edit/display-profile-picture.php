<?php if ($get_the_author->profile_picture_url == null) { ?>
	<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" />
<?php } else { ?>
	<img src="<?=$get_the_author->profile_picture_url;?>" alt="<?=$get_the_author->user_login;?>" id="profile-pic" width="175" height="175" />
<?php } 
echo get_the_author();?> 
<br />
