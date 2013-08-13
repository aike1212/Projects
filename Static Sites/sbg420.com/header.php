<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="styles/class.css" media="screen"/>
    <!-- Favicon -->
    <link rel="SHORTCUT ICON" href="favicon.ico" />
<!-- include jQuery library -->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
	<!-- include Cycle plugin -->
<!--	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
-->
 <!--   <script type="text/javascript">
		$(document).ready(function() {
    	$('.slideshow').cycle({
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	});
	</script>-->
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.innerfade.js"></script>
   <!-- <script type="text/javascript" src="<?php //bloginfo('template_url'); ?>/scripts/Slideshow.js"></script>
 
	<script type="text/javascript" src="<?php //bloginfo('template_url'); ?>/scripts/easySlider1.5.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true,
				continuous: true 
			});
		});	
	</script>-->
    
    <script type="text/javascript">
	   $(document).ready(
				function(){
					$('#news').innerfade({
						animationtype: 'slide',
						speed: 1000,
						timeout: 5000,
						type: 'sequence',
						containerheight: '1em'
					});
					
					$('ul#portfolio').innerfade({
						speed: 1000,
						timeout: 5000,
						type: 'sequence',
						containerheight: '220px'
					});
					
					$('.fade').innerfade({
						speed: 1000,
						timeout: 5000,
						type: 'sequence',
						containerheight: '1.5em'
					});
					
					$('.adi').innerfade({
						speed: 'slow',
						timeout: 5000,
						type: 'sequence',
						containerheight: '150px'
					});

			});
  	</script>


    
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
    <!-- Main -->
    <div id="main2">
    <div id="main" class="clearfix">
      <!--Header-->
      
      <div id="header">
     
		<? //if(function_exists(print_form)) print_form(); ?>
    
      	<div class="owners">
        	<!--<img src="<?php //bloginfo('template_url'); ?>/images/owners.png" alt="" />-->
        	<p class="homeowners"><a href="http://scxserv.com/contract4kids/home-owners"></a></p>
            <p class="contractors"><a href="http://scxserv.com/contract4kids/contractors"></a></p>
        </div>
        
        <div class="login">
        	<img src="<?php bloginfo('template_url'); ?>/images/login.png" alt="" />

        </div>
        
        <div class="money">
        	<p class="moneyraised">Money raised for Schools:</p>
        	<img src="<?php bloginfo('template_url'); ?>/images/money.png" alt="" style="float:right; margin:-10px 0 0 0px;" />
        </div>
        
      	<a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="logo" /></a>
        
        <h2>"Fixing Homes to <span class="orange">Fund Education</span>"</h2>
        
       
        	<?php wp_nav_menu( array( 'container_class' => 'topnavi', 'theme_location' => 'primary' ) ); ?>
        	
			<div class="banner">
            
            	<ul id="portfolio"> 
                
                	<li><img src="<?php bloginfo('template_url'); ?>/images/banner01.png" alt="" /></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/banner02.png" alt="" /></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/banner03.png" alt="" /></li>
                    <li><img src="<?php bloginfo('template_url'); ?>/images/banner4.png" alt="" /></li>
                
                </ul>
                
                <div class="txt">
					<ul id="news"> 
     
                      <li> 
                        <span>Home</span><br />
                        Improving homes while funding education.
                      </li> 
                      
                      <li> 
                        <span>How It Works</span><br />
                        Sign Up, Search, Remodel, Donate! 
                      </li> 
                      
                      <li> 
                        <span>Home Owners</span><br />
                        Remodel + Donate = Win/Win... Get involved today! 
                      </li> 
                      
                      <li> 
                        <span>Contractors</span><br />
                        Grow your business and the community! 
                      </li> 
      
                    </ul>                 
                </div>
               	
                <div class="rmore">
                	<p class="readmore hidden"><a href="http://scxserv.com/contract4kids/how-it-works">Find Out More</a></p>
                </div> 

  
            	<!--<div id="slider">
					<ul>				
						<li><img src="<?php //bloginfo('template_url'); ?>/images/banner01.png" /></li>
						<li><img src="<?php //bloginfo('template_url'); ?>/images/banner02.png" /></li>
						<li><img src="<?php //bloginfo('template_url'); ?>/images/banner03.png" /></li>
					</ul>
				</div>-->

            		<!--	<div class="slideshow">
							<img src="<?php //bloginfo('template_url'); ?>/images/banner01.jpg" />
							<img src="<?php //bloginfo('template_url'); ?>/images/banner02.jpg" />
							<img src="<?php //bloginfo('template_url'); ?>/images/banner03.jpg" />
						</div>-->

            		<!--<h3>What Is <span class="orange">C</span>4<span class="red">K?</span></h3>
                    <p>C4K is a Professional Home Services Network of local, licensed contractors offering repair, maintenance, and improvement projects for your home or condo who will DONATE $$ to Education</p>
                    <p class="readmore hidden"><a href="http://scxserv.com/contract4kids/how-it-works">Find Out More</a></p>
					-->
            </div>
            
            
            	<?php if(is_front_page()) { ?>

            <div class="steps">
            
            	<div>
                	<div class="top"></div>
                    <div class="mid">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic01.png" alt="" style="margin:10px 0 0 15px;" />
                    <span class="one">&nbsp;</span>
                    <h4>SUBMIT YOUR HOME<br /> 
					IMPROVEMENT REQUEST</h4>
                    <!--<p>Be in good standing with the Better Business Bureau and the California State License Board (CSLB), and be a member of the League of California home Owners.</p>-->
                   
                    </div>
                    <div class="btm"></div>
            	</div>
                
                <div>
                	<div class="top"></div>
                    <div class="mid">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic02.png" alt="" style="margin:10px 0 0 15px;" />
                    <span class="two">&nbsp;</span>
                    <h4>SELECT YOUR<br /> 
					CONTRACTOR</h4>
                    <!--<p>Be licensed, bonded, and carry ALL required
insurance including Liability and Workers' Compensation.</p>-->

                   
                    </div>
                    <div class="btm"></div>
            	</div>
                
                <div>
                	<div class="top"></div>
                    <div class="mid">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic03.png" alt="" style="margin:10px 0 0 15px;" />
                    <span class="three">&nbsp;</span>
                    <h4>WE DONATE TO YOUR<br /> 
                    LOCAL SCHOOL</h4>
                    <!--<p>Hold harmless and indemnify your school and District. </p>-->
                    </div>
                    <div class="btm"></div>
            	</div>
            </div>
            
            <?php } ?>
      </div>