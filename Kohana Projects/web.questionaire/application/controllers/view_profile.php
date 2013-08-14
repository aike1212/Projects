<?php defined('SYSPATH') OR die('No direct access allowed.');
class View_Profile_Controller extends Admin_Pages_Controller 
{
  var $template = "template";
	
	/**
	 * View profile of a user. By default views user information.
	 */
	public function user($user_id) 
  {
	  $get_user = Doctrine::getTable("TblUsers")->find($user_id);
		
		$get_questions = Doctrine::getTable("TblQuestions")->findAll();
		
		$answer = new TblAnswers();
		$get_answer = $answer->get_user_answer($user_id);
		
		if($this->input->post()) $this->update($get_user, $get_answer);
	
		$this->template->content = new View("view_profile");
		$this->template->content->user = $get_user;
		$this->template->content->answer = $get_answer;
		$this->template->content->question = $get_questions;
	}
	
	/**
	 * Updates user information
	 */
	public function update($get_user)
	{
		$get_user->fromArray($this->input->post());
		$get_user->first_name = $this->input->post("first_name");
		$get_user->last_name = $this->input->post("last_name");
		$get_user->email = $this->input->post("email");
		$get_user->company = $this->input->post("company");
		$get_user->position = $this->input->post("position");
		$get_user->schedule = $this->input->post("schedule");
		$get_user->contact = $this->input->post("contact");
		$get_user->status = $this->input->post("status");
		$get_user->save();
		
		$this->session->set('message', 'User information has been updated.');
	}
	
	/**
	 * Displays user's answers to questionnaire 1: Request a Quote
	 */
	public function q1($user_id)
	{
	  $get_user = Doctrine::getTable("TblUsers")->find($user_id);
	  $get_questions = Doctrine::getTable("TblQuestions")->findAll();
		
		$answer = new TblAnswers();
		$get_answer = $answer->get_user_answer($user_id);
	
	  if($this->input->post()) $this->save_q1_answers($user_id);
		
		$this->template->content = new View("questionnaire1");
		$this->template->content->user = $get_user;
		$this->template->content->answer = $get_answer;
		$this->template->content->question = $get_questions;
	}
	
	/**
	 * Displays user's answers to questionnaire 2: Creative Brief Questionnaire
	 */
	public function q2($user_id) 
	{
	  $get_user = Doctrine::getTable("TblUsers")->find($user_id);
	  $get_questions = Doctrine::getTable("TblQuestions")->findAll();
		
		$answer = new TblAnswers();
		$get_answer = $answer->get_user_answer($user_id);
	
	  if($this->input->post()) $this->save_q2_answers($user_id);
		
	  $this->template->content = new View("questionnaire2");
		$this->template->content->user = $get_user;
		$this->template->content->answer = $get_answer;
		$this->template->content->question = $get_questions;
	}
	
	/**
	 * Updates changes made in the user's answers to questionnaire 1
	 */
	public function save_q1_answers($user_id)
	{
		for($i = 1; $i <= 14; $i++)
		{
		  $i <= 10 ? $post = 'basic' : $post = 'need';

		  if($this->input->post($post . $i) != null)
			{
				$answer = new TblAnswers();
				$answer->user_id = $user_id;
				$answer->q_id = $i;
				
				if($i == 11)
				{
				
					$answer->answer = snsUtil::question_11_choice_picker($this->input->post($post . $i), '1');
				} 
				else if($i == 13)
				{
					$answer->answer = snsUtil::question_13_choice_picker($this->input->post($post . $i), 1);
				}
				else
				{
					$answer->answer = $this->input->post($post . $i);
				}	
				$answer->save();
			}
		}
		$this->session->set('message', 'User information has been updated.');		
	}
	
	/**
	 * Updates changes made in the user's answers to questionnaire 2
	 */
	public function save_q2_answers($user_id)
	{
		for($i = 15; $i <= 33; $i++)
		{
		  if($i <= 18) 
			{
				$post = 'brand';
			}
			else if($i > 18 && $i <= 22) 
			{
			  $post = 'design';
			}
			else if($i > 22 && $i <= 27)
			{
			  $post = 'content';
			}
			else if($i > 27 && $i <= 32)
			{
			  $post = 'presence';
			}
			else
			{
			  $post = 'any';
			}
			
			if($this->input->post($post . $i) != null)
			{
				$answer = new TblAnswers();
				$answer->user_id = $user_id;
				$answer->q_id = $i;
				$answer->answer = $this->input->post($post . $i);
				$answer->save();
			}
		}
		$this->session->set('message', 'User information has been updated.');
	}
}