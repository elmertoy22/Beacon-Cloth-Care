
<?php

    include('connection/connect.php');

    extract($_POST);
    //// add to cart
    if(isset($_POST['type']) && isset($_POST['description']) && isset($_POST['items']) && isset($_POST['amount']) && isset($_POST['kilo'])&& isset($_POST['subtotal'])  )
    {
        $query = " INSERT INTO `addtocart`(`type`, `description`, `items`, `amount`, `kilos/pcs`, `subtotal`) VALUES ( '$type',  '$description',  '$items',  '$amount',  '$kilo',  '$subtotal') ";
        if(mysqli_query($connect,$query)){
            echo "yes to cart";
        }
        else{
            echo "no to cart";
        }

    }   


    /////displaying cart
    if(isset($_POST['displaycart']))
    {

        $data =  '<table class="table table-fixed table-hover" id="myTable" >
                    <thead class="bg-primary">
                        <tr>
                            <th style="color:white;">type</th>
                            <th style="color:white;">description</th>
                            <th style="color:white;">items</th>
                            <th style="color:white;">amount</th>
                            <th style="color:white;">kilos/pieces</th>
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
                        <td>'.$row['amount'].'</td>
                        <td>'.$row['kilos/pcs'].'</td>
                        <td>'.$row['subtotal'].'</td>
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

    if(isset($_POST['canceltransac'])){
        
        $dropquery = "delete * from addtocart";
        mysqli_query($connect,$dropquery);
    }

?>

