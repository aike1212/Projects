<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


<?php emc2pdc_force( $atts=array(), $force=NULL, $id=NULL ); ?>

		<div id="main" class="clearfix">
			<div id="content">
				<h1>Welcome </h1>	
				
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
					dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
					suscipit lobortis nisl ut aliquip ex ea commodo consequat.
				</p>
				
				<div id="banner">
					<big>DARE TO ADMIT MARIJUANA IS SAFER THAN ALCOHOL</big>
				</div>
			</div>

			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
