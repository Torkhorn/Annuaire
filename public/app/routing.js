'use strict';

app.config(function($routeProvider) {
	$routeProvider.when('/login',{
		templateUrl: 'app/views/login.php',
		controller: 'loginController' 
	})
	$routeProvider.when('/accueil',{
		templateUrl: 'app/views/accueil.php',
		controller: 'accueilController'
	})

	.when('/recherche',{
		templateUrl: 'app/views/recherche.php',
		controller: 'rechercheController'
	})
});