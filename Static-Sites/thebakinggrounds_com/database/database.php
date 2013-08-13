<?php	
	$i = 0;		
    $file_handle = fopen("database/database.csv", "r");
    while (!feof($file_handle) ) 
	{		
      $row = fgetcsv($file_handle, 1024);
      $image[$i] = $row[0];
      $title[$i] = $row[1];
      $description[$i] = $row[2]; /* this is optional */
      $category[$i] = $row[3]; 
      $i++;		
    }
    fclose($file_handle); 	
  ?>
  
  <strong class="center block" style="margin:20px 0;">Click on the thumbnails to enlarge</strong>
  
  <!-- id="category" [this is changeable this corresponds to the document ready script of the javascript]-->
	<div class="cakes clearfix">

		<ul class="content gallery clearfix">
			<?php
			   for($j=1 ; $j < $i; $j++){
				
					if (CURRENTPAGE != 'gallery.php') {
						if ($_GET['cat'] != $category[$j]) {
							continue;
						} else {
						  echo '		
						  <li>
							<a href="images/content/gallery/'.$category[$j].'/'.$image[$j].'.jpg" rel="gallery" class="gal">
								<img alt="'.$description[$j].'" src="images/content/gallery/'.$category[$j].'/thumb/'.$image[$j].'.jpg" class="thumbs" />
								<span>&nbsp;</span>
							</a>
						  </li>
						  ';
						}
					} else {
						if ($category[$j] != 'gallery') {
							continue;
						} else {
						  echo '		
						  <li>
							<a href="images/content/gallery/'.$category[$j].'/'.$image[$j].'.jpg" rel="gallery" class="gal">
								<img alt="'.$description[$j].'" src="images/content/gallery/'.$category[$j].'/thumb/'.$image[$j].'.jpg" class="thumbs" />
								<span>&nbsp;</span>
							</a>
						  </li>
						  ';
						}
					}
				}
			?>	
		</ul>	
		<br class="clear"/>
		
		<div class="page_navigation"></div>
		<br class="clear"/>

	</div>


	
