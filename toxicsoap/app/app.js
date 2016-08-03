angular.module('app', ['ngRoute'])
.config([
	'$routeProvider',
	function($routeProvider) {
		$routeProvider.
			when('/', {
				templateUrl: 'app/login/loginTemplate.html',
				controller: 'loginController'
			}).
			when('/register', {
				templateUrl: 'app/login/registerTemplate.html',
				controller: 'registerController'
			}).
			when('/dashboard', {
				templateUrl: 'app/dashboard/dashboard.html',
				controller: 'dashboardController'
			}).
			otherwise({
				redirectTo: '/'
			});
	}
]);