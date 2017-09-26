'use strict';

var app = angular.module('app', ['ngRoute']);
app.config(function(){
});

app.constant('VARENV', {
	//à définir en fonction de l'architecture du projet en local
	host:'/AnnuaireIFA/annuaire-proto/public'
});