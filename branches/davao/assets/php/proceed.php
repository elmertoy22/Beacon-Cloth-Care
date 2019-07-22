
<?php
    include 'function/proceedfunction.php';
?>
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

<div id="ProceedModal" class="modal fade" role="dialog" onload="datepicker()">
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
                                    
                                    <input type="date" id="pickup_date" data-date-format="MMMM DD YYYY" class="form-control">
                                
                                </div>
                                <div class="col-md-6">

                                    <label>pick-up/deliver time</label><h6>*required</h6>
                                    <input id="pickup_time" type="time" name="time" class="form-control">
                                
                                </div>
                          </div>
                          <br>
                            <div>
                                <label>Customer name</label><h6>*required</h6>
                                <input type="text" class="form-control" placeholder="Full Name" id="name_customer" name="name_customer">  
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
                                <input id="contact_customer" type="text" class="form-control" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" max="11" placeholder="09350000000">  
                            </div>
                            <div>
                            <br>
                                <label>Email Address</label><h6>*For sending receipt</h6>
                                <input id="email_customer" type="email" class="form-control" placeholder="example@gmail.com">  
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
                               <a data-toggle="modal">
                                    <input style="width:100%;" class="btn btn-warning btn-lg" value="Pay Later" id="paylaterbtn" type="button" onclick="unpaid_customerinfo();">
                               </a>
                             <!--   <a href="#receipt-unpaid" data-toggle="modal"></a>
                                    <input style="width:100%;" class="btn btn-warning btn-lg" value="Pay Later" id="paylaterbtn" type="button" onclick="unpaid_finishtransaction()">
                               -->
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

