<script>

    function entervoucher(){
        
        $('#voucher').slideDown();
    }
    function voucherclose(){
        $('#voucher').slideUp();
    }
    
    function customertype(){
        var customertype = document.getElementById('customertype').value;
        
        if(customertype == "branchpartner"){
            $('#branchpartner-form').slideDown();
        }
        else{
            $('#branchpartner-form').slideUp();
        }
    }
    
</script>
<script>

    function enterpayment(){
        var payment = document.getElementById('payment').value;
        var supertotal = document.getElementById('displaytotalco').textContent;
        var change = document.getElementById('change').value;
        
        if(parseFloat(payment) < parseFloat(supertotal)){
            document.getElementById('finishtransac').disabled = true;
             swal("Opps!", "INSUFFICIENT MONEY", "error");
        }
        else{
            
            document.getElementById('change').value = parseFloat(payment) - parseFloat(supertotal) + ".00";
            document.getElementById('finishtransac').disabled = false;
        }
    }

</script>
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
                      <div class="col-md-10 col-md-offset-1">
                          <label>Customer Type</label>
                            <select class="form-control" id="customertype" onchange="customertype()">
                                <option disabled selected>Select</option>
                                <option value="Warehouse">Warehouse</option>
                                <option value="Branch1">Branch1</option>
                                <option value="Branch2">Branch2</option>
                                <option value="branchpartner">Branch Partner</option>
                            </select> 
                            <div id="branchpartner-form" style="display:none;" class="bg-info">
                                <label>Branch Partner</label>
                                <select class="form-control">
                                    <option disabled selected>Select</option>
                                    <option value="">Branch Partner 1</option>
                                    <option value="">Branch Partner 2</option>
                                    <option value="">Branch Partner 3</option>
                                    <option value="">Branch Partner 4</option>
                                    <option value="">Branch Partner 5</option>
                                </select> 
                            </div>
                          <label>Transaction Type</label>
                            <select class="form-control" id="pickordeliver">
                                <option value="" disabled selected>Select</option>
                                <option value="pickup">Pick-up</option>
                                <option value="deliver">Deliver</option>
                            </select> 
                          
                            <div class="row bg-info" id="pickup" style="display:; border-radius:10px; margin-bottom:5px;">
                                
                                <div class="col-md-6">

                                    <label>pick-up/deliver date</label>
                                    <input id="pickup_date" type="date" name="bday" max="3000-12-31" 
                                    min="1000-01-01" class="form-control">
                                
                                </div>
                                <div class="col-md-6">

                                    <label>pick-up/deliver time</label>
                                    <input id="pickup_time" type="time" class="form-control">
                                
                                </div>
                          
                          
                          </div>
                          
                          
                            <div>
                                <label>Customer name</label>
                                <input type="text" class="form-control" placeholder="Full Name" id="name_customer">  
                            </div>
                          
                            <div>
                                <label>Customer Complete Address</label>
                                <input id="address_customer" type="text" class="form-control" placeholder="House No./Barangay/Street/City">  
                            </div>
                          
                            <div>
                                <label>Contact No.</label>
                                <input id="contact_customer" type="text" class="form-control" placeholder="09350000000">  
                            </div>
                          
                            <div>
                                <label>Notes</label>
                                <textarea id="notes" class="form-control"></textarea>  
                            </div>
                            <br>
                            <div>                  
                                <a href="#enterpepe" data-toggle="modal">
                                    <input  style="width:100%;" class="btn btn-success btn-lg" value="Pay Now" id="paynowbtn" type="button" data-dismiss="modal">
                                </a>
                            </div>
                            <br>
                            <div>
                                <a href="#receipt-unpaid" data-toggle="modal">
                                    <input style="width:100%;" class="btn btn-warning btn-lg" value="Pay Later" id="paylaterbtn" data-dismiss="modal" type="button">
                                </a>
                            </div>
                        </div>
                    </div>                  
                  </div>
              </div>
        </div>
    </div>


<div id="enterpepe" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Pay now</h4>
              </div>
              <div class="modal-body">
                    <div class="row" id="paynow">
                        <div class="col-md-8 col-md-offset-2">
                                              
                        <div class="row">
                            <div style="text-align:center;">
                                <h2>
                                    <label>total ₱</label>
                                    <div id="displaytotalco" style="color:gray;"></div>
                                    <div id="displaytotalkilo" style="color:gray;" hidden></div>
                                    <div id="displaytotalpcs" style="color:gray;" hidden></div>
                                </h2>  
                            </div>

                        </div>
                            <div class="row" style="text-align:center;">
                                <label>Payment</label>
                                <input style="text-align:center;" id="payment" type="number" placeholder="0" class="form-control" onchange="enterpayment()" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;">
                                <a style=" cursor:pointer;" onclick="entervoucher()">i have a voucher</a>
                                <div class="bg-info" id="voucher" style="display:none;">
                                    <label>Voucher code</label><a style="float:right; margin-right:5px; color:red; cursor:pointer" onclick="voucherclose()">&times;</a>
                                    <input type="text" class="form-control" placeholder="voucher code">
                                </div>
                            </div>
                        <br>
                        <div class="row" style="text-align:center;">
                                <label>change</label>
                                <input style="text-align:center;" id="change" type="text" class="form-control" readonly placeholder="0.00">

                    
                        </div>
                        <br><hr>
                        <div class="row">
                         <a href="#receipt" data-toggle="modal">
                                <button id="finishtransac" class="btn btn-success btn-lg" data-dismiss="modal" style="width:100%;"  onclick="finishtransaction()" disabled>Finish</button>

 
                            </a>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
        </div>
</div>
<!--onclick="displayreceipt()"-->
<div id="receipt" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">This is not a Official Receipt</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2" align="center">
                          <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label>
                          <label>Free Pick-up and Delivery</label><br>
                          <label>Alabang hills muntinlupa</label>
                      </div>
                      <div class="row" align="center">
                          <div class="col-md-6">
                              <label>Received Date: 05/26/2019</label>
                              <label>Job Order No : 0098</label>
                              <label>Customer Name: Elmer Torres</label>
                              
                          </div>
                          <div class="col-md-6">
                              <label>Status : Paid</label>
                              <label>Contact # : 09322719208 </label>
                              <label>Address : muntinlupa alabang city </label>
                          </div>
                          
                          <div class="col-md-12">
                              
                       <!--       <table class="table">
                                <thead>
                                    <th style="text-align:center;">Items</th>
                                    <th style="text-align:center;">Subtotal</th>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td>
                                            <label>WASH-DRY-FOLD</label><br>
                                            <label>3 kilos regular clothes</label><br>
                                            <label>X3 T-shirt colored</label><br>
                                            <label>X2 T-shirt white</label>
                                            
                                        </td>
                                        <td><label>₱ 75.00</label></td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>
                                            <label>WASH-DRY-PRESS</label><br>
                                            <label>4 kilos regular clothes</label><br>
                                            <label>X3 T-shirt colored</label><br>
                                            <label>X2 T-shirt white</label>
                                            
                                        </td>
                                        <td><label>₱ 300.00</label></td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>
                                            <label style="font-size:15px;">TOTAL ₱:</label><br>
                                            <label style="font-size:15px;">PAYMENT ₱:</label><br>
                                            <label style="font-size:15px;">CHANGE ₱:</label><br>
                                            
                                            
                                        </td>
                                        <td>
                                            <label style="font-size:15px;">375.00</label><br>
                                            <label  style="font-size:20px;">500.00</label><br>
                                            <label  style="font-size:25px;">125.00</label>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>-->
                          
                                  <div id="displayreceipt">
                                        
                                  </div>
                          </div>
                          
                      </div>
                      
                    </div>
              </div>
            <div class="modal-footer bg-success">
                <input type="button" class="btn btn-success" value="Print" style="width:100%;" data-dismiss="modal" onclick="print()">
                
                <script type="text/javascript">

                    function print(){

                        swal("Transaction Complete!", "Click okay to exit", "success");
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<div id="receipt-unpaid" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">This is not a Official Receipt</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-8 col-md-offset-2" align="center">
                          <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label>
                          <label>Free Pick-up and Delivery</label><br>
                          <label>Alabang hills muntinlupa</label>
                      </div>
                      <div class="col-md-10 col-md-offset-1" align="center">
                          <div class="col-md-6">
                              <label>Received Date: 05/26/2019</label>
                              <label>Job Order No : 0098</label>
                              <label>Customer Name: Elmer Torres</label>
                              
                          </div>
                          <div class="col-md-6">
                              <label>Status : Unpaid</label>
                              <label>Contact # : 09322719208 </label>
                              <label>Address : muntinlupa alabang city </label>
                          </div>
                          
                          <div class="col-md-12">
                              
                              <table class="table">
                                <thead>
                                    <th style="text-align:center;">Items</th>
                                    <th style="text-align:center;">Subtotal</th>
                                </thead>
                                <tbody>
                                    <tr style="text-align:center;">
                                        <td>
                                            <label>WASH-DRY-FOLD</label><br>
                                            <label>3 kilos regular clothes</label><br>
                                            <label>X3 T-shirt colored</label><br>
                                            <label>X2 T-shirt white</label>
                                            
                                        </td>
                                        <td><label>₱ 75.00</label></td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>
                                            <label>WASH-DRY-PRESS</label><br>
                                            <label>4 kilos regular clothes</label><br>
                                            <label>X3 T-shirt colored</label><br>
                                            <label>X2 T-shirt white</label>
                                            
                                        </td>
                                        <td><label>₱ 300.00</label></td>
                                    </tr>
                                    <tr style="text-align:center;">
                                        <td>
                                            <label style="font-size:15px;">TOTAL ₱:</label><br>
                                            
                                            
                                        </td>
                                        <td>
                                            <label style="font-size:15px;">375.00</label><br>
                                        </td>
                                    </tr>
                                </tbody>
                              </table>
                            
                            
                          </div>
                          
                      </div>
                      
                    </div>
              </div>
            <div class="modal-footer bg-success">
                <input type="button" class="btn btn-success" value="Print" style="width:100%;" data-dismiss="modal" onclick="print()">
                
                <script type="text/javascript">

                    function print(){

                        swal("Transaction Complete!", "Click okay to exit", "success");
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<script>
    
    function finishtransaction(){
        
        var today = new Date();
        var date_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();
		var total_kilo =  document.getElementById('displaytotalkilo').textContent;
		var total_pcs =  document.getElementById('displaytotalpcs').textContent;
		var amount =  document.getElementById('displaytotalco').textContent;
		var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
		var date_release =  "wala pa release";
		var remark =  "paid";
		var receipt =  "wala pa";
		var notes =  $("#notes").val();

		$.ajax({

			url:"assets/php/finishtransaction.php",
			type:'POST',
			data: {
				date_received:date_received,
				name_customer:name_customer,
				contact_customer:contact_customer,
				address_customer:address_customer,
				total_kilo:total_kilo,
				total_pcs:total_pcs,
				amount:amount,
				pickordeliver:pickordeliver,
				pickup_date:pickup_date,
				pickup_time:pickup_time,
				date_release:date_release,
				remark:remark,
				receipt:receipt,
				notes:notes,
			},
			success:function(data, status){
                
			},

		});
    }
</script>