/* <![CDATA[ */
function blankTargetFix(){
  if(!document.getElementsByTagName){
    return;
  }

  var anchors = document.getElementsByTagName("a");

  for(var i = 0; i < anchors.length; i++){
    var anchor = anchors[i];

    if(anchor.getAttribute("href") && anchor.getAttribute("rel") == "external"){
      anchor.target = "_blank";
    }
  }
}

$(document).ready(function (){

	$(".menuContainer").ready(function(){
		$(".menuContainer").animate({opacity:"0.25",speed:"fast"});
		$(".menuContainer").animate({opacity:"1",speed:"fast"});
	});
	
	$(".link").click(function() {
		$(".menuContainer").animate({opacity:"0.25",speed:"fast"});
		$(".menuContainer").animate({opacity:"1",speed:"fast"});
	});
	
	$(".tabs .tab[id^=tab_menu]").click(function() {
		var curMenu=$(this);
		$(".tabs .tab[id^=tab_menu]").removeClass("selected");
		curMenu.addClass("selected");

		var index=curMenu.attr("id").split("tab_menu_")[1];
		$(".menuContainer .tabcontent").css("display","none");
		$(".menuContainer #tab_content_"+index).css("display","block");
	});
});
/* ]]> */