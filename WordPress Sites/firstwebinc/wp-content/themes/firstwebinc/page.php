<?php 
	get_header(); 
	is_page('home') ? get_template_part('topContent') : null;
?>

<div id="main">
	<div id="content">
		<?php if(have_posts()): ?>
			<?php while (have_posts()): ?>
				<?php the_post(); ?>
				<h2 <?php echo is_page('home') ? 'style="display:none;"' : null ?>><big><?php the_title(); ?></big></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	
	<?php get_sidebar(); ?>
	
	<br class="clear" />
			
	<img src="<?php bloginfo('template_url'); ?>/images/img_ecommerce.png" alt="E-Commerce" class="block" />
</div>

<?php get_footer(); ?>
