<?php 

	remove_filter ('the_content', 'wpautop');

	$content = get_the_content();
	$content = explode('/**/', $content);

	$title = array (
		$content[0],
		$content[5],
		$content[9],
		$content[31],
		$content[62],
	);
	
	$phrase = array (
		$content[1],
		$content[2],
		$content[6],
		$content[7],
		$content[8]
	);
	
	$item = array (
		$content[3],
		$content[4]
	);
	
	echo 
		"<br />
		<span class='visitorTitle'>".$title[0]."</span>
		<div class='visitorContentFull'>
			<p>".$phrase[0]."</p>
			<p style='margin-top:20px;'>".$phrase[1]."</p>
			<ul>
				<li>".$item[0]."</li>
				<li>".$item[1]."</li>
			</ul>
		</div>
		<br class='clear' />
		
		<span class='visitorTitle'>".$title[1]."</span>
		<div class='visitorContentFull'>
			<p>"
				.$phrase[2]." <br /> "
				.$phrase[3]." <br /> "
				.$phrase[4]." <br />
			</p>
		</div>
		<br class='clear' />
		
		<br />
		
		<span class='visitorTitle'>".$title[2]."</span>
		<div class='visitorContentFull'>
			<ul class='visitorListHalf' style='margin-right:15px;'>";
			
				for ($i = 1; $i <= 11; $i++) {
					$list_item[$i] = apply_filters('the_content', $content[$i+9]);
					echo "<li>" . $list_item[$i] . "</li>";
				}
	
		echo	
			"</ul>
			
			<ul class='visitorListHalf'>";
				
				for ($i = 12; $i <= 21; $i++) {
					$list_item[$i] = apply_filters('the_content', $content[$i+9]);
					echo "<li>" . $list_item[$i] . "</li>";
				}
				
		echo
			"</ul>
		</div>
		<br class='clear' />
		
		<br />
		
		<span class='visitorTitle'>".$title[3]."</span>
		
		<div class='visitorContentFull'>
			<ul class='visitorListLong' style='margin-right:15px;'>";
			
			for ($i = 23; $i <= 52; $i+=2) {
				$list_item[$i] = apply_filters('the_content', $content[$i+9]);
				echo "<li>" . $list_item[$i] . "</li>";
			}
			
		echo
			"</ul>
			
			<ul class='visitorListShort'>";
				
				for ($i = 24; $i <= 53; $i+=2) {
					$list_item[$i] = apply_filters('the_content', $content[$i+9]);
					echo "<li>" . $list_item[$i] . "</li>";
				}
				
		echo
			"</ul>
		</div>
		<br class='clear' />
	
		<br />
		
		<span class='visitorTitle'>".$title[4]."</span>
		<div class='visitorContentFull'>
			<ul class='visitorListHalf' style='margin-right:15px;'>";
				for ($i = 54; $i <= 60; $i+=2) {
					$list_item[$i] = apply_filters('the_content', $content[$i+9]);
					echo "<li>" . $list_item[$i] . "</li>";
				}
		echo
			"</ul>
			
			<ul class='visitorListHalfMod'>";
				for ($i = 55; $i <= 62; $i+=2) {
					$list_item[$i] = apply_filters('the_content', $content[$i+9]);
					echo "<li>" . $list_item[$i] . "</li>";
				}
		echo
			"</ul>
		</div>
		<br class='clear' />
		";
?>	