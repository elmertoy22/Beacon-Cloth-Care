<?php
    session_start();
    session_destroy();
    unset($_SESSION['adminusername']);
    header("location:../../index.php");
?>