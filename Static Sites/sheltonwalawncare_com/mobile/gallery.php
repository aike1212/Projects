<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Matt B's Lawn Care | Gallery</title>
		<meta http-equiv="Cache-Control" content="max-age=200" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<script type="text/javascript" src="gen_validatorv31.js"></script>
	</head>
	
	<body>
		<div id="wrapper">
			<?php include('header.php'); ?>

			<!-- Content -->
			<div id="content">
				<h1 class="center">Gallery</h1>
				
				<p id="all-season" class="center">
					<em>
						Taking care of your lawn needs all season.
					</em>
				</p>
				
				<p style="height:95px;">&nbsp;</p>
				
				<p class="center no-bg" style="margin-top:-125px;" id="gallery">
					<?php
						$c = 1;
						$file_handle = fopen("assets/gallery/database.csv", "r");
						
						while (!feof($file_handle) ) {
							$row = fgetcsv($file_handle, 1024);
							$c++;
						}

						fclose($file_handle);

						$file_handle = fopen("assets/gallery/database.csv", "r");
						
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
									<a href="#">
										<img alt="Matt B\'s Gallery Image" src="assets/gallery/'.$gallery[$j].'.jpg" style="margin:0 10px 10px 0;" />
									</a>
								';
							}
						} else {
							for ($j = $b; $j < $a; $j++) {
								echo '
									<a href="#">
										<img alt="Matt B\'s Gallery Image" src="assets/gallery/'.$gallery[$j].'.jpg" style="margin:0 10px 10px 0;" />
									</a>
								';
							}
						}
					?>
				</p>
				
				<div class="center" id="pagination">
					<?php include('paging.php'); ?>
				</div>
				
				<br />
			</div>
			
			<?php include('subContent.php'); ?>
		</div>	
		
		<?php include('footer.php'); ?>
	</body>
</html>