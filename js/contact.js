(function() {
	$('.message-form').submit(function(e) {
		e.preventDefault();

		var $email = $(this).find('.email-input');
		var $message = $(this).find('.message-input');

		var data = {
			email: $email.val(),
			message: $message.val()
		};

		$.ajax({
			type: 'POST',
			url: 'https://6iksav97zk.execute-api.us-west-2.amazonaws.com/initial_api/message',
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