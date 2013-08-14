<div id="view_questions">

    <?=$this->session->get("message")?>

	<h2>
		Administrator Page
		<?=html::anchor('admin_logout', 'Logout', array('class'=>'right'))?>
	  <span class="right">Welcome  <?=$this->session->get("logged_in_user")?></span>
	</h2>
	
	<ul>
	  <li><?=html::anchor("admin_page", "Admin Home")?></li>
		<li class="active"><?=html::anchor('admin_page/view_question', 'View Questions')?></li>
		<li><?=html::anchor('admin_page/add_question', 'Add a Question')?></li>
	</ul>
	
	<form method="get" action="">
		<fieldset>
		
			<?
				$location_choices = array (
				  '' => '',
					'basic' => 'The Basics',
					'need' => 'What You Need',
					'brand' => 'The Brand',
					'design' => 'The Design',
					'content' => 'The Content',
					'presence' => 'The Online Presence',
					'any' => 'Anything Else'
				);
				
				$questionnaire_choices = array (
				  '' => '',
					'request_a_quote' => 'Request a Quote',
					'client_project_planner' => 'Creative Brief Questionnaire'
				);
			?>
			
			<?=form::label('location', 'Location')?>			
			<?=form::dropdown('location_choice', $location_choices, $this->input->get('location_choice'), 'basic')?>
			
			<?=form::label('questionnaire', 'Questionnaire')?>
			<?=form::dropdown('questionnaire_choice', $questionnaire_choices, $this->input->get('questionnaire_choice'), 'questionnaire1')?>
			<?=form::submit('filter', 'Apply Filter', 'class="filter"')?>
		</fieldset>
	</form>
	
	<table>
		<? if (count($questions) != null) {?>
		  <tr>
				<th>ID</th>
				<th>Question</th>
				<th>Location</th>
				<th>Questionnaire</th>
			</tr>
			<?$ctr = 0?>
			<?foreach($questions as $question) {?>
				<?$ctr++?>
				<?($ctr % 2) == 0 ? $row = 'even' : $row = null ?>
				<tr class=<?=$row?>>
					<td><?=$question->q_id?></td>
					<td><?=$question->question?></td>
					<td><?=$question->location?></td>
					<td><?=$question->questionnaire?></td>
				</tr>
			<?}?>
		<?} else {?>
			<p>No results.</p>
		<?}?>
	</table>
</div>