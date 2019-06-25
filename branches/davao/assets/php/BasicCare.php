<script>
    ////// BASIC CARE
    ///// select category 
    function discount(){
        
        if(amount == ""){
            alert("Please choose a category!")
        }
        
        else{

            $("#discount-input").show();   
        }
    }
    function discountcancel(){
        var amount = document.getElementById('amount').value;
        document.getElementById('newamount').value = amount;
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "0";
        $("#discount-input").hide();
    }
    function cancel(){
        document.getElementById('status').value = "";
        document.getElementById('totalamount').value = "0";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
        document.getElementById('amount').value = "0";
        document.getElementById('newamount').value = "0";
        document.getElementById('kilo').disabled = true;
        document.getElementById('pieces').disabled = true;
        document.getElementById('status').disabled = true;
        $("#enterkilo").hide();
        $("#enterpieces").hide();
        $("#type-select1").hide();
        $("#type-select2").hide();
    }
    ////// type select
    function typeselect(){

        var type1 = document.getElementById("items").value;
        var type2 = document.getElementById("items").value;
        
        if(type1 == "WDF"){
            $("#type-select1").show();
            $("#type-select2").hide();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "0";
            document.getElementById('pieces').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
        }
        else{
            $("#type-select2").show();
            $("#type-select1").hide ();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "0";
            document.getElementById('pieces').value = "0";
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
        }
        
    }
    
    function WDFchoices(){
        
        var WDFoption = document.getElementById('WDFoption').value;
        
        if (WDFoption == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        else{
            document.getElementById('amount').value = WDFoption;
            document.getElementById('newamount').value = WDFoption;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
            
        }
    }
    
    function WDPchoices(){
        
        var WDPoption = document.getElementById('WDPoption').value;
        
        if (WDPoption == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        else{
            document.getElementById('amount').value = WDPoption;
            document.getElementById('newamount').value = WDPoption;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
            
        }
    }
    
    function enterkilo(){
        $("#enterkilo").show();
        $("#enterpieces").hide();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
    }
    function enterpieces(){
        $("#enterpieces").show();
        $("#enterkilo").hide();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
    }
    
    function rushregular(){
        var total = document.getElementById('totalamount').value;
        var status = document.getElementById('status').value;
        
        if(status == "regular"){
            document.getElementById('finaltotalamount').value = total;
        }
        else{
            document.getElementById('finaltotalamount').value = total * 2 + ".00";
          
        }
    }
    
    
    function computetotalkilo(){
        
        var amount1 = document.getElementById('newamount').value;
        var kilo1 = document.getElementById('kilo').value;
        
       var amount = parseFloat(amount1);
        var kilo = parseFloat(kilo1);
        
            if(kilo1 == "" || kilo1 == null ){
                document.getElementById('totalamount').value = "0";
                document.getElementById('finaltotalamount').value = "0";
                document.getElementById('status').disabled = true;
            }
            else{
                document.getElementById('status').disabled = false;
                if(kilo <= 2.9999999999999999){
                    $("#minimumalert").show();
                    document.getElementById('totalamount').value = amount * 3.00 + ".00";
                    
                }

                else{
                    $("#minimumalert").hide();
                    var subto = document.getElementById('totalamount').value = amount * kilo + ".00";
                    var subtoto = parseInt(subto);
                    document.getElementById('totalamount').value = subtoto+".00";
                }   
            }
        
    }
    
    function computetotalpieces(){
        var amount1 = document.getElementById('newamount').value;
        var pieces1 = document.getElementById('pieces').value;
        
        var amount = parseFloat(amount1);
        var pieces = parseFloat(pieces1);
        
        document.getElementById('status').disabled = false;
        var subto = document.getElementById('totalamount').value = amount * pieces + ".00";
        var subtoto = parseInt(subto);
        document.getElementById('totalamount').value = subtoto+".00";
    }
    
    function ok(){
        var finaltotal = document.getElementById('finaltotalamount').value;
        document.getElementById('totaltotal').value = finaltotal;
        
        document.getElementById('status').value = "";
        document.getElementById('totalamount').value = "0";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "0";
        document.getElementById('pieces').value = "0";
        document.getElementById('amount').value = "0";
        document.getElementById('newamount').value = "0";
        document.getElementById('kilo').disabled = true;
        document.getElementById('pieces').disabled = true;
        document.getElementById('status').disabled = true;
        $("#enterkilo").hide();
        $("#enterpieces").hide();
        $("#type-select1").hide();
        $("#type-select2").hide();
    }
    
     
    function okay()
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
        
                  var type = document.getElementById('items').value;
                  var type = document.getElementById('items').value;
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

<div id="basiccare" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Basic Care</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <br>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-12">
                                <label>Type</label>
                                <select class="form-control" id="items" onchange="typeselect()" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="WDF">WASH-DRY-FOLD</option>
                                  <option value="WDP">WASH-DRY-PRESS</option>
                                </select>

                            </div>

                            <div class="col-md-12 bg-info" id="type-select1" onchange="WDFchoices()" style="display:none; border-radius:10px;">
                                <p align="center">WASH-DRY-FOLD</p>
                                <select class="form-control" id="WDFoption" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="25.00">Regular Clothes</option>
                                  <option value="50.00">Regular Towel/Bedsheet</option>
                                </select>

                            </div>    

                            <div class="col-md-12 bg-info" id="type-select2" onchange="WDPchoices()" style="display:none; border-radius:10px;">
                                <p align="center">WASH-DRY-PRESS</p>
                                <select class="form-control" id="WDPoption" required >
                                  <option value="" disabled selected >Select</option>
                                  <option value="75.00">Regular Clothes</option>
                                  <option value="50.00">Regular Towel/Bedsheet</option>
                                  <option value="6.00">Hanger ₱6/pcs</option>
                                </select>

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