<?php include('includes/meta.php'); ?>
	<!--Start Body Wrapper-->
	<div id="main_wrapper">
        <img class="overlap_left" src="images/body/overlaps_left.png" width="80" height="504" />
        <img class="overlap_right" src="images/body/overlaps_right.png" width="116" height="403" />
        <img class="overlap_bottom" src="images/body/overlaps_bottom.png" width="498" height="92" />
        <!-- Start Body Content-->
        <div id="content_wrapper" class="clearfix">
            <?php include('includes/sidebar.php'); ?>
            
            <!--Start Content-->
            <div id="main_content">
                <div class="content_wrapper">                	
                	<p class="box_top"></p>
                    <div class="content clearfix">
                        <p class="image_top">
                            <img src="images/content/image_top_1.png" width="160" height="169" />
                            <img src="images/content/image_top_2.png" width="160" height="169" />
                            <img src="images/content/image_top_3.png" width="160" height="169" />
                            <img src="images/content/image_top_4.png" width="160" height="169" />
                        </p>
                        
                        <div class="text_content_scroll">
                        	<h1>Contact Us</h1>
                            <p>
                                If you would like any additional information regarding our services, please fill in the fields of information below and we will respond to your request. Also, you may reach us via telephone or email. Please note, we keep the information you send confidential and it will be utilized only to respond to your request.
                            </p>
                            <?php include('includes/contactForm.php'); ?>
                        </div>
                    </div>  
                    <p class="box_bottom"></p>  
                </div>  
                <p class="box_right"></p>              
            </div>
            <!--End Main Content-->
            
        </div>
        <!-- End Body Content-->
        
         <?php include('includes/header.php'); ?>       
        
        <?php include('includes/footer.php'); ?>
	</div>
    <!--End Body Wrapper-->