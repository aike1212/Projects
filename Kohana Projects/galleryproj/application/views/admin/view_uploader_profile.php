<?=html::stylesheet("style/style.css")?>

<p style="color:#FF3333; margin-bottom:30px; text-indent: 30px;">
  <strong><?=$this->session->get_once("message")?></strong>
</p>

<h1 style="margin-left: 30px;">User Profile<br/>
    <span class="about">Contains information about the user.</span>
</h1><br/>

<span class="profile_pic">
  <?=html::anchor("images/{$uploader->profile_picture}", html::image(array('src'=>"images/{$uploader->profile_picture}",
    'width'=>'100', 'height'=>'150'),array('alt'=>'No Image..', 'class'=>'gallery')))?>
</span>

<?=form::open()?>
    <fieldset class="view_profile">
        <div>
            <ul>
                <h4><u>Information</u></h4>

                <li class="reg">
                    <strong><?=form::label("user","Username:",'class="profile_info"')?></strong>
                    <?=form::label("user_name",$uploader->username)?>
                </li>

                <li class="reg">
                    <strong><?=form::label("name","Given Name:",'class="profile_info"')?></strong>
                    <?=form::label("first_name",$uploader->first_name)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("familyname","Last Name:",'class="profile_info"')?></strong>
                    <?=form::label("last_name",$uploader->last_name)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("email_add","Email:",'class="profile_info"')?></strong>
                    <?=form::label("email",$uploader->email)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("birth","Birthday:",'class="profile_info"')?></strong>
                    <?=form::label("birthday",$uploader->birthday)?><br/>
                </li>
                <li class="reg">
                    <strong><?=form::label("number","Contact Number:",'class="profile_info"')?></strong>
                    <?=form::label("contact",$uploader->contact_number)?><br/>
                    <?=form::hidden("user", $uploader->id)?>
                </li>
            </ul>
        </div>
    </fieldset>
<p class="edit_profile"><p>

<?=form::open()?>
    <fieldset class="view_profile">
        <div>
            <ul>
                <h4><u>Statistics</u></h4>

                <li class="reg">
                    <strong><?=form::label("date_created","Date Created:",'class="profile_info"')?></strong>
                    <?=form::label("date",$uploader->date_created)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("number_of_logins","No. of Logins:",'class="profile_info"')?></strong>
                    <?=form::label("logins",$uploader->logins)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("last_login","Last Login:",'class="profile_info"')?></strong>
                    <?=form::label("last",date("Y-m-d",$uploader->last_login))?>
                </li>
                <li class="reg">
                    <strong><?=form::label("status","Status:",'class="profile_info"')?></strong>
                    <?=form::label("stat",$uploader->status)?><br/>
                </li>
                <li class="reg">
                    <strong><?=form::label("images","No. of Images:",'class="profile_info"')?></strong>
                    <?=form::label("imgs",$uploader->images)?><br/>
                </li>
                <li class="reg">
                    <strong><?=form::label("active_imgs","Active Images:",'class="profile_info"')?></strong>
                    <?=form::label("active_images",$user_active_images)?><br/>
                </li>
                <li class="reg">
                    <strong><?=form::label("inactive_imgs","Inactive Images:",'class="profile_info"')?></strong>
                    <?=form::label("inactive_images",$user_inactive_images)?><br/>
                </li>
            </ul>
        </div>
    </fieldset>

<fieldset style="margin-left:30px; margin-right:30px; margin-top:40px;">
  <p style="margin-left: 30px">
    <?=form::checkbox('deactivate_all','deactivate_all_pics')?>
    <strong><?=form::label('deactivate', 'Deactivate all images of this user.')?></strong><br/>
    <?=form::checkbox('activate_all','activate_all_pics')?>
    <strong><?=form::label('activate', 'Activate all images of this user.')?></strong>
  </p>
  <?=form::hidden('uploader_id', $uploader->id)?>
  <span style="margin-left:50px"><?=form::submit('ok', 'OK')?></span>
</fieldset>

<p class="edit_profile">
  <?form::hidden("usr_id", $uploader->id)?>
  <?=html::anchor("admin/profile/uploader_photos/{$uploader->id}","View this user's images")?>
  <span>&nbsp|&nbsp</span>
  <?=html::anchor("admin/manage_photos","Back to image list")?>
</p>
