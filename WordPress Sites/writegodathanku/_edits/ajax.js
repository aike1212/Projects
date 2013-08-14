var ajax_url = 'http://localhost/';
var ajax_url_scx = 'http://writegodathanku.scxserv.com/';
var ajax_url_live = 'http://writegodathankyou.net/writegodathanku/';

$(document).ready(function() {	
	$('.love-button').click(function() { 
		var user_id = $(this).attr('name');
		var post_id = $(this).attr('rel');
		$('#love-button_'+post_id).hide();
		
		$.post(ajax_url_scx, {user_id:user_id, post_id:post_id, 'action':'yes'}, function(data) {	
			$('#love-count_'+post_id).html(data);
		});
		return false;	
	});
	
	$('input[name=hide-user]').live("click",function() {
		var id = $(this).attr('id');
		
		if($(this).attr('checked')) {
			var hide = 1;
		} else {
			var hide = 0;
		}
		
		$.post(ajax_url_scx+'profile/', {hide_id:id, hide_value:hide, 'action':'yes'}, function(data) {	
			$('input[name=hide-text]').html(data);
		});
	});
	
	$('#file').live("click, blur, change",function(){ 
		var fileVal = $('#file').val(); 
		$('#text-file').val(fileVal);
	});
});