<h1 style="margin-left: 30px; margin-bottom: 20px;">Edit User Profile</h1>

<?=html::stylesheet("style/style.css")?>

<div>
    <?=form::open()?>
    <fieldset style="width:620px;">
        <ul>
            <li class="reg">
               <?=form::label("user","Username:","class=\"cLabel\"")?>
               <?=form::input("user_name",$usr->username,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("first_name","First Name:","class=\"cLabel\"")?>
                <?=form::input("firstname",$usr->first_name,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("last_name","Last Name:","class=\"cLabel\"")?>
                <?=form::input("lastname",$usr->last_name,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("e_mail","E-mail:","class=\"cLabel\"")?>
                <?=form::input("email",$usr->email,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("birthday","Birthday:","class=\"cLabel\"")?>
                <?=form::input("birth",$usr->birthday,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::label("contact","Contact No:","class=\"cLabel\"")?>
                <?=form::input("contact_no",$usr->contact_number,"class=\"cContent\"")?>
            </li>
            <li class="reg">
                <?=form::hidden("user_id",$usr->id)?>
                <?=form::submit("save","Save","class=\"cSave\"")?>
            </li>
        </ul>
    </fieldset>
    <?=form::close()?>
</div>

<p style="float:right; margin-right:20px;"><?=html::anchor("user/profile","Back to user profile")?>