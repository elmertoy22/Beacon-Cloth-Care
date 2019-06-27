<script>

    function pickordeliver(){
        
        var transac = document.getElementById('pickupORdeliver').value;
        
        if(transac == "pickup"){
            $('#pickup').show();
            $('#deliver').hide();
        }
        else{
            $('#pickup').hide();
            $('#deliver').show();
            
        }
    }
    
    function entervoucher(){
        
        $('#voucher').show();
    }
    function voucherclose(){
        $('#voucher').hide();
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
                          <label>Transaction Type</label>
                            <select class="form-control" id="pickupORdeliver" onchange="pickordeliver()">
                                <option disabled selected>Select</option>
                                <option value="pickup">Pick-up</option>
                                <option value="deliver">Deliver</option>
                            </select> 
                          
                            <div class="row bg-info" id="pickup" style="display:none; border-radius:10px; margin-bottom:5px;">
                                
                                <div class="col-md-6">

                                    <label>pick-up date</label>
                                    <input type="date" name="bday" max="3000-12-31" 
                                    min="1000-01-01" class="form-control">
                                
                                </div>
                                <div class="col-md-6">

                                    <label>pick-up time</label>
                                    <input type="time" class="form-control">
                                
                                </div>
                          
                          
                            </div>
                          
                            <div class="row bg-danger" id="deliver" style="display:none; border-radius:10px; margin-bottom:5px;">
                                
                                <div class="col-md-6">

                                    <label>deliver date</label>
                                    <input type="date" name="bday" max="3000-12-31" 
                                    min="1000-01-01" class="form-control">
                                
                                </div>
                                <div class="col-md-6">

                                    <label>deliver time</label>
                                    <input type="time" class="form-control">
                                
                                </div>
                          
                          
                            </div>
                          
                          
                            <div>
                                <label>Customer name</label>
                                <input type="text" class="form-control" placeholder="Full Name">  
                            </div>
                          
                            <div>
                                <label>Customer Complete Address</label>
                                <input type="text" class="form-control" placeholder="House No./Barangay/Street/City">  
                            </div>
                          
                            <div>
                                <label>Contact No.</label>
                                <input type="text" class="form-control" placeholder="09350000000">  
                            </div>
                          
                            <div>
                                <label>Notes</label>
                                <textarea class="form-control"></textarea>  
                            </div>
                            <br>
                            <div>                  
                                <a href="#enterpepe" data-toggle="modal">
                                    <input  style="width:100%;" class="btn btn-success btn-lg" value="Pay Now" id="paynowbtn" type="button" data-dismiss="modal">
                                </a>
                            </div>
                            <br>
                            <div>
                                <a href="#receipt" data-toggle="modal">
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
                                <h2>Total : ₱ 1,220.00</h2>  
                            </div>

                        </div>
                            <div class="row" style="text-align:center;">
                                <label>Payment</label>
                                <input style="text-align:center;" type="number" class="form-control">
                                <a style=" cursor:pointer;" onclick="entervoucher()">i have a voucher</a>
                                <div class="bg-info" id="voucher" style="display:none;">
                                    <label>Voucher code</label><a style="float:right; margin-right:5px; color:red; cursor:pointer" onclick="voucherclose()">&times;</a>
                                    <input type="text" class="form-control" placeholder="voucher code">
                                </div>
                            </div>
                        <br>
                        <div class="row" style="text-align:center;">
                                <label>change</label>
                                <input style="text-align:center;" type="text" class="form-control" readonly placeholder="0.00">

                    
                        </div>
                        <br><hr>
                        <div class="row">
                         
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

<div id="receipt" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Official Receipt</h4>
              </div>
              <div class="modal-body">
                    <div class="row" id="paynow">
                        <div class="col-md-8 col-md-offset-2">
                                              
                        <div class="row">
                            <div style="text-align:center;">
                                <h2>Total : ₱ 1,220.00</h2>  
                            </div>

                        </div>
                            <div class="row" style="text-align:center;">
                                <label>Payment</label>
                                <input style="text-align:center;" type="number" class="form-control">
                                <a style=" cursor:pointer;" onclick="entervoucher()">i have a voucher</a>
                                <div class="bg-info" id="voucher" style="display:none;">
                                    <label>Voucher code</label><a style="float:right; margin-right:5px; color:red; cursor:pointer" onclick="voucherclose()">&times;</a>
                                    <input type="text" class="form-control" placeholder="voucher code">
                                </div>
                            </div>
                        <br>
                        <div class="row" style="text-align:center; font-size:20px;">
                                <label>change</label>
                                <input style="text-align:center; font-size:20px;" value="0.00" type="text" class="form-control" readonly>

                    
                        </div>
                        <br><hr>
                        <div class="row">
                         
                                <button class="btn btn-success btn-lg" data-dismiss="modal" style="width:100%;" onclick="finish()">Okay</button>

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
