<?php 

	switch ($current_page) {
		case 'index.php':
			$page_title 	= "Matt B's Lawn";
			$page_desc 		= "Lawn Maintenance Service";
			$page_keyword 	= "landscape design, landscaper, landscapers, landscape design, landscape maintenance, tree trimming, masonry, hardscape, flowers, grass, colors, sod, sprinklers, concrete, custom lighting, landscape architecture, gazebo installation, fountains, fencing, landscape lighting, concrete flatwork, tree removal, insect and disease control, tree and shrub fertilization, weed control, commercial landscape, residential landscape, annual, perennial, deciduous";
			break;
		default:
			$page_title 	= $websiteInfo['website_name'];
			$page_desc 		= "Lawn Maintenance Service";
			$page_keyword 	= "landscape design, landscaper, landscapers";
	}
	
?>