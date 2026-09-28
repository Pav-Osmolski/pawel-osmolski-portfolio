// JavaScript Document

// Smooth scroll
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 500);
            return false;
        }
    }
});
});

// Show header when scrolling
$(window).scroll(function() {
    if ($(this).scrollTop() < 204) {
        $("#header_container").fadeOut('fast');
    }
    else {
        $("#header_container").fadeIn('fast');
    }
});

// YouTube z-index fix
$(document).ready(function(){
    $('iframe').each(function(){
          var url = $(this).attr("src");
          var char = "?";
          if(url.indexOf("?") != -1){
                  var char = "&";
           }
         
          $(this).attr("src",url+char+"wmode=transparent");
    });
});

// High DPI image replacer
function highdpi_init() {
	if(jQuery('.replace-2x').css('font-size') == "1px") {
		var els = jQuery("img.replace-2x").get();
		for(var i = 0; i < els.length; i++) {
			var src = els[i].src
			src = src.replace("images", "images/hires");
			els[i].src = src;
		}
	}
}
jQuery(document).ready(function() {
	highdpi_init();
});

// ResponsiveSlides
  $(function() {
    $(".rslides").responsiveSlides();
});