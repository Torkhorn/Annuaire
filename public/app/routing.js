'use strict';

app.config(function($routeProvider) {
	$routeProvider.when('/login',{
		templateUrl: 'app/views/login.php',
		controller: 'loginController'
	})
});