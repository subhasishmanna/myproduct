(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();
// jQuery smooth scroll
/* Scroll to specific section on front page */
$(function() {
	$('li.smooth-menu a').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: (target.offset().top - 80)
				}, 500);
				return false;
			}
		}
	});
});
	//scroll pie	
$('body').scrollspy({
	target:'.navbar-collapse',
	offset: 95
	
});
        


   
	$('.parallax-bg').scrolly({bgParallax: true});
	
	
	});


    jQuery(window).load(function(){

      
    });


}(jQuery));	


// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.header-area').addClass('sticky');
    } else {
        $('.header-area').removeClass('sticky');
    }
});