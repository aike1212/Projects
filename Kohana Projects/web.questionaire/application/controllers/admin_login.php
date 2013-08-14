<?php defined('SYSPATH') OR die('No direct access allowed.');
class Admin_Login_Controller extends Template_Controller 
{
  var $template = "template";

	/**
	 * Administrator login page
	 */
  public function index() 
  {
	  if ($this->input->post()) $this->login();
		$this->template->content = new View("admin_login");
	}
	
	/**
	 * Check admin username and password
	 */
	public function login()
	{
		$session = Session::instance();
		
		$admin = new TblAdmin();	
		
		$result = $admin->get_user_by_login($this->input->post("username"), $this->input->post("password"));
		
		if ($result != null)
		{
		  // Set session variables
			$session->set("is_logged_in", true);
			$session->set("logged_in_user", "{$result->first_name} {$result->last_name}");
			$session->set("logs", $result->logins);
			$session->set("user", $result->id);
			
			url::redirect("admin_page");
		}
		else
		{
			return;
		}
  }
}