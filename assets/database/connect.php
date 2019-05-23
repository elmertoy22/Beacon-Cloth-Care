<?php
    session_start();
    
    $connect=mysql_connect("localhost","root","") or die (mysql_error());
    $database=mysql_select_db('beaconclothcare', $connect) or die(mysql_error());
?>