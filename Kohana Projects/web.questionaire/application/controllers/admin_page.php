<?php defined('SYSPATH') OR die('No direct access allowed.');
class Admin_Page_Controller extends Admin_Pages_Controller 
{
    var $template = "template";

    /**
     * Administrator home page. Displays tabled information of users.
     */
    public function index()
    {
        $query = Doctrine::getTable("TblUsers")->findAll();

        $this->template->content = new View("admin_page");

        if($this->input->get())
        $this->search();
        else
        $this->template->content->user = $query;
    }

    /**
     * Displays search results in the table depending on te keyword and filter
     */
    public function search()
    {
        $user_table = new TblUsers();
        $query = $user_table->search_user($this->input->get('search_bar'), $this->input->get('choice'));

        $this->template->content->user = $query;
    }

    /**
     * Displays questions in the questionnaire in table format
     */
    public function view_question()
    {
        $get_questions = Doctrine::getTable("TblQuestions")->findAll();

        $this->template->content = new View("view_questions");

        if($this->input->get())
        $this->question_search();
        else
        $this->template->content->questions = $get_questions;
    }

    /**
     * Displays filter results in the table depending on the location filter and the questionnaire filter
     */
    public function question_search()
    {
        $tbl_questions = new TblQuestions();
        $query = $tbl_questions->search_question_group($this->input->get('location_choice'), $this->input->get('questionnaire_choice'));

        $this->template->content->questions = $query;
    }

    /**
     * Allows administrator to add questions in the questionnaire
     */
    public function add_question()
    {
        if ($this->input->post()) $this->save_question();
        $this->template->content = new View("add_question");
    }

    /**
     * Saves the added question including the location and the questionnaire where it will be placed
     */
    public function save_question()
    {
        
        if ($this->validate_question() == TRUE)
        {
            $new_question = new TblQuestions();
            $new_question->question = $this->input->post('add_question');
            $new_question->location = $this->input->post('location_choice');
            $new_question->questionnaire = $this->input->post('questionnaire_choice');
            $new_question->type = "qna";
            $new_question->save();
            $this->session->set("message", '<div id="post_message">Your question has been successfully added.</div>');
            url::redirect('admin_page/view_question');
        }
    }

    public function validate_question()
    {
        $this->session = Session::instance();
        $post = new Validation($this->input->post());

        $post->add_rules('add_question', 'required');
        $post->add_rules('location_choice', 'required');

        if ($post->validate() == FALSE)
        {
            $this->session->set("message",$post->errors("validation"));
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}