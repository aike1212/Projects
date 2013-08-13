
<div id="header" class="clearfix">
    	<h3>Call us 530-676-2866</h3>
        <a href="index.php"><img src="images/logo.png" alt="" class="logo" /></a>
    	<?php if(CURRENTPAGE == 'index.php' || CURRENTPAGE == null) { ?><span class="skateboard">&nbsp;</span><?php } ?>
        <ul>
        	<li class="first"><a<?php isActiveMenu("index.php"); ?> href="index.php">Home</a></li>
            <li><a <?php isActiveMenu("pipes.php"); ?> href="pipes.php#pipes">Pipes - Water Pipes - Tubes</a></li>
            <li><a <?php isActiveMenu("decks.php"); ?> href="decks.php#decks">Decks - Trucks - Wheels</a></li>
            <li><a <?php isActiveMenu("Tobacco-Accessories.php"); ?> href="Tobacco-Accessories.php#tobacco">Tobacco &amp;  Accessories</a></li>
            <li class="last"><a<?php isActiveMenu("faqs.php"); ?> href="faqs.php#faqs">FAQs</a></li>
        </ul>
		<?php if(CURRENTPAGE == 'index.php' || CURRENTPAGE == null) { ?>
			<div class="cont-top">
				<dl>
					<dd><img src="images/skateboard.jpg" alt="" /></dd>
					<dt><strong>Skateboards</strong></dt>
				</dl>
				<dl>
					<dd><img src="images/smoking-accesories.jpg" alt="" /></dd>
					<dt><strong>Smoking Accessories</strong></dt>
				</dl>
			</div>
		<?php } ?>
	
    </div>
