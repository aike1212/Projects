<?php	
	$i = 0;		
    $file_handle = fopen("database/menu-database.csv", "r");
    while (!feof($file_handle) ) 
	{		
      $row = fgetcsv($file_handle, 1024);
      $food[$i] = $row[0];
      $description[$i] = $row[1];
	  $price[$i] = $row[2];
	  $category[$i] = $row[3];
      // $description[$i] = $row[2]; /* this is optional */
      // $price[$i] = $row[3]; /* this is optional */
      $i++;		
    }
    fclose($file_handle); 	
?>
	<ul id="tab_content_1" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 1 || $_GET == null) echo 'style="display:block"';?>>
	<big class="green"><strong><u>SOUP &amp; SALAD</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "soup_and_salad") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_2" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 2) echo 'style="display:block"';?>>
	<big class="green"><strong><u>APPETIZERS FROM KITCHEN</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "appetizers") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_3" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 3) echo 'style="display:block"';?>>
	<big class="green"><strong><u>SUSHI BAR STARTERS</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "sushi") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_4" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 4) echo 'style="display:block"';?>>
	<big class="green"><strong><u>HAND ROLL TEMAKI</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "hand_roll_temaki") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_5" class="tabcontent menu-cont clearfix menu-long" <?php if($_GET['goto'] == 5) echo 'style="display:block"';?>>
	<big class="green"><strong><u>ROLL SUMAKI</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "roll_sumaki") {
				continue;
			} else {
				if ($j != 72) {
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
					';
				} else {
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc-long">' . $description[$j] .'</p></li>
					';
				}
			}
		}
	?>	
	</ul>
	<ul id="tab_content_6" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 6) echo 'style="display:block"';?>>
	<big class="green"><strong><u>CHEF'S SPECIAL ROLL</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "chefs_special_roll") {
				continue;
			} else {
				if ($j == 89 || $j == 88 || $j == 90) {
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc-long">' . $description[$j] .'</p></li>
					';
				} else {
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
					';
				}
			}
		}
	?>	
	</ul>
	<ul id="tab_content_7" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 7) echo 'style="display:block"';?>>
	<big class="green"><strong><u>CHEF'S SPECIAL DINNER</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "chefs_special_dinner") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>
	<ul id="tab_content_8" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 8) echo 'style="display:block"';?>>
	<big class="green"><strong><u>NOODLES &amp; DONBURI</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "noodles_and_donburi") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_9" class="tabcontent menu-cont clearfix" <?php if($_GET['goto'] == 9) echo 'style="display:block"';?>>
	<big class="green"><strong><u>DESSERT</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "dessert") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_10" class="tabcontent menu-cont clearfix menu-long" <?php if($_GET['goto'] == 10) echo 'style="display:block; line-height:20px;"';?>>
	<big class="green"><strong><u>LUNCH SPECIALS</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "lunch_specials") {
				continue;
			} else {
				if ($j == 125) {
					echo '		
						<li class="title"><p class="left green title-desc">' . $description[$j] .'</p></li>
					';
				} else {	
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
					';
				}
			}
		}
	?>	
	<br class="clear" />
	<strong>LUNCH MENU</strong><br />
	<strong>Monday-Saturday 11:00-2:30 pm</strong><br />
	<strong>Served with Soup, Rice & Salad</strong>
	</ul>	
	<ul id="tab_content_11" class="tabcontent menu-cont clearfix menu-long" <?php if($_GET['goto'] == 11) echo 'style="display:block"';?>>
	<big class="green"><strong><u>MAKI COMBO LUNCHEON</u></strong></big>
	<br /><br />
	<strong>Served with Soup &amp; Salad</strong><br />
	<strong>Choose 2 Rolls (8.50) ; 3 Rolls (10.95)</strong>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "maki_combo") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_12" class="tabcontent menu-cont clearfix menu-long" <?php if($_GET['goto'] == 12) echo 'style="display:block"';?>>
	<big class="green"><strong><u>AUTHENTIC JAPANESE DISHES</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "authentic_japanese_dishes") {
				continue;
			} else {
				if ($j == 176) {
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc-long">' . $description[$j] .'</p></li>
					';
				} else {	
					echo '		
						<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
					';
				}
			}
		}
	?>	
	</ul>	
	<ul id="tab_content_13" class="tabcontent menu-cont clearfix menu-long" <?php if($_GET['goto'] == 13) echo 'style="display:block"';?>>
	<big class="green"><strong><u>&Agrave; LA CARTE</u></strong></big>
	<?php
		for($j=1 ; $j < $i-1; $j++) {
			if ($category[$j] != "ala_carte") {
				continue;
			} else {
				echo '		
					<li><p class="left food">' . $food[$j] . '</p><p class="right price">' . $price[$j] . '</p><p class="left desc">' . $description[$j] .'</p></li>
				';
			}
		}
	?>	
	</ul>
	