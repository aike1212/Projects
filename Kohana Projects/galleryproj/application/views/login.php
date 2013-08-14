<?=View::factory("header_data")->render(TRUE)?>

<?=form::open('login')?>
  <div style="width:317px; margin-bottom:1px; margin-top:20px; margin-left:20px">
    <div class="art-BlockHeader">
      <div class="l"></div>
      <div class="r"></div>
      <div class="art-header-tag-icon">
        <div class="t">SIGN IN</div>
      </div>
    </div>
  </div>
  <fieldset style="width:300px; border:1px solid rgb(200,200,200); background-color:gray; margin-left:20px" >
    <div>
      <ul>
        <li>
          <br/>
          <?=form::label('username','Username:','class="login"')?>
          <?=form::input("user",$this->input->post("user"),'style="width:170px"')?>
        </li>
        <li>
          <?=form::label('password','Password:','class="login"')?>
          <?=form::password("pass",$this->input->post("pass"),'style="width:170px"')?>
        </li>
        <li style="text-align:center">
          <span class="art-button-wrapper">
            <span class="l"> </span>
            <span class="r"> </span>
            <?=form::submit("login","Login",'style="margin-left:100px" class="art-button" onClick="parent.Shadowbox.close();"')?><br/>
          </span>
        </li>
        <li>
           <?=html::anchor("register","Sign Up",array('style'=>'font-size:14px; float:right'))?>
        </li>
      </ul>
    </div>
  </fieldset>
<?=form::close()?>