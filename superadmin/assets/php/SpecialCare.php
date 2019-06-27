<script>
    ////// BASIC CARE
    ///// select category 
    function discountSC(){
        
        if(amount == ""){
            alert("Please choose a category!")
        }
        
        else{

            $("#discount-inputSC").show();   
        }
    }
    
    function typeselectSC(){
        
        var valueprice = document.getElementById('itemsSC').value;
        var amount = document.getElementById('amountSC').value;
        document.getElementById('newamountSC').value = valueprice;
        document.getElementById('amountSC').value = valueprice;
        
        if(amount = ""){
              document.getElementById('amountSC').value = "0.00";
        }
        else{
            document.getElementById('kiloSC').disabled = false;
            document.getElementById('piecesSC').disabled = false;
        }
        
        $('#discount-inputSC').hide();
        document.getElementById('statusSC').value = "";
        document.getElementById('totalamountSC').value = "0";
        document.getElementById('finaltotalamountSC').value = "0";
        document.getElementById('kiloSC').value = "0";
        document.getElementById('piecesSC').disabled = true;
        document.getElementById('statusSC').disabled = true;
    }
    
    function discountcancelSC(){
        var amount = document.getElementById('amountSC').value;
        document.getElementById('newamountSC').value = amount;
        document.getElementById('totalamountSC').value = "0";
        document.getElementById('kiloSC').value = "0";
        $("#discount-inputSC").hide();
    }
    function cancelSC(){
        document.getElementById('statusSC').value = "";
        document.getElementById('totalamountSC').value = "0";
        document.getElementById('finaltotalamountSC').value = "0";
        document.getElementById('kiloSC').value = "0";
        document.getElementById('piecesSC').value = "0";
        document.getElementById('amountSC').value = "0";
        document.getElementById('newamountSC').value = "0";
        document.getElementById('kiloSC').disabled = true;
        document.getElementById('piecesSC').disabled = true;
        document.getElementById('statusSC').disabled = true;
    }
    ////// type select
/*    function typeselectSC(){

        var type1 = document.getElementById("itemsSC").value;
        var type2 = document.getElementById("itemsSC").value;
        
        if(type1 == "WDFSC"){
            $("#type-select1SC").show();
            $("#type-select2SC").hide();
            document.getElementById('totalamountSC').value = "0";
            document.getElementById('kiloSC').value = "0";
            document.getElementById('piecesSC').value = "0";
            document.getElementById('newamountSC').value = "0";
            document.getElementById('kiloSC').disabled = true;
            document.getElementById('piecesSC').disabled = true;
            document.getElementById('statusSC').value = "";
        }
        else{
            $("#type-select2SC").show();
            $("#type-select1SC").hide ();
            document.getElementById('totalamountSC').value = "0";
            document.getElementById('kiloSC').value = "0";
            document.getElementById('piecesSC').value = "0";
            document.getElementById('amountSC').value = "0";
            document.getElementById('newamountSC').value = "0";
            document.getElementById('kiloSC').disabled = true;
            document.getElementById('piecesSC').disabled = true;
            document.getElementById('statusSC').value = "";
        }
        
    }
    */
    
    function enterkiloSC(){
        
        $("#enterkiloSC").show();
        $("#enterpiecesSC").hide();
        document.getElementById('statusSC').value = "";
        document.getElementById('finaltotalamountSC').value = "0";
        document.getElementById('kiloSC').value = "0";
        document.getElementById('piecesSC').value = "0";
    }
    function enterpiecesSC(){
        
        $("#enterkiloSC").hide();
        $("#enterpiecesSC").show();
        document.getElementById('statusSC').value = "";
        document.getElementById('finaltotalamountSC').value = "0";
        document.getElementById('totalamountSC').value = "0";
        document.getElementById('kiloSC').value = "0";
        document.getElementById('piecesSC').value = "0";
    }
    
    function rushregularSC(){
        var total = document.getElementById('totalamountSC').value;
        var status = document.getElementById('statusSC').value;
        
        if(status == "regular"){
            document.getElementById('finaltotalamountSC').value = total;
        }
        else{
            document.getElementById('finaltotalamountSC').value = total * 2 + ".00";
          
        }
    }
    
    
    function computetotalkiloSC(){
        
        var amount1 = document.getElementById('newamountSC').value;
        var kilo1 = document.getElementById('kiloSC').value;
        
       var amount = parseFloat(amount1);
        var kilo = parseFloat(kilo1);
        
            if(kilo1 == "" || kilo1 == null ){
                document.getElementById('totalamountSC').value = "0";
                document.getElementById('finaltotalamountSC').value = "0";
                document.getElementById('statusSC').disabled = true;
            }
            else{
                document.getElementById('statusSC').disabled = false;
                if(kilo <= 2.9999999999999999){
                    $("#minimumalertSC").show();
                    document.getElementById('totalamountSC').value = amount * 3.00 + ".00";
                    
                }

                else{
                    $("#minimumalertSC").hide();
                    var subto = document.getElementById('totalamountSC').value = amount * kilo + ".00";
                    var subtoto = parseInt(subto);
                    document.getElementById('totalamountSC').value = subtoto+".00";
                }   
            }
        
    }
    
    function computetotalpiecesSC(){
        
        var amount1 = document.getElementById('newamountSC').value;
        var pieces1 = document.getElementById('piecesSC').value;
        
        var amount = parseFloat(amount1);
        var pieces = parseFloat(pieces1);
        
        document.getElementById('statusSC').disabled = false;
        var subto = document.getElementById('totalamountSC').value = amount * pieces + ".00";
        var subtoto = parseInt(subto);
        document.getElementById('totalamountSC').value = subtoto+".00";
    }
    
    function okSC(){
        var finaltotal = document.getElementById('finaltotalamountSC').value;
        document.getElementById('totaltotalSC').value = finaltotal;
        
        document.getElementById('statusSC').value = "";
        document.getElementById('totalamountSC').value = "0";
        document.getElementById('finaltotalamountSC').value = "0";
        document.getElementById('kiloSC').value = "0";
        document.getElementById('piecesSC').value = "0";
        document.getElementById('amountSC').value = "0";
        document.getElementById('newamountSC').value = "0";
        document.getElementById('kiloSC').disabled = true;
        document.getElementById('piecesSC').disabled = true;
        document.getElementById('statusSC').disabled = true;
    }
    
     
    function okaySC()
    {
              var rIndex,
     table = document.getElementsByTagName('table')[0];
              
    
                  // add new empty row to the table
                  // 0 = in the top 
                  // table.rows.length = the end
                  // table.rows.length/2+1 = the center
                  var newRow = table.insertRow(table.rows.length);
                  
                  // add cells to the row
                  var cel1 = newRow.insertCell(0);
                  var cel2 = newRow.insertCell(1);
                  var cel3 = newRow.insertCell(2);
                  var cel4 = newRow.insertCell(3);
                  var cel5 = newRow.insertCell(4);
                  var cel6 = newRow.insertCell(5);
                  var cel7 = newRow.insertCell(6);
        
                  var type = document.getElementById('itemsSC').value;
        
                  // add values to the cells
                  cel1.innerHTML = type;
                  cel2.innerHTML = "lname";
                  cel3.innerHTML = "age";
                  cel4.innerHTML = "age";
                  cel5.innerHTML = "age";
                  cel6.innerHTML = "age";
                  cel7.innerHTML = "<button class='btn btn-danger'>Remove</button>";
        }  

    

</script>

<div id="specialcare" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Special Care</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <br>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12">
                                <label>Type</label>
                                <select class="form-control" id="itemsSC" onchange="typeselectSC()" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="85.00">BULKY ITEMS</option>
                                  <option value="60.00">COMFORTER</option>
                                  <option value="70.00">HAND WASH</option>
                                </select>

                            </div>

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
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancelSC()">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal"  onclick="okaySC()">Okay</button>

                </div>
            </form>
        </div>
    </div>
</div>