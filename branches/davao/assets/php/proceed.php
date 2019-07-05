<script>

    function pickodeliver(){
        var pick = document.getElementById('pickordeliver').value;
        
        if(pick == "pickup"){
            $('#optional_address').show();
            $('#required_address').hide();
        }
        else{
            $('#required_address').show();
            $('#optional_address').hide();
        }
            
    }
    function entervoucher(){
        
        $('#voucher').slideDown();
    }
    function voucherclose(){
        $('#voucher').slideUp();
    }
    
    function customertype(){
        var customertype = document.getElementById('customertype').value;
        document.getElementById('branch_received_date').value;
        
        if(customertype == "branchpartner"){
            $('#branchpartner-form').slideDown();
        }
        if(customertype != "branchpartner"){
            $('#branchpartner-form').slideUp();
        }
    }
    
</script>
<script>

    function enterpayment(){
        var payment = document.getElementById('payment').value;
        var supertotalc = document.getElementById('displaytotalco').textContent;
        var supertotal = supertotalc.replace(/,/g,"");
        
        var change = document.getElementById('change').value;
        
        
        if(parseFloat(payment) < parseFloat(supertotal)){
            document.getElementById('finishtransac').disabled = true;
            document.getElementById('change').value = 0.00;
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
                          <label>Customer Type</label><h6>*required</h6>
                            <select class="form-control" id="customertype" onchange="customertype()">
                                <option value="" disabled selected>Select</option>
                                <option value="warehouse">Warehouse</option>
                                <option value="branch1">Branch1</option>
                                <option value="branch2">Branch2</option>
                                <option value="branchpartner">Branch Partner</option>
                            </select> 
                          <br>
                          <div id="branch_received" style="display:none;">
                              <label>Branch Received Date</label><h6>*required</h6>
                            <input id="branch_received_date" type="date" name="bday" max="3000-12-31" 
                                    min="1000-01-01" class="form-control">
                              <br>
                          </div>
                          <div id="branchpartner-form" style="display:none;" class="bg-info">
                                <label>Branch Partner</label><h6>*required</h6>
                                <select class="form-control">
                                    <option value="" disabled selected>Select</option>
                                    <option value="">Branch Partner 1</option>
                                    <option value="">Branch Partner 2</option>
                                    <option value="">Branch Partner 3</option>
                                    <option value="">Branch Partner 4</option>
                                    <option value="">Branch Partner 5</option>
                                </select> 
                              <br>
                          </div>
                          <label>Transaction Type</label><h6>*required</h6>
                            <select class="form-control" id="pickordeliver" onchange="pickodeliver()">
                                <option value="" disabled selected>Select</option>
                                <option value="pickup">Pick-up</option>
                                <option value="deliver">Deliver</option>
                            </select> 
                          <br>
                            <div class="row bg-info" id="pickup" style="display:; border-radius:10px; margin-bottom:5px;">
                                
                                <div class="col-md-6">

                                    <label>pick-up/deliver date</label><h6>*required</h6>
                                    <input id="pickup_date" type="date" name="bday" max="12-31-3000" 
                                    min="01-01-1000" class="form-control">
                                
                                </div>
                                <div class="col-md-6">

                                    <label>pick-up/deliver time</label><h6>*required</h6>
                                    <input id="pickup_time" type="time" name="time" class="form-control">
                                
                                </div>
                          
                          
                          </div>
                          <br>
                          
                            <div>
                                <label>Customer name</label><h6>*required</h6>
                                <input type="text" class="form-control" placeholder="Full Name" id="name_customer">  
                            </div>
                          <br>
                            <div>
                                <label>Customer Complete Address</label>
                                <h6 id="optional_address" style="display:none;">*Optional</h6>
                                <h6 id="required_address" style="display:none;">*Required</h6>
                                <input id="address_customer" type="text" class="form-control" placeholder="House No./Barangay/Street/City">  
                            </div>
                          <br>
                            <div>
                                <label>Contact No.</label><h6>*required</h6>
                                <input id="contact_customer" type="text" class="form-control" placeholder="09350000000">  
                            </div>
                          <br>
                            <div>
                                <label>Notes</label>
                                <textarea id="notes" class="form-control"></textarea>  
                            </div>
                            <br>
                            <div>                  
                            
                                    <input  style="width:100%;" class="btn btn-success btn-lg" value="Pay Now" id="paynowbtn" type="button" onclick="customerinfo()">
                                
                            </div>
                            <br>
                            <div>
                             <!--   <a href="#receipt-unpaid" data-toggle="modal"></a>-->
                                    <input style="width:100%;" class="btn btn-warning btn-lg" value="Pay Later" id="paylaterbtn" type="button" onclick="unpaid_customerinfo()">
                                
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
                              
                                  <div id="displayreceipt">
                                        
                                  </div>
                          </div>
                          
                      </div>
                      
                    </div>
              </div>
            <div class="modal-footer bg-success">
                <input type="button" class="btn btn-success" value="okay" style="width:100%;" onclick="nexttransaction_paid()">

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
                <input type="button" class="btn btn-success" value="Finish" style="width:100%;" onclick="unpaid_finishtransaction()">
            </div>
        </div>
    </div>
</div>

<script>
          
$(document).ready(function () {
    displaycart(); 
    displaytotal(); 
    displaytotalkilo(); 
    displaytotalpcs(); 
	});
    
    function customerinfo(){
        
        var type_customer =  $("#customertype").val();
        var branch_received_date =$("#branch_received_date").val();
        var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();

        
        if(type_customer == null){
            swal("Opps!", "Please fill up the customer type", "error");
        }
        else if(pickordeliver == null){
            swal("Opps!", "Please fill up the transaction type", "error");
        }
        else if (pickordeliver == "deliver" && address_customer == ""){
            swal("Opps!", "Please fill up the address", "error");
        }
        else if(pickup_date == ""){
            swal("Opps!", "Please fill up the delivery/pickup date", "error");
        }
        else if(pickup_time == ""){
            swal("Opps!", "Please fill up the delivery/pickup time", "error");
        }
        else if(name_customer == ""){
            swal("Opps!", "Please fill up the customer name", "error");
        }
        else if(contact_customer == ""){
            swal("Opps!", "Please fill up the customer contact", "error");
        }
        else{
            $('#ProceedModal').modal("hide");
            $('#enterpepe').modal("show");
        }
            

    }    
    function unpaid_customerinfo(){
        
        var type_customer =  $("#customertype").val();
        var branch_received_date =$("#branch_received_date").val();
        var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();

        
        if(type_customer == null){
            swal("Opps!", "Please fill up the customer type", "error");
        }
        else if(pickordeliver == null){
            swal("Opps!", "Please fill up the transaction type", "error");
        }
        else if (pickordeliver == "deliver" && address_customer == ""){
            swal("Opps!", "Please fill up the address", "error");
        }
        else if(pickup_date == ""){
            swal("Opps!", "Please fill up the delivery/pickup date", "error");
        }
        else if(pickup_time == ""){
            swal("Opps!", "Please fill up the delivery/pickup time", "error");
        }
        else if(name_customer == ""){
            swal("Opps!", "Please fill up the customer name", "error");
        }
        else if(contact_customer == ""){
            swal("Opps!", "Please fill up the customer contact", "error");
        }
        else{
            $('#ProceedModal').modal("hide");
            $('#receipt-unpaid').modal("show");
        }
            

    }
    
    
    function finishtransaction(){
        
        var today = new Date();
        var type_customer =  $("#customertype").val();
        
        
        if(type_customer == "warehouse"){
            var date_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
            var branch_received_date = ""
            console.log('pasok sa warehouse');
        }
        if (type_customer == "branch1"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = ""
            console.log('pasok sa branch1');
        }
        if (type_customer == "branch2"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = ""
            console.log('pasok sa branch2');
        }
        
        var type_customer =  $("#customertype").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();
		var total_kilo =  document.getElementById('displaytotalkilo').textContent;
		var total_pcs =  document.getElementById('displaytotalpcs').textContent;
		var amount =  document.getElementById('displaytotalco').textContent;
		var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
		var date_release =  "Pending";
		var remark =  "Paid";
		var receipt =  "wala pa";
		var notes =  $("#notes").val();

		$.ajax({

			url:"assets/php/finishtransaction.php",
			type:'POST',
			data: {
				branch_received_date:branch_received_date,
				date_received:date_received,
				type_customer:type_customer,
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
                console.log(total_kilo);
                nexttransaction();
			},

		});
    }    
    
    function unpaid_finishtransaction(){
        
        var today = new Date();
        var type_customer =  $("#customertype").val();
        
        
        if(type_customer == "warehouse"){
            var date_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
            var branch_received_date = ""
            console.log('pasok sa warehouse');
        }
        if (type_customer == "branch1"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = ""
            console.log('pasok sa branch1');
        }
        if (type_customer == "branch2"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = ""
            console.log('pasok sa branch2');
        }
        
        var type_customer =  $("#customertype").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();
		var total_kilo =  document.getElementById('displaytotalkilo').textContent;
		var total_pcs =  document.getElementById('displaytotalpcs').textContent;
		var amount =  document.getElementById('displaytotalco').textContent;
		var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
		var date_release =  "Pending";
		var remark =  "Unpaid";
		var receipt =  "wala pa";
		var notes =  $("#notes").val();

		$.ajax({

			url:"assets/php/finishtransaction.php",
			type:'POST',
			data: {
				branch_received_date:branch_received_date,
				date_received:date_received,
				type_customer:type_customer,
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
                console.log(total_kilo);
                nexttransaction();
                nexttransaction_unpaid();
			},

		});
    }
    
    function nexttransaction(){
        var nexttransaction = "nexttransaction";
        $.ajax({

            url:"assets/php/finishtransaction.php",
            type:'POST',
            data: { 
            nexttransaction: nexttransaction
            },

            success:function(data, status){
                 console.log(data);
                
            }
        });
    }
    
    function nexttransaction_unpaid(){
                        
                swal("Transaction Complete!", "Click okay to exit", "success");
                
                setTimeout(function() {
                   $('#receipt').modal("hide");
                   location.reload(true);
                }, 2000);
    }    
    function nexttransaction_paid(){
                        
                swal("Transaction Complete!", "Click okay to exit", "success");
                
                setTimeout(function() {
                   $('#receipt-unpaid').modal("hide");
                   location.reload(true);
                }, 2000);
    }
    
</script>