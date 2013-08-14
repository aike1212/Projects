<?php
	// Check if there are posts in all months, create an archive button if there is
	for($month = 12; $month >= 1; $month--) {
		$check_for_month = $wpdb->get_results("
			SELECT * 
			FROM wp_posts
			WHERE YEAR(post_date) = YEAR(CURDATE()) 
			AND MONTH(post_date) = '$month'
			AND post_type='post'
			AND post_status='publish'
		");
		
		if($check_for_month != null) {
			if(isset($_GET['page'])) {
?>			
				<li><a href="?page=<?php echo $_GET['page']; ?>&month=<?php echo $month; ?>" class="<?php echo $_GET['month'] == $month ? 'active' : null; ?>"><?php echo $cf->get_month($month)." ".date(o); ?></a></li>
<?php } else if(isset($_GET['slug'])) { ?>
				<li><a href="?slug=<?php echo $_GET['slug']; ?>&month=<?php echo $month; ?>" class="<?php echo $_GET['month'] == $month ? 'active' : null; ?>"><?php echo $cf->get_month($month)." ".date(o); ?></a></li>
<?php	} else { ?>
				<li><a href="?month=<?php echo $month; ?>" class="<?php echo $_GET['month'] == $month ? 'active' : null; ?>"><?php echo $cf->get_month($month)." ".date(o); ?></a></li>
<?php
			}
		}
	}
?>