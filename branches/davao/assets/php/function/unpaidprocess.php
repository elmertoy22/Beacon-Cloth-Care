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

?>