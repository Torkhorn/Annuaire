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
	$routeProvider.when('/profil',{
		templateUrl: 'app/views/profil.php',
		controller: 'profilController'
	})
});