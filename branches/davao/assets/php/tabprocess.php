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
<style>
    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite; /* Safari */
      animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
</style>
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
                      <div class="col-md-8 col-md-offset-2" align="center">
                          <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label><br>
                          <label>Free Pick-up and Delivery</label><br>
                          <label>Alabang hills muntinlupa</label><br>
                          <label>-------------------------------------------<label style="font-size:18px;" id="pn_pickordeliver"></label>-------------------------------------------</label><br>
                          
                          <input type="hidden" id="hidden_pn_id">
                          
                          <div class="col-md-6" style="text-align:center;">
                              <label>Customer Name: <br><label style="font-weight:bold;" id="pn_customername"></label></label><br>
                              <label>Contact #: <br><label style="font-weight:bold;" id="pn_contact"></label></label><br>
                              <label>Address:<br> <label style="font-weight:bold;" id="pn_address"></label></label><br>
                              <label>Email Address: <br><label style="font-weight:bold;" id="pn_emailaddress"></label></label><br>
                          </div>
                          
                          <div class="col-md-6" style="text-align:center;">
                              <label>Job Order No: <br><label style="font-weight:bold;" id="pn_jo"></label></label><br>
                              <label>Status: <br><label style="font-weight:bold;" id="pn_status"></label></label><br>
                              <label>Received Date:<br> <label style="font-weight:bold;" id="pn_receiveddate"></label></label><br>
                              <label>Pickup/Deliver Date:<br> <div style="font-weight:bold;" id="pn_pickordeliverdate"></div> </label><br>
                          </div>
                          
                        </div>
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
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2" align="center">
                          <label>BEACON CLOTH CARE LAUNDRY SERVICES INC.</label><br>
                          <label>Free Pick-up and Delivery</label><br>
                          <label>Alabang hills muntinlupa</label><br>
                          <label>-------------------------------------------
                              <label style="font-size:18px;" id="cd_pickordeliver"></label>
                              -------------------------------------------</label><br>
                          
                          <input type="hidden" id="hidden_cd_id">
                          
                          <div class="col-md-6" style="text-align:center;">
                              <label>Customer Name:<br> <label style="font-weight:bold;" id="cd_customername"></label></label><br>
                              <label>Contact #: <br><label style="font-weight:bold;" id="cd_contact"></label></label><br>
                              <label>Address: <br><label style="font-weight:bold;" id="cd_address"></label></label><br>
                              <label>Email Address:<br> <label style="font-weight:bold;" id="cd_emailaddress"></label></label><br>
                          </div>
                          
                          <div class="col-md-6" style="text-align:center;">
                              <label>Job Order No: <br><label style="font-weight:bold;" id="cd_jo"></label></label><br>
                              <label>Status:<br> <label style="font-weight:bold;" id="cd_remark"></label></label><br>
                              <label>Received Date: <br><label style="font-weight:bold;" id="cd_receiveddate"></label></label><br>
                              <label>Pickup/Deliver Date:<br> <div style="font-weight:bold;" id="cd_pickordeliverdate"></div> </label><br>
                          </div>
                          
                      </div>
                       <div class="col-md-10 col-md-offset-1" align="center">
                        <div id="showreceipt-display"></div>
                        
                        </div>
                       <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div style="text-align:center;">
                              <h2><span>Total: ₱</span><span id="cd_totalamount"></span> </h2>  
                            </div>
                            <div><input data-toggle="collapse" href="#additemscol" type="button" class="btn btn-primary" style="width:100%;" value="ADD ADDITIONAL ITEMS"></div>
                            <div class="collapse" id="additemscol">
                                <form><br>
                                    <label>items</label>
                                    <textarea class="form-control" id="additems_items"></textarea><br>
                                    <label>kilos</label>
                                    <input type="number" class="form-control" id="additems_kilos" value="" min="0"><br>
                                    <label>pieces</label>
                                    <input type="number" class="form-control" id="additems_pieces" value="" min="0"><br>
                                    <label>amount</label>
                                    <input type="number" class="form-control" id="additems_amount">
                                </form>
                                <div class="col-md-6">
                                    <input style="width:100%" type="button" class="btn btn-danger" value="Cancel" data-toggle="collapse" href="#additemscol">
                                </div>
                                <div class="col-md-6">
                                    <input style="width:100%" type="button" class="btn btn-success" value="Proceed" onclick="additional_items()">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                  </div>
                    <div class="modal-footer">
                        <div class="col-md-3">
                            <input type="button" onclick="date_release_process()" class="btn btn-success" id="cd_releasebtn" value="release now">
                        </div>
                        <div class="col-md-3">
                            <input type="button" onclick="date_received_process()" class="btn btn-primary" id="cd_receivebtn" value="receive now">
                        </div>
                        <div class="col-md-3">
                            <a href="#resend-ereceipt" data-toggle="modal" data-dismiss="modal">
                                <input type="button" class="btn btn-success" id="cd_ereceiptbtn" value="Send E-receipt">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <input type="button" onclick="reprint_receipt_process()" class="btn btn-danger " id="cd_printbtn" value="Print Receipt">
                        </div>
                    </div>
              </div>
        </div>
</div>
<div id="resend-ereceipt" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header bg-primary">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align:center;">Resend E-receipt</h4>
          </div>
          <div class="modal-body" >
                <div class="row">
                    <div class="col-md-12">
                        <center><div class="spinner-border text-muted"></div>
                            <form>
                                <label>Email Address :</label>
                                <input type="email" class="form-control" id="ereceipt_email" style="text-align:center;" required><br>
                                <input type="button" class="btn btn-success" value="Resend E-receipt now" onclick="resend_receipt_process()">
                            </form>
                        </center>

                    </div>
                </div>
            </div>
          </div>
    </div>
</div>

<div id="resend-ereceipt-loader" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
    <div class="modal-dialog"  align="center" style="margin-top:20%;">
            <div class="loader"></div>
    </div>
</div>
<?php
    include 'function/tabprocess_function.php';
?>
