<script>
    function drycleaningPC(){
        var items = document.getElementById('itemsPC').value;
        
        if(items == "WDFPC"){
            $('#type-select1-PC').show();
            $('#type-select2-PC').hide();
        }
        else{
            
            $('#type-select1-PC').hide();
            $('#type-select2-PC').show();
        }
    }
    
    function dc(){
        
        var dc = document.getElementById('DC').value;
        
        if(dc == "othersDC"){
            $('#othersDC').show();
        }
        else{
            $('#othersDC').hide();
        }
    }
    
    function gc(){
        
        var gc = document.getElementById('GC').value;
        
        if(gc == "othersGC"){
            $('#othersGC').show();
        }
        else{
            $('#othersGC').hide();
        }
    }
</script>

<div id="premiumcare" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Premium Care</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <br>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12">
                                <label>Type</label>
                                <select class="form-control" id="itemsPC" onchange="drycleaningPC()" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="WDFPC">DRY-CLEANING</option>
                                  <option value="WDPPC">GENTLE-CARE</option>
                                </select>

                            </div>

                            <div class="col-md-12 bg-info" id="type-select1-PC" style="display:none; border-radius:10px;">
                                <p align="center">DRY-CLEANING  /piece</p>
                                <select class="form-control" id="DC" required onchange="dc()">
                                  <option value="" disabled selected >Select</option>
                                  <option value="25.00">Barong Jusi ₱150 & up</option>
                                  <option value="25.00">Barong Pina ₱15 & up</option>
                                  <option value="50.00">Coat/Blazer ₱200 & up</option>
                                  <option value="50.00">Vest ₱90 & up</option>
                                  <option value="50.00">Skirt ₱100 & up</option>
                                  <option value="50.00">Sweater/Cardigan ₱150 & up</option>
                                  <option value="50.00">Gown/Dress ₱300 & up</option>
                                  <option value="50.00">Wedding Gown ₱1000 & up</option>
                                  <option value="othersDC">Others</option>
                                </select>
                                <div style="display:none;" id="othersDC">
                                    <div class="col-md-5">
                                        <label>Items</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <label>Price</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>okay</label>
                                        <input type="button" class="btn btn-primary" value="okay">
                                    </div>
                                </div>
                            </div>    


                            <div class="col-md-12 bg-info" id="type-select2-PC" style="display:none; border-radius:10px;">
                                <p align="center">DRY-CLEANING  /piece</p>
                                <select class="form-control" id="GC" required onchange="gc()">
                                  <option value="" disabled selected >Select</option>
                                  <option value="25.00">Barong Jusi ₱150 & up</option>
                                  <option value="25.00">Barong Pina ₱15 & up</option>
                                  <option value="50.00">Coat/Blazer ₱200 & up</option>
                                  <option value="50.00">Vest ₱90 & up</option>
                                  <option value="50.00">Skirt ₱100 & up</option>
                                  <option value="50.00">Sweater/Cardigan ₱150 & up</option>
                                  <option value="50.00">Gown/Dress ₱300 & up</option>
                                  <option value="50.00">Wedding Gown ₱1000 & up</option>
                                  <option value="othersGC">Others</option>
                                </select>
                                <div style="display:none;" id="othersGC">
                                    <div class="col-md-5">
                                        <label>Items</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <label>Price</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label>okay</label>
                                        <input type="button" class="btn btn-primary" value="okay">
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <label>Amount per kilo/pcs</label>
                                    ₱<input style="text-align:center; border:none; font-size:20px;" type="text" class="form-control" id="amount" readonly placeholder="0">

                                </div> 
                                <div class="col-md-4">
                                    <label>Special Price</label>
                                    <input type="button" class="btn btn-success" value="Discount price" id="discount-btn" onclick="discount()">
                                </div>
                            </div>

                            <div class="col-md-12 bg-info" id="discount-input" style="display:none; border-radius:10px;">
                                <div class="col-md-12">
                                     <label style="float:left">New Amount</label>
                                </div>
                                <div class="col-md-10">
                                    <input style="text-align:center" type="number" class="form-control" min="0" id="newamount">
                                </div>
                                <div class="col-md-2">
                                    <input type="button" class="btn btn-warning" value="Cancel" onclick="discountcancel()">
                                </div>

                            </div> 
        
                            <div class="col-md-12">
                                <div class="col-md-6" align="center">
                                    <button class="btn btn-primary" onclick="enterkilo()">Enter Kilos</button>
                                </div>
                                <div class="col-md-6" align="center">
                                    <button class="btn btn-danger" onclick="enterpieces()">Enter Pieces</button>
                                </div>
                            </div> 


                            <div class="col-md-12 bg-info" id="enterkilo" style="display:none; border-radius:10px;">
                                <label>No. of Kilograms</label>
                                <div class="bg-danger" id="minimumalert" style="display:none; text-align:center; padding:5px;">minimum of 3 kilos   </div>
                                <input style="text-align:center" type="number" class="form-control" id="kilo" onkeyup="computetotalkilo()" min="1" disabled>
                            </div> 
                            
                            <div class="col-md-12 bg-danger" id="enterpieces" style="display:none; border-radius:10px;">
                                <label>No. of Pieces</label>
                                
                                <input style="text-align:center" type="number" class="form-control" id="pieces" min="1" onkeyup="computetotalpieces()"  disabled>
                            </div> 


                            <div class="col-md-12">
                                <label>SubTotal</label>
                                ₱<input style="text-align:center; border:none;" type="number" class="form-control" id="totalamount" placeholder="0" readonly>
                            </div>
                                                        
                            <div class="col-md-12">
                                <label>Status</label>
                                <select class="form-control" id="status" onchange="rushregular()" disabled>
                                    <option value="" selected disabled>Select</option>
                                    <option value="regular" >Regular</option>
                                    <option value="rush">Rush</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label>Total Amount</label>
                                ₱<input style="text-align:center; border:none; font-size:25px;" type="number" class="form-control" id="finaltotalamount" placeholder="0" readonly>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancel()">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal"  onclick="okay()">Okay</button>

                </div>
            </form>
        </div>
    </div>
</div>