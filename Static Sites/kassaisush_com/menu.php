<?php include 'includes/meta.php'; ?>

<div id="wrapper-footer">
<div id="wrapper-banner">
<!-- Main -->
<div id="main" class="clearfix">
	<div id="content" style="width:990px">
    	<h1>Menu</h1>
        <br />	

		<div class="left tabs">
			<div class="tab first <?php if($_GET['goto'] == 1 || $_GET == null) echo 'selected';?>" id="tab_menu_1">
				<div class="link">Soup &amp; Salad</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 2) echo 'selected';?>" id="tab_menu_2">
				<div class="link">Appetizers</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 3) echo 'selected';?>" id="tab_menu_3">
				<div class="link">Sushi Bar</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 4) echo 'selected';?>" id="tab_menu_4">
				<div class="link">Hand Roll Temaki</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 5) echo 'selected';?>" id="tab_menu_5">
				<div class="link">Roll Sumaki</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 6) echo 'selected';?>" id="tab_menu_6">
				<div class="link">Chef's Special Roll</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 7) echo 'selected';?>" id="tab_menu_7">
				<div class="link">Chef's Special Dinner</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 8) echo 'selected';?>" id="tab_menu_8">
				<div class="link">Noodles &amp; Donburi</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 9) echo 'selected';?>" id="tab_menu_9">
				<div class="link">Dessert</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 10) echo 'selected';?>" id="tab_menu_10">
				<div class="link">Lunch Specials</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 11) echo 'selected';?>" id="tab_menu_11">
				<div class="link">Maki Combo Luncheon</div>
				<div class="arrow"></div>
			</div>
			<div class="tab <?php if($_GET['goto'] == 12) echo 'selected';?>" id="tab_menu_12">
				<div class="link">Authentic Japanese Dishes</div>
				<div class="arrow"></div>
			</div>
			<div class="tab last <?php if($_GET['goto'] == 13) echo 'selected';?>" id="tab_menu_13">
				<div class="link">&Agrave; La Carte</div>
				<div class="arrow"></div>
			</div>
		</div>	
			
			
		<div class="right menuContainer"><?php include('database/menu.php'); ?></div>

		<!--
		<div>
        <a href="images/content/menu1.pdf" rel="external"> <img src="images/content/menu1.jpg" width="600px" height="" alt="384px" /></a></div>
        <div>
        <a href="images/content/menu1.pdf#page2" rel="external"><img src="images/content/menu2.jpg" width="600px" height="" alt="384px" /></a>
        </div>
		-->		
		
    </div>
   
    <!--header-->
    <?php include 'includes/header.php' ?>
    <!--sidebar-->
    <?php // include 'includes/sidebar.php' ?>
    
</div>
</div>
<!-- Footer -->
  <?php include 'includes/footer.php' ?>

</div>
