<?php 
	remove_filter ('the_content', 'wpautop');

	$content = get_the_content();
	
	// $content = preg_split( "/(Q:|A:)/", $content )
	
	$content = explode('*', $content);
	
    // print_r(count($content));
	
	// print_r($content);
?>

<div class="contact-area">
	<div class="home-details faq"> 
		<h1 style="margin-bottom: 2px;"><?php echo $content[0]; ?><h1>
			
		<p><?php echo $content[1]; ?></p>
	
		<div class="sevices faq">
			<ul id="theMenu" class="listing-area list">
				<?php for ($i=2; $i<count($content); $i+=2) : ?>
					<li style="position: static;">
						<h3 class="head">
							<a href="javascript:;">
								<?php echo $content[$i]; ?>
							</a>
						</h3>
						<p style="display: none;"><?php echo $content[$i+1]; ?></p> 
					</li> 
				<?php endfor; ?>
			</ul>
		</div>
	</div>
	
	<div class="rightcontact"> </div>
</div>