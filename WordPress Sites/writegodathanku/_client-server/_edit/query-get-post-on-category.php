<?php
	$myposts = $wpdb->get_results("
		SELECT * 
		FROM wp_posts AS posts
		INNER JOIN wp_term_relationships AS relation
		ON relation.object_id=posts.ID
		INNER JOIN wp_terms AS terms
		ON terms.term_id=relation.term_taxonomy_id 
		WHERE posts.post_type='post'
		AND posts.post_status='publish'
		AND terms.slug='$category_slug'
		ORDER BY love DESC
	");
?>