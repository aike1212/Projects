<form method="post" action="">  
  
	<fieldset id="request">
		
		<h2>
			Request A Quote
			<?=html::anchor('questionnaire_selection', 'Back', array('class' => 'right back'))?>
		</h2>

		<h4>What You Need</h4>
				
		<?=form::label('need11', $question[10]->question)?>

		<? // Choices for question 11
			$q11_selection = array(
				'',
				'Bulk uploading of products',
				'Shopping cart',
				'Inventory management',
				'Online payment'
			);
		?>
		
		<?=form::dropdown('need11', $q11_selection, snsUtil::question_11_choice_picker(snsUtil::get_user_answer_by_question($this->session->get("user"), 11), 2))?>			
		<br />
		
		<?=form::label('need12', $question[11]->question)?>		
		<?=form::input('need12', snsUtil::get_user_answer_by_question($this->session->get("user"), 12), "class=qna")?>
		<br />
		
		<?=form::label('need13', $question[12]->question)?>

		<? // Choices for question 13
			$q13_selection = array(
				'',
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
			);
		?>
		
		<?=form::dropdown('need13', $q13_selection, snsUtil::question_13_choice_picker(snsUtil::get_user_answer_by_question($this->session->get("user"), 13), 2))?>
		<br />
		
		<?=form::label('need14', $question[13]->question)?>		
		<?=form::input('need14', snsUtil::get_user_answer_by_question($this->session->get("user"), 14), "class=qna")?>
		<br />
		
		<p>
		  <?=html::anchor('request/page_2', 'Previous', array('class' => 'left'))?>
			<?=form::submit('submit','Finish','class="submit right"')?>
		</p>

		
  </fieldset>
	
</form>