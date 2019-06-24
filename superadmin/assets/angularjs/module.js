var app=angular.module('dashboard', ['ngRoute']);

app.config(function($routeProvider){
    $routeProvider
    .when('/dashboard',{
    	controller:'',
    	templateUrl:'assets/partials/dashboard.php'
    })
    .when('/branches',{
    	controller:'',
    	templateUrl:'assets/partials/branches.php'
    })
    .when('/accounts',{
    	controller:'',
    	templateUrl:'assets/partials/accounts.php'
    })
    .otherwise({ redirectTo: '/'});
});