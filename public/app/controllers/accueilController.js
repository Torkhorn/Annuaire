'use strict';

app.controller('accueilController', function($scope, $http, $location, VARENV){

	$scope.getlist= function(){
		$http.get(VARENV.host+'/accueil/65').then(function(res){
		console.log(res.data);
		$scope.data=res.data;
		})
	};

	$scope.data={};



});