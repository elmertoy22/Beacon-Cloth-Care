<script>
    
    ///// select category
    function discount(){
        
        if(amount == ""){
            alert("Please choose a category!")
        }
        
        else{

            $("#discount-input").show();   
        }
    }
    function discountcancel(){
        var amount = document.getElementById('amount').value;
        document.getElementById('newamount').value = amount;
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "0";
        $("#discount-input").hide();
    }
    function cancel(){
        document.getElementById('status').value = "";
        document.getElementById('totalamount').value = "0";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
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
        
        if(type1 == "wdf"){
            $("#type-select1").show();
            $("#type-select2").hide();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "0";
            document.getElementById('pieces').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
        }
        else{
            $("#type-select2").show();
            $("#type-select1").hide ();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "0";
            document.getElementById('pieces').value = "0";
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
        }
        
    }
    
    function WDFchoices(){
        
        var WDFoption = document.getElementById('WDFoption').value;
        
        if (WDFoption == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        else{
            document.getElementById('amount').value = WDFoption;
            document.getElementById('newamount').value = WDFoption;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
            
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
            
        }
    }
    
    function enterkilo(){
        $("#enterkilo").show();
        $("#enterpieces").hide();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
    }
    function enterpieces(){
        $("#enterpieces").show();
        $("#enterkilo").hide();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
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
    

</script>

<style>
#enterkilo .modal-dialog {
    -webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top: 50%;
    margin: 0 auto;
}


</style>

<div id="chooseservices" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h5 class="modal-title" style="text-align:center;">Basic Care</h5>
                        </div>
                    </div>
                <div class="modal-body">
                    <br>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12">
                                <label>Type</label>
                                <select class="form-control" id="items" onchange="typeselect()" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="wdf">WASH-DRY-FOLD</option>
                                  <option value="wdp">WASH-DRY-PRESS</option>
                                </select>

                            </div>

                            <div class="col-md-12 bg-info" id="type-select1" onchange="WDFchoices()" style="display:none; border-radius:10px;">
                                <p align="center">WASH-DRY-FOLD</p>
                                <select class="form-control" id="WDFoption" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="50.00">Regular Clothes</option>
                                  <option value="51.00">Regular Towel/Bedsheet</option>
                                </select>

                            </div>    

                            <div class="col-md-12 bg-info" id="type-select2" onchange="WDPchoices()" style="display:none; border-radius:10px;">
                                <p align="center">WASH-DRY-PRESS</p>
                                <select class="form-control" id="WDPoption" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="75.00">Regular Clothes</option>
                                  <option value="50.00">Regular Towel/Bedsheet</option>
                                </select>

                            </div>    
                            
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
                                    <button class="btn btn-primary" onclick="enterkilo()">Enter Kilos</button>
                                </div>
                                <div class="col-md-6" align="center">
                                    <button class="btn btn-danger" onclick="enterpieces()">Enter Pieces</button>
                                </div>
                            </div> 


                            <div class="col-md-12 bg-info" id="enterkilo" style="display:none; border-radius:10px;">
                                <label>No. of Kilograms</label>
                                <div class="bg-danger" id="minimumalert" style="display:none; text-align:center; padding:5px;">if less than 3 kilos automatically will multiply into 3 </div>
                                <input style="text-align:center" type="number" class="form-control" id="kilo" onkeyup="computetotalkilo()" min="1" disabled>
                            </div> 
                            
                            <div class="col-md-12 bg-danger" id="enterpieces" style="display:none; border-radius:10px;">
                                <label>No. of Pieces</label>
                                
                                <input style="text-align:center" type="number" class="form-control" id="pieces" min="1" onkeyup="computetotalpieces()"  disabled>
                            </div> 


                            <div class="col-md-12">
                                <label>SubTotal</label>
                                ₱<input style="text-align:center; border:none;" type="number" class="form-control" id="totalamount" placeholder="0" readonly>
                            </div>
                                                        
                            <div class="col-md-12">
                                <label>Status</label>
                                <select class="form-control" id="status" onchange="rushregular()" disabled>
                                    <option value="" selected disabled>Select</option>
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
                    <button type="submit" class="btn btn-primary">Okay</button>

                </div>
            </form>
        </div>
    </div>
</div>


<!--click unpaid modal -->    
<div id="finishq" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Proceed</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class=" col-md-6">
                          <input type="button" class="btn btn-success btn-lg" value="Pay Now"> 
                      </div>
                      <div class=" col-md-6">
                          <input type="button" class="btn btn-success btn-lg" value="Pay Later">
                      </div>
                  
                  </div>
                  
                  </div>
              </div>
        </div>
    </div>
<!--click procedd modal -->    
<div id="ProceedModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Proceed</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                        <label>Customer name</label>
                        <input type="text" class="form-control" placeholder="Full Name">  
                    </div>
                    <div class="col-md-4">
                        <label>Pick-up Date</label>
                        <input type="date" name="bday" max="3000-12-31" 
                            min="1000-01-01" class="form-control">
                    </div>  
                    <div class="col-md-4">
                        <label>Time</label>
                         <input type="time" class="form-control">
                    </div>
                    </div>
                    <div class="row">
                        <div style="text-align:center;">
                            <h2>Total : ₱ 1,220.00</h2>  
                        </div>

                    </div>
                    <div class="row">
                        <center>
                            <div class="col-md-6"><input class="btn btn-success btn-lg" value="Pay Now" id="paynowbtn" type="button"></div>
                            <div class="col-md-6"><input class="btn btn-success btn-lg" value="Pay Later" id="paylaterbtn" type="button"></div>
                        </center>
                    </div>
                    <div id="paynow" style="display:none;">
                        <div class="row" style="text-align:center;">
                             <div class="col-md-6 col-md-offset-3">
                                <label>Payment</label>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row" style="text-align:center;">
                             <div class="col-md-6 col-md-offset-3">
                                <label>change</label>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <br><hr>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <button class="btn btn-success btn-lg" data-dismiss="modal" style="width:100%;" onclick="finish()">Finish</button>

                                <script type="text/javascript">

                                    function finish(){

                                        swal("Transaction Complete!", "Click okay to exit", "success");
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>

<!--click logout modal -->  
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

        <!-- Modal content-->
            <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Logout</h4>
                  </div>
                  <div class="modal-body">
                      <p>Are you sure want to logout?</p>

                  </div>
                  <div class="modal-footer">
                      <a href="logout.php"><button type="button" class="btn btn-primary">Yes</button></a>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                  </div>
            </div>

            </div>
        </div>
<!-- Edit -->
     <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <!-- <center><h4 class="modal-title" id="myModalLabel">Quantity</h4></center>-->
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($connect,"select * from posservices where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row" >
						<!--<div class="col-md-6 alert alert-primary" style=" border-radius:0px;">
							<label style="position:relative;">Type:<h4><?php echo $erow['type']; ?></h4></label>
						</div>
						<div class="col-md-6 alert alert-primary" style=" border-radius:S0px;">
							<label style="position:relative;">Description:<h4><?php echo $erow['description']; ?></h4></label>
						</div>
						<div class="col-md-6 alert alert-primary" style=" border-radius:10px;">
							<label style="position:relative;">/Kilo:<h4>₱ <?php echo $erow['kilo']; ?></h4></label>
						</div>
                        -->
                        <center>
                            <div style=" border-radius:10px; width:80%;">
                                <label style="float:left">kilo/Pieces</label>
                                <input type="number" class="form-control" placeholder="per kilo">	
                            </div> 
                        </center>
                    </div>
                </div> 
                    
				</div>
                <div class="modal-footer">
                    <form method="post" action="POS.php">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" name="addtocart">Okay</button>
                    </form>
                </div>
				</form>
            </div>
        </div>

    </div>



<!-- /.modal -->