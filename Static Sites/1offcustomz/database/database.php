<?php	
	$i = 0;		
    $file_handle = fopen("database/database.csv", "r");
    while (!feof($file_handle) ) 
	{		
      $row = fgetcsv($file_handle, 1024);
      $image[$i] = $row[0];
      $title[$i] = $row[1];
      $description[$i] = $row[2]; /* this is optional */
      $i++;		
    }
    fclose($file_handle); 	
  ?>
  <!-- id="category" [this is changeable this corresponds to the document ready script of the javascript]-->
	<div id="works" class="clearfix">	
		<ul class="content gallery clearfix">
			<?php
			   for($j=1 ; $j < $i-1; $j++){
				  echo '		
				  <li>
					<a href="images/gallery/'.$image[$j].'.jpg" rel="gallery" class="gal">
						<img alt="'.$description[$j].'" src="images/gallery/tm/'.$image[$j].'.jpg" class="thumbs" />
						<span>&nbsp;</span>
					</a>
				  </li>
				  ';
				}
			?>	
		</ul>	

		<div class="page_navigation clearfix"></div>
		<br class="clear"/>
	</div>


	
