(function() {
	$('.message-form').submit(function(e) {
		e.preventDefault();

		// TODO: Disable button here to avoid double submissions

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