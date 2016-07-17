$(function() {

	// Listen for hamburger click
	$('.hamburger-wrapper').on('click', function(e) {
		var $navContainer = $('.mobile-nav-container');
		if($navContainer.hasClass('slide-down')) {
			$navContainer.removeClass('slide-down');
		}
		else {
			$navContainer.addClass('slide-down');
		}
	});

	// Watch for scroll to bottom of page
	$(document).scroll(function () {
		var y = $(this).scrollTop();
		if (screen.height + y === $(this).height()) {
				$('.scroll-top-btn-container').fadeIn(900);
		} else {
				$('.scroll-top-btn-container').fadeOut(600);
		}
	});

	$('.scroll-top-btn-container').click(function() {
		window.scrollTo(0,0);
	});
});