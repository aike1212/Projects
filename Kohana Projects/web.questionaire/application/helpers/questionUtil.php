<?php defined('SYSPATH') OR die('No direct access allowed.');
 
class questionUtil
{
  public static function display_choices($question_id)
  {
    $choice = new TblChoies();
	$get_choice = $choice->get_choices($question_id);
	$query = $get_choice->execute();
    return $query;	
  }
}
?>
