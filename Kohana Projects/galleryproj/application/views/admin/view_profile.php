<?=form::open()?>

<p style="color:#33FF33; margin-bottom:30px; text-align:center; font-size:14px;">
  <strong><?=form::label("message",$this->session->get_once("message"))?></strong>
</p>

<?=html::stylesheet("style/style.css")?>

<h1 style="margin-left: 30px;">User Profile<br/>
    <span class="about">Contains information about the user.</span>
</h1><br/>

<span class="profile_pic">
  <?=html::anchor("images/{$usr->profile_picture}", html::image(array('src'=>"images/{$usr->profile_picture}",
    'width'=>'100', 'height'=>'150'),array('alt'=>'No Image..', 'class'=>'gallery')))?>
</span>

    <fieldset class="view_profile">
        <div>
            <ul>
                <h4><u>Information</u></h4>

                <li class="reg">
                    <strong><?=form::label("user","Username:",'class="profile_info"')?></strong>
                    <?=form::label("user_name",$usr->username)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("name","Given Name:",'class="profile_info"')?></strong>
                    <?=form::label("first_name",$usr->first_name)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("familyname","Last Name:",'class="profile_info"')?></strong>
                    <?=form::label("last_name",$usr->last_name)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("email_add","Email:",'class="profile_info"')?></strong>
                    <?=form::label("email",$usr->email)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("birth","Birthday:",'class="profile_info"')?></strong>
                    <?=form::label("birthday",$usr->birthday)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("number","Contact Number:",'class="profile_info"')?></strong>
                    <?=form::label("contact",$usr->contact_number)?>
                </li>
            </ul>
        </div>
    </fieldset>

<?=form::open()?>
    <fieldset class="view_profile">
        <div>
            <ul>
                <h4><u>Statistics</u></h4>

                <li class="reg">
                    <strong><?=form::label("date_created","Date Created:",'class="profile_info"')?></strong>
                    <?=form::label("date",$usr->date_created)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("number_of_logins","No. of Logins:",'class="profile_info"')?></strong>
                    <?=form::label("logins",$usr->logins)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("last_login","Last Login:",'class="profile_info"')?></strong>
                    <?=form::label("last",date("Y-m-d",$usr->last_login))?>
                </li>
                <li class="reg">
                    <strong><?=form::label("status","Status:",'class="profile_info"')?></strong>
                    <?=form::label("stat",$usr->status)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("images","No. of Images:",'class="profile_info"')?></strong>
                    <?=form::label("imgs",$usr->images)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("active_imgs","Active Images:",'class="profile_info"')?></strong>
                    <?=form::label("active_images",$active_ctr)?>
                </li>
                <li class="reg">
                    <strong><?=form::label("inactive_imgs","Inactive Images:",'class="profile_info"')?></strong>
                    <?=form::label("inactive_images",$inactive_ctr)?>
                </li>
            </ul>
        </div>
    </fieldset>

<p class="edit_profile">
  <?=html::anchor("admin/edit_profile","Edit Profile")?>
  <span>&nbsp|&nbsp</span>
  <?=html::anchor("admin/change_password","Change Password")?>
</p>