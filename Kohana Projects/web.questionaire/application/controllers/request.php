<?php defined('SYSPATH') OR die('No direct access allowed.');
class Request_Controller extends User_Pages_Controller 
{
  var $template = "template";
  
	/**
	 * Questionnaire 1: Request a Quote page 1 controller
	 */
  public function index() 
  {
		$question = new TblQuestions();
		
	  if($this->input->post()) $this->get_answers_page_1($question);

		$get_total_question = $question->get_total("request_a_quote");
		
		$this->template->content = new View("request_page_one");
		$this->template->content->question = $get_total_question->execute();
  }
	
	/**
	 * Save user's answers
	 */
	public function save_answers($question, $question_id)
  {
	  $answer = new TblAnswers();
		
		$answer->answer = $this->input->post($question);
		$answer->user_id = $this->session->get("user");
		$answer->q_id = $question_id;
		$answer->save();
	}
	
	/**
	 * Questionnaire 1: Request a Quote page 2 controller
	 */
	public function page_2() 
	{
		$question = new TblQuestions();
		
		if($this->input->post()) $this->get_answers_page_2($question);		
		
	  $get_total_question = $question->get_total("request_a_quote");
		
		$this->template->content = new View("request_page_two");
		$this->template->content->question = $get_total_question->execute();
	}
	
	/**
	 * Questionnaire 1: Request a Quote page 3 controller
	 */
	public function page_3() 
	{
		$question = new TblQuestions();
		
		if($this->input->post()) $this->get_answers_page_3($question);			
		
	  $get_total_question = $question->get_total("request_a_quote");
		
		$this->template->content = new View("request_page_three");		
		$this->template->content->question = $get_total_question->execute();
	}
	
	/**
	 * Questionnaire 1: Request a Quote page 1 update/save answers
	 */
	public function get_answers_page_1($question) 
	{
		$user = Doctrine::getTable("TblUsers")->find($this->session->get("user"));
		$session = Session::instance();
		
		// Confirms that a user has answered questions in this questionnaire and is now able to answer the other questionnaire
		$user->has_set_a = '1';
		$session->set("has_set_a", $user->has_set_a);
		$user->save();

		if($this->input->post('basic1') != null)
		{
			$question_id = 1;
			$question = 'basic1';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic2') != null) 
		{
			$question_id = 2;
			$question = 'basic2';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic3') != null) 
		{
			$question_id = 3;
			$question = 'basic3';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic4') != null) 
		{
			$question_id = 4;
			$question = 'basic4';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic5') != null) 
		{
			$question_id = 5;
			$question = 'basic5';
			$this->save_answers($question, $question_id);
		}
		url::redirect('request/page_2');	
	}
	
	/**
	 * Questionnaire 1: Request a Quote page 2 update/save answers
	 */
	public function get_answers_page_2($question) 
	{
		if($this->input->post('basic6') != null) 
		{
			$question_id = 6;
			$question = 'basic6';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic7') != null) 
		{
			$question_id = 7;
			$question = 'basic7';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic8') != null) 
		{
			$question_id = 8;
			$question = 'basic8';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic9') != null) 
		{
			$question_id = 9;
			$question = 'basic9';
			$this->save_answers($question, $question_id);
		}
		if($this->input->post('basic10') != null) 
		{
			$question_id = 10;
			$question = 'basic10';
			$this->save_answers($question, $question_id);
		}
		url::redirect('request/page_3');
	}
	
	/**
	 * Questionnaire 1: Request a Quote page 3 update/save answers
	 */
	public function get_answers_page_3($question)
	{
		for($i = 11; $i <= 14; $i++)
		{
			if($this->input->post('need'.$i) == true) 
			{
				$answer = new TblAnswers();
				if ($i == 11) {
					$answer->answer = snsUtil::question_11_choice_picker($this->input->post('need'.$i), 1);
				} else if ($i == 13) {
					$answer->answer = snsUtil::question_13_choice_picker($this->input->post('need'.$i), 1);
				} else {
					$answer->answer = $this->input->post('need'.$i);		
				}
				$answer->user_id = $this->session->get("user");
				$answer->q_id = $i;
		
				$answer->save();
			}
		}
		$this->session->set("message", "Your answers have been submitted.");
		url::redirect('questionnaire_selection');
	}
}