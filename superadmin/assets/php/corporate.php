<script>
    function corporate(){
        var cor = document.getElementById('corporate-select').value;
        if(cor == "cor1"){
            $('#corporate1').show();
        }
        
    }
</script>

<div id="corporate" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Corporate Account</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12">
                                <label>Type</label>
                                <select class="form-control" id="corporate-select" onchange="corporate()" required >
                                  <option value="" disabled selected >Corporate Account</option>
                                  <option value="cor1" >Corporate Account 1</option>
                                  <option value="cor2" >Corporate Account 2</option>
                                  <option value="cor3" >Corporate Account 3</option>
                                  <option value="cor4" >Corporate Account 4</option>
                                  <option value="cor5" >Corporate Account 5</option>
                                </select>

                            </div>
                            <div id="corporate1" style="display:none;">
                                
                                
                                <label>Items</label>
                                    <select class="form-control" id="corporate-select" onchange="corporate()" required >
                                      <option value="" disabled selected >Select</option>
                                      <option value="cor1" >Items 1</option>
                                      <option value="cor2" >Items 2</option>
                                      <option value="cor3" >Items 3</option>
                                      <option value="cor4" >Items 4</option>
                                      <option value="cor5" >Items 5</option>
                                    </select>
                                
                                <div class="col-md-12">
                                    <div class="col-md-8">
                                        <label>Amount per kilo/pcs</label>
                                        ₱<input style="text-align:center; border:none; font-size:20px;" type="text" class="form-control" id="amountSC" readonly placeholder="0">

                                    </div> 
                                    <div class="col-md-4">
                                        <label>Special Price</label>
                                        <input type="button" class="btn btn-success" value="Discount price" id="discount-btn" onclick="discountSC()">
                                    </div>
                                </div>

                                <div class="col-md-12 bg-info" id="discount-inputSC" style="display:none; border-radius:10px;">
                                    <div class="col-md-12">
                                         <label style="float:left">New Amount</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input style="text-align:center" type="number" class="form-control" min="0" id="newamountSC">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="button" class="btn btn-warning" value="Cancel" onclick="discountcancelSC()">
                                    </div>

                                </div> 

                                <div class="col-md-12">
                                    <div class="col-md-6" align="center">
                                        <button class="btn btn-primary" onclick="enterkiloSC()">Enter Kilos</button>
                                    </div>
                                    <div class="col-md-6" align="center">
                                        <button class="btn btn-danger" onclick="enterpiecesSC()">Enter Pieces</button>
                                    </div>
                                </div> 


                                <div class="col-md-12 bg-info" id="enterkiloSC" style="display:none; border-radius:10px;">
                                    <label>No. of Kilograms</label>
                                    <div class="bg-danger" id="minimumalertSC" style="display:none; text-align:center; padding:5px;">minimum of 3 kilos   </div>
                                    <input style="text-align:center" type="number" class="form-control" id="kiloSC" onkeyup="computetotalkiloSC()" min="1" disabled>
                                </div> 

                                <div class="col-md-12 bg-danger" id="enterpiecesSC" style="display:none; border-radius:10px;">
                                    <label>No. of Pieces</label>

                                    <input style="text-align:center" type="number" class="form-control" id="piecesSC" min="1" onkeyup="computetotalpiecesSC()"  disabled>
                                </div> 


                                <div class="col-md-12">
                                    <label>SubTotal</label>
                                    ₱<input style="text-align:center; border:none;" type="number" class="form-control" id="totalamountSC" placeholder="0" readonly>
                                </div>

                                <div class="col-md-12">
                                    <label>Status</label>
                                    <select class="form-control" id="statusSC" onchange="rushregularSC()" disabled>
                                        <option value="" selected disabled>Select</option>
                                        <option value="regular" >Regular</option>
                                        <option value="rush">Rush</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label>Total Amount</label>
                                    ₱<input style="text-align:center; border:none; font-size:25px;" type="number" class="form-control" id="finaltotalamountSC" placeholder="0" readonly>
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