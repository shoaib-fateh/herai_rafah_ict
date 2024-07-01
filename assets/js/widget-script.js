(function( $ ) {
	'use strict';

    // $('.menu-toggle').click(function(){
    //     $(this).toggleClass('times');
    //     $('.header-nav').slideToggle();
    // });

    // $('.menu-ul li .sub-menu-toggle').click(function(){
    //     $(this).siblings('.sub-menu').slideToggle();
    // });

	// Menu Style Two
	
	// Sticky Header
	// var wind = $(window);
	// var sticky = $('#sticky-header');
	// wind.on('scroll', function () {
	// 	var scroll = wind.scrollTop();
	// 	if (scroll < 150) {
	// 		sticky.removeClass('sticky-nav');
	// 	} else {
	// 		sticky.addClass('sticky-nav');
	// 	}
	// });

	// Menu Toggle
	$(".solute-menu-toggle").click(function(){
		$(this).toggleClass('active');
		$('.solute-menu-wrapper').slideToggle();
	});

	$('.search--form').hide();

	$('.search-toggle').click(function(){
		$(this).toggleClass('active');
		$('.search--form').slideToggle();
	});

	// if ($(window).width() < 1200){
	// 	$(".menu-item-has-children").click(function(){
	// 		$(".sub-menu", this).slideToggle("slow");
	// 	});
	// };


})( jQuery );