<?php defined('SYSPATH') OR die('No direct access allowed.');
class Logout_Controller extends Controller {
	
	/**
	 * User logout controller. Delete session variables
	 */
	public function index() 
	{
		$session = Session::instance();

		$session->delete("is_logged_in");
		$session->delete("logged_in_user");

		url::redirect("main");
  }
}