(function() {
	// Disable form submission on 'enter' keypress
	$('form input').on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) {
			e.preventDefault();
			return false;
		}
	});

	// Handle form submission
	$('.message-form').submit(function(e) {
		e.preventDefault();

		if()

		// Disable button to avoid double submissions
		var $submitBtn = $(this).find('.submit-btn');
		$submitBtn.prop('disabled', true);


		var $email = $(this).find('.email-input');
		var $message = $(this).find('.message-input');

		var data = {
			email: $email.val(),
			message: $message.val()
		};

		$.ajax({
			type: 'POST',
			url: 'https://drm5sqqkmj.execute-api.us-west-2.amazonaws.com/init_prod/message',
			dataType: 'json',
			contentType: 'application/json',
			data: JSON.stringify(data),
			success: function() {
				$email.val('');
				$message.val('');

				console.log('TODO: display proper success messsage');
			},
			error: function() {
				alert('An error occured submitting message.');
			}
		});
	});
})();