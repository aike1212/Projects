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
                        	<h1>Gallery</h1>
                            <div class="gallery clearfix">
                            	<p class="before">
                                	<img src="images/content/gallery/before1.jpg" alt="" width="302" height="227" /><br />
                                    <span>BEFORE</span>
                                    
                                </p>
                                <p class="after">
                                	<img src="images/content/gallery/after1.jpg" alt="" width="302" height="227" /><br />
                                    <span>AFTER</span>
                                </p>
                            </div>
                            <div class="gallery clearfix">
                            	<p class="before">
                                	<img src="images/content/gallery/De-Thacthing.jpg" alt="" width="302" height="227" /><br />
                                    <span>De-Thacthing</span>
                                    
                                </p>
                                <p class="after">
                                	<img src="images/content/gallery/haul away thatch.jpg" alt="" width="302" height="227" /><br />
                                    <span>Clean up/haul away thatch</span>
                                </p>
                            </div>
                            <div class="gallery clearfix">
                            	<p>Re-Bark and Rock Touch-Up + Loving that old flower bed back to life!</p>
                                <p class="before">
                                	<img src="images/content/gallery/gallery1.jpg" alt="" width="302" height="227" /><br />
                                    
                                </p>
                                <p class="after">
                                	<img src="images/content/gallery/gallery2.jpg" alt="" width="302" height="227" /><br />
                                </p>
                                <p class="before">
                                	<img src="images/content/gallery/gallery3.jpg" alt="" width="302" height="227" /><br />
                                </p>
                                <p class="after">
                                	<img src="images/content/gallery/IMG_1805.jpg" alt="" width="302" height="227" /><br />
                                
                            </div>
                            <div class="gallery clearfix">
                            	<p>Tree Care & Stump Removal</p>
                                <p class="before">
                                	<img src="images/content/gallery/grinding.jpg" alt="" width="302" height="227" /><br />
                                    <span>Grinding</span>
                                </p>
                                <p class="after">
                                	<img src="images/content/gallery/55' Bucket Truck.jpg" alt="" width="302" height="227" /><br />
                                    <span>55' Bucket Truck</span>
                                </p>
                                <p class="before">
                                	<img src="images/content/gallery/Complete Stump Removal.jpg" alt="" width="302" height="227" /><br />
                                    <span>Complete Stump Removal</span>
                                </p>
                                <!--<p class="after">
                                	<img src="images/content/gallery/lawn1.jpg" alt="" width="302" height="227" /><br />-->
                                    
                                </p>
                                </div>
							
							<?php 
								$new_photos = array('dnbwall', 'DSC_0243', 'DSC_0244', 'DSC_0246', 'DSC_0711', 'DSC_2125', 'IMG_0609', 'IMG_0883', 'IMG_1057','IMG_',
									'IMG_0929', 'DSC_2096', 'DSC_2097(2)', 'pond',  
									'lawnrenovation', 'SAM_0033_1', 'snowtruck','IMG_0595', 'IMG_1182',
								);
								
								$counter = 0;
							?>
							
							<?php foreach($new_photos as $photos) { ?>
								
								<?php if ($counter <= count($new_photos)) { ?>
								
									<div class="gallery clearfix">
										<p class="before">
											<img src="images/content/gallery/new/<?php echo $new_photos[$counter]; ?>.jpg" alt="" /><br />
											
										</p>
										
										<?php if ($counter != (count($new_photos) - 1)) { ?>
											<p class="after">
												<img src="images/content/gallery/new/<?php echo $new_photos[$counter + 1]; ?>.jpg" alt="" /><br />
											</p>
										<?php } ?>
																				
									</div>
								
								<?php } ?>
								
								<?php $counter += 2; ?>
								
							<?php } ?>
							
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