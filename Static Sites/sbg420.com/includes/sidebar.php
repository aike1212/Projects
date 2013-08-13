<div id="sidebar" 
	<?php 
		if(CURRENTPAGE == 'index.php' || CURRENTPAGE == null) { 
			echo 'class="indexed"'; 
		} else if (CURRENTPAGE == 'faqs.php') {
			echo 'class="faq-sidebar"';
		}?>>
    	<div class="bg">
        	<h3>Hours of Operation</h3>
            <a href="#"><img src="images/map.png" alt="" style="float:right; margin-right:5px; margin-top:-15px; margin-left:10px;" /></a>
            <p>3300 Coach Lane #B6<br />
			Cameron Park, CA  95682</p>
            <h4>7 Days a Week<br />  
            11:00 am to 7:00 pm</h4>
            <h5>530-676-2866</h5>
            <small>sbg420@mail.com</small> 
        </div>
    </div>