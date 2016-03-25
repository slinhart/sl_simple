$(function() {
	// Listen for hamburger click
	$('.hamburger-wrapper').on('click', function(e) {
		var $navContainer = $('.nav-container');
		if($navContainer.hasClass('slide-down')) {
			$navContainer.removeClass('slide-down');
		}
		else {
			$navContainer.addClass('slide-down');
		}
	});
});