<?php defined('SYSPATH') OR die('No direct access allowed.');
class Main_Controller extends Template_Controller 
{
  var $template = "template";

	/**
	 * Home page
	 */
  public function index() 
  {
	  if ($this->input->post()) $this->login();
		$this->template->content = new View("main");
	}
	
	/**
	 * Handles validation and login credentials
	 */
	public function login()
	{
		$session = Session::instance();
		$this->session = Session::instance();
		
		$user = new TblUsers();
		
		$post = new Validation($this->input->post());
		
		$post->add_rules("code", "length[6]", "alpha_numeric");
			
		$result = $user->get_user_by_code($this->input->post("code"));
		
		if ($post->validate() == true)
		{
		  if ($result->status == 'inactive') 
			{
			  $post->validate() == false;
				$error_code = array('Sorry. Your account has been deactivated.');
			  $this->session->set("message", $error_code);
			}
		  else if ($result == null) 
			{
			  $post->validate() == false;
				$error_code = array('The Code you entered does not exist.');
			  $this->session->set("message", $error_code);
			}
			else
			{
				$session->set("is_logged_in", true);
				$session->set("has_set_a", $result->has_set_a);
				$session->set("logged_in_user", "{$result->first_name} {$result->last_name}");
				$session->set("logs", $result->logins);
				$session->set("user", $result->id);
				
				url::redirect("questionnaire_selection");
			}
		}
		else
		{
		  $this->session->set("message", $post->errors("validation"));
		}
  }
}