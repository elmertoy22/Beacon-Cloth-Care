<?php
    session_start();

    include('function/connection/connect.php');
    include('../../../../PHPMailer/PHPMailerAutoload.php');

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
       isset($_POST['email_customer'])&& 
       isset($_POST['receipt'])&& 
       isset($_POST['notes'])  
      )
    
    {
        $_SESSION['email_cus'] = $_POST['email_customer'];
        
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
            `email_customer`,
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
            '$email_customer',  
            '$receipt',  
            '$notes'
            ) 
            ";
        
        if(mysqli_query($connect,$query)){
            echo "success";
        }
        else{
            echo "supottt failed";
        }

    }   


    if(isset($_POST['deletecartnewtransac'])){
                
        if(isset($_SESSION['email_cus'])){
            error_log('may email pA ');
        }
        else{
            
           $querydel = "DELETE FROM addtocart ";
            if(mysqli_query($connect,$querydel)){
                 

            }
        }
       
    }

  /*  if(isset($_POST['viewallcart'])){
        

        $data =  
            '
            <div class="row">
              <div class="col-md-12">
                  <div class="col-md-12" align="center">
                      <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label><br>
                      <label>Free Pick-up and Delivery</label><br>
                      <label>Alabang hills muntinlupa city</label><br>
                  </div>
                  <div class="col-md-12" align="center">
                      <label id="ru_pickordeliver" style="font-size:20px;"></label>

                  </div>
                  <div class="col-md-12" align="center">
                      <div class="col-md-6">
                          <label>pickup/deliver Date: <label id="ru_pickordeliverdate" ></label></label><br>
                          <label>Received Date: <label id="ru_receiveddate" ></label></label><br>
                          <label>Job Order No : <label id="joborder_unpaid"></label></label><br>
                          <label>Customer Name: <label id="ru_customername"><span></span></label></label><br>

                      </div>
                      <div class="col-md-6">
                          <label>pickup/deliver Time: <label id="ru_pickordelivertime" ></label></label><br>
                          <label>Status : <label>Unpaid</label></label><br>
                          <label>Contact # : <label id="ru_customercontact"></label> </label><br>
                          <label>Address : <label id="ru_customeraddress"></label></label><br>
                      </div>



                  </div>
                </div>
            </div>
            
            <table style="font-size:12px;" align="center">
                    <thead>
                            <tr>
                                <th style="background-color:transparent;">Type/Description</th>
                                <th style="background-color:transparent;">Items</th>
                                <th style="background-color:transparent;">Status</th>
                                <th style="background-color:transparent;">Price</th>
                                <th style="background-color:transparent;">New price</th>
                                <th style="background-color:transparent;">Kilos</th>
                                <th style="background-color:transparent;">Pieces</th>
                                <th style="background-color:transparent;">Subtotal</th>
                            </tr>
                    <thead>'; 

        $displayquery = " SELECT * FROM `addtocart` "; 
        $result = mysqli_query($connect,$displayquery);
    
        
        $sql1="SELECT sum(subtotal) as total FROM addtocart";

        $result1 = mysqli_query($connect,$sql1);
        
        if(mysqli_num_rows($result) > 0){
            

            while ($row = mysqli_fetch_array($result)) {

                $data .= '<tbody>
                            <tr>  
                                <td style="text-align:center;">'.$row['type'].'<br>'.$row['description'].'<br></td>
                                <td style="text-align:center;">'.$row['items'].'</td>
                                <td style="text-align:center;">'.$row['status'].'</td>
                                <td style="text-align:center;">'.$row['price'].'</td>
                                <td style="text-align:center;">'.$row['newprice'].'</td>
                                <td style="text-align:center;">'.$row['kilos'].'</td>
                                <td style="text-align:center;">'.$row['pieces'].'</td>
                                <td style="text-align:center;">₱'.$row['subtotal'].'</td>
                            
                            </tr>
                        <tbody>
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
    }  */

?>