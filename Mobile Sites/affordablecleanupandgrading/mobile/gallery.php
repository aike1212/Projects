<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Affordable Construction Clean Up | Gallery</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<meta id="viewport" name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">
				<h2 class="center">Gallery</h2>
				
				<p style="height:95px;">&nbsp;</p>
				
				<p class="center no-bg" style="margin-top:-125px;" id="gallery">
					<?php
						$c = 1;
						$file_handle = fopen("../database/database.csv", "r");
						
						while (!feof($file_handle) ) {
							$row = fgetcsv($file_handle, 1024);
							$c++;
						}

						fclose($file_handle);

						$file_handle = fopen("../database/database.csv", "r");
						
						while (!feof($file_handle) ) {
							for ($i = -1; $i < $c; $i++) { 
								$row = fgetcsv($file_handle, 1024);
								$gallery[$i] = $row[0];              
							}
						}
						fclose($file_handle);

						$record = 4;
						$j= $c/$record;

						$k = $c - 2;

						$roundup = round($j);
						$nopage = $roundup - 1;
						$a = $_GET['page'] * $record;
						$b = $a - $record;
						
						if ($b <= 0) {
							$b = 0;
						}

						if ( $nopage == $_GET['page'] ) {
							for ($j = $b; $j <= $k - 2; $j++) {
								echo '
									<a href="view.php?img='.$gallery[$j].'&amp;page='.$_GET['page'].'">
										<img alt="Affordable Construction Clean Up\'s Gallery Image" src="../images/gallery/tm/'.$gallery[$j].'.jpg" style="margin:0 10px 10px 0;" />
									</a>
								';
							}
						} else {
							for ($j = $b; $j < $a; $j++) {
								echo '
									<a href="view.php?img='.$gallery[$j].'&amp;page='.$_GET['page'].'">
										<img alt="Affordable Construction Clean Up\'s Gallery Image" src="../images/gallery/tm/'.$gallery[$j].'.jpg" style="margin:0 10px 10px 0;" />
									</a>
								';
							}
						}
					?>
				</p>
				
				<div class="center" id="pagination">
					<?php include('paging.php'); ?>
				</div>
				
			</div>
		</div>	
		
		<?php include('footer.php'); ?>
	</body>
</html>