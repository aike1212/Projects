<?php
/*
Plugin Name: Shane Web Guy Portfolio
Plugin URI: http://shanewebguy.com
Description: Customized Portfolio  Created with custom posts with quicksand integration and custom javascript. category thumbnails are 150x180, post featured images are set to 150x180px ratio or 1000x1213px. Use this ratio to preserve image aspect. 
Version: 1.0
Author: Shane Clark
Author URI: http://shanewebguy.com
License: GNU General Public License
* NOTE: this is set to a page with 970px width, refer to css for changes.
* uses quicksand, easing, 
* todo: pagination, problem is with logical and animation bugs with quicksand
* quicksand was not intended for pagination as its loses it logic purpose to filter
*/

add_action('init', 'create_shanewebportfolio_cpt');

function bkswgactivate(){
	create_shanewebportfolio_cpt();
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
	}
	
register_activation_hook( __FILE__, 'bkswgactivate' );


function bkswgdeactivate(){
	global $wp_rewrite;
	$wp_rewrite->flush_rules();
}

register_deactivation_hook( __FILE__, 'bkswgdeactivate' );

function create_shanewebportfolio_cpt() 
{
	  $labels = array(
		'name' => _x('Shane Portfolio', 'swgportfolio'),
		'singular_name' => _x('Portfolio', 'shaneportfolio'),
		'add_new' => _x('Add New', 'newswbportfolio'),
		'add_new_item' => __('Add New Portfolio'),
		'edit_item' => __('Edit Item'),
		'new_item' => __('New Item'),
		'view_item' => __('View Item'),
		'search_items' => __('Search Items'),
		'not_found' =>  __('No items found'),
		'not_found_in_trash' => __('No items found in Trash'), 
		'parent_item_colon' => '|',
	  );
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => array('slug' => 'shane-portfolio-page'), 
		'capability_type' => 'page',
		'hierarchical' => true,
		'menu_position' => 20,
		'has_archive' => true,
		'taxonomies' => array('cmssytem'),
		'supports' => array('title','editor','thumbnail','excerpt','page-attributes')
	  ); 
	  register_post_type('swgportfolio',$args);
	  
	  register_taxonomy(
		'cmssytem',
		'swgportfolio',
		array(
			'label' => __( 'Web App Categories' ),
			'rewrite' => true,
			'show_ui' => true,
			'query_var' => true,
			 'hierarchical' => true,
		)
	);
  }
function add_script_custom_lib(){
	if(!is_admin()){
		if(is_page_template('shane-ptfolio.php')){
			wp_register_script('quicksand','/wp-content/plugins/shane-portfolio/js/quicksand.js',array('jquery'),'1.0' );
			wp_register_script('bkscript','/wp-content/plugins/shane-portfolio/js/bkscript.js',array('jquery'),'1.0' );

			wp_enqueue_script('quicksand');
			wp_enqueue_script('bkscript');

		}
	}
}

function add_style_custom_lib(){
	if(!is_admin()){
		wp_register_style('quicksandstyle','/wp-content/plugins/shane-portfolio/css/quicksandstyle.css');
		wp_register_style('bkjcarousel','/wp-content/plugins/shane-portfolio/css/tango/skin.css');
		wp_enqueue_style('bkjcarousel');
		wp_enqueue_style('quicksandstyle');
	}
}

add_action( 'wp_footer', 'add_script_custom_lib' );

add_action( 'wp_head', 'add_style_custom_lib' );

add_action('show_portfolio','show_swgportfolio');

function formatDateTime($time){
	$dt= date_create($time);
	return $dt->format('mdy');
}

function bk_check_excerpt($str){
	if($str == ''){
		return 'Information Coming Soon';
	}else{
		return substr($str,0,150);
	}
}

function wp_get_attachment_medium_url( $id )
{
    $medium_array = image_downsize( $id, 'medium' );
    $medium_path = $medium_array[0];

    return $medium_path;
}

function show_swgportfolio(){ 
	$plugin_dir_path = plugin_dir_url(__FILE__);
	$swgcustomcats = get_terms('cmssytem');
	$strcat ='<div id="bkslides">
	<p><a href="#" id="bknavshowallitems" rel="bkshowallitems">Show All</a></p>
	<ul class="qksplitter jcarousel-skin-tango" id="bkslideshow">';
	$i = 0;
	
	/* loop through terms(category). shows terms with posts only (wordpress default)*/
	foreach ($swgcustomcats as $swgcat){
		$i++;
		
		$strcat .= '<li class="segment-' . $i . '">
		<a href="#" data-value="qk' . $swgcat->taxonomy . $swgcat->term_taxonomy_id . '" title="'.$swgcat->name.'">
		<img src="' . $swgcat->description . '" height="60" width="60" title="'.$swgcat->name.'"/>
		<span>'.$swgcat->name.'</span></a></li>';	
	}
	
	$strcat .='</ul></div>';
	echo $strcat;
	
	/* Code for preview panel, do not edit, these are hooked to custom javascript functions*/
	$strtpl = '<div id="bkpage_container"><div id="bkpreview">
				<h3 id="bkpreviewtitle">Project Name: <span></span></h3>
				<h4 id="bkpreviewtype">Project Type: <span></span></h4>
				<a id="bkpreviewpiclink" href="#"><img  src="'.$plugin_dir_path.'img/static.png" alt="preview site" height="303" width="250"/></a>
				<h5 id="bkprevdesc">Project Description</h5>
				<p id="bkpreviewcont"></p></div>';
	
	echo $strtpl;
	
	/* todo NOTE: check for future updates, works through custom taxonomies and display only posts that has a taxonmy*/
	$args = array('numberposts' => '-1', 'post_type'=> 'swgportfolio','order'=>'DESC','orderby'=>'date');
	$tposts = get_posts($args);
	$str = '<div id="bkqkcontentpanel">';
	$str .= '<ul class="qkimage-grid" id="bkquicksand">';
	$i = 0;
	$orig_image ='';
	$feat_image ='';
	$args2 = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');

	/*loop through posts and append it to $str string*/
	foreach ($tposts as $tpost){
		$i++;
		$strtemp = wp_get_object_terms( $tpost->ID, 'cmssytem',$args2);		
		
		$taxterms ='';
		$taxtermsclass ='';
		$j = 0;
		/* code for rendering each taxonomy for posts that have multiple terms*/
		foreach($strtemp as $pterm){
			if($j > 0){
				$tdivider = '/';
				$ctdiv = ' ';
			}else{
				$tdivider = '';
				$ctdiv ='';
			}
			$taxterms .= $tdivider . $pterm->name ;
			$taxtermsclass .= $ctdiv . 'qk'. $pterm->taxonomy . $pterm->term_taxonomy_id;
			$j++;	
		}
		
		if(!empty($strtemp)){
		
			$orig_image = wp_get_attachment_url( get_post_thumbnail_id($tpost->ID)); 
			$med_image = wp_get_attachment_medium_url( get_post_thumbnail_id($tpost->ID)); 
			$thumb_image = wp_get_attachment_thumb_url(get_post_thumbnail_id($tpost->ID));
			
			
			if($orig_image != ''){
				$feat_image = get_the_post_thumbnail( $tpost->ID, array(150,180));
			}else{
				$orig_image = $plugin_dir_path.'img/default.png';
				$med_image = $orig_image;
				$feat_image = '<img src="'.$plugin_dir_path.'img/default.png" width="150" height="180" title="website coming soon."/>';
				
			}
			
			$str .= '<li data-id="id-'. $i .'" class="'. $taxtermsclass .' bkcptitem">
					<a href="#" alt="'.get_permalink($tpost->ID).'" class="bkcptlink" rel="'. $taxterms .'">'.$feat_image.'</a>
					<span class="bkprevtitle">'.$tpost->post_title.'</span>
					<strong style="display:none;">'. $i . '</strong>
					<p style="display:none;" class="bkprevmedimg">'.$med_image.'</p>
					<p style="display:none;" class="bkprevpost">'.bk_check_excerpt($tpost->post_excerpt).'... <a href="'.  get_permalink($tpost->ID) .'" class="bkcptreadmore">read more</a></p></li>';
		}
	}
	
	$str .='</ul>
	</div><a href="#content" id="bklinktop">Back to top </a></div>';
	echo $str;
	
}
  ?>