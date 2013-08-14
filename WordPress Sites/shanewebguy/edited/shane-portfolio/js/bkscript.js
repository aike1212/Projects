/* <![CDATA[ */
/* Custom sorting plugin
*
* Blackat13
*
*/
(function($) {
	$.fn.sorted = function(customOptions) {
		var options = {
			reversed: false,
			by: function(a) {
				return a.text();
			}
		};
		$.extend(options, customOptions);
	
		$data = $(this);
		arr = $data.get();
		arr.sort(function(a, b) {
			
		   	var valA = options.by($(a));
		   	var valB = options.by($(b));
			if (options.reversed) {
				return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
			} else {		
				return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
			}
		});
		return $(arr);
	};

})(jQuery);

jQuery(function() {
  
  var read_button = function(class_names) {
    var r = {
      selected: false,
      type: 0
	  };
    for (var i=0; i < class_names.length; i++) {
      if (class_names[i].indexOf('selected-') == 0) {
        r.selected = true;
      }
      if (class_names[i].indexOf('segment-') == 0) {
        r.segment = class_names[i].split('-')[1];
      }
    };
    return r;
  };
  
  var determine_sort = function($buttons) {
    var $selected = $buttons.parent().filter('[class*="selected-"]');
    return $selected.find('a').attr('data-value');
  };
  
  var determine_kind = function($buttons) {
    var $selected = $buttons.parent().filter('[class*="selected-"]');
    return $selected.find('a').attr('data-value');
  };
  
  var $preferences = {
    duration: 800,
    easing: 'easeInOutQuad',
    adjustHeight: false
  };
  
  var $list = jQuery('#bkquicksand');
  var $data = $list.clone();
  
  var $controls = jQuery('ul.qksplitter');
  
function bkpaginatequick(){
	bkcontainer = jQuery("#bkquicksand");
	
	jQuery('#bkpage_container').pajinate({
			num_page_links_to_display : 5,
			items_per_page : 8,
			item_container_id:'#bkquicksand',
			abort_on_small_lists:true
		});
	bkcontainer.animate({'opacity':'1'},1);


}
	   var bkdefimg = jQuery('#bkpreviewpiclink img').attr('src');

  $controls.each(function(i) {
    
    var $control = jQuery(this);
    var $buttons = $control.find('a');
    
    $buttons.bind('click', function(e) {
      
      var $button = jQuery(this);
      var $button_container = $button.parent();
      var button_properties = read_button($button_container.attr('class').split(' '));      
      var selected = button_properties.selected;
      var button_segment = button_properties.segment;

      if (!selected) {
		var bkcount = jQuery(".qksplitter li").length;
		for(i=0;i<=bkcount;i++){
			bkcls = "selected-" + i;
			$buttons.parent().removeClass(bkcls).removeClass('bkselectctrl');
		}

	   /*$buttons.parent().removeClass('selected-0').removeClass('selected-1').removeClass('selected-2').removeClass('selected-3');*/


        $button_container.addClass('selected-' + button_segment);
        $button_container.addClass('bkselectctrl');
		jQuery('#bkpreviewpiclink img').attr('src',bkdefimg);
		jQuery("#bkpreviewcont, #bkpreviewtitle,#bkpreviewtype,#bkprevdesc").hide();
        var sorting_type = determine_sort($controls.eq(1).find('a'));
        var sorting_kind = determine_kind($controls.eq(0).find('a'));
        
        if (sorting_kind == 'all') {
          var $filtered_data = $data.find('li');
        } else {
          var $filtered_data = $data.find('li.' + sorting_kind);
        }
        
        if (sorting_type == 'size') {
          var $sorted_data = $filtered_data.sorted({
            by: function(v) {
              return parseFloat(jQuery(v).find('span').text());
            }
          });
        } else {
          var $sorted_data = $filtered_data.sorted({
            by: function(v) {
              return jQuery(v).find('strong').text().toLowerCase();
            }
          });
        }
        
        $list.quicksand($sorted_data, $preferences,function(){
			//bkpaginatequick();
		});
        
      }
      
      e.preventDefault();
    });
    
	
	jQuery('#bknavshowallitems').bind('click',function(e){
		jQuery('#bkpreviewpiclink img').attr('src',bkdefimg);
		
		jQuery("#bkpreviewcont, #bkpreviewtitle,#bkpreviewtype,#bkprevdesc").hide();
		var $filtered_data = $data.find('li');
		var $sorted_data = $filtered_data.sorted({
				by: function(v) {
					return parseFloat(jQuery(v).find('strong').text());
				}
			  });
			  
		$list.quicksand($sorted_data, $preferences,function(){
				//bkpaginatequick();
			});
		  e.preventDefault();
	 });
	 
	 
  }); 

  var high_performance = true;  
  var $performance_container = jQuery('#performance-toggle');
  var $original_html = $performance_container.html();
  
  $performance_container.find('a').live('click', function(e) {
    if (high_performance) {
      $preferences.useScaling = false;
      $performance_container.html('CSS3 scaling turned off. Try the demo again. <a href="#toggle">Reverse</a>.');
      high_performance = false;
    } else {
      $preferences.useScaling = true;
      $performance_container.html($original_html);
      high_performance = true;
    }
    e.preventDefault();
  });
  
  
});

jQuery('.bkcptitem').live('click',function(ghj){
	 ghj.preventDefault();
	 jQuery("#bkpreviewcont, #bkpreviewtitle,#bkpreviewtype,#bkprevdesc").show();
jQuery("#bkpreviewtitle, #bkpreviewtype, #bkprevdesc").show();
jQuery("#bkpreviewpiclink").attr('href',jQuery(this).find('.bkcptlink').attr('alt'));
	jQuery("#bkpreview img").attr('src', jQuery(this).find('.bkprevmedimg').text());
	jQuery("#bkpreviewcont").html(jQuery(this).find('.bkprevpost').html());
	jQuery("#bkpreviewtitle span").text(jQuery(this).find('.bkprevtitle').text());
	jQuery('#bkpreviewtype span').text(jQuery(this).find('a').attr('rel'));
	
	return false;
});

jQuery(document).ready(function() {
    jQuery('#bkslideshow').jcarousel();
	 jQuery('#bkpreview').stickyfloat({ duration: 200,offsetY: 50, });
		
jQuery("#bklinktop").hide();
		 jQuery("#bkpreviewtitle, #bkpreviewtype, #bkprevdesc").hide();
	// fade in #back-top
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 500) {
				jQuery('#bklinktop').fadeIn();
			} else {
				jQuery('#bklinktop').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('#bklinktop').click(function () {
			jQuery('body,html').animate({
				scrollTop: 500
			}, 800);
			return false;
		});
	});
});
/* ]]> */