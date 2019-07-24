var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    templateUrl : "index.php"
  })
  .when("/davaoadmin", {
    templateUrl:'branches/davao/dashboard.php'
  })
  .when("/davaoPOS", {
    templateUrl:'branches/davao/POS.php'
  })
});