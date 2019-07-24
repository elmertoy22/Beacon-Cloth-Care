<?php
    include('connection/connect.php');
    extract($_POST);

    session_start();
    /////displaying cart

    if(isset($_POST['unpaid_list']))
    {
        $data =  '
            <div class="tableFixHead">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th style="color:white; text-align:center;">JOb ORder #</th>
                            <th style="color:white; text-align:center;">customer type</th>
                            <th style="color:white; text-align:center;">customer name</th>
                            <th style="color:white; text-align:center;">amount</th>
                            <th style="color:white; text-align:center;">remark</th>
                            <th style="color:white; text-align:center;"></th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `allsales` WHERE remark = 'Unpaid' "; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                        <td style="text-align:center;">'.$row['id'].'</td>
                        <td style="text-align:center;">'.$row['type_customer'].'</td>
                        <td style="text-align:center;">'.$row['name_customer'].'</td>
                        <td style="text-align:center;">'.$row['amount'].'</td>
                        <td style="text-align:center;">'.$row['remark'].'</td>
                        <td style="text-align:center;"><a href="#unpaid" data-toggle="modal"><button onclick="paynowprocess('.$row['id'].')" class="btn btn-success">pay now</button></a></td>
                    </tr>
                </tbody>';
            }
        } 
        else{
           echo "NO DATA RECORDS";
        }
         $data .= '</table></div>';
            echo $data;

    }

    if(isset($_POST['unpaid_search']))
    {
        $data =  '
            <div class="tableFixHead">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th style="color:white; text-align:center;">JOb ORder #</th>
                            <th style="color:white; text-align:center;">customer type</th>
                            <th style="color:white; text-align:center;">customer name</th>
                            <th style="color:white; text-align:center;">amount</th>
                            <th style="color:white; text-align:center;">remark</th>
                            <th style="color:white; text-align:center;"></th>
                        </tr>

                    </thead>
                    '; 
        
        $unpaid_search = $_POST['unpaid_search'];
        $displayquery = " SELECT * FROM `allsales` WHERE remark = 'Unpaid' and CONCAT(`id`,`name_customer`) LIKE '%$unpaid_search%'"; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                        <td style="text-align:center;">'.$row['id'].'</td>
                        <td style="text-align:center;">'.$row['type_customer'].'</td>
                        <td style="text-align:center;">'.$row['name_customer'].'</td>
                        <td style="text-align:center;">'.$row['amount'].'</td>
                        <td style="text-align:center;">'.$row['remark'].'</td>
                        <td style="text-align:center;"><a href="#unpaid" data-toggle="modal"><button onclick="paynowprocess('.$row['id'].')" class="btn btn-success">pay now</button></a></td>
                    </tr>
                </tbody>';
            }
        } 
        else{
           $data =  "<td>NO DATA RECORDS</td>";
        }
         $data .= '</table></div>';
            echo $data;

    }  


    if(isset($_POST['id']) && isset($_POST['id']) != "")
        {
            $pn_id = $_POST['id'];
            
            $query = "SELECT * FROM `allsales` WHERE id = '$pn_id'";
            if (!$result = mysqli_query($connect,$query)) {
                exit(mysqli_error());
            }
            else{
                
           
            }
            $response = array();

            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $response = $row;
                }
            }else
            {
                $response['status'] = 200;
                $response['message'] = "Data not found!";
            }
          //     PHP has some built-in functions to handle JSON.
        // Objects in PHP can be converted into JSON by using the PHP function json_encode(): 
            echo json_encode($response);
        
        
        }



    ///update table
    if(isset($_POST['hidden_pn_id']))
    {
        
        // get values
        $hidden_pn_id = $_POST['hidden_pn_id'];
        $_SESSION['unpaidjono'] = $_POST['hidden_pn_id'];
         echo '<script>alert('.$_SESSION['unpaidjono'].');</script>';
        $paymentdate_received = $_POST['paymentdate_received'];
        $remark = $_POST['remark'];
        
        $query = "UPDATE `allsales` SET remark = '$remark', paymentdate_received = '$paymentdate_received' WHERE id = '$hidden_pn_id'";
        if (!$results = mysqli_query($connect,$query)) {
            exit(mysqli_error());
        }
        else{
            ////dito ilalagay yung receipt send
            echo $_SESSION['unpaidjono'];
           
        }
    }
          



///////////////////////customer list
        if(isset($_POST['customerlist']))
    {
        $data =  '
            <div class="tableFixHead">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th style="color:white;">JOb ORder #</th>
                            <th style="color:white;">customer type</th>
                            <th style="color:white;">customer name</th>
                            <th style="color:white;">Remark</th>
                            <th style="color:white;">date release</th>
                            <th style="color:white;"></th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `allsales`"; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
                             
                $dd = $row['date_received'];

                $data .= '<tbody>
                    <tr id="dd">  
                        <td style="text-align:center;">'.$row['id'].'</td>
                        <td style="text-align:center;">'.$row['type_customer'].'</td>
                        <td style="text-align:center;">'.$row['name_customer'].'</td>
                        <td style="text-align:center;">'.$row['remark'].'</td>
                        <td style="text-align:center;">'.$row['date_release'].'</td>
                        <td style="text-align:center;"><a href="#customer_details" data-toggle="modal"><button onclick="customer_details('.$row['id'].')" class="btn btn-success">View</button></a></td>
                    </tr>
                </tbody>';

            }
        } 
        else{
           echo "NO DATA RECORDS";
        }
         $data .= '</table></div>';
            echo $data;

    } 
///////////////////////receipt show
        if(isset($_POST['showreceipt']))
    {
        $showreceipt = $_POST['showreceipt'];
        $data =  '
            <div class="">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th style="color:white; width:15%;">Type</th>
                            <th style="color:white; width:25%;">Items</th>
                            <th style="color:white; width:15%;">Kilos</th>
                            <th style="color:white; width:15%;">Pieces</th>
                            <th style="color:white; width:15%;">Status</th>
                            <th style="color:white; width:15%;">Subtotal</th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `receipt` WHERE jo = '$showreceipt'"; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                       <td style="text-align:; width:15%;">'.$row['td'].'</td>
                        <td style="text-align:; width:25%;">'.$row['items'].'</td>
                        <td style="text-align:; width:15%;">'.$row['kilos'].'</td>
                        <td style="text-align:; width:15%;">'.$row['pieces'].'</td>
                        <td style="text-align:; width:15%;">'.$row['status'].'</td>
                        <td style="text-align:; width:15%;">₱ '.$row['subtotal'].'</td>
                    </tr>
                </tbody>';
            }
        } 
        else{
           echo "NO DATA RECORDS";
        }
         $data .= '</table></div>';
            echo $data;

    } ///////////////////////receipt show
 
///////////////////////customer list
        if(isset($_POST['customerlist_search']))
    {
        $data =  '
            <div class="tableFixHead">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th style="color:white;">JOb ORder #</th>
                            <th style="color:white;">customer type</th>
                            <th style="color:white;">customer name</th>
                            <th style="color:white;">Remark</th>
                            <th style="color:white;">date release</th>
                            <th style="color:white;"></th>
                        </tr>

                    </thead>
                    '; 
        $customerlist_search = $_POST['customerlist_search'];    
        $displayquery = " SELECT * FROM `allsales` WHERE CONCAT(`id`,`name_customer`) LIKE '%$customerlist_search%'"; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                        <td style="text-align:center;">'.$row['id'].'</td>
                        <td style="text-align:center;">'.$row['type_customer'].'</td>
                        <td style="text-align:center;">'.$row['name_customer'].'</td>
                        <td style="text-align:center;">'.$row['remark'].'</td>
                        <td style="text-align:center;">'.$row['date_release'].'</td>
                        <td style="text-align:center;"><a href="#customer_details" data-toggle="modal"><button onclick="customer_details('.$row['id'].')" class="btn btn-success">View</button></a></td>
                    </tr>
                </tbody>';
            }
        } 
        else{
           echo "NO DATA RECORDS";
        }
         $data .= '</table></div>';
            echo $data;

    } 


    ///update customer list - releasing
    if(isset($_POST['hidden_cd_id']))
    {
        
        // get values
        $hidden_cd_id = $_POST['hidden_cd_id'];
        $date_release = $_POST['date_release'];
        
        $query = "UPDATE `allsales` SET date_release = '$date_release' WHERE id = '$hidden_cd_id'";
        if (!$results = mysqli_query($connect,$query)) {
            exit(mysqli_error());
        }
    }

    ///update customer list - received
    if(isset($_POST['hidden_received_id']) && ($_POST['date_received']))
    {
        
        // get values
        $hidden_received_id = $_POST['hidden_received_id'];
        $date_received = $_POST['date_received'];
        
        $query = "UPDATE `allsales` SET date_received = '$date_received' WHERE id = '$hidden_received_id'";
        if (!$results = mysqli_query($connect,$query)) {
            exit(mysqli_error());
        }
    }
    ///update customer list - reprint receipt
    if(isset($_POST['ereceipt_reprint_id']))
    {
        // get values
        $_SESSION['ereceipt_reprint_id'] = $_POST['ereceipt_reprint_id'];
        
    }
    ///update customer list - addtional items
    if(isset($_POST['additional_items_id']) &&
       ($_POST['additems_items']) && 
       ($_POST['additems_kilos']) && 
       ($_POST['additems_pieces']) && 
       ($_POST['additems_amount'])
      )
    {
        $additems_amount = $_POST['additems_amount'];
        
        $query5 = "INSERT INTO `receipt` (`jo`,`td`,`items`,`kilos`,`pieces`,`price`,`newprice`,`status`,`subtotal`) VALUES
        ('$additional_items_id',  'Additional Items',  '$additems_items',  '$additems_kilos', '$additems_pieces',  '',  '',  '',  '$additems_amount') ";
        
        if(mysqli_query($connect,$query5)){
            echo "yes to additems";
            
            if (!$results = mysqli_query($connect,$query)) {
                exit(mysqli_error());
            }
        }
        else{
            echo "no to additems";
        }
           
    }

    ///resenf email
    if(isset($_POST['ereceipt_id']) && ($_POST['ereceipt_email']))
    {
        
        // get values
        $ereceipt_id = $_POST['ereceipt_id'];
        $ereceipt_email = $_POST['ereceipt_email'];
        
        include('../../../../../PHPMailer/PHPMailerAutoload.php');



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
                    <div class="row">';
        
        
            $query4 = "SELECT * FROM allsales WHERE id = '$ereceipt_id'";
            $result4 = mysqli_query($connect,$query4);
        
        
            if(mysqli_num_rows($result4) > 0){
            while ($row4 = mysqli_fetch_array($result4)) {
                
            $er_id = $row4['id'];
            $er_pickordeliver = $row4['pickordeliver'];
            $er_remark = $row4['remark'];
            $er_cn = $row4['name_customer'];
            $er_address = $row4['address_customer'];
            $er_contact = $row4['contact_customer'];
            $er_pdate = $row4['pickup_date'];
            $er_ptime = $row4['pickup_time'];
                
        
        $body .= '
                        <div class="col-xs-12">
                            <div class="invoice-title" style="background-color:">
                                <h2>Beacon Cloth Care</h2><h3 class="pull-right">Job Order # '.$er_id.' </h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">

                                    **************'.$er_pickordeliver.'**************<br>
                                    <strong>Customer Info:</strong><br>
                                        Status : '.$er_remark.'<br>
                                        Customer Name : '.$er_cn.'<br>
                                        Address : '.$er_address.'<br>
                                        Contact # : '.$er_contact.'<br>
                                        Pickup/Deliver date : '.$er_pdate.'<br>
                                        Pickup/Deliver time : '.$er_ptime.'<br>

                                </div>
                            </div>
                        </div>
                        ';
                    
                }
            }
        
        $body .='       </div>
                        <tr>
                            <th style="width:15%;">Type</th>
                            <th style="width:25%;">Items</th>
                            <th style="width:15%;">Kilos</th>
                            <th style="width:15%;">Pieces</th>
                            <th style="width:15%;">Status</th>
                            <th style="width:15%;">Subtotal</th>
                        </tr>';

            $query3 = "SELECT * FROM receipt WHERE jo = '$ereceipt_id'";
            $result3 = mysqli_query($connect,$query3);
            if(mysqli_num_rows($result3) > 0){
                while ($row3 = mysqli_fetch_array($result3)) {

                $er_type = $row3['td'];
                $er_items = $row3['items'];
                $er_kilos = $row3['kilos'];
                $er_pieces = $row3['pieces'];
                $er_status = $row3['status'];
                $er_subtotal = $row3['subtotal'];

                $body .='
                            <tr>
                                <tr class="item">
                                    <td style="text-align:center; width:15%;">'.$er_type.'</td>
                                    <td style="text-align:center; width:25%;">'.$er_items.'</td>
                                    <td style="text-align:center; width:15%;">'.$er_kilos.'</td>
                                    <td style="text-align:center; width:15%;">'.$er_pieces.'</td>
                                    <td style="text-align:center; width:15%;">'.$er_status.'</td>
                                    <td style="text-align:center; width:15%;">₱ '.$er_subtotal.'</td>
                                </tr>
                            </tr>';    

                }
            }

        
                
            $query4 = "SELECT * FROM allsales WHERE id = '$ereceipt_id'";
            $result4 = mysqli_query($connect,$query4);
        
        
            if(mysqli_num_rows($result4) > 0){
            while ($row4 = mysqli_fetch_array($result4)) {
                
            $er_amount = $row4['amount'];

            $body .='
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                    <h3 class="panel-title"><strong>Total Amount : ₱ '.$er_amount.'</strong></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
            }
            $mail = new PHPMailer;
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'beaconclothc@gmail.com';          // SMTP username
            $mail->Password = 'beaconclothcare123456';                         // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('beaconclothc@gmail.com', 'Beacon Cloth Care');
            $mail->addAddress($ereceipt_email);     // Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'not an official receipt';
            $mail->Body    = '<br /><br />';
            $mail->Body    = $body;

            if(!$mail->send()) {
                echo "<script>alert('error')</script>" ;
            }else{
                
            }
    }

?>