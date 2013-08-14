<div id="profile">
  <h2>
		Profile Viewer
	  <?=html::anchor('admin_page', 'Back', array('class'=>'right back'))?>
	</h2>
		
	<div id="links">	
		<?=html::anchor("view_profile/user/{$user->id}", "User Information")?>
		<?=html::anchor("view_profile/q1/{$user->id}", "Request A Quote", array('class'=>'active'))?>
		<?=html::anchor("view_profile/q2/{$user->id}", "Creative Brief Questionnaire")?>
	</div>
	
	<form method="post" action="">
		
		<p>This is <span><?=$user->first_name . " " . $user->last_name ."'s"?></span> answers to the questionnaire "Request a Quote"</p>
	  
		<fieldset>
			<h3>The Basic</h3>
		
		  <?=form::label('basic1', $question[0]->question, 'class="question"')?>
			<?=form::input('basic1', snsUtil::get_user_answer_by_question($user->id, $question[0]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic2', $question[1]->question, 'class="question"')?>
			<?=form::input('basic2', snsUtil::get_user_answer_by_question($user->id, $question[1]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic3', $question[2]->question, 'class="question"')?>
			<?=form::input('basic3', snsUtil::get_user_answer_by_question($user->id, $question[2]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic4', $question[3]->question, 'class="question"')?>
			<?=form::input('basic4', snsUtil::get_user_answer_by_question($user->id, $question[3]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic5', $question[4]->question, 'class="question"')?>
			<?=form::input('basic5', snsUtil::get_user_answer_by_question($user->id, $question[4]->q_id), 'class="answer"')?>
			<br />
			
		  <?=form::label('basic6', $question[5]->question, 'class="question"')?>
			<?=form::input('basic6', snsUtil::get_user_answer_by_question($user->id, $question[5]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic7', $question[6]->question, 'class="question"')?>
			<?=form::input('basic7', snsUtil::get_user_answer_by_question($user->id, $question[6]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic8', $question[7]->question, 'class="question"')?>
			<?=form::input('basic8', snsUtil::get_user_answer_by_question($user->id, $question[7]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic9', $question[8]->question, 'class="question"')?>
			<?=form::input('basic9', snsUtil::get_user_answer_by_question($user->id, $question[8]->q_id), 'class="answer"')?>
			<br />
			
			<?=form::label('basic10', $question[9]->question, 'class="question"')?>
			<?=form::input('basic10', snsUtil::get_user_answer_by_question($user->id, $question[9]->q_id), 'class="answer"')?>
			<br />
			
			<h3>What You Need</h3>
			
			<? // Choices for question 11
				$need_1_selection = array(
				  ' ',
					'Bulk uploading of products',
					'Shopping cart',
					'Inventory management',
					'Online payment'
				)
			?>
			<?=form::label('need11', $question[10]->question, 'class="question"')?>
			<?=form::dropdown('need11', $need_1_selection, snsUtil::question_11_choice_picker(snsUtil::get_user_answer_by_question($user->id, $question[10]->q_id), 2))?>
			<br />
			
			<?=form::label('need12', $question[11]->question, 'class="question"')?>
			<?=form::input('need12', snsUtil::get_user_answer_by_question($user->id, $question[11]->q_id), 'class="answer"')?>
			<br />
			
			<? // Choices for question 13
				$need_3_selection = array(
					' ',
					'CMS - website editing',
					'News/article posting',
					'Home page: featured content slideshow',
					'Product catalogue + search',
					'Upload/download section',
					'Product reviews',
					'Gallery slideshow',
					'Events &amp; calendar',
					'RSS feeds',
					'Newsletters',
					'Registration and login',
					'Forum',
					'Website search'
				)
			?>
			
			<?=form::label('need13', $question[12]->question, 'class="question"')?>
			<?=form::dropdown('need13', $need_3_selection, snsUtil::question_13_choice_picker(snsUtil::get_user_answer_by_question($user->id, $question[12]->q_id), 2))?>
			<br />
			
			<?=form::label('need14', $question[13]->question, 'class="question"')?>
			<?=form::input('need14', snsUtil::get_user_answer_by_question($user->id, $question[13]->q_id), 'class="answer"')?>
			<br />
					
			<?=form::submit('update','Update','class="update"')?>
		</fieldset>
		
	</form>
</div>