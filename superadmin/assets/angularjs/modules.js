var app=angular.module('POS', ['ngRoute']);

app.config(function($routeProvider){
    $routeProvider
    .when('/basiccare',{
    	controller:'',
    	templateUrl:'assets/partials/POS/BasicCare.php'
    })
    .when('/specialcare',{
    	controller:'',
    	templateUrl:'assets/partials/POS/SpecialCare.php'
    })
    .when('/premiumcare',{
    	controller:'',
    	templateUrl:'assets/partials/POS/PremiumCare.php'
    })
    
    .when('/corporate',{
    	controller:'',
    	templateUrl:'assets/partials/POS/Corporate.php'
    })
    .otherwise({ redirectTo: '/'});
});