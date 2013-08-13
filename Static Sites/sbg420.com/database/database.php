<?php
	$i = 0;		
    $file_handle = fopen("database/database.csv", "r");
    while (!feof($file_handle) ) 
	{		
      $row = fgetcsv($file_handle, 1024);
      $image[$i] = $row[0];
      $title[$i] = $row[1];
      $description[$i] = $row[2]; 
      $category[$i] = $row[3]; 
      $i++;		
    }
    fclose($file_handle); 	
	
	switch(CURRENTPAGE) {
		case 'pipes.php':
			$cat = "PIPES-WATERPIPES-TUBES";
			break;
		case 'decks.php':
			$cat = "DECKS-TRUCKS-WHEELS";
			break;
		case 'Tobacco-Accessories.php':
			$cat = "TOBACCO-ACCESORRIES";
			break;
		case 'index.php':
			$cat = "HOME";
			break;
		case null:
			$cat = "HOME";
			break;
	}
	
  ?>
  
  <link href="<?php echo REALPATH; ?>styles/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="styles/elastislide.css" />
  
  <!-- id="category" [this is changeable this corresponds to the document ready script of the javascript]-->
	<div id="carousel" 
		<?php 
			if ($cat == "HOME") { 
				echo 'class="es-carousel-wrapper index-slider clearfix"'; 
			} else { 
				echo 'class="es-carousel-wrapper clearfix"';
			} 
		?>>
		<div class="es-carousel">
			<ul class="content gallery clearfix">
				<?php
				   for($j=1 ; $j < $i-1; $j++){  
					  if ($cat == $category[$j]) {
						  echo '		
						  <li>
							<a href="images/content/'.$category[$j].'/'.$image[$j].'.jpg" rel="gallery" class="gal">
								<img alt="'.$description[$j].'" src="images/content/'.$category[$j].'/tm/'.$image[$j].'.jpg" class="thumbs" />
								<span>&nbsp;</span>
							</a>
						  </li>
						  ';
					  }
					}
				?>	
			</ul>	
		</div>
	</div>
	  
	<script type="text/javascript" src="scripts/jquery.fancybox-1.3.1.js"></script>
    <script type="text/javascript" src="scripts/jquery.mousewheel-3.0.2.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox.js"></script>
	
	<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="scripts/jquery.elastislide.js"></script>
	
	<script type="text/javascript">		
		$('#carousel').elastislide({
			imageW 	: 180,
			minItems	: 3
		});	
	</script>

	
