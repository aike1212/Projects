<?php 
	/**
	 * Template Name: Posts Template
	 */
include_once('CustomFunctions.php');
$cf = new CustomFunctions;
get_header(); ?>

	<div id="container" class="clearfix">
	
		<div class="left" id="cat-list-container">
			<?php wp_list_categories('show_count=1&title_li='); ?>
		</div>
		
		<div id="content" role="main">
			<ul style="padding:0;">
				<?php
					global $post, $wpdb;
					
					$args = array ('numberposts' => -1);
					$myposts = get_posts($args);
				
					foreach( $myposts as $post ) : ?>
					
						<?php 
							$curuser = get_userdata($post->post_author); 
							$the_author = get_the_author();
							$current_author_id = $curuser->ID;
				
							$get_the_author = $wpdb->get_row("
								SELECT * 
								FROM $wpdb->users
								WHERE ID='$current_author_id';
							");	
						?>
					
						<li style="margin:30px 0 0;" class="clearfix">
							<p class="avatar-container">
								<a href="<?php bloginfo('url'); ?>/author/<?=$get_the_author->user_nicename;?>">
									<?php if ($get_the_author->profile_picture_url == null) { ?>
										<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" width="80" height="80" />
									<?php } else { ?>
										<img src="<?=$get_the_author->profile_picture_url; ?>" alt="image" width="80" height="80" />
									<?php } 
									echo $get_the_author->user_login ?>
								</a>
							</p>
						
							<div class="post full">
								<del class="paper-fold"></del>
								<?php 
									$slug = get_the_category($post->ID); 
									$cf->category_image($slug[0]->slug); 
								?>
								<span class="right">
									<a href="#" title="Facebook">Facebook</a>
									<a href="#" title="Love It">Love It</a>
								</span>
								<br class="clear" />
								<h2><?php the_title(); ?></h2>
								<p class="post-date">Posted on <span style="color:#054BC2;"><?=get_the_date();?></span></p>
								<p><?php echo $post->post_content ?></p>
								<span id="love-ctr"><em>Love it! :</em> 0</span>
							</div>
						</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

<?php get_footer(); ?>
