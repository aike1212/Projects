<form method="post" action="">  
  <fieldset id="creative">
    
		<h2>
			Client Project Planner
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>
		
		<?=form::label('design20', $question[5]->question)?>
		<?=form::input('design20', snsUtil::get_user_answer_by_question($this->session->get("user"), 20), 'class="qna"')?>
		<br />
		
		<?=form::label('design21', $question[6]->question)?>
		<?=form::input('design21', snsUtil::get_user_answer_by_question($this->session->get("user"), 21), 'class="qna"')?>
		<br />
		
		<?=form::label('design22', $question[7]->question)?>
		<?=form::input('design22', snsUtil::get_user_answer_by_question($this->session->get("user"), 22), 'class="qna"')?>
		<br />
		
		<h4>The Content</h4>
		
		<?=form::label('content23', $question[8]->question)?>
		<?=form::input('content23', snsUtil::get_user_answer_by_question($this->session->get("user"), 23), 'class="qna"')?>
		<br />
		
		<?=form::label('content24', $question[9]->question)?>
		<?=form::input('content24', snsUtil::get_user_answer_by_question($this->session->get("user"), 24), 'class="qna"')?>
		<br />
		
		<p>
		  <?=html::anchor('creative', 'Previous', array('class' => 'left'))?>
			<?=form::submit('submit', 'Next', 'class="right"')?>
		</p>
	
  </fieldset>
</form>