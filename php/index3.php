<?php
  /* include('php/loginform.php');*/
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Beacon Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
  
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <style type="text/css">
        body{
            
            background-image: url(images/img/bgpos.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>
<body ng-app="myApp" ng-controller="LoginCtrl">
	
	<div class="body">
        <div class="content-left">
            <center><img class="beaconformlogo1" src="images/img/logo-login1%20(2).png" data-aos="fade-right"></center>
        </div>
        <div class="content-right">
            <div class="container-login100">
                <div class="wrap-login100" data-aos="fade-down">
                    <form class="login100-form validate-form" method="post" action="index.php">
                        <span class="login100-form-title p-b-20 p-t-0">
                            <img class="logo1" src="images/img/logoform2.png">
                        </span>

                        <span>
                            <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
                                <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
                                {{alertMessage}}
                            </div>
                        </span>
                        
                            <div class="row">
                                <div class="col-md-6 ">
                                    <select name="branches" class="form-control">
                                      <option value="" disabled selected>Branch</option>
                                      <option value="davao">Davao</option>
                                      <option value="cavite">Cavite</option>
                                      <option value="cebu">Cebu</option>
                                      <option value="muntinlupa">Muntinlupa</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="user" class="form-control">
                                      <option value="" disabled selected>User</option>
                                      <option value="employee">Employee</option>
                                      <option value="admin">Admin</option>
                                      <option value="superadmin">Superadmin</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                <input class="input100" type="text" name="username" placeholder="Username" ng-model="logindata.username">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="password" placeholder="Password" ng-model="logindata.password"
                              autocomplete="off">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="Submit" name="Login">Login</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
	<!--	-->
	</div>
    
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
    <script>
      AOS.init();
    </script>
    <script>
        var app = angular.module('myApp', []);
        app.controller('LoginCtrl', function($scope) { 
    
            $scope.login = function(){
            $http({
                method:"POST",
                url:"login.php",
                data:$scope.logindata
            }).success(function(data){
                if(data.error != ''){
                    $scope.alertMsg = true;   
                    $scope.alertClass = 'alert-danger';   
                    $scope.alertMessage = data.message;   
                    
                }   
                else{
                    location.reload();
                }
            });
                
            };
                
        });
        
    </script>
</html>

