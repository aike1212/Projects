<?php defined('SYSPATH') OR die('No direct access allowed.');
class Registration_Controller extends Template_Controller 
{
    var $template = "template";

    /**
     * Registration page controller
     */
    public function index()
    {
        //Doctrine::generateModelsFromDb('application/models/doctrine', array('doctrine'), array('generateTableClasses' => true));
        $this->new_user();
        $this->template->content = new View("registration");
    }

    /**
     * Registration input validation
     */
    public function register_validation()
    {
        $this->session = Session::instance();
        $post = new Validation($this->input->post());

        // i18n validation rules
        $post->add_rules('last_name', 'required');
        $post->add_rules('first_name', 'required');
        $post->add_rules('position', 'required');
        $post->add_rules('email', 'required', 'email');
        $post->add_rules('schedule', 'required');
        $post->add_rules('company', 'required');

        if($post->validate() == false)
        {
            $this->session->set("message",$post->errors("validation"));
            return false;
        }
        else
        {
            return true;
        }
    }

    /**
     * Registration confirmation
     */
    public function new_user()
    {
        if ($this->input->post() == false) return;

        if ($this->register_validation() == true)
        {
            $code = text::random($type = 'alnum', $length = 6);

            // Mail code to user when validation has passed
            $to = 'bcweb.aike@gmail.com';
            $from = 'web.questionnaires';
            $subject = 'Access Code';
            $message = 'Your Access Code is: $code (case sensitive)';

            mail($to, $message, $subject, $from);

            // Save a new user to the database
            $usr = new TblUsers();
            $usr->last_name = $this->input->post('last_name');
            $usr->first_name = $this->input->post('first_name');
            $usr->position = $this->input->post('position');
            $usr->email = $this->input->post('email');
            $usr->schedule = $this->input->post('schedule');
            $usr->company = $this->input->post('company');
            $usr->contact = $this->input->post('contact');
            $usr->ip_address = $_SERVER['REMOTE_ADDR'];
            $usr->code = $code;
            $usr->save();

            url::redirect("main");
        }
    }
}