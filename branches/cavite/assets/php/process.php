<?php
    session_start();
    include('assets/database/connect.php');

    if (isset($_GET['edit'])){
        
        $id = $_GET['id'];
        $result = $connect->query("SELECT * FROM POSservices WHERE id=$id") or die ($connect->error());
        if(count($result)==1){
            
            $row = $result->fetch_array();
            $desc = $row['description'];
            $type = $row['type'];
            $kilo = $row['kilo'];
            $pieces = $row['pieces'];
        }
        else{
            $mali = 'wdwdwdw';
        }
    }
?>