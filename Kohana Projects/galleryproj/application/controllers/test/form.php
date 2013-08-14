<?php defined('SYSPATH') OR die('No direct access allowed.');
class Form_Controller extends Controller {

/**
 * Form manipulation using controllers so no need for templates.
 */

  public function form() {
    // Input
    print form::input('field_name','field_value','style="text-align:right;"').'<br/><br/>';
    // Hidden
    print form::hidden("field_name","field_value");
    $array1 = array('field1'=>'value1','field2'=>'value2');
    print form::hidden($array1).'<br/><br/>';
    // Password
    print form::password("field_name","field_value");
    print form::password("field_name","field_value",'id="field_id"');
    $array2 = array('name'=>'field_name','value'=>'field_value','id'=>'field_id','class'=>'form_field');
    print form::password($array2).'<br/><br/>';
    // Upload
    $attributes = array('name'=>'file1','class'=>'your-class');
    echo form::upload($attributes).'<br/><br/>';
    // Textarea
    print form::textarea('field_name','field_value');
    print form::textarea(array('name'=>'field_name','value'=>'field_value','class'=>'our_class')).'<br/><br/>';
    // Dropdown
    $options = array('Small','Medium','Large');
    print Kohana::debug($options);
    print form::dropdown('input_dropdown',$options,'Medium').'<br/><br/>';
    // Checkbox
    print form::label('check_spam_box','Always send me some Spam (Opt in): ');
    print form::checkbox('check_spam_box','send_Spam').'<br/>';
    print form::label('check_money_box','Never send me Money (Opt out): ');
    print form::checkbox('chack_money_box','send_no_money',true).'<br/><br/>';
    // Radio Button
    print form::label('radio_cute_box','I am cute: ');
    print form::radio('radio_cute_box','is_cute').'<br/>';
    print form::label('radio_single_box','I am single: ');
    print form::radio('radio_single_box','is_single',true).'<br/>';
    print form::label('radio_rich_box','I am rich: ');
    print form::radio('radio_cute_box','is_rich').'<br/><br/>';
    // Submit
    print form::submit('submit','Submit').'<br/><br/>';
    // Button
    print form::button('button','Does nothing').'<br/><br/>';
    // Attributes
    print form::attributes(array('id'=>'input_name','class'=>'submission')).'<br/><br/>';
    // Fieldset
    print form::open_fieldset();
    echo "Hello World";
    print form::close_fieldset().'<br/><br/>';
    // Legend
    print form::legend('More about you',array('id'=>'more_infos'));
  }
}