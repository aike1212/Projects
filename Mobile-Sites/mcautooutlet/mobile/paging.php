<?php
	$lastpage = $roundup;
	$lastpage1 = $roundup -1;

	if ($roundup == 2) {
	} else { 
		$prev = $_GET['page'] - 1;
		$next = $_GET['page'] + 1;
		$currentpage = $_GET['page']; 
		$minustpage = $_GET['page'] - 4;
		
		if ($minustpage <= 0) {
			$minustpage = 1;
		}
		echo '<a class="next" href="'.$current_page.'?page=1#gallery">&laquo;</a>&nbsp;';

		if ($_GET['page'] != 1) {
			echo '&nbsp;<a class="next" href="'.$current_page.'?page='.$prev.'#gallery">prev</a> ';
		}
		
		$pluspage = $currentpage + 5;
	
		if ($pluspage >= $lastpage) {
			$pluspage = $lastpage;
		}
		
		for ($i = $minustpage; $i < $pluspage; $i++) {
			if  ($i == $_GET['page'] ) {
				echo '<a href="'.$current_page.'?page='.$i.'#gallery" class="active" style="padding:0 5px;">'.$i.'</a> ';
			} else {
				echo '<a href="'.$current_page.'?page='.$i.'#gallery" style="padding:0 5px;">'.$i.'</a> ';
			}
		}
		
		if ($nopage != $_GET['page']) {
			echo '<a class="next" href="'.$current_page.'?page='.$next.'#gallery">next</a>&nbsp;';
		}
	}
	
	echo '&nbsp;<a class="next"  href="'.$current_page.'?page='.$lastpage1.'#gallery">&raquo;</a>';

	echo '<br/>';
	echo '<br/>';
?>