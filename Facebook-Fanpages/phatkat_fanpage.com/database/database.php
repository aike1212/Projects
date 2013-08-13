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
  <!-- id="category" [this is changeable this corresponds to the document ready script of the javascript]-->
	<div id="wedding-services" class="clearfix" style="*width:475px;">	
		<!--
		<div class="page_navigation"></div>
		<br class="clear"/>
		-->
		
		<?php if (CURRENTPAGE == 'wedding_service.php') echo '<img src="images/content/weddings.jpg" alt="Weddings" class="right" style="margin-top:15px;" />'; ?>
		
		<?php if (CURRENTPAGE == 'gallery.php') { ?>
			<ul class="video-gallery clearfix" style="border-bottom:1px dashed #A99E8C; *padding-bottom:15px;">
				<li><a href="http://www.youtube.com/watch?v=va2i-00CN5M&feature=youtu.be" class="youtube"><img alt="" src="images/content/video/1.jpg" /><span class="video-gallery">&nbsp;</span></a></li>
				<li><a href="http://www.youtube.com/watch?v=vUdPCRUAG08&feature=youtu.be" class="youtube"><img alt="" src="images/content/video/2.jpg" /><span class="video-gallery">&nbsp;</span></a></li>
				<li><a href="http://www.youtube.com/watch?v=n0jp4MTZea8&feature=youtu.be" class="youtube"><img alt="" src="images/content/video/3.jpg" /><span class="video-gallery">&nbsp;</span></a></li>
			</ul>
		<?php } ?>
		
		<ul class="content <?php if (CURRENTPAGE == 'wedding_service.php') echo 'left wedding-'; ?>gallery clearfix">
			<?php
			   for($j=1 ; $j < $i-1; $j++){
				  if (CURRENTPAGE == 'gallery.php') {
					if ($category[$j] == 'gallery') { 
					  echo '		
					  <li>
						<a href="images/content/gallery/'.$image[$j].'.jpg" rel="gallery" class="gal">
							<img alt="" src="images/content/gallery/tm/'.$image[$j].'.jpg" class="thumbs" />
							<span>&nbsp;</span>
						</a>
					  </li>
					  ';
					}
				  } else {
					 echo '		
					  <li>
						<a href="images/content/gallery/'.$image[$j].'.jpg" rel="gallery" class="gal">
							<img alt="" src="images/content/gallery/tm/'.$image[$j].'.jpg" class="thumbs" />
							<span>&nbsp;</span>
						</a>
					  </li>
					  ';
				  }
			  }
			?>	
		</ul>	

		<!--<br class="clear"/>-->

		<div class="<?php if(CURRENTPAGE == 'gallery.php') echo 'right'; else echo 'left'; ?> page_navigation"></div>
		<br class="clear" />
		<br />
		
	</div>


	
