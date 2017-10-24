'use strict';


//test requete serv sur recherche et affichage de la réponse dans console.log
app.controller('categoriesController', function($scope, $http, $location, VARENV){

	$http.post(VARENV.host+'/categories',{cat_id:'1'}).then(function(res){

		console.log(res.data)

	});


});