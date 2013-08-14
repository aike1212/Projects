<div id="admin">
  <h2>
		Administrator Page
		<?=html::anchor('admin_logout', 'Logout', array('class'=>'right'))?>
	  <span class="right">Welcome  <?=$this->session->get("logged_in_user")?></span>
	</h2>
	
	<ul>
	  <li class = "active"><?=html::anchor("admin_page", "Admin Home")?></li>
		<li><?=html::anchor('admin_page/view_question', 'View Questions')?></li>
		<li><?=html::anchor('admin_page/add_question', 'Add a Question')?></li>
	</ul>
	
	<p>** Click the name of a user to view and edit his/her profile. **</p>
	
	<form method="get" action="">
		<fieldset>
		  <?=form::label('filter', 'Filter Select')?>
			
			<?
				$choices = array (
					'name' => 'Search a Name',
					'position' => 'Search a Position',
					'company' => 'Search a Company',
					'status' => 'Search by Status'
				)
			?>
			
			<?=form::dropdown('choice', $choices, $this->input->get('choice'), 'name')?>
			<?=form::input('search_bar', $this->input->get('search_bar'))?>
			<?=form::submit('search', 'Search', 'class="search"')?>
		</fieldset>
	</form>
	
	<?if (count($user) != 0) {?>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Company</th>
				<th>Position</th>
				<th>Schedule</th>
				<th>Last Login</th>
				<th>Status</th>
			</tr>
			
			<?$ctr = 0?>
			
			<?foreach($user as $user_info) {?>
				<?$ctr++?>
				<?($ctr % 2) == 0 ? $row = 'even' : $row = null ?>
				<tr class=<?=$row?>>
					<td><?=$user_info->id?></td>
					<td class="name"><?=html::anchor('view_profile/user/'.$user_info->id, $user_info->first_name . " " . $user_info->last_name)?></td>
					<td><?=$user_info->company?></td>
					<td><?=$user_info->position?></td>
					<td><?=$user_info->schedule?></td>
					<td><?=$user_info->last_login != null ? date("Y-m-d",$user_info->last_login) : '-'?></td>
					
					<?$user_info->status == 'active' ? $status_class = 'green' : $status_class = 'red'?>
					
					<td class=<?=$status_class?>><?=$user_info->status?></td>
				</tr>
			<?}?>
		</table>
		
	<?} else {?>
		<p class="no_result debug">No results. Check the spelling of the searched word or the filter.</p>
	<?}?>
	
</div>