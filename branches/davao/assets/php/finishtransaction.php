<?php
session_start();
    include('function/connection/connect.php');

    extract($_POST);
    //// add to cart

    $received_by = $_SESSION['username'];


    if(isset($_POST['branch_received_date']) &&
       isset($_POST['date_received']) && 
       isset($_POST['type_customer']) && 
       isset($_POST['name_customer']) && 
       isset($_POST['contact_customer']) && 
       isset($_POST['address_customer']) && 
       isset($_POST['total_kilo']) && 
       isset($_POST['total_pcs'])&& 
       isset($_POST['amount'])&&   
       isset($_POST['pickordeliver'])&&  
       isset($_POST['pickup_date'])&& 
       isset($_POST['pickup_time'])&& 
       isset($_POST['date_release'])&& 
       isset($_POST['remark'])&& 
       isset($_POST['paymentdate_received'])&& 
       isset($_POST['receipt'])&& 
       isset($_POST['notes'])  
      )
    
    {
        
        $query = " INSERT INTO `allsales`
        (
            `branch_received_date`,
            `date_received`,
            `type_customer`,
            `name_customer`,
            `contact_customer`,
            `address_customer`, 
            `total_kilo`,
            `total_pcs`,
            `amount`,
            `pickordeliver`,
            `pickup_date`,
            `pickup_time`,
            `date_release`,
            `remark`,
            `paymentdate_received`,
            `received_by`,
            `receipt`,
            `notes`
        ) VALUES ( 
            '$branch_received_date', 
            '$date_received',  
            '$type_customer',  
            '$name_customer',  
            '$contact_customer',  
            '$address_customer', 
            '$total_kilo',  
            '$total_pcs', 
            '$amount', 
            '$pickordeliver', 
            '$pickup_date',  
            '$pickup_time',  
            '$date_release',  
            '$remark',  
            '$paymentdate_received',  
            '$received_by',  
            '$receipt',  
            '$notes'
            ) 
            ";
        
        if(mysqli_query($connect,$query)){
            echo "pasok na pasok";
        }
        else{
            echo "supottt failed";
        }

    }   


    if(isset($_POST['nexttransaction'])){

        $querydel = "TRUNCATE TABLE addtocart ";
        if(mysqli_query($connect,$querydel)){
             echo '<script>console.log("next transaction complete!" ); </script>';
        }
        else{
        }
    }

    if(isset($_POST['viewallcart'])){

        $data =  '<table style="font-size:13px;">
                            <tr>
                                <th style="background-color:white; text-align:center;">-----------------Description/Items-----------------</th>
                            </tr>'; 

        $displayquery = " SELECT * FROM `addtocart` "; 
        $result = mysqli_query($connect,$displayquery);
    
        
        $sql1="SELECT sum(subtotal) as total FROM addtocart";

        $result1 = mysqli_query($connect,$sql1);
        
        if(mysqli_num_rows($result) > 0){
            

            while ($row = mysqli_fetch_array($result)) {

                $data .= '<tr>  
                            <td style="text-align:center;">Type: '.$row['type'].'</td>
                            <td style="text-align:center;">description: '.$row['description'].'</td>
                            <td style="text-align:center;">Items: '.$row['items'].'</td>
                            <td style="text-align:center;">Status: '.$row['status'].'</td>
                            <td style="text-align:center;">Price: '.$row['price'].'</td>
                            <td style="text-align:center;">New price: '.$row['newprice'].'</td>
                            <td style="text-align:center;">kilos: '.$row['kilos'].'</td>
                            <td style="text-align:center;">Pieces: '.$row['pieces'].'</td>
                            <td style="text-align:center;">Subtotal: ₱'.$row['subtotal'].'</td>
                            
                        </tr>
                        
                            ';
            }

            
        } 

         $data .= '</table>
                    <hr>
                    ';
            echo $data;

          while ($row1 = mysqli_fetch_assoc($result1)){
                $totalall = $row1['total'];  
                $dtotalall = floatval($totalall);
                $toto = number_format($dtotalall,2);

                $data1 = '<table>
                            <td style="text-align:right;">Total :</td>
                            <td style="text-align:right;">₱'.$toto.'</td>
                        </table>';
            }
            echo $data1;
    }
?>