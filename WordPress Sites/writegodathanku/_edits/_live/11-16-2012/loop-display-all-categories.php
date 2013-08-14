<?php
	/**
	 * Gets the slug and name of all categories
	 */

	$get_all_cat = $wpdb->get_results("
		SELECT terms.slug, terms.name 
		FROM wp_terms AS terms
		INNER JOIN wp_term_taxonomy AS taxonomy
		ON terms.term_id=taxonomy.term_id
		WHERE taxonomy.taxonomy='category'
		ORDER BY terms.name
	");
	
	foreach($get_all_cat as $cats) {	
		if ($path  == "/author/".$get_the_author->user_nicename."/?slug=".$cats->slug || $path  == "/profile/?slug=".$cats->slug)
			$active = " class='active-menu'";
		else
			$active = null;

		if(is_page('profile')) 
			$url = get_site_url()."/profile/";
		else
			$url = get_site_url()."/author/".$get_the_author->user_nicename."/";
			
		echo "
		<li class='cat-item'>
			<a href='".$url."?slug=".$cats->slug."'".$active.">".$cats->name."</a>
		</li>";
	}
?>