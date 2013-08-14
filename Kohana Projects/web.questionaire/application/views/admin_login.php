<form method="post" action="">
	<fieldset id="admin_login">
		<div>
			<?=form::label('username', 'Username')?>
			<?=form::input('username', $this->input->post('username'))?>
			<br/>
			
			<?=form::label('password', 'Password')?>
			<?=form::password('password', $this->input->post('password'))?>
			<br />
		
		</div>
		<?=html::anchor('main', 'Cancel', array('class' => 'right'))?>
		<?=form::submit('login', 'Login', 'class="right login"')?>
	</fieldset>
</form>