<?php
// create custom plugin settings menu
add_action('admin_menu', 'jvcf7_create_menu');

function jvcf7_create_menu() {
	add_options_page('Jquery Validation For Contact Form 7', 'Jquery Validation For Contact Form 7', 'administrator', __FILE__, 'jvcf7_settings_page');
	add_action('admin_init', 'register_jvcf7settings');
}

function register_jvcf7settings() {
	register_setting('jvcf7-settings-group', 'jvcf7_show_label_error');
	register_setting('jvcf7-settings-group', 'jvcf7_highlight_error_field');
}

function jvcf7_settings_page() {	
	$jvcf7_show_label_error 						= get_option('jvcf7_show_label_error');
	$jvcf7_highlight_error_field 					= get_option('jvcf7_highlight_error_field');
?>
<div class="wrap">
<h2>Jquery Validation For Contact Form</h2>
<br/>
<div style="-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; border:1px solid #e9e9e9; padding:10px;-webkit-box-shadow: 0px 0px 1px 2px #969696;-moz-box-shadow: 0px 0px 1px 2px #969696;box-shadow: 0px 0px 1px 2px #969696; text-align:center; font-size:14px;"> 
<em><b>Click <a href="http://dineshkarki.com.np/donate" target="_blank">here</a> to show love to this plugin.</b></em>
</div>


    <form method="post" action="options.php">
	<?php settings_fields( 'jvcf7-settings-group' ); ?>
	<table class="form-table">
        <tr valign="top">
            <th scope="row">Show Error Message Next to the Field ?</th>
            <td>
                <select name="jvcf7_show_label_error" style="width:100px;"  />
                    <option value="yes" <?php echo $jvcf7_show_label_error == 'yes'?'selected="selected"':''; ?>>Yes</option>
                    <option value="no" <?php echo $jvcf7_show_label_error == 'no'?'selected="selected"':''; ?>>No</option>
                </select>
                
            </td>
            
            <td><em>Demo:</em> <br/>
                <img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/show_error_label.png'); ?>" /></td>
        </tr>
        
        <tr valign="top">
            <th scope="row">Highlight Invalid Fields  ?</th>
            <td>
                <select name="jvcf7_highlight_error_field" style="width:100px;"  />
                    <option value="yes" <?php echo $jvcf7_highlight_error_field == 'yes'?'selected="selected"':''; ?>>Yes</option>
                    <option value="no" <?php echo $jvcf7_highlight_error_field == 'no'?'selected="selected"':''; ?>>No</option>
                </select>
            </td>
            <td>
            <em>Demo:</em> <br/>
                <img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/highlight_invalid_fields.png'); ?>" />
            </td>
            
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" name="submit-jvcf7" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
    
    <p>
    <h3>Instructions</h3>
    
    <ol>
    	<li>You can add validation rules like Url, Number, Date, Credit Card from the class field of contact form 7. Check the snapshot below.<br/><img src="<?php echo plugins_url('jquery-validation-for-contact-form-7/img/add_validation.png'); ?>" />
		</li>
        <li>Field that has been marked as required will be added <em>required</em> validation rule. You don't need to add required as the class in the field.</li>
        <li>Email field from contact form 7 will be automatically added with <em>email</em> validation rule. You don't need to add email as class in the field</li>
        <li>This plugin works with the help of jquery validation. Visit <a href="http://docs.jquery.com/Plugins/Validation" target="_blank">http://docs.jquery.com/Plugins/Validation</a> for more details about the plugin.</li>        
        <li>Click <a href="http://dineshkarki.com.np/plugins/jquery-validation-for-contact-form-7/report-bugs">here</a> to report any bugs for this plugin.</li>        
        <li>Don't forget to show <a href="http://dineshkarki.com.np/donate" target="_blank"><strong>love</strong></a> to this plugin.</li>
        
        
    </ol>
    
    </p>
    
</form>
</div>
<?php } ?>