<?php defined('SYSPATH') OR die('No direct access allowed.');
class Questionnaire_Selection_Controller extends User_Pages_Controller 
{
  var $template = "template";

	/**
	 * Questionnaire selection controller.
	 */
  public function index() 
  {
    $this->template->content = new View("questionnaire_selection");
  }
}