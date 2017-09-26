'use strict';

app.config(function($routeProvider) {
	$routeProvider.when('/accueil',{
		templateUrl: 'app/views/accueil.php',
		controller: 'accueilController'
	})
});