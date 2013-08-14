<div id="profile">
  <h2>
		Profile Viewer
	  <?=html::anchor('admin_page', 'Back', array('class'=>'right back'))?>
	</h2>
		
	<div id="links">	
		<?=html::anchor("view_profile/user/{$user->id}", "User Information")?>
		<?=html::anchor("view_profile/q1/{$user->id}", "Request A Quote")?>
		<?=html::anchor("view_profile/q2/{$user->id}", "Creative Brief Questionnaire", array('class'=>'active'))?>
	</div>
	
	<form method="post" action="">
		
		<p>This is <span><?=$user->first_name . " " . $user->last_name ."'s"?></span> answers to the questionnaire "Creative Brief Questionnaire"</p>
		
		<fieldset>
		  <h3>The Brand</h3>
		
		  <?=form::label('brand15', $question[14]->question, 'class="question"')?>
			<?=form::input('brand15', snsUtil::get_user_answer_by_question($user->id, $question[14]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('brand16', $question[15]->question, 'class="question"')?>
			<?=form::input('brand16', snsUtil::get_user_answer_by_question($user->id, $question[15]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('brand17', $question[16]->question, 'class="question"')?>
			<?=form::input('brand17', snsUtil::get_user_answer_by_question($user->id, $question[16]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('brand18', $question[17]->question, 'class="question"')?>
			<?=form::input('brand18', snsUtil::get_user_answer_by_question($user->id, $question[17]->q_id), 'class="answer"')?>
			<br />
			
			<h3>The Design</h3>
		
		  <?=form::label('design19', $question[18]->question, 'class="question"')?>
			<?=form::input('design19', snsUtil::get_user_answer_by_question($user->id, $question[18]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('design20', $question[19]->question, 'class="question"')?>
			<?=form::input('design20', snsUtil::get_user_answer_by_question($user->id, $question[19]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('design21', $question[20]->question, 'class="question"')?>
			<?=form::input('design21', snsUtil::get_user_answer_by_question($user->id, $question[20]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('design22', $question[21]->question, 'class="question"')?>
			<?=form::input('design22', snsUtil::get_user_answer_by_question($user->id, $question[21]->q_id), 'class="answer"')?>
			<br />
			
			<h3>The Content</h3>
		
		  <?=form::label('content23', $question[22]->question, 'class="question"')?>
			<?=form::input('content23', snsUtil::get_user_answer_by_question($user->id, $question[22]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('content24', $question[23]->question, 'class="question"')?>
			<?=form::input('content24', snsUtil::get_user_answer_by_question($user->id, $question[23]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('content25', $question[24]->question, 'class="question"')?>
			<?=form::input('content25', snsUtil::get_user_answer_by_question($user->id, $question[24]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('content26', $question[25]->question, 'class="question"')?>
			<?=form::input('content26', snsUtil::get_user_answer_by_question($user->id, $question[25]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('content27', $question[26]->question, 'class="question"')?>
			<?=form::input('content27', snsUtil::get_user_answer_by_question($user->id, $question[26]->q_id), 'class="answer"')?>
			<br />
			
			<h3>The Online Presence</h3>
		
		  <?=form::label('presence28', $question[27]->question, 'class="question"')?>
			<?=form::input('presence28', snsUtil::get_user_answer_by_question($user->id, $question[27]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('presence29', $question[28]->question, 'class="question"')?>
			<?=form::input('presence29', snsUtil::get_user_answer_by_question($user->id, $question[28]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('presence30', $question[29]->question, 'class="question"')?>
			<?=form::input('presence30', snsUtil::get_user_answer_by_question($user->id, $question[29]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('presence31', $question[30]->question, 'class="question"')?>
			<?=form::input('presence31', snsUtil::get_user_answer_by_question($user->id, $question[30]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('presence32', $question[31]->question, 'class="question"')?>
			<?=form::input('presence32', snsUtil::get_user_answer_by_question($user->id, $question[31]->q_id), 'class="answer"')?>
			<br />
			
			<h3>Anything Else</h3>
		
		  <?=form::label('any33', $question[32]->question, 'class="question"')?>
			<?=form::input('any33', snsUtil::get_user_answer_by_question($user->id, $question[32]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::submit('update','Update','class="update"')?>
		</fieldset>
		
	</form>
</div>