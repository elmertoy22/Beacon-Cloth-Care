<style>
    .tableFixHead{
        overflow-y: auto;
        height: 500px; 
    }
    .tableFixHead thead th {
        position: sticky;
        top: 0; 
    }

    /* Just common table stuff. Really. */
    table  { border-collapse: collapse; width: 100%; }
    th, td { padding: 8px 16px; }
    th     { background-color: #161150; }
</style>
<?php
    include('../cmsfunction/connection/connect.php');
    extract($_POST);


    /////displaying cart
    if(isset($_POST['displayallsales']))
    {
        $data =  '
            <div class="tableFixHead">
                <table class="table table-striped">
                    <thead class="">
                        <tr>
                            <th style="color:white;">JOb ORder #</th>
                            <th style="color:white;">Branch Received Date</th>
                            <th style="color:white;">Warehouse Received Date </th>
                            <th style="color:white;">customer type</th>
                            <th style="color:white;">customer name</th>
                            <th style="color:white;">customer contact</th>
                            <th style="color:white;">customer address</th>
                            <th style="color:white;">total kilos</th>
                            <th style="color:white;">total pieces</th>
                            <th style="color:white;">amount</th>
                            <th style="color:white;">transaction type</th>
                            <th style="color:white;">pickup/delivery date</th>
                            <th style="color:white;">pickup/delivery time</th>
                            <th style="color:white;">date release</th>
                            <th style="color:white;">remark</th>
                            <th style="color:white;">received by</th>
                            <th style="color:white;">receipt</th>
                            <th style="color:white;">notes</th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `allsales` "; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                        <td style="text-align:center;">'.$row['id'].'</td>
                        <td style="text-align:center;">'.$row['branch_received_date'].'</td>
                        <td style="text-align:center;">'.$row['date_received'].'</td>
                        <td style="text-align:center;">'.$row['type_customer'].'</td>
                        <td style="text-align:center;">'.$row['name_customer'].'</td>
                        <td style="text-align:center;">'.$row['contact_customer'].'</td>
                        <td style="text-align:center;">'.$row['address_customer'].'</td>
                        <td style="text-align:center;">'.$row['total_kilo'].'</td>
                        <td style="text-align:center;">'.$row['total_pcs'].'</td>
                        <td style="text-align:center;">'.$row['amount'].'</td>
                        <td style="text-align:center;">'.$row['pickordeliver'].'</td>
                        <td style="text-align:center;">'.$row['pickup_date'].'</td>
                        <td style="text-align:center;">'.$row['pickup_time'].'</td>
                        <td style="text-align:center;">'.$row['date_release'].'</td>
                        <td style="text-align:center;">'.$row['remark'].'</td>
                        <td style="text-align:center;">'.$row['received_by'].'</td>
                        <td style="text-align:center;">'.$row['receipt'].'</td>
                        <td style="text-align:center;">'.$row['notes'].'</td>
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
?>