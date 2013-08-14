<?php defined('SYSPATH') OR die('No direct access allowed.');
class Register_Controller extends Template_Controller {
	var $template = "guest_main_page";

	public function index()
    {
        $this->update();
        $this->template->content = new View("registration");
    }

    protected function register_validation()
    {
        Session::instance();

        $post = new Validation($this->input->post());
        
        $post->add_rules('username','required','length[5-30]');
        $post->add_rules('password','required','length[5-30]');
        $post->add_rules('cpassword','required','length[5-30]');
        
        $post->add_rules('first_name','required','length[2-50]');
        $post->add_rules('last_name','required','length[2-30]');
        $post->add_rules('email','email');
        $post->add_rules('contact','phone','digit');
        $post->add_rules('birthday','date_format');

        if ($post->validate() == false)
        {
            $this->session->set("message",html::error_messages_to_list($post->errors("form_errors")));
            return false;
        }
        else
        {
            return true;
        }
    }
    
    protected function update()
    {
        if($this->input->post() == false) return;

        if ($this->register_validation() == true)
        {
            $usr = new Tblusers();

            if($usr == null) Event::run("system.404");
            $usr->username = $this->input->post("username");
            $usr->password = $this->input->post("password");
            $usr->last_name = $this->input->post("last_name");
            $usr->first_name = $this->input->post("first_name");
            $usr->email = $this->input->post("email");
            $usr->birthday = $this->input->post("birthday");
            $usr->contact_number = $this->input->post("contact");
            $usr->save();
        }
    }
}