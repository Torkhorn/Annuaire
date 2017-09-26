<!DOCTYPE html>
<html ng-app="app">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="app/css/custom.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo url('app/lib/angular/angular.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/node_modules/angular-route/angular-route.min.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/app.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/routing.js') ?>"></script>
		<script type="text/javascript" src="<?php echo url('app/controllers/accueilController.js') ?>"></script>
		
		<title>annuaire ifa</title>
	</head>
	<body>
		<ng-view></ng-view>
	</body>
</html>