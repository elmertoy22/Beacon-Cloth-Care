<?php
    session_start();
    include('database/connect.php');
    if(isset($_POST['Login'])){
        
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM superadminaccounts WHERE username='$username' AND password='$password' ";
        $res = mysqli_query($connect,$sql); 

        $sql1 = "SELECT * FROM davaoadminaccounts WHERE username='$username' AND password='$password' ";
        $res1 = mysqli_query($connect,$sql1); 



        if(mysqli_num_rows($res) > 0){

            $_SESSION['username'] = $username;
            echo "<script>window.open('dashboard.php#/dashboard','_self')</script>";
            exit();
        }
        else if(mysqli_num_rows($res1) > 0){

            $_SESSION['username'] = $username;
            echo "<script>window.open('POS.php','_self')</script>";
            exit();
        }      
        else{
            $wrong = '<html><div style="font-size:13px;" class="alert alert-warning">Username or Password incorrect<span class="glyphicon glyphicon-exclamation-sign" style="float:right;"></span></div></html>'; 

        }
   }

?>