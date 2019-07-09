


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
                    </div>
                       <div class="col-md-8 col-md-offset-2">
                        
                        <div class="row">
                            <div style="text-align:center;">
                              <h2><span>Total: ₱</span><span id="pn_totalamount"></span> </h2>  
                            </div>

                        </div>
                            <div class="row" style="text-align:center;">
                                <label>Payment</label>
                                <input style="text-align:center;" type="number" class="form-control" id="pn_payment" onchange="paynowcompute()">
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
                          <label>------------------------<label style="font-size:18px;" id="cd_pickordeliver"></label>------------------------</label><br>
                          
                          <input type="hidden" id="hidden_cd_id">
                          <label>Job Order No: <label id="cd_jo"></label></label><br>
                          <label>Received Date: <label id="cd_receiveddate"></label></label><br>
                          <label>Pickup/Deliver Date: <div id="cd_pickordeliverdate"></div> </label><br>
                          <label>Customer Name: <label id="cd_customername"></label></label><br>
                          <label>Contact #: <label id="cd_contact"></label></label><br>
                          <label>Address: <label id="cd_address"></label></label><br>
                       
                          
                      </div>
                    </div>
                       <div class="col-md-8 col-md-offset-2">
                        
                        <div class="row">
                            <div style="text-align:center;">
                              <h2><span>Total: ₱</span><span id="cd_totalamount"></span> </h2>  
                            </div>
                            <button onclick="date_release_process()" class="btn btn-success" id="cd_releasebtn"> release now!</button>
                        </div>
                    </div>
                    </div>
                  </div>
              </div>
        </div>
</div>

<script>
    
    $(document).ready(function () {
        unpaid_list();
        customerlist();
    });
    

    function customerlist(){

        var customerlist = "customerlist";
        $.ajax({
            url:"assets/php/function/unpaidprocess.php",
            type:"POST",
            data:{
                customerlist:customerlist
            },
            success:function(data,status){
                $('#customerlist').html(data);
            },

        });
    }  
    
    function unpaid_list(){

            var unpaid_list = "unpaid_list";
            $.ajax({
                url:"assets/php/function/unpaidprocess.php",
                type:"POST",
                data:{
                    unpaid_list:unpaid_list
                },
                success:function(data,status){
                    $('#unpaid-list').html(data);
                },

            });
        } 
    
        
    function paynowcompute(){
        
        var tototal = document.getElementById('pn_totalamount').textContent;
        var tototal1 = tototal.replace(/,/g,"");
        var pn_payment = document.getElementById('pn_payment').value;
        var tototo = parseFloat(pn_payment) - parseFloat(tototal1);
    
        
        if (parseFloat(pn_payment) < parseFloat(tototal1)){
            swal("Opps!", "insufficient money!", "error");
            document.getElementById('pn_paynow').disabled = true;
        }
        else{
            document.getElementById('pn_change').value = tototo;
            document.getElementById('pn_paynow').disabled = false;
        }
        
    }
    
    function pn_btn_finish(){
        
        var today = new Date();
        var paymentdate_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
        var remark = "Paid";
        var hidden_pn_id = $("#hidden_pn_id").val();
        $.post("assets/php/function/unpaidprocess.php",  
               {
                hidden_pn_id: hidden_pn_id,
                paymentdate_received: paymentdate_received,
                remark: remark
            },
            function (data, status) {
                document.getElementById('pn_payment').value = "";
                document.getElementById('pn_change').value = "";
                unpaid_list();
                customerlist();
                swal('Payment Complete!', 'Click okay to continue!', 'success');
            }
        );

    }
    function paynowprocess(id){
        $("#hidden_pn_id").val(id);
          $.post("assets/php/function/unpaidprocess.php", 
            {
                id: id
            },
            function (data, status) {
                //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
                var paynow = JSON.parse(data);
              
                $("#pn_jo").html(paynow.id);
                $("#pn_pickordeliver").html(paynow.pickordeliver);
                $("#pn_receiveddate").html(paynow.date_received);
                $("#pn_pickordeliverdate").html(paynow.pickup_date);
                $("#pn_customername").html(paynow.name_customer);
                $("#pn_contact").html(paynow.contact_customer);
                $("#pn_address").html(paynow.address_customer);
                $("#pn_totalamount").html(paynow.amount);
            }
        );
    }      
    
    /// getting customer details
    function customer_details(id){
        
        $("#hidden_cd_id").val(id);
          $.post("assets/php/function/unpaidprocess.php", 
            {
                id: id
            },
            function (data, status) {
                //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
                var cd = JSON.parse(data);
              
                $("#cd_jo").html(cd.id);
                $("#cd_pickordeliver").html(cd.pickordeliver);
                $("#cd_receiveddate").html(cd.date_received);
                $("#cd_pickordeliverdate").html(cd.pickup_date);
                $("#cd_customername").html(cd.name_customer);
                $("#cd_contact").html(cd.contact_customer);
                $("#cd_address").html(cd.address_customer);
                $("#cd_totalamount").html(cd.amount);
            }
        );
    }  
    
    
    function date_release_process(){
        
        var today = new Date();
        var date_release = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
        var hidden_cd_id = $("#hidden_cd_id").val();
        $.post("assets/php/function/unpaidprocess.php",  
               {
                hidden_cd_id: hidden_cd_id,
                date_release: date_release
            },
            function (data, status) {
                unpaid_list();
                customerlist();
            
                if (date_release == "Pending"){
                   swal('Release Complete!', 'Click okay to continue!', 'success');
                $('#customer_details').modal('hide'); 
                }
                else{
                    swal('na release na to!', 'Click okay to continue!', 'success');
                }
            }
        );

    }

</script>
