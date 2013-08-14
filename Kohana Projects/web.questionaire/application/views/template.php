<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <?=View::factory("styles_and_scripts")->render()?>

  <body>
    
	<h1>
	  Web Questionaire
	  <span id="header"> &nbsp; </span>
  </h1>
	
	<div id="wrapper" class="spacer">
	  <?=$content?>
	</div>
	
	<div id="footer">
	  Copyright &#169; All Rights Reserved | Powered by: <span>Kohana</span> | Designed by: <?=html::anchor('http://www.bcweblab.com', 'BCWebLab')?>
    </div>

  </body>

</html>