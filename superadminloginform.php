<?php
    session_start();
    include('database/connect.php');
    if(isset($_POST['Login'])){
    
    $superadmin = $_POST['superadmin'];
    $password = $_POST['password'];
        $sql1 = "SELECT * FROM superadminaccounts WHERE username='$superadmin' AND password='$password' ";
        $res1 = mysqli_query($connect,$sql1);

        if(mysqli_num_rows($res1) > 0) {

            $_SESSION['useradmin'] = $superadmin;
            echo "<script>window.open('superadmin/dashboard.php','_self')</script>";
            exit();
        }
        else{

            $wrong = '<html><div style="font-size:13px;" class="alert alert-warning">Username or Password incorrect<span class="glyphicon glyphicon-exclamation-sign" style="float:right;"></span></div></html>'; 

        }  


   }

?>