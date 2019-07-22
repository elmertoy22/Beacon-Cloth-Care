<?php
    session_start();
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
                
                $ereceipt_reprint_id = $_SESSION['ereceipt_reprint_id'];
                include 'connection/connect.php';
                $query = "SELECT * FROM `allsales` WHERE id = '$ereceipt_reprint_id'";
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
                $query2 = "SELECT * FROM receipt WHERE jo = '$ereceipt_reprint_id'";
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
                                        <td style="text-align:center;">'.$row2['td'].'</td>';
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
                    $query = "SELECT * FROM `allsales` WHERE id = '$ereceipt_reprint_id'";
                    $result = mysqli_query($connect,$query);
        
                    if(mysqli_num_rows($result) > 0){
                                      
                        while ($row = mysqli_fetch_array($result)) {

                            echo $row['amount'];
                            }
                        }
                    
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

