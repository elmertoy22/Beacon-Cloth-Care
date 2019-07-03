<?php   
include('connection/connect.php');
extract($_POST);
//// add new items to wash dry fold
if(isset($_POST['wdfitems']) && isset($_POST['wdfprice']) )
{
    $query = " INSERT INTO `bc-washdryfold`(`items`, `price`) VALUES ( '$wdfitems',  '$wdfprice') ";
    if(mysqli_query($connect,$query)){

    }
    else{

    }

}   

if(isset($_POST['wdfdeleteid']))
{

    $wdf_id = $_POST['wdfdeleteid']; 

    $wdfdeletequery = "delete from `bc-washdryfold` where id ='$wdf_id' ";
    mysqli_query($connect,$wdfdeletequery);
}

    
if(isset($_POST['BCwdfitems'])){

	$data =  '<table class="table bg-info" >
                <thead class="bg-primary"style="font-size:13px; text-align:center;">
						<tr>
							<th style="text-align:center; color:white;">Items</th>
							<th style="text-align:center; color:white;">Prices</th>
							<th></th>
							<th></th>
						</tr>
                </thead>    
                    '; 
                
            $displaywdf = " SELECT * FROM `bc-washdryfold` "; 
            $resultwdf = mysqli_query($connect,$displaywdf);
    
            if(mysqli_num_rows($resultwdf) > 0){
                
                while ($rowwdf = mysqli_fetch_array($resultwdf)) {
			
                $data .= '
                    <tbody>
                    <tr style="text-align:center; color:gray;">  
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
	 $data .= '</table>';
    	echo $data;

}


?>
