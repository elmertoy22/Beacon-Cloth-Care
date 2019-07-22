

<?php

    include('connection/connect.php');

    extract($_POST);
    
    ////// services choices

    if(isset($_POST['ServicesBasicCare'])){
        $_SESSION['Services'] = $_POST['ServicesBasicCare'];
        echo $_SESSION['Services'];
    }

    if(isset($_POST['ServicesSpecialCare'])){
        $_SESSION['Services'] = $_POST['ServicesSpecialCare'];
        echo $_SESSION['Services'];
    }

    if(isset($_POST['ServicesPremiumCare'])){
        $_SESSION['Services'] = $_POST['ServicesPremiumCare'];
        echo $_SESSION['Services'];
    }


    //// add to cart
    if(isset($_POST['type']) &&
       isset($_POST['items']) && 
       isset($_POST['amount']) &&
       isset($_POST['newamount']) &&
       isset($_POST['kilo'])&&
       isset($_POST['pieces'])&& 
       isset($_POST['status'])&& 
       isset($_POST['subtotal'])  )
    {
        $query = " INSERT INTO `addtocart`(`type`, `items`, `price`, `newprice`, `kilos`, `pieces`, `status`, `subtotal`) 
                VALUES ( '$type',  '$items',  '$amount', '$newamount',  '$kilo', '$pieces', '$status',  '$subtotal') ";
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
            echo number_format($dtotalall,2);
            
        }
    } 
    /////displaying total kilo
    if(isset($_POST['displaytotalkilo']))
    {


        $sql2="SELECT sum(kilos) as totalkilo FROM addtocart";

        $result2 = mysqli_query($connect,$sql2);

        while ($row2 = mysqli_fetch_assoc($result2)){
            $totalallkilo = $row2['totalkilo'];  
            $dtotalallkilo = floatval($totalallkilo);
            echo $dtotalallkilo;
        }
    } 
    /////displaying total kilo
    if(isset($_POST['displaytotalpcs']))
    {


        $sql3="SELECT sum(pieces) as totalpcs FROM addtocart";

        $result3 = mysqli_query($connect,$sql3);

        while ($row3 = mysqli_fetch_assoc($result3)){
            $totalallpcs = $row3['totalpcs'];  
            $dtotalallpcs = floatval($totalallpcs);
            echo $dtotalallpcs;
        }
    } 

    /////displaying receipt
    if(isset($_POST['displayreceipt']))
    {
        
        $data1 =  '<table class="table" id="myTable" style="font-size:13px;">
                    <thead style="font-size:13px; text-align:center;">
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
                    <tr style="text-align:center; color:gray;">  
                        <td style="text-align:center;">'.$row['type'].'</td>
                        <td style="text-align:center;">'.$row['description'].'</td>
                        <td style="text-align:center;">'.$row['items'].'</td>
                        <td style="text-align:center;">'.$row['price'].'</td>
                        <td style="text-align:center;">'.$row['newprice'].'</td>
                        <td style="text-align:center;">'.$row['kilos'].'</td>
                        <td style="text-align:center;">'.$row['pieces'].'</td>
                        <td style="text-align:center;">'.$row['status'].'</td>
                        <td style="text-align:center;">₱'.$row['subtotal'].'</td>
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
        $data =  '<div class="tableFixHead">
                    <table class="table table-striped" style="font-size:12px;">
                    <thead class="bg-primary">
                        <tr>
                            <th style="color:white; text-align:center;">type</th>
                            <th style="color:white; text-align:center;">items</th>
                            <th style="color:white; text-align:center;">Original price</th>
                            <th style="color:white; text-align:center;">new price</th>
                            <th style="color:white; text-align:center;">kilos</th>
                            <th style="color:white; text-align:center;">pieces</th>
                            <th style="color:white; text-align:center;">status</th>
                            <th style="color:white; text-align:center;">Subtotal</th>
                            <th style="color:white; text-align:center;">remove</th>
                        </tr>

                    </thead>
                    '; 

        $displayquery = " SELECT * FROM `addtocart` "; 
        $result = mysqli_query($connect,$displayquery);

        if(mysqli_num_rows($result) > 0){

            while ($row = mysqli_fetch_array($result)) {
             
                $data .= '<tbody>
                    <tr>  
                        <td style="text-align:center;">'.$row['type'].'</td>
                        <td style="text-align:center;">'.$row['items'].'</td>
                        <td style="text-align:center;">'.$row['price'].'</td>
                        <td style="text-align:center;">'.$row['newprice'].'</td>
                        <td style="text-align:center;">'.$row['kilos'].'</td>
                        <td style="text-align:center;">'.$row['pieces'].'</td>
                        <td style="text-align:center;">'.$row['status'].'</td>
                        <td style="text-align:center;">₱'.$row['subtotal'].'</td>
                        <td>
                            <button onclick="deletecart('.$row['id'].')" class="btn btn-danger"><span style="font-weight:bold;">x</span></button>
                        </td>
                    </tr>
                </tbody>';
            }
            echo '<script>document.getElementById("proceedbtn").disabled = false;</script>';
            echo '<script>document.getElementById("canceltransacbtn").disabled = false;</script>';
        } 
        else{
            echo '<script>document.getElementById("proceedbtn").disabled = true;</script>';
            echo '<script>document.getElementById("canceltransacbtn").disabled = true;</script>';
        }
         $data .= '</table></div>';
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

