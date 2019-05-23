
<?php
    ob_start();
    session_start();
    $connect=mysqli_connect("localhost","root","","beaconclothcare") or die (mysql_error());

   if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM superadminaccounts WHERE username='$username' AND password='$password' ";
    $res = mysqli_query($connect,$sql);   
    if(mysqli_num_rows($res) > 0){

        $success = '<html><div class="spinner-border text-primary" role="status">
          <span class="sr-only">Loading...</span>
        </div></html>'; 
        
      ///  echo '<script>alert("Successfully login ! ")</script>';
        echo "<script>window.open('index.php','_self')</script>";
        exit();
    }      
       else{
        
        $wrong = '<html><div style="font-size:13px;" class="alert alert-warning">Username or Password incorrect<span class="glyphicon glyphicon-exclamation-sign" style="float:right;"></span></div></html>'; 
          
       }
   }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beacon Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <style type="text/css">
        body{
            
            background-image: url(assets/img/bgpos.png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>
<body>
	
	<div class="body">
        <div class="content-left">
            <center><img class="beaconformlogo1" src="assets/img/logo-login1%20(2).png" data-aos="fade-right"></center>
        </div>
        <div class="content-right">
            <div class="container-login100">
                <div class="wrap-login100" data-aos="fade-down">

                    <form class="login100-form validate-form" method="post" action="login.php">

                        <span class="login100-form-title p-b-20 p-t-0">
                            <img class="logo1" src="assets/img/logoform2.png">
                        </span>
                        <span>
                            <?php
                                if(isset($wrong)){
                                    echo $wrong;
                                }
                            ?> 
                        </span> 
                        <br> 
                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="text" name="username" placeholder="Username" value="<?php 
                                 if (isset($username)) 
                                  echo $username; 
                             ?>" autocomplete="off">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password" value="<?php 
                             if (isset($password)) 
                              echo $password; 
                         ?>" autocomplete="off">
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
</html>

