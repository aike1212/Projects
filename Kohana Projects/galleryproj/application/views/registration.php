<h1 style="margin-left: 30px;">Registration Form</h1>

<?=form::open()?>
  <fieldset style="width:620px;">
    <div>
      <ul>
        <li class="reg">
          <label class="req">*</label><br/>
          <?=form::label("uname","Username:","class=\"cLabel\"")?>
          <?=form::input("username",$this->input->post("username"),"class=\"cContent\"")?>
        </li>
        <li class="reg">
          <label class="req">*</label><br/>
          <?=form::label("pword","Password:","class=\"cLabel\"")?>
          <?=form::password("password",$this->input->post("password"),"class=\"cContent\"")?>
        </li>
        <li class="reg">
          <label class="req">*</label><br/>
          <?=form::label("cpword","Confirm Password:","class=\"cLabel\"")?>
          <?=form::password("cpassword",$this->input->post("cpassword"),"class=\"cContent\"")?>
        </li>

        <br />
        <br />
        <br />

        <h2><u>User Information</u></h2>

        <li class="reg">
          <label class="req">*</label><br/>
          <?=form::label("name","Given Name:","class=\"cLabel\"")?>
          <?=form::input("first_name",$this->input->post("first_name"),"class=\"cContent\"")?>
        </li>
        <li class="reg">
          <label class="req">*</label><br/>
          <?=form::label("familyname","Last Name:","class=\"cLabel\"")?>
          <?=form::input("last_name",$this->input->post("last_name"),"class=\"cContent\"")?>
        </li>
        <li class="reg">
          <label class="req">*</label><br/>
          <?=form::label("email_add","Email:","class=\"cLabel\"")?>
          <?=form::input("email",$this->input->post("email"),"class=\"cContent\"")?>
        </li>
        <li class="reg">
          <?=form::label("birth","Birthday:","class=\"cLabel\"")?>
          <?=form::input("birthday",$this->input->post("birthday"),"class=\"cContent\"")?><br/>
        </li>
        <li class="reg">
          <?=form::label("number","Contact Number:","class=\"cLabel\"")?>
          <?=form::input("contact",$this->input->post("contact"),"class=\"cContent\"")?><br/>
        </li>

        <p class="capt"><?=$captcha = new Captcha();
          if($captcha->invalid_count()>49)
              exit('Bye! Stupid bot.');?>
        </p>

        <li class="reg">
          <label class="req">*</label><br/><br/>
          <?=form::label("captcha","Input Code:","class=\"cCaptLabel\"")?>
          <?=form::input("code",$this->input->post("code"),"class=\"cCapt\"")?>
        </li>

        <li class="reg">
          <label class="req">*</label><br/>
          <input type="checkbox" id="agree"/>
          <label for="agree">I agree to the terms and conditions: </label>
        </li>

        <p>Fields with asterisks(<label class="req">&nbsp;*&nbsp;</label>) are required fields</p><br/>
        <li class="reg">
          <?form::hidden("","")?>
          <?=form::submit("ok","Submit")?>
        </li>
      </ul>
    </div>
  </fieldset>
<?=form::close()?>