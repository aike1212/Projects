<?php if (isset($_POST['Submit'])) {

	// Required for all WordPress database manipulations
	global $wpdb;
 
	// Grabbing DB prefix and settings table names to variable
	$testimonials = $wpdb->prefix . "iq_testimonials";
	$iq_testimonials_settings = $wpdb->prefix . "iq_testimonials_settings";

/********************************
 * Testimonial Settings
 ********************************/	
	// Get values from post!
	$testimonial_options = array();
	$testimonial_options['admin_email'] = $_POST['admin_email'];
	$testimonial_options['date'] = $_POST['date'];
	$testimonial_options['max_widget_testimonials'] = $_POST['max_widget_testimonials'];
	$testimonial_options['max_page_testimonials'] = $_POST['max_page_testimonials'];
	$testimonial_options['max_image_width'] = $_POST['max_image_width'];
	$testimonial_options['max_image_height'] = $_POST['max_image_height'];
	$testimonial_options['randomize'] = $_POST['randomize'];


/********************************
 * General Update
 ********************************/	
	$sql1 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['admin_email']."' WHERE name='admin_email'");
	$sql2 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['date']."' WHERE name='date'");
	$sql3 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_page_testimonials']."' WHERE name='max_page_testimonials'");
	$sql4 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_widget_testimonials']."' WHERE name='max_widget_testimonials'");
	$sql5 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_image_width']."' WHERE name='max_image_width'");
	$sql6 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_image_height']."' WHERE name='max_image_height'");
	$sql7 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['randomize']."' WHERE name='randomize'");



	
	// Requiring WP upgrade and running SQL query
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql1);
	dbDelta($sql2);
	dbDelta($sql3);
	dbDelta($sql4);
	dbDelta($sql5);
	dbDelta($sql6);
	dbDelta($sql7);

?>

<div class="iq-testimonial-updated fade" id="message" style="background-color: rgb(255, 251, 204);"><p><?php echo __('Settings saved!', 'iq-testimonials' ); ?></p></div>

<?php } ?>

<?php if (isset($_POST['Reset'])) {

	// Required for all WordPress database manipulations
	global $wpdb;
	
	// Grabbing DB prefix and settings table names to variable
	$iq_testimonials_settings = $wpdb->prefix . "iq_testimonials_settings";
	
	// Grabbing DB prefix and settings table names to variable
	$options_table = $wpdb->prefix . "options";
		
	// Getting the admin email for plugin
	$admin_email_query = mysql_query("SELECT option_value FROM $options_table WHERE option_name='admin_email'");		
	$admin_email_row = mysql_fetch_array($admin_email_query);
	$admin_email_default = $admin_email_row['option_value'];

/********************************
 * Defining Default Testimonial Settings
 ********************************/
	$testimonial_options = array();
	$testimonial_options['admin_email'] = $admin_email_default;
	$testimonial_options['date'] = 1;
	$testimonial_options['max_widget_testimonials'] = '1';
	$testimonial_options['max_page_testimonials'] = '15';
	$testimonial_options['max_image_width'] = '125';
	$testimonial_options['max_image_height'] = '125';
	$testimonial_options['randomize'] = '';

	
/********************************
 * Updating To Default Above
 ********************************/

	$sql1 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['admin_email']."' WHERE name='admin_email'");
	$sql2 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['date']."' WHERE name='date'");
	$sql3 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_widget_testimonials']."' WHERE name='max_widget_testimonials'");
	$sql4 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_page_testimonials']."' WHERE name='max_page_testimonials'");
	$sql5 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_image_width']."' WHERE name='max_image_width'");
	$sql6 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['max_image_height']."' WHERE name='max_image_height'");
	$sql7 = ("UPDATE $iq_testimonials_settings SET value='".$testimonial_options['randomize']."' WHERE name='randomize'");

	
	// Requiring WP upgrade and running SQL query
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql1);
	dbDelta($sql2);
	dbDelta($sql3);
	dbDelta($sql4);
	dbDelta($sql5);
	dbDelta($sql6);
	dbDelta($sql7);


?>

<div class="iq-testimonial-updated fade" id="message" style="background-color: rgb(255, 251, 204);"><p><?php echo __('Settings Reset!', 'iq-testimonials' ); ?></p></div>

<?php } ?>

<?php if (isset($_POST['Delete'])) {

	// Required for all WordPress database manipulations
	global $wpdb;
	
	// Grabbing DB prefix and settings table names to variable
	$testimonials = $wpdb->prefix . "iq_testimonials";
	$iq_testimonials_settings = $wpdb->prefix . "iq_testimonials_settings";
	
	// Deleting The Databases
	mysql_query("DROP table $testimonials");
	mysql_query("DROP table $iq_testimonials_settings");
	
?>

<div class="iq-testimonial-updated fade" id="message" style="background-color: rgb(255, 251, 204);"><p><?php echo __('Database Tables Deleted!', 'iq-testimonials' ); ?></p></div>

<?php } ?>

<?php

/********************************
 * Global Settings
 ********************************/
	// Required for all WordPress database manipulations
	global $wpdb;
 
	// Grabbing DB prefix and settings table names to variable
	$testimonials = $wpdb->prefix . "iq_testimonials";
	$iq_testimonials_settings = $wpdb->prefix . "iq_testimonials_settings";

/********************************
 * Testimonial Settings
 ********************************/

	// Are we going to display the testimonials on a certain page?
	$admin_email = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='admin_email'", ARRAY_A);		
	$admin_email = $admin_email['value'];
	
	// Date
	$date = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='date'", ARRAY_A);		
	$date = $date['value'];

	// Getting number of testimonials to display on the widget
	$max_widget_testimonials = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='max_widget_testimonials'", ARRAY_A);		
	$max_widget_testimonials = $max_widget_testimonials['value'];
	
	// Getting max number of testimonials to display on testimonials page
	$max_page_testimonials = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='max_page_testimonials'", ARRAY_A);		
	$max_page_testimonials = $max_page_testimonials['value'];
	
	// Getting max image width
	$max_image_width = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='max_image_width'", ARRAY_A);		
	$max_image_width = $max_image_width['value'];
	
	// Getting max image height
	$max_image_height = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='max_image_height'", ARRAY_A);		
	$max_image_height = $max_image_height['value'];
	
	// Getting randomize
	$randomize_testimonials = $wpdb->get_row("SELECT value FROM $iq_testimonials_settings WHERE name='randomize'", ARRAY_A);		
	$randomize_testimonials = $randomize_testimonials['value'];
	
		if ($randomize_testimonials == 'true') {
		$randomize_checked_state = 'CHECKED';
	}
	
?>

<div class="wrap">

<div id="icon-options-general" class="icon32"><br /></div>
<h2>IQ Testimonials Settings</h2>
<h4>Widget Settings</h4>
<form method="post" action="" id="settingsform">
<table class="form-table">
	<tr valign="top">
		<th scope="row"><label for="max_widget_testimonials"><span title="The maximum number of testimonials that should be displayed on the widget.">Max Number Of Testimonials Displayed</span></label></th>
		<td><input name="max_widget_testimonials" type="text" id="max_widget_testimonials" value='<?php echo $max_widget_testimonials; ?>' size="2" /></td>
	</tr>
</table>
<br />
<h4>Page Settings</h4>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><label for="max_page_testimonials"><span title="The maximum number of testimonials that should be displayed on the testimonials page.">Max Number Of Testimonials Displayed</span></label></th>
		<td><input name="max_page_testimonials" type="text" id="max_page_testimonials" value='<?php echo $max_page_testimonials; ?>' size="2" /></td>
	</tr>
</table>
<br />
<h4>Global Settings</h4>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><label for="max_image_width"><span title="The maximum image width.">Max Image Width</span></label></th>
		<td><input name="max_image_width" type="text" id="max_image_width" value='<?php echo $max_image_width; ?>' size="2" /></td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="max_image_height"><span title="The maximum image height.">Max Image Height</span></label></th>
		<td><input name="max_image_height" type="text" id="max_image_height" value='<?php echo $max_image_height; ?>' size="2" /></td>
	</tr>
	<tr valign="top">
		<th scope="row"><label for="randomize"><span title="Randomize the testimonial order making sure to put featured testimonials at the top.">Randomize Testimonials</span></label></th>
		<td><input name="randomize" type="checkbox" id="randomize" value='true' <?php echo $randomize_checked_state; ?> /></td>
	</tr>
</table>
<br />
<h4>Notification Settings</h4>
<table class="form-table">
	<tr valign="top">
		<th scope="row"><label for="admin_email"><span title="The email you want to be contacted at when someone submits a testimonial using the public form.">Admin Email</span></label></th>
		<td><input name="admin_email" type="text" id="admin_email"  value='<?php echo $admin_email; ?>' class="regular-text" />
	</tr>
</table>

  <p class="submit">
    <input type="hidden" value="save" name="save" />
    <input type="submit" name="Submit" class="button-primary" value="Save Changes" /> | 
	<input type="submit" name="Reset" class="button-secondary" value="Reset Settings" onclick="if ( confirm('You are about to reset all settings. \n \'Cancel\' to stop, \'OK\' to reset.') ) { return true;}return false;" /> |
	<input type="submit" name="Delete" class="button-secondary" value="Uninstall Plugin" onclick="if ( confirm('You are about to UNINSTALL this plugin! This cannot be undone! \n \'Cancel\' to stop, \'OK\' to uninstall.') ) { return true;}return false;" />
  </p>
</form>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_option('siteurl') . '/wp-content/plugins/iq-testimonials/js/jquery.qtip.js'; ?>" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() 
{
   $('#settingsform span[title]').qtip({
      content: {
         text: false
      },
      style: 'light'
   });
   // $('#content a[href]').qtip();
});
</script>