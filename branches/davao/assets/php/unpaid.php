
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

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Pay now</h4>
              </div>
              <div class="modal-body">
                    <div class="row" id="paynow">
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
                              <label>Customer Name: Elmer gwapo</label>
                              
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
                                            <label>TOTAL ₱:</label><br>
                                          
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
                       <div class="col-md-8 col-md-offset-2">
                        
                        <div class="row">
                            <div style="text-align:center;">
                                <h2>Total : ₱ 375.00</h2>  
                            </div>

                        </div>
                            <div class="row" style="text-align:center;">
                                <label>Payment</label>
                                <input style="text-align:center;" type="number" class="form-control">
                                <a style=" cursor:pointer;" onclick="entervoucher_unpaid()">i have a voucher</a>
                                <div class="bg-info" id="voucher_unpaid" style="display:none;">
                                    <label>Voucher code</label><a style="float:right; margin-right:5px; color:red; cursor:pointer" onclick="voucherclose_unpaid()">&times;</a>
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
                            <a href="#receipt" data-toggle="modal">
                                <input style="width:100%;" class="btn btn-warning btn-lg" value="Pay Now" id="paylaterbtn" data-dismiss="modal" type="button">
                            </a>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
        </div>
</div>