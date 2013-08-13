<?php 
	$content = get_the_content();
	$content = explode('/**/',$content);
	
	//print_r($content);
	
	$paragraph1 = apply_filters('the_content', $content[0]);
	$list_item1 = apply_filters('the_content', $content[1]);
	$list_item2 = apply_filters('the_content', $content[2]);
	$list_item3 = apply_filters('the_content', $content[3]);
	$list_item4 = apply_filters('the_content', $content[4]);
	$list_item5 = apply_filters('the_content', $content[5]);
	$paragraph2 = apply_filters('the_content', $content[6]);
	
	echo 
		$paragraph1 . "
		
		<ul>
			<li>". $list_item1 ."</li>" . "
			<li>". $list_item2 ."</li>" . "
			<li>". $list_item3 ."</li>" . "
			<li>". $list_item4 ."</li>" . "
			<li>". $list_item5 ."</li>
		</ul>" . 
		
		$paragraph2;
?>