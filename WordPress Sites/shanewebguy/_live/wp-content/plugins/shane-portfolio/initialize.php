<?php
/*
Plugin Name: Shane Web Guy Portfolio
Plugin URI: http://shanewebguy.com
Description: customized portfolio  - custom posts with quicksand integration and custom javascript.
Version: 1.0
Author: Shane Clark
Author URI: http://shanewebguy.com
License: GNU General Public License
*/

add_action('init', 'create_shanewebportfolio_cpt');
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
 
set_post_thumbnail_size( 150, 150 ); 

function add_script_custom_lib(){
	if(!is_admin()){
		wp_register_script('quicksand','/wp-content/plugins/shane-portfolio/js/quicksand.js',array('jquery'),'1.0' );
		wp_register_script('bkscript','/wp-content/plugins/shane-portfolio/js/bkscript.js',array('jquery'),'1.0' );

		wp_enqueue_script('quicksand');
		wp_enqueue_script('bkscript');

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

set_post_thumbnail_size( 150, 150 ); 

add_action('show_portfolio','show_swgportfolio');

function formatDateTime($time){
	$dt= date_create($time);
	return $dt->format('mdy');
}


function show_swgportfolio(){ 
	$plugin_dir_path = plugin_dir_url(__FILE__);
	$swgcustomcats = get_terms('cmssytem');
	$strcat ='<div id="bkslides">
	<p><a href="#" id="bknavshowallitems" rel="bkshowallitems">Show All</a></p>
	<ul class="qksplitter jcarousel-skin-tango" id="bkslideshow">';
	/*	$strcat .='<li class="segment-0 selected-0"><a href="#" data-value="all" class="bkqkshowall"><img src="'.$plugin_dir_path.'img/everything.png" width="60" height="60"/></a></li>';*/
	
	$i = 0;
	
	foreach ($swgcustomcats as $swgcat){
		$i++;
		
		$strcat .= '<li class="segment-' . $i . '">
		<a href="#" data-value="qk' . $swgcat->taxonomy . $swgcat->term_taxonomy_id . '" title="'.$swgcat->name.'">
		<img src="' . $swgcat->description . '" height="60" width="60" title="'.$swgcat->name.'"/>
		<span>'.$swgcat->name.'</span></a></li>';	
	}
	$strcat .='</ul></div>';
	echo $strcat;
	
	$strtpl = '<div id="bkpage_container"><div id="bkpreview" class="bkprevhide">
				<h3 class="bkpreviewtitle">Project Name: <span></span></h3>
				<h4 class="bkpreviewtype">Project Type: <span></span></h4>
				<a href="#" class="bkpreviewpiclink" target="_blank">
				<img src="'.$plugin_dir_path.'img/static.png" alt="preview site" height="303" width="250"></a>
				<h5>Project Description</h5>
				<p id="bkpreviewcont"></p></div>';
	
	echo $strtpl;
	
	$args = array('numberposts' => '-1', 'post_type'=> 'swgportfolio','order'=>'DESC','orderby'=>'date');
	$tposts = get_posts($args);
	
	$str = '<div id="bkqkcontentpanel">';
	$str .= '<ul class="qkimage-grid" id="bkquicksand">';
	$i = 0;
	
		$args2 = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');

		foreach ($tposts as $tpost){
			$i++;
			$strtemp = wp_get_object_terms( $tpost->ID, 'cmssytem',$args2);		

			if(!empty($strtemp)){
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id($tpost->ID) ); 
				$str .= '<li data-id="id-'. $i .'" class="qk'. $strtemp[0]->taxonomy . $strtemp[0]->term_taxonomy_id .' bkcptitem">
						<a href="'.$tpost->guid.'" alt="'.$feat_image.'" class="bkcptlink" rel="'. $strtemp[0]->name .'">
						<img src="'.$feat_image.'" width="150" height="180"/></a>
						<span class="bkprevtitle">'.$tpost->post_title.'</span>
						<strong style="display:none;">'. $i . '</strong>
						<p style="display:none;" class="bkprevpost">'.substr($tpost->post_excerpt,0,150).'... <a href="'. $tpost->guid .'" class="bkcptreadmore">read more</a></p></li>';
			}
		}
	$str .='</ul>
	</div></div>';
	echo $str;
	
}
  ?>