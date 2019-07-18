

<script type="text/javascript">
    ////// BASIC CARE
    ///// select category 
    function discount(){
        
        if(amount == ""){
            alert("Please choose a category!")
        }
        
        else{

            $("#discount-input").slideDown();   
        }
    }
    function discountcancel(){
        var amount = document.getElementById('amount').value;
        document.getElementById('newamount').value = amount;
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "";
        $("#discount-input").slideUp();
    }
    function cancel(){
        document.getElementById('WDPoption').value = "0";
        document.getElementById('WDFoption').value = "0";
        document.getElementById('items').value = "";
        document.getElementById('others').value = "";
        document.getElementById('status').value = "";
        document.getElementById('totalamount').value = "0";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
        document.getElementById('amount').value = "0";
        document.getElementById('newamount').value = "0";
        document.getElementById('kilo').disabled = true;
        document.getElementById('pieces').disabled = true;
        document.getElementById('status').disabled = true;
        $("#enterkilo").hide();
        $("#enterpieces").hide();
        $("#type-select1").hide();
        $("#type-select2").hide();
    }
    ////// type select
    function typeselect(){

        var type1 = document.getElementById("items").value;
        var type2 = document.getElementById("items").value;
        
        if(type1 == "WDF"){
            $("#type-select1").slideDown();
            $("#type-select2").slideUp();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "";
            document.getElementById('pieces').value = "";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
            document.getElementById('amount').value = "0";
            

        }
        else{
            $("#type-select2").slideDown();
            $("#type-select1").slideUp ();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "";
            document.getElementById('pieces').value = "";
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
            document.getElementById('amount').value = "0";
            
        }
        
    }
    
    function WDFchoices(){
        var WDFoption = document.getElementById('WDFoption').value;
        
        if (WDFoption == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        else if (WDFoption == "6.00"){
             $('#items-list').hide();
        }
        else{
            document.getElementById('amount').value = WDFoption;
            document.getElementById('newamount').value = WDFoption;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
            
        $('#items-list').slideDown();
        }
    }
    
    function WDPchoices(){
        var WDPoption = document.getElementById('WDPoption').value;
        
        if (WDPoption == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        else{
            document.getElementById('amount').value = WDPoption;
            document.getElementById('newamount').value = WDPoption;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
            
            $('#items-list').slideDown();
        }
    }
    
    function enterkilo(){
        $("#enterkilo").slideDown();
        $("#enterpieces").slideUp();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
    }
    function enterpieces(){
        $("#enterpieces").slideDown();
        $("#enterkilo").slideUp();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
    }
    
    function rushregular(){
        var total = document.getElementById('totalamount').value;
        var status = document.getElementById('status').value;
        
        if(status == "regular"){
            document.getElementById('finaltotalamount').value = total;
        }
        else{
            document.getElementById('finaltotalamount').value = total * 2 + ".00";
          
        }
    }
    
    
/*    function computetotalkilo(){
        
        var amount1 = document.getElementById('newamount').value;
        var kilo1 = document.getElementById('kilo').value;
        
       var amount = parseFloat(amount1);
        var kilo = parseFloat(kilo1);
        
            if(kilo1 == "" || kilo1 == null ){
                document.getElementById('totalamount').value = "0";
                document.getElementById('finaltotalamount').value = "0";
                document.getElementById('status').disabled = true;
            }
            else{
                document.getElementById('status').disabled = false;
                if(kilo <= 2.9999999999999999){
                    $("#minimumalert").show();
                    document.getElementById('totalamount').value = amount * 3.00 + ".00";
                    
                }

                else{
                    $("#minimumalert").hide();
                    var subto = document.getElementById('totalamount').value = amount * kilo + ".00";
                    var subtoto = parseInt(subto);
                    document.getElementById('totalamount').value = subtoto+".00";
                }   
            }
        
    }
*/
    
       function computetotalkilo(){
        
        var amount1 = document.getElementById('newamount').value;
        var kilo1 = document.getElementById('kilo').value;
        
       var amount = parseFloat(amount1);
        var kilo = parseFloat(kilo1);
        
            if(kilo1 == "" || kilo1 == null ){
                document.getElementById('totalamount').value = "0";
                document.getElementById('finaltotalamount').value = "0";
                document.getElementById('status').disabled = true;
            }
            else{
                document.getElementById('status').disabled = false;
                
                    var subto = document.getElementById('totalamount').value = amount * kilo + ".00";
                    var subtoto = parseInt(subto);
                    document.getElementById('totalamount').value = subtoto+".00";
                  
            }
        
    }
    
    
    function computetotalpieces(){
        var amount1 = document.getElementById('newamount').value;
        var pieces1 = document.getElementById('pieces').value;
        
        var amount = parseFloat(amount1);
        var pieces = parseFloat(pieces1);
        
        document.getElementById('status').disabled = false;
        var subto = document.getElementById('totalamount').value = amount * pieces + ".00";
        var subtoto = parseInt(subto);
        document.getElementById('totalamount').value = subtoto+".00";
    }
    
    function ok(){
        var finaltotal = document.getElementById('finaltotalamount').value;
        document.getElementById('totaltotal').value = finaltotal;
        
        document.getElementById('status').value = "";
        document.getElementById('totalamount').value = "0";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
        document.getElementById('amount').value = "0";
        document.getElementById('newamount').value = "0";
        document.getElementById('kilo').disabled = true;
        document.getElementById('pieces').disabled = true;
        document.getElementById('status').disabled = true;
        $("#enterkilo").hide();
        $("#enterpieces").hide();
        $("#type-select1").hide();
        $("#type-select2").hide();
    }
</script>

<div id="basiccare" class="modal fade" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Basic Care</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <br>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12">
                                <label>Type</label>
                                <select class="form-control" id="items" onchange="typeselect()" >
                                  <option value="" disabled selected>Select</option>
                                  <option value="WDF">WASH-DRY-FOLD</option>
                                  <option value="WDP">WASH-DRY-PRESS</option>
                                </select>

                            </div>

                            <div class="col-md-12 bg-info" id="type-select1" onchange="WDFchoices()" style="display:none; border-radius:10px;">
                                <p align="center">WASH-DRY-FOLD</p>
                                
                                <?php
                                    include('function/connection/connect.php');
                                    $displaywdf = " SELECT * FROM `bc-washdryfold` "; 
                                    $resultwdf = mysqli_query($connect,$displaywdf);

                                    if(mysqli_num_rows($resultwdf) > 0){
                                        echo '<select class="form-control" id="WDFoption">
                                                <option value="0" disabled selected>Select</option>
                                        
                                        ';
                                            while ($rowwdf = mysqli_fetch_array($resultwdf)) {

                                                $itemswdf = $rowwdf['items'];
                                                $pricewdf = $rowwdf['price'];
                                                echo '

                                                    <option value='.$pricewdf.'>'.$itemswdf.'</option>

                                                ';
                                            }
                                        echo '</select>';
                                    } 
                                
                                
                                ?>
                                 
                            </div>    

                            <div class="col-md-12 bg-info" id="type-select2" onchange="WDPchoices()" style="display:none; border-radius:10px;">
                                <p align="center">WASH-DRY-PRESS</p>
                                <?php
                                    include('function/connection/connect.php');
                                    $displaywdp = " SELECT * FROM `bc-washdrypress` "; 
                                    $resultwdp = mysqli_query($connect,$displaywdp);

                                    if(mysqli_num_rows($resultwdp) > 0){
                                        echo '<select class="form-control" id="WDPoption">
                                                <option value="0" disabled selected>Select</option>
                                        
                                        ';
                                            while ($rowwdp = mysqli_fetch_array($resultwdp)) {

                                                $itemswdp = $rowwdp['items'];
                                                $pricewdp = $rowwdp['price'];
                                                echo '

                                                    <option value='.$pricewdp.'>'.$itemswdp.'</option>

                                                ';
                                            }
                                        echo '</select>';
                                    } 
                                
                                
                                ?>

                            </div>
                            
                            
                                <div class="col-md-12">
                                <!--
                                    <label>items</label><br><br>
                                    <input type="checkbox" name="itemsss[]" value="items 1">items 1<br>
                                    <input type="number" name="itemsss[]"><br>
                                    <input type="checkbox" name="itemsss[]" value="items 2 ">item 2<br>
                                    <input type="number" name="itemsss[]"><br>
                                    <input type="checkbox" name="itemsss[]" value="items 3">item 3<br>
                                    <input type="number" name="itemsss[]"><br>
                                    <input type="checkbox" name="itemsss[]" value="items 4">item 4<br>
                                    <input type="number" name="itemsss[]"><br>
                                    <input type="checkbox" name="itemsss[]" value="items 5">item 5<br>
                                    <input type="number" name="itemsss[]"><br>
                                -->
                                    <textarea class="form-control" id="others" style="width:100%;"></textarea><br>
                                </div>  
                            <!--
                            <div class="col-md-12" style="display:none;" id="items-list">
                                <div class="col-md-12">
                                    <a href="#selectitems-bc" data-toggle="modal">
                                     <button class="btn btn-primary">View item list</button>
                                    </a>
                                </div>
                            </div>

                            -->
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <label>Amount per kilo/pcs</label>
                                    ₱<input style="text-align:center; border:none; font-size:20px;" type="text" class="form-control" id="amount" readonly placeholder="0">

                                </div> 
                                <div class="col-md-4">
                                    <label>Special Price</label>
                                    <input type="button" class="btn btn-success" value="Discount price" id="discount-btn" onclick="discount()">
                                </div>
                            </div>

                            <div class="col-md-12 bg-info" id="discount-input" style="display:none; border-radius:10px;">
                                <div class="col-md-12">
                                     <label style="float:left">New Amount</label>
                                </div>
                                <div class="col-md-10">
                                    <input style="text-align:center" type="number" class="form-control" min="0" id="newamount">
                                </div>
                                <div class="col-md-2">
                                    <input type="button" class="btn btn-warning" value="Cancel" onclick="discountcancel()">
                                </div>

                            </div> 
        
                            <div class="col-md-12">
                                <div class="col-md-6" align="center">
                                    <input type="button" class="btn btn-primary" onclick="enterkilo()" value="Enter Kilos">
                                </div>
                                <div class="col-md-6" align="center">
                                    <input type="button" class="btn btn-danger" onclick="enterpieces()" value="Enter Pieces">
                                </div>
                            </div> 


                            <div class="col-md-12 bg-info" id="enterkilo" style="display:; border-radius:10px;">
                                <label>No. of Kilograms</label>
                                <div class="bg-danger" id="minimumalert" style="display:none; text-align:center; padding:5px;">minimum of 3 kilos   </div>
                                <input style="text-align:center" type="number" class="form-control" id="kilo" onkeyup="computetotalkilo()" min="0" placeholder="0" disabled>
                            </div> 
                            
                            <div class="col-md-12 bg-danger" id="enterpieces" style="display:none; border-radius:10px;">
                                <label>No. of Pieces</label>
                                
                                <input style="text-align:center" type="number" class="form-control" id="pieces" min="0" onkeyup="computetotalpieces()" placeholder="0" disabled>
                            </div> 


                            <div class="col-md-12">
                                <label>SubTotal</label>
                                ₱<input style="text-align:center; border:none;" type="number" class="form-control" id="totalamount" placeholder="0" readonly>
                            </div>
                                                        
                            <div class="col-md-12">
                                <label>Status</label>
                                <select class="form-control" id="status" onchange="rushregular()" disabled>
                                    <option value="" disabled selected>Select</option>
                                    <option value="regular" >Regular</option>
                                    <option value="rush">Rush</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label>Total Amount</label>
                                ₱<input style="text-align:center; border:none; font-size:25px;" type="number" class="form-control" id="finaltotalamount" placeholder="0" readonly>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancel()">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addtocart()">Okay</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--<div id="selectitems-bc" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Select Items</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items1" value="option2">
                                      <label class="form-check-label" for="items1">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items2" value="option2">
                                      <label class="form-check-label" for="items2">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items3" value="option2">
                                      <label class="form-check-label" for="items3">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items4" value="option2">
                                      <label class="form-check-label" for="items4">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items5" value="option2">
                                      <label class="form-check-label" for="items5">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items6" value="option2">
                                      <label class="form-check-label" for="items6">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items7" value="option2">
                                      <label class="form-check-label" for="items7">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items8" value="option2">
                                      <label class="form-check-label" for="items8">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items9" value="option2">
                                      <label class="form-check-label" for="items9">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancel()">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal"  onclick="okay()">Okay</button>

                </div>
            </form>
        </div>
    </div>
</div>-->

  <script type="text/javascript">
      
$(document).ready(function () {
    displaycart(); 
    displaytotal(); 
    displaytotalkilo(); 
    displaytotalpcs(); 
	});

      
  	function addtocart(){
        
        var desc1 = document.getElementById("WDPoption");
        var desc2 = document.getElementById("WDFoption");
        
        var valid1 = document.getElementById("items").value;
        var valid2 = document.getElementById("others").value;
        var valid3 = document.getElementById("amount").value;
        var valid4 = document.getElementById("totalamount").value;
        var valid5 = document.getElementById("status").value;
        
        if (desc1 != ""){
            var description =  $('#items').val();
        }
        if (desc2 != ""){
            var description =  $('#items').val();
        }

        if (valid1 == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }
        if (valid2 == ""){
             swal("Opps!", "Please fill up the required field", "error");
        }
        if (valid3 == ""){
             swal("Opps!", "Please fill up the required field", "error");
        }
        if (valid4 == ""){
             swal("Opps!", "Please fill up the required field", "error");
        }
        if (valid5 == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }
        else{
        /*
            var checkboxes = document.getElementsByName('itemsss[]');
            var vals = "";
            for (var i=0, n=checkboxes.length;i<n;i++) 
            {
                if (checkboxes[i].checked) 
                {
                  var items =  vals += "-<br>"+checkboxes[i].value;
                }
            }
            */
            var type = "Basic Care";
            var items = $('#others').val();
            var amount = $('#amount').val();
            var newamount = $('#newamount').val();
            var kilo = $('#kilo').val();
            var pieces = $('#pieces').val();
            var status = $('#status').val();
            var subtotal = $('#finaltotalamount').val();

            $.ajax({
                url:"assets/php/function/addtocartBC.php",
                type:'post',
                data: {
                    type :type,
                    description : description,
                    items : items,
                    amount : amount,
                    newamount : newamount,
                    kilo : kilo,
                    pieces : pieces,
                    status : status,
                    subtotal : subtotal
                 },

                 success:function(data,status){
                     console.log(data);
                    displaycart();
                    displaytotal();
                    displaytotalkilo(); 
                    displaytotalpcs(); 
                 }

            });
                        
            $('#basiccare').modal('hide');

           
        }
         
  	}	
      
    function displaytotal(){
		
		var displaytotal = "displaytotal";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaytotal:displaytotal
            },
			success:function(data,status){
				$('#displaytotal').html(data);
				$('#displaytotalco').html(data);
			},

		});
	}        
    function displaytotalkilo(){
		
		var displaytotalkilo = "displaytotalkilo";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaytotalkilo:displaytotalkilo
            },
			success:function(data,status){
				$('#displaytotalkilo').html(data);
			},

		});
	}   
      
      function displaytotalpcs(){
		
		var displaytotalpcs = "displaytotalpcs";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaytotalpcs:displaytotalpcs
            },
			success:function(data,status){
				$('#displaytotalpcs').html(data);
			},

		});
	}      
      
    function displaycart(){
		
		var displaycart = "displaycart";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaycart:displaycart
            },
			success:function(data,status){
				$('#displaycart').html(data);
                cancel();
                
			},

		});
	}      
    function displayreceipt(){
		var displayreceipt = "displayreceipt";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displayreceipt:displayreceipt
            },
			success:function(data,status){
				$('#displayreceipt').html(data);
                
			},

		});
	}
      
function deletecart(deleteid){

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        
        $.ajax({
            url:"assets/php/function/addtocartBC.php",
            type:'POST',
            data: {  deleteid : deleteid},

            success:function(data, status){
                displaycart();
                displaytotal();
                displaytotalkilo(); 
                displaytotalpcs(); 
            }
        }); 
          
      } else {
        
      }
    });

}      
function canceltransac(){

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
          
        var deleteall = "del";
        $.ajax({

            url:"assets/php/function/addtocartBC.php",
            type:'POST',
            data: { 
            deleteall: deleteall
            },

            success:function(data, status){
                 console.log(data);
                displaycart();
                displaytotal();
                displaytotalkilo(); 
                displaytotalpcs(); 
            }
        });
      } 
      else {
       
      }
    });
}
  </script>

