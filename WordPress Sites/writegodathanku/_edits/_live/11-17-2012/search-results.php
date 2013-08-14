<?php
	$validate = FALSE;
	$errorMessage = array();

	if(!isset($_GET['search']) || $_GET['search'] == 'Search') {
		$errorMessage[] = "Please enter a search keyword.";
		
		if($_GET['filter'] == '-') {
			$errorMessage[] = "Please select a search filter.";
		}
	} else if($_GET['filter'] == '-') {
		$errorMessage[] = "Please select a search filter.";
		
		if(!isset($_GET['search']) || $_GET['search'] == 'Search') {
			$errorMessage[] = "Please enter a search keyword.";
		}
	}  else {
		$validate = TRUE;
	
		$keyword = $_GET['search'];
		$filter = $_GET['filter'];
		
		/*
		$query = "
			SELECT users.ID, firstname.meta_value AS first_name, lastname.meta_value AS last_name, users.user_nicename, users.user_email, city.meta_value AS city_name, country.meta_value AS country_name
			FROM wp_users AS users
			LEFT JOIN wp_usermeta AS firstname ON users.ID = firstname.user_id
			LEFT JOIN wp_usermeta AS lastname ON firstname.user_id = lastname.user_id
			LEFT JOIN wp_usermeta AS city ON lastname.user_id = city.user_id
			LEFT JOIN wp_usermeta AS country ON city.user_id = country.user_id
		";
		*/
		
		$query = "
			SELECT users.ID, firstname.meta_value AS first_name, lastname.meta_value AS last_name, users.user_nicename, users.profile_picture_url
			FROM wp_users AS users
			LEFT JOIN wp_usermeta AS firstname ON users.ID = firstname.user_id
			LEFT JOIN wp_usermeta AS lastname ON firstname.user_id = lastname.user_id
		";
		
		switch($filter) {
			case 'firstname':
				$query .= "WHERE firstname.meta_value LIKE '$keyword%'";
				break;
			case 'lastname':
				$query .= "WHERE lastname.meta_value LIKE '$keyword%'";
				break;
			case 'username':
				$query .= "WHERE users.user_nicename LIKE '$keyword%'";
				break;
		}
		
		/*
		$query .= "
			AND firstname.meta_key = 'first_name'
			AND lastname.meta_key = 'last_name'
			AND city.meta_key = 'city'
			AND country.meta_key = 'country'
		";
		*/
		
		$query .= "
			AND firstname.meta_key = 'first_name'
			AND lastname.meta_key = 'last_name'
		";
		
		$result = $wpdb->get_results($query);
	}
?>

<?php if(isset($_GET['search']) && $validate == FALSE) { ?>
	<div id="display-error">
		<p><strong>The following errors have occured:</strong></p>
		<ul>
			<?php
				foreach ($errorMessage as $error) {
					echo "<li>" . $error . "</li>";
				}
			?>
		</ul>
	</div>
<?php } ?>

<?php if($validate != FALSE) { ?>
	<?php if ($result != null) { ?>
		<h5 class="center" id="search-results">Search returned <span style="color:#256DBF;"><?php echo count($result); ?> result(s)</span>.</h5>
		
		<!--
		<table id="tbl-search">
			<tr>
				<th>User ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Email Address</th>
				<th>City</th>
				<th>Country</th>
			</tr>
			<?php 
				/*
				$ctr = 0;
				foreach($result as $user) {
					$ctr++;
					($ctr % 2) == 0 ? $class = 'even' : $class = null;
					echo "<tr class=".$class.">";
					echo "<td>".$user->ID."</td>";
					echo "<td>".$user->first_name."</td>";
					echo "<td>".$user->last_name."</td>";
					echo "<td><a href='".get_site_url()."/author/".$user->user_nicename."'>".$user->user_nicename."</a></td>";
					echo "<td>".$user->user_email."</td>";
					echo "<td>".$user->city_name."</td>";
					echo "<td>".$user->country_name."</td>";
					echo "</tr>";
				}
				*/
			?>
		</table>
		-->
		
		<?php foreach($result as $user) { ?>
			<p class="left result-holder">
				<?php if ($user->profile_picture_url == null) { ?>
					<img src="<?php bloginfo ( 'template_url' ); ?>/images/content/no image.jpg" alt="No Image" id="profile-pic" width="85" height="70" class="left" />
				<?php } else { ?>
					<img src="<?php echo $user->profile_picture_url;?>" alt="<?php echo $user->user_login;?>" id="profile-pic" width="85" height="70" class="left" />
				<?php } ?>
				
				<?php
					if($user_info->ID == $user->ID) {
						echo "<a href='".get_site_url()."/profile' class='right' style='line-height:70px;'>view</a>"; 
					} else {
						echo "<a href='".get_site_url()."/author/".$user->user_nicename."' class='right' style='line-height:70px;'>view</a>"; 
					}
				?>
				<span><?php echo $user->first_name . " " . $user->last_name ?></span>
			</p>
		<?php } ?>
		
		<br class="clear" />
		
	<?php } else { ?>
		<p class="unavailable">
			<small>No results found.</small>
		</p>
	<?php } ?>
<?php } ?>