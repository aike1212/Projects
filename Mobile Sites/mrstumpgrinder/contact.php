<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Mr. Stump Grinder | Contact Us</title>
    <meta http-equiv="Cache-Control" content="max-age=200" />
    <link rel="stylesheet" type="text/css" href="fonts.css" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script type="text/javascript" src="gen_validatorv31.js"></script>
  </head>
  
  <body>
    <?php include('header.php'); ?>

      <!-- Content -->
      <div id="content" class="center">  
        <h1 class="center">Contact Us</h1>

        <?php include('../includes/contactBox.php'); ?>

        <p>You can submit a support request by providing us with your name and email. We'll get back to you within 24 hours.</p>

        <form action="formtoemailpro.php" method="post" id="Contact_Form" class="center">
          <p><strong>Name</strong><br />
             <input type="text" name="name" id="name" class="fieldwidth" />
          </p>

          <p><strong>Email</strong><br />
             <input type="text" name="email" id="email" class="fieldwidth" />
          </p>

          <p><strong>Comments</strong><br />
             <textarea rows="3" cols="20" name="comments" id="comments" class="fieldwidth"></textarea>
          </p>

          <p><input type="submit" class="submit" value="Send Request" /></p>
        </form>

        <script type="text/javascript">
          var frmvalidator = new Validator("Contact_Form");
          frmvalidator.addValidation("name","req","Please enter your name");
          
          frmvalidator.addValidation("email","req","Please enter your email address.");
          frmvalidator.addValidation("email","email","Please enter a valid email.");
          
          frmvalidator.addValidation("comments","req","Please enter your comments or questions.");
        </script>

      </div>
    </div> <!-- Wrapper -->
      
    <?php include('footer.php'); ?>
  </body>
</html>