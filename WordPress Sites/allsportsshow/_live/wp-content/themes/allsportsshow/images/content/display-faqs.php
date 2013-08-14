<?php 

	remove_filter ('the_content', 'wpautop');

	$content = get_the_content();
	$content = explode('/**/', $content);
	
	//print_r($content);
	
	$ctr = 1;
	
	for ($i=0; $i<45; $i+=2) {
		$button[$ctr] = apply_filters('the_content', $content[$i]);
		print_r($button);	
	}
	
	/*
	$button1 = apply_filters('the_content', $content[0]);
	$button2 = apply_filters('the_content', $content[2]);
	
	$content1 = apply_filters('the_content', $content[1]);
	$content2 = apply_filters('the_content', $content[3]);
	
	echo "
	<div class='accordionButton'>".$button1."</div>
	<div class='accordionContent'>".$content1."</div>
	<div class='accordionButton'>".$button2."</div>
	<div class='accordionContent'>".$content2."</div>
	";
	*/

?>		