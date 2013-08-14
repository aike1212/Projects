
<?php	$i = 0;		
    $file_handle = fopen("../database/database.csv", "r");
    while (!feof($file_handle) ) {		
    $row = fgetcsv($file_handle, 1024);
      $image[$i] = $row[0];
      $category[$i] = $row[1];
	  $title[$i] = $row[2];
      $description[$i] = $row[3]; /* this is optional */
      $price[$i] = $row[4]; /* this is optional */
      $i++;		
    }
    fclose($file_handle); 	
?>

	<!-- id="category" [this is changeable this corresponds to the document ready script of the javascript] -->
	<div id="<?php echo $cat; ?>" class="container">
		<ul class="content gallery">
		<?php
        	for($j=1 ; $j < $i-1 ; $j++){
				if($image[$j] != NULL && $cat == $category[$j]) {
					echo '		 
					<li>
						<a href="../images/gallery/'.$category[$j].'/'.$image[$j].'.jpg" rel="lightbox gallery">
							<img src="../images/gallery/'.$category[$j].'/tm/'.$image[$j].'.jpg" alt="'.$title[$j].'" width="150" />
							<span>&nbsp;</span>
						</a>
					</li>
					';
				}
			}
        ?>	
		</ul>
        <br class="clear"/>
	</div>	
   