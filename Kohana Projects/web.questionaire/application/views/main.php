<form method="post" action="">
  <fieldset>
	
	<?if ($this->input->post('code')) {?> 
		<div id="errors">
			<?foreach ($this->session->get("message") as $error):?>
				<?="$error<br />"?>
			<?endforeach?>
		</div>
	<?}?>
	
	<?=form::label('code', 'ENTER CODE:')?>
	<?=form::input('code', $this->input->post('code'))?>
	<?=form::submit('submit', 'Login')?>
	
  </fieldset>
</form>

<p class="right">
  Don't have a code? Click <a href="registration">here</a> to get one now!
</p>
