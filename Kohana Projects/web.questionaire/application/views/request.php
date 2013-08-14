<form method="post" action="request?page=3">  
  
	<fieldset id="request">
		
		<h2>
			Request A Quote
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>
		
		<h4>The Basics</h4>

		<!--<h4>What You Need</h4>-->
				
		<?=form::label('basic1', $question[0]->question)?>		
		<?=form::input('basic1', snsUtil::get_user_answer_by_question($this->session->get("user"), 1), "class=qna")?>
		<br />
		
		<?=form::label('basic2', $question[1]->question)?>		
		<?=form::input('basic2', snsUtil::get_user_answer_by_question($this->session->get("user"), 2), "class=qna")?>
		<br />
		
		<?=form::label('basic3', $question[2]->question)?>		
		<?=form::input('basic3', snsUtil::get_user_answer_by_question($this->session->get("user"), 3), "class=qna")?>
		<br />
		
		<?=form::label('basic4', $question[3]->question)?>		
		<?=form::input('basic4', snsUtil::get_user_answer_by_question($this->session->get("user"), 4), "class=qna")?>
		<br />
		
		<?=form::label('basic5', $question[4]->question)?>		
		<?=form::input('basic5', snsUtil::get_user_answer_by_question($this->session->get("user"), 5), "class=qna")?>
		<br />
		
		<p>
			<?=form::submit('submit', 'Next')?>
		</p>

		
  </fieldset>
	
</form>