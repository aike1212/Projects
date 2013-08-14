$(document).ready(function(){

  $(".faderItem span").css("opacity", 0);

  $(".faderItem").hover(function(){
    $(this).children("span").fadeTo(500,1);
    return false;
  });

  $(".faderItem").mouseout(function(){
    $(this).children("span").fadeTo(300,0);
    return false;
  });
});