<?php
	$expire = time()+604800;
	setcookie("no_splash", "1", $expire);
?>

<html>	

	<link href="styles/styles.css" rel="stylesheet" type="text/css" />

	<body id="splash_body">
		<div id="splash_container" class="clearfix">

			<img src="images/img_logo-big.png" alt="LOGO" style="margin-bottom:25px" />
			
			<p class="splash_content">	
				You Must Be 18 to view this page... by clicking "i'm 18" you are stating you are 18... If you are not 18 do not enter
				the site we will not be held responsible for you looking at our site... if you are not 18 please click the "underage"
				button now...
			</p>
			
			<p class="splash_content">Thank You,</p>
			
			<p class="splash_content">SBG Staff</p>
			
			<a id="splash_confirm" href="index.php"></a>
			<a id="splash_cancel" href="http://google.com"></a>
		</div>
	</body>
</html>