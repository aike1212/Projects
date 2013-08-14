<form method="post" action="">  
  
	<fieldset id="request">
		
		<h2>
			Request A Quote
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>
		
		<h4>The Basics</h4>
				
		<?=form::label('basic6', $question[5]->question)?>		
		<?=form::input('basic6', snsUtil::get_user_answer_by_question($this->session->get("user"), 6), "class=qna")?>
		<br />
		
		<?=form::label('basic7', $question[6]->question)?>		
		<?=form::input('basic7', snsUtil::get_user_answer_by_question($this->session->get("user"), 7), "class=qna")?>
		<br />
		
		<?=form::label('basic8', $question[7]->question)?>		
		<?=form::input('basic8', snsUtil::get_user_answer_by_question($this->session->get("user"), 8), "class=qna")?>
		<br />
		
		<?=form::label('basic9', $question[8]->question)?>		
		<?=form::input('basic9', snsUtil::get_user_answer_by_question($this->session->get("user"), 9), "class=qna")?>
		<br />
		
		<?=form::label('basic10', $question[9]->question)?>		
		<?=form::input('basic10', snsUtil::get_user_answer_by_question($this->session->get("user"), 10), "class=qna")?>
		<br />
		
		<p class="spacer">
			<?=html::anchor('request', 'Previous', array('class' => 'left'))?>
			<?=form::submit('submit', 'Next', 'class="right"')?>
		</p>

		
  </fieldset>
	
</form>