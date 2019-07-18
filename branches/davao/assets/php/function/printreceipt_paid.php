<?php
    session_start();
    if(isset($_SESSION['email_cus'])) {
        
    }
        else{
            
            $querydel = "DELETE FROM addtocart";
            mysqli_query($connect,$querydel);

            header("location:../../../POS.php");
        }

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Receipt</title>
    
    <style>

    .invoice-box {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 13px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 2px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(6) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 0px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 15px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 10px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 10px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(6) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(6) {
        text-align: left;
    }
    </style>
</head>
<body onload="window.print();">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="6">
                    <table>
                        <tr>
                            <td class="" align="center" >
                                <h2>BEACON CLOTH CARE</h2>
                            </td>
                        </tr>
                        <tr>
                            <td class="" align="center" >Free Pick-up and Deliver</td>
                        </tr>
                        <tr>
                            <td class="" align="center" >Alabang hills Muntinlupa city</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <?php
                include 'connection/connect.php';
                $query = "SELECT * FROM allsales ORDER BY id DESC LIMIT 1";
                $result = mysqli_query($connect,$query);

            ?>
            <tr class="information">
            
                <td colspan="6">
                    <table>
                        <tr>
                            <td>
                                <?php
                                    if(mysqli_num_rows($result) > 0){
                                        
                                    
                                        while ($row = mysqli_fetch_array($result)) {
                                            
                                            $_SESSION['r_id'] = $row['id'];
                                            $_SESSION['r_remark'] = $row['remark'];
                                            $_SESSION['r_cn'] = $row['name_customer'];
                                            $_SESSION['r_address'] = $row['address_customer'];
                                            $_SESSION['r_contact'] = $row['contact_customer'];
                                            $_SESSION['r_pdate'] = $row['pickup_date'];
                                            $_SESSION['r_ptime'] = $row['pickup_time'];
                                            $_SESSION['r_pickordeliver'] = strtoupper($row['pickordeliver']);
            
                                            
                                            
                                            echo '<b>Job Order #: '.$row['id'].'<br></b>';
                                            echo 'Status: '.$row['remark'].'<br>';
                                            echo 'Customer Name: '.$row['name_customer'].'<br>';
                                            echo 'Address: '.$row['address_customer'].'<br>';
                                            echo 'Contact #: '.$row['contact_customer'].'<br>';
                                            echo 'Pick-up/Deliver Date: '.$row['pickup_date'].'<br>';
                                            echo 'Pick-up/Deliver Time: '.$row['pickup_time'].'<br>';
                                            echo '<hr>';
                                            
                                ?>
                            </td>
                        </tr>
                        
                        <tr><h4  align="center">--------------------<?php echo strtoupper($row['pickordeliver'])?>--------------------</h4></tr>
                    </table>
                </td>
            </tr>
            <?php  }} ?>
            
            <?php
                $query2 = "SELECT * FROM addtocart";
                $result2 = mysqli_query($connect,$query2);

            ?>
            <tr style="text-align:center; background-color:;">
                <th style="">Type/Description</th>
                <th style="">Items</th>
                <th style="">Kilos</th>
                <th style="">Pieces</th>
                <th style="">Status</th>
                <th style="">Subtotal</th>
            </tr>
            <tr style="text-align:center;">
                <div id="displaycontentt">
                    <?php
                    if(mysqli_num_rows($result2) > 0){

                            while ($row2 = mysqli_fetch_array($result2)) {
                                    
                                echo '<tr class="item">
                                        <td style="text-align:center;">'.$row2['type'].'<br>'.$row2['description'].'</td>';
                                echo '<td style="text-align:center;">'.$row2['items'].'</td>';
                                echo '<td style="text-align:center;">'.$row2['kilos'].'</td>';
                                echo '<td style="text-align:center;">'.$row2['pieces'].'</td>';
                                echo '<td style="text-align:center;">'.$row2['status'].'</td>';
                                echo '<td style="text-align:center;">₱ '.$row2['subtotal'].'</td>
                                        </tr>';

                            }
                        }
                    
                    ?>
                </div>
            </tr>

            <tr style="font-weight:bold; font-size:18px;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total:</td>
                
                <td>
                   <?php
                    $sql3="SELECT sum(subtotal) as total FROM addtocart";

                    $result3 = mysqli_query($connect,$sql3);
        
                    if(mysqli_num_rows($result3) > 0){


                      while ($row3 = mysqli_fetch_assoc($result3)){
                            $totalall = $row3['total'];  
                            $dtotalall = floatval($totalall);
                            $toto = number_format($dtotalall,2);
                            $_SESSION['totototal'] = $toto;
                            echo '₱ ' .$toto. '';

                        }

                    } 
                    
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
    
        if(isset($_SESSION['email_cus'])) {

            include('../../../../../PHPMailer/PHPMailerAutoload.php');
            $email_customer = $_SESSION['email_cus']; 

            $r_id = $_SESSION['r_id'];
            $r_remark = $_SESSION['r_remark'];
            $r_cn = $_SESSION['r_cn'];
            $r_address = $_SESSION['r_address'];
            $r_contact = $_SESSION['r_contact'];
            $r_pdate = $_SESSION['r_pdate'];
            $r_ptime = $_SESSION['r_ptime'];
            $r_totototal = $_SESSION['totototal'];
            $r_pickordeliver = $_SESSION['r_pickordeliver'];


     $body = '<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
                <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                <style>
                    .invoice-title h2, .invoice-title h3 {
                    display: inline-block;
                    }

                    .table > tbody > tr > .no-line {
                        border-top: none;
                    }

                    .table > thead > tr > .no-line {
                        border-bottom: none;
                    }

                    .table > tbody > tr > .thick-line {
                        border-top: 2px solid;
                    }
                </style>
                <!------ Include the above in your HEAD tag ---------->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="invoice-title" style="background-color:">
                                <h2>Beacon Cloth Care</h2><h3 class="pull-right">Job Order # '.$r_id.' </h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">

                                    **************'.$r_pickordeliver.'**************<br>
                                    <strong>Customer Info:</strong><br>
                                        Status : '.$r_remark.'<br>
                                        Customer Name : '.$r_cn.'<br>
                                        Address : '.$r_address.'<br>
                                        Contact # : '.$r_contact.'<br>
                                        Pickup/Deliver date : '.$r_pdate.'<br>
                                        Pickup/Deliver time : '.$r_ptime.'<br>

                                </div>
                            </div>
                        </div>
                    </div>
                        <tr>
                            <th style="">Type/Description</th>
                            <th style="">Items</th>
                            <th style="">Kilos</th>
                            <th style="">Pieces</th>
                            <th style="">Status</th>
                            <th style="">Subtotal</th>
                        </tr>';

            $query3 = "SELECT * FROM addtocart";
            $result3 = mysqli_query($connect,$query3);
            if(mysqli_num_rows($result3) > 0){
                while ($row3 = mysqli_fetch_array($result3)) {

                $ru_type = $row3['type'];
                $ru_description = $row3['description'];
                $ru_items = $row3['items'];
                $ru_kilos = $row3['kilos'];
                $ru_pieces = $row3['pieces'];
                $ru_status = $row3['status'];
                $ru_subtotal = $row3['subtotal'];


                $body .='
                            <tr>
                                <tr class="item">
                                    <td style="text-align:;">'.$ru_type.'<br>'.$ru_description.'</td>
                                    <td style="text-align:;">'.$ru_items.'</td>
                                    <td style="text-align:;">'.$ru_kilos.'</td>
                                    <td style="text-align:;">'.$ru_pieces.'</td>
                                    <td style="text-align:;">'.$ru_status.'</td>
                                    <td style="text-align:;">₱ '.$ru_subtotal.'</td>
                                </tr>
                            </tr>';    

                }
            }


            $body .='
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                    <h3 class="panel-title"><strong>Total Amount : ₱ '.$r_totototal.'</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            $mail = new PHPMailer;
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'beaconclothc@gmail.com';          // SMTP username
            $mail->Password = 'beaconclothcare123456';                         // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('beaconclothc@gmail.com', 'Beacon Cloth Care');
            $mail->addAddress($email_customer);     // Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'not an official receipt';
            $mail->Body    = '<br /><br />';
            $mail->Body    = $body;

            if(!$mail->send()) {
                echo "Mailer Error: " ;
            }else{

                $result3 = mysqli_query($connect,$query3);
                    if(mysqli_num_rows($result3) > 0){
                        while ($row3 = mysqli_fetch_array($result3)) {

                        $ru_type = $row3['type'];
                        $ru_description = $row3['description'];
                        $ru_items = $row3['items'];
                        $ru_kilos = $row3['kilos'];
                        $ru_pieces = $row3['pieces'];
                        $ru_status = $row3['status'];
                        $ru_price = $row3['price'];
                        $ru_newprice = $row3['newprice'];
                        $ru_subtotal = $row3['subtotal'];


                        $td = ' '.$ru_type.''.'\n'.''.$ru_description.'';

                        $queryreceipt    = " INSERT INTO `receipt`(`jo`, `td`, `items`, `kilos`, `pieces`, `price`, `newprice` ,`status`, `subtotal`) VALUES ( '$r_id',  '$td',  '$ru_items',  '$ru_kilos', '$ru_pieces', '$ru_price', '$ru_newprice', '$ru_status', '$ru_subtotal') ";
                        if(mysqli_query($connect,$queryreceipt)){

                            unset($_SESSION['email_cus']);
                        }
                        else{

                        } 
                    }
                }

                unset($_SESSION['email_cus']);
            }
    }
    else{ 
        $querydel = "DELETE FROM addtocart";
        mysqli_query($connect,$querydel);
        header("location:../../../POS.php");
    }

?>