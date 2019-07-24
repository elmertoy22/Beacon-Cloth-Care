<?php
    include('loginform.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
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
<body>
	
	<div class="body">
        <div class="content-left">
            <center><img class="beaconformlogo1" src="images/img/logo-login1%20(2).png" data-aos="fade-right"></center>
        </div>
        <div class="content-right">
            <div class="container-login100">
                <div class="wrap-login100" data-aos="fade-down">
                    <form class="login100-form">
                        <span class="login100-form-title p-b-20 p-t-0">
                            <img class="logo1" src="images/img/logoform2.png">
                        </span>

                        <span id="wrong">
                            
                        </span>
                        
                            <div class="row">
                                <div class="col-md-6 ">
                                    <p style="color:white">Branches</p>
                                    <select id="branches" name="branches" class="form-control" required>
                                      <option value="" disabled selected >select</option>
                                      <option value="makati">Makati</option>
                                      <option value="davao">Davao</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <p style="color:white">Type</p>
                                    <select id="type" name="type" class="form-control" required>
                                      <option value="" disabled selected>select</option>
                                      <option value="employee">Employee</option>
                                      <option value="admin">Admin</option>  
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="wrap-input100 validate-input" data-validate ="Enter username">
                                <input class="input100" type="text" name="username" placeholder="Username" id="username"  autocomplete="off">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="button" id="login-form" onclick="login()">Login</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
	<!--	-->
	</div>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function login(){
        var username = $("#username").val();
        var password = $("#password").val();
        var branches = $("#branches").val();
        var type = $("#type").val();
            
        if(branches == null){
            swal("Opps!", "Please choose your branches!", "error");
        }    
        else if(type == null){
            swal("Opps!", "Please choose Type!", "error");
        }   
        else if(username == ""){
            swal("Opps!", "Please enter a username!", "error");
        }  
        else if(password == ""){
            swal("Opps!", "Please enter a password!", "error");
        }
        else{

            $.ajax({
                url:"loginform.php",
                type:"POST",
                data:{
                    username:username,
                    password:password,
                    branches:branches,
                    type:type
                },
                success:function(data,status){
                    $('#wrong').show();
                    $('#wrong').html(data);
                },

            });
     
        }
        
        }
    </script>
    
    
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


