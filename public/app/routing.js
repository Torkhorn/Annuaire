'use strict';

app.config(function($routeProvider) {
	$routeProvider.when('/login',{
		templateUrl: 'app/views/login.php',
		controller: 'loginController'
<<<<<<< HEAD
=======
	})
	$routeProvider.when('/accueil',{
		templateUrl: 'app/views/accueil.php',
		controller: 'accueilController'
>>>>>>> 15c284a66f360eed5777ead1bb6b5b2dd58fc3f0
	})
	$routeProvider.when('/profil',{
		templateUrl: 'app/views/profil.php',
		controller: 'profilController'
	})
});