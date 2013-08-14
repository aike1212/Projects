<?php defined('SYSPATH') OR die('No direct access allowed.');
abstract class Admin_Pages_Controller extends Template_Controller {

  public $session;

  /**
	 * Administrator session inhertance
	 */
	public function  __construct() 
	{
    parent::__construct();
    $this->session = Session::instance();
    if($this->session->get("is_logged_in") == false) url::redirect("admin_login");
  }
}