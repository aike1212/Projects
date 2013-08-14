<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="wrapper">
		<!-- Main -->
		<div id="main" class="clearfix" style="background:#FFF;">
			<div id="content" class="clearfix" style="width:100%">
				<div id="leftContent" class="left full">
					<div class="tab">
						<a href="<?php echo get_option('Home'); ?>/shanes-blog" class="active">Shane's Blog</a>
					</div>
				
					<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>
					<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) )
							echo '<div class="archive-meta">' . $category_description . '</div>';

					/* Run the loop for the category page to output the posts.
					 * If you want to overload this in a child theme then include a file
					 * called loop-category.php and that will be used instead.
					 */
					get_template_part( 'loop', 'category' );
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
