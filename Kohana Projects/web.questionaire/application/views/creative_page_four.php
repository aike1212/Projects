<form method="post" action="">  
  <fieldset id="creative">
    
		<h2>
			Client Project Planner
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>
		
		<?=form::label('presence30', $question[15]->question)?>
		<?=form::input('presence30', snsUtil::get_user_answer_by_question($this->session->get("user"), 30), 'class="qna"')?>
		<br />
		
		<?=form::label('presence31', $question[16]->question)?>
		<?=form::input('presence31', snsUtil::get_user_answer_by_question($this->session->get("user"), 31), 'class="qna"')?>
		<br />
		
		<?=form::label('presence32', $question[17]->question)?>
		<?=form::input('presence32', snsUtil::get_user_answer_by_question($this->session->get("user"), 32), 'class="qna"')?>
		<br />
		
		<h4>Anything Else</h4>
		
		<?=form::label('any33', $question[18]->question)?>
		<?=form::input('any33', snsUtil::get_user_answer_by_question($this->session->get("user"), 33), 'class="qna"')?>
		<br />
		
		<p>
		  <?=html::anchor('creative/page_2', 'Previous', array('class' => 'left'))?>
			<?=form::submit('submit','Finish','class="submit right"')?>
		</p>

  </fieldset>
</form>