<?php
    session_start();
    include('database/connect.php');
    if(isset($_POST['Login'])){
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $branches = $_POST['branches'];
        $type = $_POST['type'];

        if($branches == "davao"){
            
            include('database/connect_davao.php');
            $sql1 = "SELECT * FROM accounts WHERE username='$username' AND password='$password' AND type='$type' ";
            $res1 = mysqli_query($connect,$sql1); 

            if(mysqli_num_rows($res1) > 0 && $type == "admin") {

                $_SESSION['adminusername'] = $username;
                echo "<script>window.open('branches/davao/dashboard.php','_self')</script>";
                exit();
            }
            
            else if(mysqli_num_rows($res1) > 0 && $type == "employee") {

                $_SESSION['username'] = $username;
                echo "<script>window.open('branches/davao/POS.php','_self')</script>";
                exit();
            }

            
            else{

                $wrong = '<html><div style="font-size:13px;" class="alert alert-warning">Username or Password incorrect<span class="glyphicon glyphicon-exclamation-sign" style="float:right;"></span></div></html>'; 

            }  
        }

        

   }

?>