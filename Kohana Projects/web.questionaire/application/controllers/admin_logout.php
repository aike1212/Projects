<?php defined('SYSPATH') OR die('No direct access allowed.');
class Admin_Logout_Controller extends Controller {
	
	/**
	 * Administrator logout page. Clears admin session variables
	 */
	public function index() 
	{
		$session = Session::instance();

		$session->delete("is_logged_in");
		$session->delete("logged_in_user");

		url::redirect("admin_login");
  }
}