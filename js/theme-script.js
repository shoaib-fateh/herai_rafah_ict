(function( $ ) {
	'use strict';

	/*================
	 Mobile Menu
	==================*/

	$('.menu-toggle').click(function(){
		$('.menu-content').slideToggle();
	});

	$('.menu-item-has-children a i').click(function(e){
		e.preventDefault();
		$(this).parents('a').siblings('.sub-menu').slideToggle();
	});
	
	/*================
	 Search Popup
	==================*/

	if($('.search-icon').length) {
		$('.search-icon').on('click', function() {
			$('body').addClass('search-active');
		});
		$('.search-close').on('click', function() {
			$('body').removeClass('search-active');
		});
	}
	
	// Sticky Header
	var wind = $(window);
	var sticky = $('#sticky-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 150) {
			sticky.removeClass('sticky-nav');
		} else {
			sticky.addClass('sticky-nav');
		}
	});

	// Team
	$(".social-icons").hide();
	$('.team-button').click(function(){
		$(this).siblings(".social-icons").slideToggle();
		$(this).toggleClass('active');
	});

	// Team 2
    $(".social-icons2").hide();
    $('.team-button2').click(function(){
        $(this).siblings(".social-icons2").slideToggle("slow");
    });
    
    // Scroll to Top
    
    if($('.prgoress_scrollup path').length){
        var progressPath = document.querySelector('.prgoress_scrollup path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
        var updateProgress = function () {
            var scroll = $(window).scrollTop();
            var height = $(document).height() - $(window).height();
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;
        };
        updateProgress();
        $(window).on('scroll', updateProgress);
        var offset = 250;
        var duration = 550;
        jQuery(window).on('scroll', function () {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.prgoress_scrollup').addClass('active-progress');
            } else {
                jQuery('.prgoress_scrollup').removeClass('active-progress');
            }
        });
        jQuery('.prgoress_scrollup').on('click', function (event) {
            event.preventDefault();
            jQuery('html, body').animate({ scrollTop: 0 }, duration);
            return false;
        });
    }

})( jQuery );