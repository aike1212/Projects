<?php 
	$validate = FALSE;
	$errorMessage = array();
	
	if(isset($_POST['prayer'])) {
		if($_POST['prayer'] == null || $_POST['prayer'] == 'Write your prayer here') {
			$errorMessage[] = "Enter your prayer";
		} else {
			$validate = TRUE;
			$wpdb->insert(
				'wp_posts',
				array(
				  'post_date' => date('Y-m-d H:i:s'),
					'post_author' => $user_info->ID,
					'post_content' => $_POST['prayer'],
					'post_type' => 'prayer',
					'post_availability' => 'active'
				)
			);
		}
	} else if (isset($_POST['prayer-id'])) {
		$wpdb->update(
			'wp_posts',
			array('post_availability' => 'inactive'),
			array('ID' => $_POST['prayer-id'])
		);
	}
	
	$prayers = $wpdb->get_results("
		SELECT *
		FROM wp_posts
		WHERE post_type = 'prayer'
		AND post_author = '$user_info->ID'
		AND post_availability = 'active'
		ORDER BY post_date DESC
	");
?>

<p id="quote">
	It is good for us to keep some account of our prayers, that we may not unsay them in our practice.
	<small id="author"> ~ MATTHEW HENRY</small>
</p>

<?php if(isset($_POST['prayer']) && $validate == FALSE) { ?>
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

<form method="post" action="" id="prayer-input">
	<fieldset>
		<p style="margin:0;">
			<strong id="lord">Lord, </strong>
			<textarea id="prayer" name="prayer" rows="5" onKeyDown="limitText(this.form.prayer,this.form.countdown,1500);" onKeyUp="limitText(this.form.prayer,this.form.countdown,1500);" onfocus="writePrayer(this);" onblur="writePrayer(this);">Write your prayer here</textarea> 
			<br />
			
			<span id="countdown" class="block clearfix">
				(Maximum characters: 1500)
				<span class="right">You have <input readonly type="text" name="countdown" id="text-countdown" value="1500"> characters left.</span>
			</span>
			<br class="clear" />
		</p>
		
		<p class="center" style="margin: 0 auto 30px;">
			<input type="submit" value="Include" />
		</p>
	</fieldset>
</form>

<?php 
	if ($prayers != null) {
		
		foreach($prayers as $prayer) {
			echo "<p class='prayer'><span class='block'>".date('d M Y', strtotime($prayer->post_date))."</span><strong class='block'>Lord,</strong>".$prayer->post_content."</p>";
?>
	<form method="post" action="" class="remove-prayer">
		<input type="hidden" name="prayer-id" value="<?php echo $prayer->ID; ?>" />
		<input type="submit" name="remove" value="Remove" />
	</form>
<?php			
		}
	} else {
		echo "<p id='no-prayers'>You have no available prayers.</p>";
	}
?>