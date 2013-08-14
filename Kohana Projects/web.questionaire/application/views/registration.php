<form method="post" action="">
  <fieldset class="spacer">
	  
		<!-- Displays validation errors -->
	  <?if ($this->input->post()) {?> 
                <div id="errors">
                        <?foreach ($this->session->get_once("message") as $error):?>
                                <?="$error<br />"?>
                        <?endforeach?>
                </div>
		<?}?>
	
		<h2>Registration Form</h2>
		<p>Fields with (*) are required fields.</p>
		
		<span class="left required">*</span>
		<?=form::label('last_name', 'Last Name')?>
		<?=form::input('last_name', $this->input->post('last_name'))?>
		<br />
		
		<span class="left required">*</span>
		<?=form::label('first_name', 'First Name')?>
		<?=form::input('first_name', $this->input->post('first_name'))?>
		<br />
		
		<span class="left required">*</span>
		<?=form::label('email', 'Email')?>
		<?=form::input('email', $this->input->post('email'))?>
		<br />
		
		<span class="left required">*</span>
		<?=form::label('position', 'Position')?>
		<?=form::input('position', $this->input->post('position'))?>
		<br />
		
		<span class="left required">*</span>
		<?=form::label('company', 'Company Name')?>
		<?=form::input('company', $this->input->post('company'))?>
		<br />
		
		<span class="left required">*</span>
		<?=form::label('schedule', 'Online Schedule')?>
		<?=form::input('schedule', $this->input->post('schedule'), 'style="margin-bottom: 0px"')?>
		<br />
		<span class="right ol_sched">(e.g. Monday - Friday 09:00 - 18:00 GMT +8:00 / e.g. M - F 9:00am - 5:00pm UTC -8)</span>
		<br />
		
		<?=form::label('contact', 'Contact Number', 'class="optional" style="margin-top: 40px"')?>
		<?=form::input('contact', $this->input->post('contact'), 'style="margin-top: 45px"')?>	
		<br />
		
		<?=html::anchor('main', 'Cancel', array('class' => 'right'))?>
		<?=form::submit('register', 'Register', 'class="right register"')?>
  </fieldset>
</form>