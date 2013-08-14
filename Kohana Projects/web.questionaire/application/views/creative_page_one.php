<form method="post" action="">  
  <fieldset id="creative">
    
		<h2>
			Client Project Planner
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>
		
		<h4>The Brand</h4>
		
		<?=form::label('brand15', $question[0]->question)?>
		<?=form::input('brand15', snsUtil::get_user_answer_by_question($this->session->get("user"), 15), 'class="qna"')?>
		<br />
		
		<?=form::label('brand16', $question[1]->question)?>
		<?=form::input('brand16', snsUtil::get_user_answer_by_question($this->session->get("user"), 16), 'class="qna"')?>
		<br />
		
		<?=form::label('brand17', $question[2]->question)?>
		<?=form::input('brand17', snsUtil::get_user_answer_by_question($this->session->get("user"), 17), 'class="qna"')?>
		<br />
		
		<?=form::label('brand18', $question[3]->question)?>
		<?=form::input('brand18', snsUtil::get_user_answer_by_question($this->session->get("user"), 18), 'class="qna"')?>
		<br />
		
		<h4>The Design</h4>
		
		<?=form::label('design19', $question[4]->question)?>
		<?=form::input('design19', snsUtil::get_user_answer_by_question($this->session->get("user"), 19), 'class="qna"')?>
		<br />
		
		<p>
			<?=form::submit('submit', 'Next', 'class="right"')?>
		</p>
	
  </fieldset>
</form>