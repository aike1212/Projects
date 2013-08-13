<?php include('includes/meta.php'); ?>

<div id="wrapper">
	<!-- Main -->
	<div id="main" class="clearfix">
		<div id="content" class="center clearfix">
		    <h2>Our services</h2>

		    <div class="left tabs">
				<div class="tab first <?php if($_GET['goto'] == 1 || $_GET == null) echo 'selected';?>" id="tab_menu_1">
					<div class="link">Printing Division</div>
					<div class="arrow"></div>
				</div>
				<div class="tab <?php if($_GET['goto'] == 2) echo 'selected';?>" id="tab_menu_2">
					<div class="link">Sign Division</div>
					<div class="arrow"></div>
				</div>
				<div class="tab <?php if($_GET['goto'] == 3) echo 'selected';?>" id="tab_menu_3">
					<div class="link">Promotional Products</div>
					<div class="arrow"></div>
				</div>
			</div>

			<div class="right menuContainer">
				<div id="tab_content_1" class="tabcontent menu-cont" <?php if($_GET['goto'] == 1 || $_GET == null) echo 'style="display:block"';?>>
					<big>Printing Division</big>
					
					<ul>
						<li><span>Announcements</span></li>
						<li><span>Booklets</span></li>
						<li><span>Bookmarks</span></li>
						<li><span>Brochures</span></li>
						<li><span>Business Cards</span></li>
						<li><span>Calendars</span></li>
						<li><span>Checks</span></li>
						<li><span>Custom Stamps</span></li>
						<li><span>Door Hangers</span></li>
						<li><span>Envelopes</span></li>
					</ul>

					<ul>
						<li><span>Flyers</span></li>
						<li><span>Greeting Cards</span></li>
						<li><span>Lables</span></li>
						<li><span>Letterheads</span></li>
						<li><span>Magnets</span></li>
						<li><span>NCR Forms</span></li>
						<li><span>Note Pads</span></li>
						<li><span>Plastic Cards</span></li>
						<li><span>Presentation Folders</span></li>
						<li><span>Rip Cards</span></li>
					</ul>

					<ul>
						<li><span>Silk Cards</span></li>
						<li><span>Stickers</span></li>
						<li><span>Table Tents</span></li>
						<li><span>Trading Cards</span></li>
					</ul>
				</div>

				<div id="tab_content_2" class="tabcontent menu-cont" <?php if($_GET['goto'] == 2) echo 'style="display:block"';?>>
					<big>Sign Division</big>

					<ul>
						<li><span>ADA</span></li>
						<li><span>Aluminum</span></li>
						<li><span>Bulletin Boards</span></li>
						<li><span>Car Magnets</span></li>
						<li><span>Channel Letters</span></li>
						<li><span>Coroplast</span></li>
						<li><span>Cut Vinyl</span></li>
						<li><span>Directories</span></li>
						<li><span>Digital Message Boards</span></li>
						<li><span>Full Vehicle Wraps</span></li>
					</ul>

					<ul>
						<li><span>Illuminated</span></li>
						<li><span>Lierture StandsOne Way Window Wraps</span></li>
						<li><span>Pop Displays</span></li>
						<li><span>Posters</span></li>
						<li><span>Puzzles</span></li>
						<li><span>Retractable Banners</span></li>
						<li><span>Rigid Signs</span></li>
						<li><span>Street Signs</span></li>
						<li><span>Sidewalk Messenger</span></li>
					</ul>

					<ul>
						<li><span>Table Throws</span></li>
						<li><span>Trade Show Displays</span></li>
						<li><span>Vinyl Decals</span></li>
						<li><span>Window Cling</span></li>
						<li><span>Yard Signs</span></li>
					</ul>
				</div>

				<div id="tab_content_3" class="tabcontent menu-cont" <?php if($_GET['goto'] == 3) echo 'style="display:block"';?>>
					<big>Promotional Products</big>
					
					<ul>
						<li><span>Apron</span></li>
						<li><span>Badge Holders</span></li>
						<li><span>Bags</span></li>
						<li><span>Balloons</span></li>
						<li><span>Calculator</span></li>
						<li><span>Caps</span></li>
						<li><span>Car Sun Shade</span></li>
						<li><span>Coasters</span></li>
						<li><span>Cups</span></li>
						<li><span>Embroidered Shirts</span></li>
					</ul>

					<ul>
						<li><span>Flashlights</span></li>
						<li><span>Fleece</span></li>
						<li><span>Folding Chair</span></li>
						<li><span>Hand Sanitizer</span></li>
						<li><span>Keep-it Clips</span></li>
						<li><span>Key Tag</span></li>
						<li><span>Lanyard</span></li>
						<li><span>Letter Opener</span></li>
						<li><span>Liscense Plate Frames</span></li>
						<li><span>Jackets</span></li>
					</ul>

					<ul>
						<li><span>Mugs</span></li>
						<li><span>Note Nest Clips</span></li>
						<li><span>Notebook</span></li>
						<li><span>Pen</span></li>
						<li><span>Picture Frame With Clock</span></li>
						<li><span>Plastic Hand Fans</span></li>
						<li><span>Pocket Collie</span></li>
						<li><span>Polo Shirts</span></li>
						<li><span>Post-It</span></li>
					</ul>

					<ul>
						<li><span>Rulers</span></li>
						<li><span>Shirts</span></li>
						<li><span>Sport bottles</span></li>
						<li><span>Sport Flier</span></li>
						<li><span>Staplers</span></li>
						<li><span>Step Hero Pedometer</span></li>
						<li><span>Stress Balls</span></li>
						<li><span>Sweatshirts</span></li>
						<li><span>Tape Measure</span></li>
						<li><span>Temporary Tattoo</span></li>
					</ul>

					<ul>
						<li><span>Towels</span></li>
						<li><span>Tumbler</span></li>
						<li><span>Umbrella</span></li>
						<li><span>USB Drive</span></li>
						<li><span>Value In-Shade Pedometer</span></li>
					</ul>
				</div>
			</div>
	  	</div>
	  	<?php include('includes/btmContent.php'); ?>
	</div>
</div>

<?php 
	include('includes/header.php'); 
	include('includes/footer.php'); 
?>
