<?php 
	/**
	 * Template Name: Documents
	 */
	 
	get_header(); 
?>

<!-- Main -->
<div id="wrapper" style="margin:10px auto 20px !important;">
	<div id="main" class="clearfix document" style="color:#1E3246;">
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) { 
					the_post();
					
					echo "<h4 class='center'><big>";
					the_title();
					echo "</big></h4><br />";
					
					the_content();
				}
			}
		?>
		<br />
	</div>
</div>

<?php get_footer(); ?>