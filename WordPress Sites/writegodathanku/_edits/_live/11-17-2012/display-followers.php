<?php	foreach ($get_user_data as $user_data) { ?>
				<div class="follow-container">
				<?php if($user_info->ID != $user_data->ID) { ?>
						<a href="<?php bloginfo('url'); ?>/author/<?php echo $user_data->user_nicename?>">
				<?php	} else {?>
						<a href="<?php bloginfo('url'); ?>/profile">
				<?php } ?>
						<?php if ($user_data->profile_picture_url == null) { ?>
							<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" class="profile-pic" width="100" height="100" />
						<?php } else { ?>
							<img src="<?php echo $user_data->profile_picture_url; ?>" alt="image" width="100" height="100" class="profile-pic" />
						<?php } ?>
						
						<span class="center block" style="margin-bottom:10px;"><?php echo $user_data->user_login; ?></span>
						
						<?php
							$query = $wpdb->get_results("
								SELECT * 
								FROM wp_posts
								WHERE post_author='$user_data->ID'
								AND post_type='post'
								AND post_status='publish'
							");
							
							$cat = $wpdb->get_results("
								SELECT *
								FROM wp_posts
								LEFT JOIN wp_term_relationships
								ON wp_posts.ID = wp_term_relationships.object_id
								LEFT JOIN wp_terms
								ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id
								WHERE post_author='$user_data->ID'
								AND post_type='post'
								AND post_status='publish'
								GROUP BY wp_terms.name
							");
						?>
						
						<small>
							Thanks: <?php echo count($query); ?><br />
							Categories: <?php echo count($cat); ?>
						</small>
					</a>
				</div>
<?php	} ?>