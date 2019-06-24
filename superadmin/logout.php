<?php
    session_start();
    session_destroy();
    unset($_SESSION['superadmin']);
    unset($_SESSION['beaconclothcare']);
    header("location:../superadminlogin.php");
?>