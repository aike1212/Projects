<?php defined('SYSPATH') OR die('No direct access allowed.');
abstract class User_Pages_Controller extends Template_Controller {

  public $session;

  /**
	 * User session inheritance
	 */
	public function  __construct() 
	{
    parent::__construct();
    $this->session = Session::instance();
    if($this->session->get("is_logged_in") == false) url::redirect("./main");
  }
}