<?php
/**
 * Template Name: Inner Pages
 *
 */

get_header(); ?>

	<div id="wrapper">
		<!-- Main -->
		<div id="main" class="clearfix" style="background:#FFF;">
			<div id="content" class="clearfix" style="width:100%">
				<div id="leftContent" class="left full">	
					<?php 
						if ( have_posts() )  {
							while ( have_posts() ) {
								$pdf = null;
								
								if (is_page("Shane's Resume")) :
									$pdf = '<a href="#" id="pdf-dl">Download Here!</a>';
								endif;
							
								the_post(); ?>
								<!--<h1></h1>-->
								<div class="tab">
									<a href="#" class="active"><?php the_title(); ?></a>
								</div>		
								
								<br />
								
								<?php echo $pdf; ?>
								
								<?php the_content();
							}
						}
					?>	
				</div>
					
				<div id="rightContent">
					<h2 id="twitter-title">Twitter Feed</h2>
					
					<div id="rightContainer">		
						<h3 id="happening">What's Happening?</h3>
						
						<?php dynamic_sidebar('Twitter'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>