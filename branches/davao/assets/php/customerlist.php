<script>
    function additionalitems(){
        $('#additionalitems').slideDown();
    }

</script>
<div id="customerlist" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                    <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Customer</h4>
                        </div>
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
                              <label>Customer Name: Elmer gwapo</label>
                              
                          </div>
                          <div class="col-md-6">
                              <label>Status : Paid</label>
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
                              </table>
                            <div class="row">
                                <input type="button" class="btn btn-success" value="Add Additional Items" onclick="additionalitems()">  
                            </div>
                              
                            <div id="additionalitems" style="display:none;">
                                <label>Items</label>
                                <input class="form-control" type="text" value="" >
                                <label>Amount</label>
                                <input class="form-control" type="number" value="" >
                            </div>
                          </div>
                          
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancelSC()">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal"  onclick="okaySC()">Okay</button>

                </div>
            </form>
        </div>
    </div>
</div>