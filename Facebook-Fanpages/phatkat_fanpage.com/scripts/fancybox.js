// JavaScript Document

$(document).ready(function() {
				$("a[rel=gallery]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over"><span class="imageno">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + ' </span> ' + (title.length ? ' ' + title : '') + '</span>';
				}
			});
			
				$(".iframe").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
			$(".youtube").click(function() {
				$.fancybox({
					'padding'		: 0,
					'autoScale'		: false,
					'transitionIn'	: 'elastic',
					'transitionOut'	: 'fade',
					'title'			: this.title,
					'width'			: 475,
					'height'		: 250,
					'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
					'type'			: 'swf',
					'swf'			: {
					'wmode'				: 'transparent',
					'allowfullscreen'	: 'true'
					}
				});

				return false;
			});

			    
			
				$("a[rel=example1]").fancybox({
		'titleShow'     : false
	});
				$("a[rel=fancyimg]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titleShow'     : false
			});

$("a[rel=vload]").click(function() {
	$.fancybox({
			'padding'		: 0,
			'autoScale'		: false,
			'transitionIn'	: 'none',
			'transitionOut'	: 'none',
			'title'			: this.title,
			'width'		: 480,
			'height'		: 390,
			'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
			'type'			: 'swf',
			'swf'			: {
			'wmode'		: 'transparent',
			'allowfullscreen'	: 'true'
			}
		});

	return false;
});

			$("a[rel=wload]").fancybox({
				'transitionIn'		: 'elastic',
				'showNavArrows'		: false,
				'transitionOut'		: 'elastic',
				'autoDimensions'	: false,
				'width'         		: 'auto',
				'height'        		: 'auto'
			});


		});