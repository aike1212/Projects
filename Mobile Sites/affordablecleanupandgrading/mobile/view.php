<?php header("Content-Type: application/xhtml+xml");
header ("Cache-Control: max-age=200 "); ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Affordable Construction Clean Up | Gallery</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="view">
<p><a href="gallery.php?page=<?php echo $_GET['page'] . "#gallery"; ?>">Back</a></p>
 <p class="center">  
	<img src="../images/gallery/<?php echo $_GET['img']; ?>.jpg" alt="Affordable Construction Clean Up" /> 
</p>
</div>
</body>
</html>
