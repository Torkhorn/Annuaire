'use strict';


//test requete serv sur recherche et affichage de la réponse dans console.log
app.controller('rechercheController', function($scope, $http, $location, VARENV){

	$http.post(VARENV.host+'/recherche',{form_id:'1'}).then(function(res){

		console.log(res.data)

	});


});