
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
                    
                            
                        <div class="col-md-6">
                            <label>Type</label>
                            <input value="Pick-up" class="form-control" disabled style="border:none;">
                        </div>
                        <div class="col-md-6">
                            <label>Type</label>
                            <input value="Pick-up" class="form-control" disabled style="border:none;">
                        </div>
                        
                        <div class="col-md-6">
                            <label>Type</label>
                            <input value="Pick-up" class="form-control" disabled style="border:none;">
                        </div>
                        <div class="col-md-6">
                            <label>Type</label>
                            <input value="Pick-up" class="form-control" disabled style="border:none;">
                        </div>
                       <div class="col-md-8 col-md-offset-2">
                        
                        <div class="row">
                            <div style="text-align:center;">
                                <h2>Total : ₱ 1,220.00</h2>  
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