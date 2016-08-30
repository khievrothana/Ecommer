var app = angular.module('app', ['ngRoute']);
app.config(function($routeProvider){
	$routeProvider
	.when('/', {
		templateUrl : './views/dashboard/dashboard.html',
		controller : 'HomeController'
	})
})


app.controller('HomeController', function($scope){
	console.log('working');
})