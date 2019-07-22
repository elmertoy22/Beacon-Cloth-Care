<?php   
    include('connection/connect.php');
    extract($_POST);
    //// add new items to wash dry fold
    if(isset($_POST['selectservices']) && isset($_POST['selecttype']) && isset($_POST['wdfitems']) && isset($_POST['wdfprice']) )
    {
        $query = " INSERT INTO `services`(`services`,`type`,`items`, `price`) VALUES ( '$selectservices',  '$selecttype',  '$wdfitems',  '$wdfprice') ";
        if(mysqli_query($connect,$query)){

        }
        else{

        }

    }   

    if(isset($_POST['wdfdeleteid']))
    {

        $wdf_id = $_POST['wdfdeleteid']; 

        $wdfdeletequery = "delete from `services` where id ='$wdf_id' ";
        mysqli_query($connect,$wdfdeletequery);
    }


    if(isset($_POST['BCwdfitems']) && ($_POST['dbservicesdisplay'])){
        
        $data =  '<table class="table bg-info" >
                    <thead class="bg-primary"style="font-size:13px; text-align:center;">
                            <tr>
                                <th style="text-align:center; color:white;">Services</th>
                                <th style="text-align:center; color:white;">Type</th>
                                <th style="text-align:center; color:white;">Items</th>
                                <th style="text-align:center; color:white;">Prices</th>
                                <th></th>
                                <th></th>
                            </tr>
                    </thead>    
                        '; 
                $dbservicesdisplay = $_POST['dbservicesdisplay'];
        
            if($dbservicesdisplay == 'Basic Care'){

                    $displaywdf = " SELECT * FROM `services` WHERE services = '$dbservicesdisplay'"; 
                    $resultwdf = mysqli_query($connect,$displaywdf);

                    if(mysqli_num_rows($resultwdf) > 0){

                        while ($rowwdf = mysqli_fetch_array($resultwdf)) {

                        $data .= '
                            <tbody>
                            <tr style="text-align:center; color:gray;">  
                                <td>'.$rowwdf['services'].'</td>
                                <td>'.$rowwdf['type'].'</td>
                                <td>'.$rowwdf['items'].'</td>
                                <td>'.$rowwdf['price'].'</td>
                                <td>
                                    <button onclick="wdfgetfunc('.$rowwdf['id'].')" class="btn btn-success">Edit</button>
                                </td>
                                <td>
                                    <button onclick="wdfdeleteidfunc('.$rowwdf['id'].')" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        ';

                    }
                } 
            }        
            else if($dbservicesdisplay == 'Special Care'){

                    $displaywdf = " SELECT * FROM `services` WHERE services = '$dbservicesdisplay'"; 
                    $resultwdf = mysqli_query($connect,$displaywdf);

                    if(mysqli_num_rows($resultwdf) > 0){

                        while ($rowwdf = mysqli_fetch_array($resultwdf)) {

                        $data .= '
                            <tbody>
                            <tr style="text-align:center; color:gray;">  
                                <td>'.$rowwdf['services'].'</td>
                                <td>'.$rowwdf['type'].'</td>
                                <td>'.$rowwdf['items'].'</td>
                                <td>'.$rowwdf['price'].'</td>
                                <td>
                                    <button onclick="wdfgetfunc('.$rowwdf['id'].')" class="btn btn-success">Edit</button>
                                </td>
                                <td>
                                    <button onclick="wdfdeleteidfunc('.$rowwdf['id'].')" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        ';

                    }
                } 
            }        
            else if($dbservicesdisplay == 'Premium Care'){

                    $displaywdf = " SELECT * FROM `services` WHERE services = '$dbservicesdisplay'"; 
                    $resultwdf = mysqli_query($connect,$displaywdf);

                    if(mysqli_num_rows($resultwdf) > 0){

                        while ($rowwdf = mysqli_fetch_array($resultwdf)) {

                        $data .= '
                            <tbody>
                            <tr style="text-align:center; color:gray;">  
                                <td>'.$rowwdf['services'].'</td>
                                <td>'.$rowwdf['type'].'</td>
                                <td>'.$rowwdf['items'].'</td>
                                <td>'.$rowwdf['price'].'</td>
                                <td>
                                    <button onclick="wdfgetfunc('.$rowwdf['id'].')" class="btn btn-success">Edit</button>
                                </td>
                                <td>
                                    <button onclick="wdfdeleteidfunc('.$rowwdf['id'].')" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        ';

                    }
                } 
            }
         $data .= '</table>';
            echo $data;

    }

    if(isset($_POST['id']) && isset($_POST['id']) != "")
    {
        $user_id = $_POST['id'];
        $query = "SELECT * FROM `services` WHERE id = '$user_id'";
        if (!$result = mysqli_query($connect,$query)) {
            exit(mysqli_error());
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
    else
    {
        $response['status'] = 200;
        $response['message'] = "Invalid Request!";
    }




    ///update table
    if(isset($_POST['hidden_wdf_id']))
    {
        // get values
        $hidden_wdf_id = $_POST['hidden_wdf_id'];
        $items = $_POST['items'];
        $price = $_POST['price'];
        $query = "UPDATE `services` SET items = '$items', price = '$price' WHERE id = '$hidden_wdf_id'";
        if (!$results = mysqli_query($connect,$query)) {
            exit(mysqli_error());
        }
    }
?>
