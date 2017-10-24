'use strict';

app.controller('accueilController', function($scope, $http, $location, VARENV){

	console.log("coucou");
	$scope.getlist= function(){
		$http.get(VARENV.host+'/accueil').then(function(res){
		console.log(res.data);
		$scope.data=res.data;
		})
	};

	$scope.data={};



});