<?php
    include('superadminloginform.php');
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
  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
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
                    <form class="login100-form validate-form" method="post" action="superadminlogin.php" >
                        <span class="login100-form-title p-b-20 p-t-0">
                            <img class="logo1" src="images/img/logoform2.png">
                        </span>

                        <span>
                            <?php
                                if(isset($wrong)){
                                    echo $wrong;
                                }
                            ?> 
                        </span>
                            <br>
                            <div class="wrap-input100 validate-input" data-validate ="Enter username">
                                <input class="input100" type="text" name="superadmin" placeholder="Username" id="username" value="<?php 
                                     if (isset($superadmin)) 
                                      echo $superadmin; 
                                 ?>" autocomplete="off">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="password" id="password" placeholder="Password" value="<?php 
                                 if (isset($password)) 
                                  echo $password; 
                             ?>" autocomplete="off">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="submit" id="login-form" name="Login">Login</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
	<!--	-->
	</div>
    <script src="js/main.js"></script>
<!--===============================================================================================
    <script>
        $(document).ready(function(){
            $("#login-btn").click(function(){
                var username=$('#username').val();
                var password=$('#password').val();
                    $.ajax({
                        url:'loginform.php',
                        method:'POST',
                        data:{
                            username:username,
                            password:password
                        },
                    success:function(data, status, xhr){
                       
                    }
                });
            });
        });
    </script>
-->
    </body>
</html>


