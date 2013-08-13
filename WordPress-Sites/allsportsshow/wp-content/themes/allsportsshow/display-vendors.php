<?php 

	remove_filter ('the_content', 'wpautop');

	$content = get_the_content();
	$content = explode('/**/', $content);
		
	$paragraph = array (
		$content[0],
		$content[1],
		$content[10],
		$content[11],
		$content[35], 
		$content[36], 
		$content[37] 
	);
	
	$list_title = array (
		$content[2],
		$content[12],
		$content[33],
		$content[34],
		$content[38],
		$content[39]
	);
	
	echo 
		$paragraph[0] . "<br />" . $paragraph[1] . "
		
		<div class='title'>". $list_title[0] ."</div>
		
		<ul>";
		
			$list_item_limit = 7;
			
			for ($i = 1; $i <= $list_item_limit; $i++) {
				$sport[$i] = apply_filters('the_content', $content[$i+2]);
				echo "<li>" . $sport[$i] . "</li>";
			}

	echo		
		"</ul>" . 
		
		$paragraph[2] . "<br />" . $paragraph[3] . "
		
		<div class='title'>". $list_title[1] ."</div>
		
		<ul class='shortList'>" ;
		
			$sports_limit = 20;
			
			for ($i = 1; $i <= $sports_limit/4; $i++) {
				$sport[$i] = apply_filters('the_content', $content[$i+12]);
				echo "<li>" . $sport[$i] . "</li>";
			}
			
	echo
		"</ul>
		
		<ul class='shortList'>";
		
			for ($i = 1; $i <= $sports_limit/4; $i++) {
				$sport[$i] = apply_filters('the_content', $content[$i+17]);
				echo "<li>" . $sport[$i] . "</li>";
			}
			
	echo "
		</ul>
		
		<ul class='shortList'>";
		
			for ($i = 1; $i <= $sports_limit/4; $i++) {
				$sport[$i] = apply_filters('the_content', $content[$i+22]);
				echo "<li>" . $sport[$i] . "</li>";
			}
			
	echo "
		</ul>
		
		<ul class='shortList'>";
		
			for ($i = 1; $i <= $sports_limit/4; $i++) {
				$sport[$i] = apply_filters('the_content', $content[$i+27]);
				echo "<li>" . $sport[$i] . "</li>";
			}
		
	echo "
		</ul>
		
		<br class='clear' /> 
		
		<div class='title'>". $list_title[2] ."</div>
		
		<br />
		
		<div class='title'><u>". $list_title[3] ."</u></div>" . 
		
		do_shortcode ('[table id=1 /]') . 
		
		"<br class='clear' />
		
		<br />".
		
		$paragraph[4] . "<br /><br />" . $paragraph[5] . "<br /><br />" . $paragraph[6] . " 
		
		<br class='clear' />
		
		<div class='title'><u>". $list_title[4] ."</u></div>
		
		<div style='margin-top:25px' class='clearfix'>" .
			do_shortcode ('[formidable id=2]') . " 	
		</div>
			
		<div class='title' style='padding-top:20px; border-top:1px dashed #686868;'><big>". $list_title[5] ."</big></div>
		
		<ol>";
			
			$rule_limit = 17;	
			
			for ($i = 1; $i <= $rule_limit; $i++) {
				$rule[$i] = apply_filters('the_content', $content[$i+39]);
				echo "<li>" . $rule[$i] . "</li>";
			}
			
	echo
		"</ol>";
?>		