<h1 style="margin-left: 30px; margin-bottom: 20px;">Change Password</h1>

<?=html::stylesheet("style/style.css")?>

<div>
    <?=form::open()?>
    <fieldset style="width:620px;">
        <ul>
            <li class="reg">
                <?=form::label("username","Username:","class=\"cLabel\"")?>
                <?=form::input("user_name",$usr->username,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("old_pass","Old Password:","class=\"cLabel\"")?>
                <?=form::password("old_password",$this->input->post("old_pass"),"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("new_pass","New Password:","class=\"cLabel\"")?>
                <?=form::password("new_password",$this->input->post("new_pass"),"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("confirm","Confirm New Password:","class=\"cLabel\"")?>
                <?=form::password("confirm_pass",$this->input->post("confirm_pass"),"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::hidden("user_id",$usr->id)?>
                <?=form::submit("save","Save","class=\"cSave\"")?>
            </li>
        </ul>
    </fieldset>
    <?=form::close()?>
</div>

<p style="float:right; margin-right:20px;"><?=html::anchor("admin/profile","Back to user profile")?>