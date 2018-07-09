/* Sticky Header */
$(document).scroll(function() {
    if ($(document).scrollTop() > 150) {
        $("header.global").addClass("sticky");
    } else if ($(document).scrollTop() < 150) {
        $("header.global").removeClass("sticky");
    }
    
});

$(window).on('load', function() {
    if ($(document).scrollTop() > 150) {
        $("header.global").addClass("sticky");
    } else if ($(document).scrollTop() < 150) {
        $("header.global").removeClass("sticky");
    }

});

$(document).ready(function () {
    if ($(document).scrollTop() > 150) {
        $("header.global").addClass("sticky");
    } else if ($(document).scrollTop() < 150) {
        $("header.global").removeClass("sticky");
    }
    
  setTimeout(function(){
    $('button').on("click", function() {
      $('.overlay').fadeIn(300);
      $('body').addClass('overlay-enabled');
    });
    $('.overlay').on("click", function() {
      $('.overlay').fadeOut(400);
      $('body').removeClass('overlay-enabled');
    });
  });
});

$(window).bind('scroll',function(e){
  parallaxScroll();
 });

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	$('.parallax2').css('top',(0+(scrolled*.25))+'px');
  $('.parallax').css('top',(0+(scrolled*.5))+'px');
	$('#parallax-lvl-2').css('top',(0-(scrolled*.75))+'px');
	$('#parallax-lvl-3').css('top',(0-(scrolled*.9))+'px');
}