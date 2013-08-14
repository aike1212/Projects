<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
?>

<!-- Sidebar -->
<div id="sidebar" class="clearfix">
	<h2 id="testimonial-title">Testimonial</h2>
	
	<?php dynamic_sidebar('Testimonials'); ?>
	
	<!--
	<ul id="testimonials"> 
		<li class="testimonial clearfix"> 
			<img src="<?php bloginfo('template_url'); ?>/images/content/img_tony.png" alt="Tony Luther" class="left" />
			
			Lorem ipsum dolor sit amet, onsectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
			aliquam erat volutpat. Ut wisi ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
			ex ea commodo consequat. <br />
			<strong>- Tony Luther -</strong> <br />
			<small style="font-size:10px;">Atlanta, Georgia</small>
		</li>
		
		<li class="testimonial clearfix"> 
			<img src="<?php bloginfo('template_url'); ?>/images/content/img_tony.png" alt="Tony Luther" class="left" />
			
			Lorem ipsum dolor sit amet, onsectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
			aliquam erat volutpat. Ut wisi ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
			ex ea commodo consequat. <br />
			<strong>- Tony Luther -</strong> <br />
			<small style="font-size:10px;">Atlanta, Georgia</small>
		</li>
	</ul>
	-->
	
	<a href="#" id="readMore">Read More Testimonials</a>
</div>
