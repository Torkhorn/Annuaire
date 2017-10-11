'use strict';

app.controller('loginController', function($scope, $http, $location, VARENV){

	$scope.getlist= function(){
		$http.get(VARENV.host+'/login/65').then(function(res){
		console.log(res.data);
		$scope.data=res.data;
		})
	};

	$scope.data={};

});