<?php defined('SYSPATH') OR die('No direct access allowed.');
class Creative_Controller extends User_Pages_Controller 
{
  var $template = "template";

	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 1 controller
	 */
  public function index() 
  {
	  if($this->session->get("has_set_a") == '0') url::redirect('questionnaire_selection');
    
		$question = new TblQuestions();
    
		$get_total_question = $question->get_total("client_project_planner");
	
	  if($this->input->post()) $this->get_answers_page_1();
	
		$this->template->content = new View("creative_page_one");
		$this->template->content->question = $get_total_question->execute();
  }
	
	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 2 controller
	 */
	public function page_2() 
	{
		$question = new TblQuestions();
    
		$get_total_question = $question->get_total("client_project_planner");
	
	  if($this->input->post()) $this->get_answers_page_2();
	
		$this->template->content = new View("creative_page_two");
		$this->template->content->question = $get_total_question->execute();
	}
	
	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 3 controller
	 */
	public function page_3() 
	{
	  $question = new TblQuestions();
    
		$get_total_question = $question->get_total("client_project_planner");
	
	  if($this->input->post()) $this->get_answers_page_3();
	
		$this->template->content = new View("creative_page_three");
		$this->template->content->question = $get_total_question->execute();
	}
	
	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 4 controller
	 */
	public function page_4() 
	{
		$question = new TblQuestions();
    
		$get_total_question = $question->get_total("client_project_planner");
	
	  if($this->input->post()) $this->get_answers_page_4();
	
		$this->template->content = new View("creative_page_four");
		$this->template->content->question = $get_total_question->execute();
	}
	
	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 1 save/update user answers
	 */
	public function get_answers_page_1()
	{
	  if ($this->input->post("brand15") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("brand15");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '15';
			$answer->save();
		}	
		if ($this->input->post("brand16") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("brand16");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '16';
			$answer->save();
		}
		if ($this->input->post("brand17") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("brand17");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '17';
			$answer->save();
		}		
		if ($this->input->post("brand18") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("brand18");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '18';
			$answer->save();
		}		
		if ($this->input->post("design19") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("design19");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '19';
			$answer->save();
		}		
		if ($this->input->post("design20") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("design20");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '20';
			$answer->save();
		}		
		url::redirect('creative/page_2');
	}
	
	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 2 save/update user answers
	 */
	public function get_answers_page_2()
	{
		if ($this->input->post("design21") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("design21");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '21';
			$answer->save();
		}		
		if ($this->input->post("design22") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("design22");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '22';
			$answer->save();
		}		
		if ($this->input->post("content23") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("content23");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '23';
			$answer->save();
		}
		if ($this->input->post("content24") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("content24");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '24';
			$answer->save();
		}
		if ($this->input->post("content25") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("content25");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '25';
			$answer->save();
		}
		url::redirect('creative/page_3');
	}
	
	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 3 save/update user answers
	 */
	public function get_answers_page_3()
	{
		if ($this->input->post("content26") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("content26");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '26';
			$answer->save();
		}
		if ($this->input->post("content27") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("content27");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '27';
			$answer->save();
		}
		if ($this->input->post("presence28") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("presence28");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '28';
			$answer->save();
		}
		if ($this->input->post("presence29") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("presence29");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '29';
			$answer->save();
		}
		if ($this->input->post("presence30") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("presence30");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '30';
			$answer->save();
		}
		url::redirect('creative/page_4');
	}

	/**
	 * Questionnaire 2: Creative Brief Questionnaire page 4 save/update user answers
	 */
	public function get_answers_page_4()
	{
		if ($this->input->post("presence31") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("presence31");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '31';
			$answer->save();
		}
		if ($this->input->post("presence32") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("presence32");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '32';
			$answer->save();
		}
		if ($this->input->post("any33") != null) {
		  $answer = new TblAnswers();
			$answer->answer = $this->input->post("any33");
			$answer->user_id = $this->session->get("user");
			$answer->q_id = '33';
			$answer->save();
		}
		$this->session->set("message", "Your answers have been submitted.");
		url::redirect('questionnaire_selection');
	}		
}