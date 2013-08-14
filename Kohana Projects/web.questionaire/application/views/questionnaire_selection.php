<div id="questionnaire_select">
	
	<?if ($this->session->get('message') != null) {?>
		<div id="confirm">
			<?=$this->session->get_once('message')?>
		</div>
	<?}?>
	
	<h2>Select a Questionnaire
		<?=html::anchor('logout', 'Logout', array('class' => 'right logout'))?>
		<span class="right">Welcome <?=$this->session->get("logged_in_user")?> </span>
	</h2>
	
	<?=html::anchor('request', '', array('id' => 'question1'))?>
	
	<?if ($this->session->get("has_set_a") == '1') {?>
		<?=html::anchor('creative', '', array('id' => 'question2'))?>
	<?} else {?>
		<span id="question2_disabled"></span>
	<?}?>
	
	<p>** Note: You can only take Questionnaire Set B after taking Questionnaire Set A **</p>
</div>
	
