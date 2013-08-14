$(document).ready(function() {	
	$('.love-button').click(function() { 
		var user_id = $(this).attr('name');
		var post_id = $(this).attr('rel');
		//$(this).css('background-image', 'url(scripts/ajax-loader.gif)');
		$('#love-button_'+post_id).hide();
		$('#love-button__'+post_id).hide();
		$('#love-button___'+post_id).hide();
		
		$.post('http://writegodathankyou.net/writegodathanku/', {user_id:user_id, post_id:post_id, 'action':'yes'}, function(data) {
			//alert(data);
			$('#love-count_'+post_id).html(data);
			$('#love-count__'+post_id).html(data);
			$('#love-count___'+post_id).html(data);
		});
		return false;	
	});
});