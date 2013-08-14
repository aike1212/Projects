<div id="inner-category"> 	
	<p class="clearfix" id="home-letter">
		Dear God, <br />
		<span style="padding-left:50px;">I would like to take a minute not to ask anything from you, <br /> but to simply say thank you for all I have.</span>
	</p>
	<?php if($user == null) { ?>
		<a href="<?php bloginfo('url');?>/sign-up" id="write" class="right center">Write a Thank You letter</a>
	<?php } else { ?>
		<a href="<?php bloginfo('url');?>/write-a-thank-you" id="write" class="right center">Write a Thank You letter</a>
	<?php } ?>
	<span id="inst">To read Thank You Letters by category (click on photos)</span>
	<br class="clear" />

	<ul id="category_list">
		<?php wp_list_categories('hide_empty=0&orderby=slug&title_li='); ?>
	</ul>
</div>
