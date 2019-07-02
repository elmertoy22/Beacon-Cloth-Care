
<?php

    include('connection/connect.php');

    extract($_POST);
    //// add to cart
    if(isset($_POST['type']) && isset($_POST['description']) && isset($_POST['items']) && isset($_POST['amount']) && isset($_POST['newamount']) && isset($_POST['kilo'])&& isset($_POST['pieces'])&&  isset($_POST['status'])&& isset($_POST['subtotal'])  )
    {
        $query = " INSERT INTO `addtocart`(`type`, `description`, `items`, `price`, `newprice`, `kilos`, `pieces`, `status`, `subtotal`) VALUES ( '$type',  '$description',  '$items',  '$amount', '$newamount',  '$kilo', '$pieces', '$status',  '$subtotal') ";
        if(mysqli_query($connect,$query)){
            echo "yes to cart";
        }
        else{
            echo "no to cart";
        }

    }   


    /////displaying total
    if(isset($_POST['displaytotal']))
    {


        $sql1="SELECT sum(subtotal) as total FROM addtocart";

        $result1 = mysqli_query($connect,$sql1);

        while ($row1 = mysqli_fetch_assoc($result1)){
            $totalall = $row1['total'];  
            $dtotalall = floatval($totalall);
            echo $dtotalall;
        }
    } 

    /////displaying receipt
    if(isset($_POST['displayreceipt']))
    {
        
        $data1 =  '<table class="table" id="myTable" style="font-size:13px;">
                    <thead style="font-size:13px;">
                        <tr>
                            <th>type</th>
                            <th>description</th>
                            <th>items</th>
                            <th>price</th>
                            <th>new price</th>
                            <th>kilos</th>
                            <th>pieces</th>
                            <th>status</th>
                            <th>Subtotal</th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `addtocart` "; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data1 .= '<tbody>
                    <tr>  
                        <td>'.$row['type'].'</td>
                        <td>'.$row['description'].'</td>
                        <td>'.$row['items'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['newprice'].'</td>
                        <td>'.$row['kilos'].'</td>
                        <td>'.$row['pieces'].'</td>
                        <td>'.$row['status'].'</td>
                        <td>₱'.$row['subtotal'].'</td>
                    </tr>
                    
                </tbody>';
            }
        } 
        
         $data1 .= '</table>';
         $data1 .= '<table class="table" id="myTable" style="font-size:13px; text-align:right;"  border="0">
                        <tr>
                    
                            <td>TOTAL :</td>
                            <td>P 00</td>

                        </tr>
                        <tr>
                    
                            <td>PAYMENT :</td>
                            <td>P 00</td>

                        </tr>
                        <tr>
                    
                            <td>CHANGE :</td>
                            <td>P 00</td>
                        </tr>
         
         </table>
         ';
            echo $data1;
    } 

    /////displaying cart
    if(isset($_POST['displaycart']))
    {
        $data =  '<table class="table table-fixed table-hover" id="myTable" style="font-size:13px;" >
                    <thead class="bg-primary" style="font-size:13px;">
                        <tr>
                            <th style="color:white;">type</th>
                            <th style="color:white;">description</th>
                            <th style="color:white;">items</th>
                            <th style="color:white;">price</th>
                            <th style="color:white;">new price</th>
                            <th style="color:white;">kilos</th>
                            <th style="color:white;">pieces</th>
                            <th style="color:white;">status</th>
                            <th style="color:white;">Subtotal</th>
                            <th style="color:white;">remove</th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `addtocart` "; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                        <td>'.$row['type'].'</td>
                        <td>'.$row['description'].'</td>
                        <td>'.$row['items'].'</td>
                        <td>'.$row['price'].'</td>
                        <td>'.$row['newprice'].'</td>
                        <td>'.$row['kilos'].'</td>
                        <td>'.$row['pieces'].'</td>
                        <td>'.$row['status'].'</td>
                        <td>₱'.$row['subtotal'].'</td>
                        <td>
                            <button onclick="deletecart('.$row['id'].')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                        </td>
                    </tr>
                </tbody>';
            }
        } 
         $data .= '</table>';
            echo $data;

    }   

    //// delete cart
    if(isset($_POST['deleteid'])){

        $cartid= $_POST['deleteid'];
        $deletequery = " delete from addtocart where id='$cartid' ";
        mysqli_query($connect,$deletequery);
    }

    if(isset($_POST['deleteall'])){

        $querydel = "TRUNCATE TABLE addtocart ";
        if(mysqli_query($connect,$querydel)){
             echo "<script>console.log( 'cancel transaction complete!' );</script>";
        }
        else{
             echo "<script>console.log( 'cancel transaction failed!' );</script>";
        }
    }


?>

