<?php 

	remove_filter ('the_content', 'wpautop');

	$content = get_the_content();
	$content = explode('/**/', $content);
	
	//print_r($content);
	
	$ctr = 1;
	
	for ($i=0; $i<47; $i+=2) {
		$question[$ctr] = apply_filters('the_content', $content[$i]);
		$answer[$ctr] = apply_filters('the_content', $content[$i+1]);
		
		echo "
			<div class='accordionButton'>".$question[$ctr]."</div>
			<div class='accordionContent'>".$answer[$ctr]."</div>	
		";
		
		$ctr++;
	}
	
	//print_r($question);
	//print_r($answer);
?>		