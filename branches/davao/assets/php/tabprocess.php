<style>
    .tableFixHead{
        overflow-y: auto;
        height: 350px; 
    }
    .tableFixHead thead th {
        position: sticky;
        top: 0; 
    }

    /* Just common table stuff. Really. */
    #table  { border-collapse: collapse; width: 100%; }
    th, td { padding: 8px 16px; }
    th     { background-color: #161150; }
</style>
<script>
    function entervoucher_unpaid(){
        
        $('#voucher_unpaid').show();
    }
    function voucherclose_unpaid(){
        $('#voucher_unpaid').hide();
    }
</script>
<div id="unpaid" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Pay now</h4>
              </div>
              <div class="modal-body">
                    <div class="row" id="paynow">
                    <div class="row">
                      <div class="col-md-12" align="center">
                          <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label><br>
                          <label>Free Pick-up and Delivery</label><br>
                          <label>Alabang hills muntinlupa</label><br>
                          <label>------------------------<label style="font-size:18px;" id="pn_pickordeliver"></label>------------------------</label><br>
                          
                          <input type="hidden" id="hidden_pn_id">
                          <label>Job Order No: <label id="pn_jo"></label></label><br>
                          <label>Received Date: <label id="pn_receiveddate"></label></label><br>
                          <label>Pickup/Deliver Date: <div id="pn_pickordeliverdate"></div> </label><br>
                          <label>Customer Name: <label id="pn_customername"></label></label><br>
                          <label>Contact #: <label id="pn_contact"></label></label><br>
                          <label>Address: <label id="pn_address"></label></label><br>
                       
                          
                      </div>
                        <div id="displayreceiptunpaid"></div>
                    </div>
                       <div class="col-md-8 col-md-offset-2">
                        
                        <div class="row">
                            <div style="text-align:center;">
                              <h2><span>Total: ₱</span><span id="pn_totalamount"></span> </h2>  
                            </div>

                        </div>
                            <div class="row" style="text-align:center;">
                                <label>Payment</label>
                                <input style="text-align:center;" type="number" min="0" class="form-control" id="pn_payment" onchange="paynowcompute()">
                                <a style=" cursor:pointer;" onclick="entervoucher_unpaid()">i have a voucher</a>
                                <div class="bg-info" id="voucher_unpaid" style="display:none;">
                                    <label>Voucher code</label><a style="float:right; margin-right:5px; color:red; cursor:pointer" onclick="voucherclose_unpaid()">&times;</a>
                                    <input type="text" class="form-control" placeholder="voucher code">
                                </div>
                            </div>
                        <br>
                        <div class="row" style="text-align:center;">
                                <label>change</label>
                                <input style="text-align:center;" type="text" class="form-control" readonly placeholder="0.00" id="pn_change">
                        </div>
                        <br><hr>
                        <div class="row">
                            
                            <input style="width:100%;" class="btn btn-warning btn-lg" value="Pay Now" id="pn_paynow" data-dismiss="modal" type="button" onclick="pn_btn_finish()" disabled>

                        </div>
                    </div>
                    </div>
                  </div>
              </div>
        </div>
</div>

<div id="customer_details" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Customer Details</h4>
              </div>
              <div class="modal-body">
                    <div class="row" id="paynow">
                    <div class="row">
                      <div class="col-md-12" align="center">
                          <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label><br>
                          <label>Free Pick-up and Delivery</label><br>
                          <label>Alabang hills muntinlupa</label><br>
                          <label>------------------------------------------------------------------------
                              <label style="font-size:18px;" id="cd_pickordeliver"></label>
                              ------------------------------------------------------------------------</label><br>
                          
                          <input type="hidden" id="hidden_cd_id">
                          
                          <div class="col-md-6">
                              <label>Job Order No: <label id="cd_jo"></label></label><br>
                              <label>Received Date: <label id="cd_receiveddate"></label></label><br>
                              <label>Pickup/Deliver Date: <div id="cd_pickordeliverdate"></div> </label><br>
                          </div>
                          <div class="col-md-6">
                              <label>Customer Name: <label id="cd_customername"></label></label><br>
                              <label>Contact #: <label id="cd_contact"></label></label><br>
                              <label>Address: <label id="cd_address"></label></label><br>
                          </div>
                      </div>
                    </div>
                       <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div style="text-align:center;">
                              <h2><span>Total: ₱</span><span id="cd_totalamount"></span> </h2>  
                            </div>
                            <div class="col-md-3">
                                <input type="button" onclick="date_release_process()" class="btn btn-success" id="cd_releasebtn" value="release now">
                            </div>
                            <div class="col-md-3">
                                <input type="button" onclick="date_release_process()" class="btn btn-primary" id="cd_receivebtn" value="receive now">
                            </div>
                            <div class="col-md-3">
                                <input type="button" onclick="date_release_process()" class="btn btn-success" id="cd_releasebtn" value="send e-receipt">
                            </div>
                            <div class="col-md-3">
                                <input type="button" onclick="date_release_process()" class="btn btn-danger " id="cd_printbtn" value="Print Receipt">
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
        </div>
</div>
<?php
    include 'function/tabprocess_function.php';
?>
