<?php
	$validate = FALSE;
	$errorMessage = array();

	if(isset($_POST['gratitude'])) {
		if($_POST['gratitude'] == null || $_POST['gratitude'] == 'Type your text here') {
			$errorMessage[] = "You must enter what you are grateful for.";
		} else {
			$validate = TRUE;
			$wpdb->insert(
				'wp_posts',
				array(
					'post_date' => date('Y-m-d H:i:s'),
					'post_author' => $user_info->ID,
					'post_content' => $_POST['gratitude'],
					'post_type' => 'gratitude',
					'post_availability' => 'active'
				)
			);
		}
	} else if($_POST['remove_gratitude']) {
		$wpdb->update(
			'wp_posts',
			array('post_availability' => 'inactive'),
			array('ID' => $_POST['remove_gratitude'])
		);
	}
	
	$gratitude_list = $wpdb->get_results("
		SELECT *
		FROM wp_posts
		WHERE post_author = '$user_info->ID'
		AND post_type = 'gratitude'
		AND post_availability = 'active'
	");
?>

<p id="quote">
	Reflect upon your present blessings of which everyone has many; not on your past misfortunes of which all people have some.
	<small id="author"> ~ CHARLES DICKENS</small>
</p>

<div id="gratitude-form">
	<?php if(isset($_POST['gratitude']) && $validate == FALSE) { ?>
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

	<span style="padding-left: 10px;">I am Grateful for..</span>
	<form method="post" action="" id="gratitude-input">
		<fieldset>
			<input type="text" name="gratitude" value="Type your text here" onfocus="clearText(this);" onblur="clearText(this);" />
			<input type="submit" value="Include" class="right" />
		</fieldset>
	</form>
</div>

<div id="gratitude-display">
	Gratitude List
	<?php 
		if ($gratitude_list != null) {
	?>
		<ol style="border-top:1px dotted #7F7F7F; padding-top:10px;">
				<li>writegodathankyou.com</li>
				<?php
					foreach($gratitude_list as $gratitude_item) {
				?>
					<li>
						<?php echo $gratitude_item->post_content; ?>
						<form action="" method="post" id="remove_item" class="right" style="margin-right:15px;">
							<input type="hidden" name="remove_gratitude" value="<?php echo $gratitude_item->ID;?>" />
							<input type="submit" value="remove" />
						</form>
					</li>
				<?php
					}
				?>
		</ol>
	<?php
		} else {
			echo "<p class='center' style='margin-top:25px;'>Your gratitude list is empty</p>";
		}
	?>
</div>