<?php
      $connect=mysqli_connect("localhost","root","","bcc-cavite") or die (mysqli_error());
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>