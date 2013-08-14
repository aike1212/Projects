<div id="profile">
  
	<!-- Displays confirmation message after saving changes -->
	<?if ($this->session->get('message') != null) {?>	
		<div id="confirm">
			<?=$this->session->get_once('message')?>
		</div>
	<?}?>
	
	<h2>
		Profile Viewer
	  <?=html::anchor('admin_page', 'Back', array('class'=>'right back'))?>
	</h2>
		
	<div id="links">	
		<?=html::anchor("view_profile/user/{$user->id}", "User Information", array('class'=>'active'))?>
		<?=html::anchor("view_profile/q1/{$user->id}", "Request A Quote")?>
		<?=html::anchor("view_profile/q2/{$user->id}", "Creative Brief Questionnaire")?>
	</div>
	
	<form method="post" action="">
	
		<p>This is <span><?=$user->first_name . " " . $user->last_name ."'s"?></span> personal information</p>
	  
		<fieldset>
		  <?=form::label('first_name', 'First Name')?>
			<?=form::input('first_name', $user->first_name)?>
			<br />
			
			<?=form::label('last_name', 'Last Name')?>
			<?=form::input('last_name', $user->last_name)?>
			<br />
			
			<?=form::label('email', 'Email')?>
			<?=form::input('email', $user->email)?>
			<br />
			
			<?=form::label('company', 'Company')?>
			<?=form::input('company', $user->company)?>
			<br />
			
			<?=form::label('position', 'Position')?>
			<?=form::input('position', $user->position)?>
			<br />
			
			<?=form::label('schedule', 'Online Schedule')?>
			<?=form::input('schedule', $user->schedule)?>
			<br />
			
			<?=form::label('contact', 'Contact Number')?>
			<?=form::input('contact', $user->contact)?>
			<br />
			
			<?=form::label('status', 'Status')?>
			<?$selection = array('active'=>'active', 'inactive'=>'inactive')?>
			<?=form::dropdown('status', $selection, $user->status == 'active' ? 'active' : 'inactive')?>
			<br />
			
			<?=form::submit('update','Update','class="update"')?>
		</fieldset>
		
	</form>
</div>