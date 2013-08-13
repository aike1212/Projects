<?php include('contactSourceCode.php'); ?>
<?php if($errorBit != 0){ ?>
<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 </script>
<div id="Form_Container">
        
            <h2>Contact Form</h2>
        <form action="<?php echo PHPSELF; ?>" method="post" id="Contact_Form"  style="margin:0; padding:0;">
       
 <div class="Form_Text">
                        Fields marked with <span class="required">*</span> are required.
                </div>
                <div class="Form_Full">
                        <label for="NameTxt">Name:<span class="required">*</span></label>
                        <p><input type="text" name="NameTxt" id="NameTxt" value="<?php  echo (isset($_POST["NameTxt"]))? $_POST["NameTxt"] : ""; ?>" /></p>
                </div>
                <div class="Form_Full">
                        <label for="OrganizationTxt">Organization:</label>
                        <p><input type="text" name="OrganizationTxt" id="OrganizationTxt" value="<?php  echo (isset($_POST["OrganizationTxt"]))? $_POST["OrganizationTxt"] : ""; ?>" /></p>
                </div>
                <div class="Form_Full">
                        <label for="AddressTxt">Address:</label>
                        <p><textarea cols="30" rows="2" name="AddressTxt" id="AddressTxt"><?php  echo (isset($_POST["AddressTxt"]))? $_POST["AddressTxt"] : ""; ?></textarea></p>
                </div>
                <div class="Form_Full">
                        <label for="CityTxt">Town/City:</label>
                        <p><input type="text" name="CityTxt" id="CityTxt" value="<?php  echo (isset($_POST["CityTxt"]))? $_POST["CityTxt"] : ""; ?>"/></p>
                </div>
                <div class="Form_Full">
                        <label for="StateTxt">State/Province:</label>
                        <p><input type="text" name="StateTxt" id="StateTxt" value="<?php  echo (isset($_POST["StateTxt"]))? $_POST["StateTxt"] : ""; ?>" /></p>
                </div>
                <div class="clear">
                    <div class="Form_Half">
                            <label for="ZipTxt">Postal/ZIP Code:</label>
                            <p><input type="text" name="ZipTxt" id="ZipTxt" value="<?php  echo (isset($_POST["ZipTxt"]))? $_POST["ZipTxt"] : ""; ?>" /></p>
                    </div>
                    <div class="Form_Half">
                            <label class="center" for="Country">Country:</label>
                            <p>
                                <select name="Country" id="Country">
                                    <option value="USA"<?php if(isset($_POST["Country"]) && $_POST["Country"] == "USA") echo " selected=\"selected\""; ?>>USA</option>
                                    <option value="Mexico"<?php if(isset($_POST["Country"]) && $_POST["Country"] == "Mexico") echo " selected=\"selected\""; ?>>Mexico</option>
                                    <option value="United Kingdom"<?php if(isset($_POST["Country"]) && $_POST["Country"] == "United Kingdom") echo " selected=\"selected\""; ?>>United Kingdom</option>
                                    <option value="US Virgin Islands"<?php if(isset($_POST["Country"]) && $_POST["Country"] == "US Virgin Islands") echo " selected=\"selected\""; ?>>US Virgin Islands</option>
                                </select>
                            </p>
                    </div>
                </div>
                <div class="Form_Full">
                        <label for="EmailTxt">Email Address:<span class="required">*</span></label>
                        <p><input type="text" name="EmailTxt" id="EmailTxt" value="<?php  echo (isset($_POST["EmailTxt"]))? $_POST["EmailTxt"] : ""; ?>" /></p>
                </div>
                <div class="Form_Full">
                        <label for="PhoneNum">Phone:</label>
                        <p><input type="text" name="PhoneNum" id="PhoneNum" value="<?php  echo (isset($_POST["PhoneNum"]))? $_POST["PhoneNum"] : ""; ?>" /></p>
                </div>
                <div class="Form_Full">
                        <label for="FaxNum">Fax:</label>
                        <p><input type="text" name="FaxNum" id="FaxNum" value="<?php  echo (isset($_POST["FaxNum"]))? $_POST["FaxNum"] : ""; ?>" /></p>
                </div>
                <div class="Form_Full">
                        <label for="SubjectTxt">Subject:<span class="required">*</span></label>
                        <p><input type="text" name="SubjectTxt" id="SubjectTxt" value="<?php  echo (isset($_POST["SubjectTxt"]))? $_POST["SubjectTxt"] : ""; ?>" /></p>
                </div>
                <div class="Form_Full">
                        <label for="MessageTxt">Message:</label>
                        <p><textarea cols="30" rows="9" name="MessageTxt" id="MessageTxt"><?php  echo (isset($_POST["MessageTxt"]))? $_POST["MessageTxt"] : ""; ?></textarea></p>
                </div>
                <div style="position:absolute; text-indent:-999em; overflow:hidden;">
                <input type="text" name="email2" />
                <input type="text" name="phone2" />
                </div>
                <br class="clear" />
    <div style=" padding:10px 0 0 125px;">
      <?php
          require_once('recaptchalib.php');
          $publickey = CAPTCHAPUBLICKEY; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
    </div>
                <div class="Form_Submit">
                    <input type="submit" name="Submit-Button" id="Submit-Button" value="Send Request" />
                </div>           
            <!--                          ehhefalkjef;lkajelfkjaelkfj-->
            
        
        </form>
     
</div>        
        <script type="text/javascript">
            var frmvalidator = new Validator("Contact_Form");
            frmvalidator.addValidation("NameTxt","req","Please enter your name");
            
            frmvalidator.addValidation("EmailTxt","req","Please enter your email address.");
            frmvalidator.addValidation("EmailTxt","email","Please enter a valid email.");
            
            frmvalidator.addValidation("SubjectTxt","req","Please enter a subject.");

			frmvalidator.addValidation("recaptcha_response_field","req","Please enter validation code.");
        </script>

<?php } ?>