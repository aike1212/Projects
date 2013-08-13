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
	$('.cakes').pajinate({
		num_page_links_to_display : 4,
		items_per_page : 8 /* Display number of items per page */
	});

	$("#sidebar-nav a span").ready(function(){
	$("#sidebar-nav a span").animate({opacity:"1",speed:"fast"});
	});
	
	
	$("#sidebar-nav a").hover(function() {
		$(this).find('span').addClass("hover").stop()
			.animate({
		opacity: '0.50'
		
			}, 1000);
		
		} , function() {
		$(this).find('span').removeClass("hover").stop()
			.animate({
		opacity: '1'
			}, 1000);
	});

	$(".gallery a span").ready(function(){
	$(".gallery a span").animate({opacity:"0.50",speed:"fast"});
	});
	
	
	$(".gallery a").hover(function() {
		$(this).find('span').addClass("hover").stop()
			.animate({
		opacity: '0.25'
		
			}, 1000);
		
		} , function() {
		$(this).find('span').removeClass("hover").stop()
			.animate({
		opacity: '1'
			}, 2000);
	});
});

/*Jquery Validator */ 
jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, ""); 
	return this.optional(element) || phone_number.length > 9 &&
    phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number");

jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Letters only please");
  
$("#Contact_Form").validate({
    rules: {
      NameTxt:{
        required: true,
      lettersonly:true
      },
      EmailTxt: {
        required: true,
        email: true
      },
    AddressTxt: "required",
    CityTxt: "required",
    StateTxt: "required",
    ZipTxt: "required",
    CountryLst: "required",
    MessageTxt: "required",
    PhoneNum: {
        required: true,
        phoneUS: true
      },
     FaxNum: {
        required: true,
        phoneUS: true
      },
      SubjectTxt: "required",
      CaptchaTxt: "required"
    }
}); 
/* ]]> */