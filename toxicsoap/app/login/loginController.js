angular.module('app')
.controller('loginController', ['$scope', '$location',
	function($scope, $location) {
		// Initial state
		$scope.displayError = false;

		// Handlers
		$scope.login = function() {
			var username = $scope.username;
			var password = $scope.password;
			if(username && password) {
				$.ajax({
					type: 'POST',
					url: 'api/api.php/login',
					data: {
						username: username,
						password: password
					},
					success: function() {
						debugger;
						$location.path('dashboard');
					},
					error: function() {
						console.log('error now');
						$scope.$apply(function() {
							$scope.displayError = true;
						});
					}
				});
			}
		};
	}
]);