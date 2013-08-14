<form method="post" action="">  
  <fieldset id="creative">
    
		<h2>
			Client Project Planner
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>
		
		<?=form::label('content25', $question[10]->question)?>
		<?=form::input('content25', snsUtil::get_user_answer_by_question($this->session->get("user"), 25), 'class="qna"')?>
		<br />
		
		<?=form::label('content26', $question[11]->question)?>
		<?=form::input('content26', snsUtil::get_user_answer_by_question($this->session->get("user"), 26), 'class="qna"')?>
		<br />
		
		<?=form::label('content27', $question[12]->question)?>
		<?=form::input('content27', snsUtil::get_user_answer_by_question($this->session->get("user"), 27), 'class="qna"')?>
		<br />
		
		<h4>The Online Presence</h4>
		
		<?=form::label('presence28', $question[13]->question)?>
		<?=form::input('presence28', snsUtil::get_user_answer_by_question($this->session->get("user"), 28), 'class="qna"')?>
		<br />
		
		<?=form::label('presence29', $question[14]->question)?>
		<?=form::input('presence29', snsUtil::get_user_answer_by_question($this->session->get("user"), 29), 'class="qna"')?>
		<br />
		
		<p>
		  <?=html::anchor('creative/page_2', 'Previous', array('class' => 'left'))?>
			<?=form::submit('submit', 'Next', 'class="right"')?>
		</p>


		<!--<h4>The Brand</h4>
		<h4>The Design</h4>
		<h4>The Content</h4>
		<h4>The Online Presence</h4>
		<h4>Anything Else</h4>-->
	
		<?//=form::submit('submit','Finish','class="submit"')?>
	
  </fieldset>
</form>