
<div id="header">
    	<a href="index.php"><img src="images/logo.png" alt="" class="logo" /></a>
        <h2>Call us NOW!<br />
        <span>281.592.2110</span><br />
        <a href="mailto:info@fishtalesusa.com">info@fishtalesusa.com</a></h2>
        <div class="nav">
      	<ul>
          <li style="background:none;" class="home"><a<?php isActiveMenu("index.php"); ?> href="index.php"><span>Home</span></a></li>
          <li class="second"><a<?php isActiveMenu("about-us.php"); ?> href="about-us.php#about-us">ABOUT US AND <br /> INVESTOR RELATIONS</a></li>
          <li><a<?php isActiveMenu("menu.php"); ?> href="menu.php#menu"><span>MENU</span></a></li>
          <li><a<?php isActiveMenu("gallery.php"); ?> href="gallery.php#content"><span>GALLERY</span></a></li>
          <li class="last"><a<?php isActiveMenu("reviews.php"); ?> href="reviews.php#reviews"><span>REVIEWS</span></a></li>
          <!--<li class="last"><a<?php // isActiveMenu("contact.php"); ?> href="contact.php#reviews"><span>CONTACT US</span></a></li>-->
        </ul>
        </div>
        
        <div class="banner">
        <h3>About Us</h3>
        
        <p>
			Fishtales began in 1999 as a road side local place to stop and get some quality food. Our original locations were ran from local food
			trailers and due to the popularity we grew into the restaurant and catering business. The success is due to our devotion to our food quality,
			excellent service and our Commitment to be a positive community establishment!
		</p>
        <p class="view"><a href=" menu.php#menu">View Our Menu</a></p>
        <h4>For information on our catering services and food trucks <br />give us a call at 281 532 2110</h4>
        </div>
        
        <?php if (CURRENTPAGE == 'index.php') { ?>
        <div class="cont-top">
        	<dl class="seafoods">
            	<dd><img src="images/img-01.png" alt="" /></dd>
                <dt>Seafoods Plate</dt>
            </dl>
            
            <dl class="salad">
            	<dd><img src="images/img-02.png" alt="" /></dd>
                <dt>Salad</dt>
            </dl>
            
            <dl class="soup">
            	<dd><img src="images/img-03.png" alt="" /></dd>
                <dt>Chowder/Soup</dt>
            </dl>
            
            <dl class="sandwich">
            	<dd><img src="images/img-04.png" alt="" /></dd>
                <dt>Sandwiches</dt>
            </dl>
        	
        </div>
        <?php } ?>
        
    </div>
