<!DOCTYPE html>
<html ng-app="app">
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="<?php echo url('app/lib/angular/angular.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/node_modules/angular-route/angular-route.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/app.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/routing.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/controllers/accueilController.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/controllers/rechercheController.js') ?>"></script>

		
		<title>annuaire ifa</title>
	</head>
	<body>
		<ng-view></ng-view>
	</body>
</html>