<?php
	/**
	 * Template Name: Pop-up Template
	 */
?>

<html>
	<body>

		<div id="content" class="left full">
			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						
						if(is_page('home')) { 
							null; // do nothing
						} else {
							echo "<h2>";
								the_title();
							echo "</h2>";
						}
						
						the_content();
					}
				}
			?>	
		</div>

	</body>
</html>


