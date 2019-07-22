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
    
    function unpaid_search(){

            var unpaid_search = document.getElementById('unpaid_search').value;
            $.ajax({
                url:"assets/php/function/unpaidprocess.php",
                type:"POST",
                data:{
                    unpaid_search:unpaid_search
                },
                success:function(data,status){
                    $('#unpaid-list').html(data);
                },

            });
        } 
    
        function customerlist_search(){

            var customerlist_search = document.getElementById('customerlist_search').value;
            $.ajax({
                url:"assets/php/function/unpaidprocess.php",
                type:"POST",
                data:{
                    customerlist_search:customerlist_search
                },
                success:function(data,status){
                    $('#customerlist').html(data);
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
            document.getElementById('pn_change').value = 0;
        }
        else{
            document.getElementById('pn_change').value = tototo +'.00';
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
             
                
                swal({
                  title: "Transaction Complete!",
                  text: "Do you want to print a receipt ?",
                  icon: "success",
                })
            
                .then((willprint) => {
                  if (willprint) {
                    swal("Payment Complete!", {
                      icon: "success",
                    });
                        window.open('assets/php/function/printreceipt_unpaidtopaid.php','_blank');
                        unpaid_list();
                        customerlist(); 
                        location.reload(true);
                  } else {
                        window.open('assets/php/function/printreceipt_unpaidtopaid.php','_blank');
                        unpaid_list();
                        customerlist(); 
                        location.reload(true);
                  }
                     window.open('assets/php/function/printreceipt_unpaidtopaid.php','_blank');
                    unpaid_list();
                    customerlist();  
                    location.reload(true);
                });
            }
        );

    }
    function paynowprocess(id){
        $("#hidden_pn_id").val(id);
          $.post("assets/php/function/unpaidprocess.php", 
            {
                id: id
            },
            function (data,status) {
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
                $("#pn_emailaddress").html(paynow.email_customer);
                $("#pn_status").html(paynow.remark);
                
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
              
                if (cd.date_release == "Pending"){
                    document.getElementById('cd_releasebtn').disabled = false;
                    document.getElementById('cd_releasebtn').value = 'Release now';
                }else{
                    document.getElementById('cd_releasebtn').disabled = true;
                    document.getElementById('cd_releasebtn').value = 'Already release';
                    
                }
                if (cd.date_received == "Pending"){
                    document.getElementById('cd_receivebtn').disabled = false;
                    document.getElementById('cd_receivebtn').value = 'Receive now';
                }else{
                    document.getElementById('cd_receivebtn').disabled = true;
                    document.getElementById('cd_receivebtn').value = 'Already receive';
                    
                }
              
                $("#cd_jo").html(cd.id);
                $("#cd_pickordeliver").html(cd.pickordeliver);
                $("#cd_receiveddate").html(cd.date_received);
                $("#cd_pickordeliverdate").html(cd.pickup_date);
                $("#cd_remark").html(cd.remark);
                $("#cd_customername").html(cd.name_customer);
                $("#cd_contact").html(cd.contact_customer);
                $("#cd_address").html(cd.address_customer);
                $("#cd_totalamount").html(cd.amount);
                $("#cd_emailaddress").html(cd.email_customer);
                document.getElementById('ereceipt_email').value = (cd.email_customer);
            
            }
        );
        showreceipt();
    }  
    
    function showreceipt(){
        var showreceipt = $("#hidden_cd_id").val();
        
        $.ajax({
            url:"assets/php/function/unpaidprocess.php",
            type:"POST",
            data:{
                showreceipt:showreceipt
            },
            success:function(data,status){
                 $('#showreceipt-display').html(data);
            },

        });
    }    
    
    function date_release_process(){
        
        swal({
          title: "Release now?",
          text: "Do you want to release now?",
          buttons: true,
        })
        .then((willprint) => {
          if (willprint) {

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

                    swal('Release Complete!', 'Click okay to continue!', 'success');
                    $('#customer_details').modal('hide'); 

                }
            );
              
          } else {
               
          }
            
        });

    }    
    
    function date_received_process(){
        
        swal({
          title: "Receive now?",
          text: "Do you want to receive now?",
          buttons: true,
        })
        .then((willprint) => {
          if (willprint) {

            var today = new Date();
            var date_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
            var hidden_received_id = $("#hidden_cd_id").val();
            $.post("assets/php/function/unpaidprocess.php",  
                   {
                    hidden_received_id: hidden_received_id,
                    date_received: date_received
                },
                function (data, status) {
                    unpaid_list();
                    customerlist();

                    swal('Received Complete!', 'Click okay to continue!', 'success');
                    $('#customer_details').modal('hide'); 

                }
            );
              
          } else {
               
          }
            
        });
        
    }    
    function resend_receipt_process(){
        
        var ereceipt_email = $('#ereceipt_email').val();
        var ereceipt_id = $("#hidden_cd_id").val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(ereceipt_email == null){
            swal("Opps!", "Please fill up the email address input", "error");
        }
         if(!regex.test(ereceipt_email)) {
            swal("Opps!", "Please put valid email address", "error");
         }
        else{
            
            $('#resend-ereceipt').modal('hide');
            $('#resend-ereceipt-loader').modal('show');
            $.ajax({
                url:"assets/php/function/unpaidprocess.php",
                type:"POST",
                data:{
                    ereceipt_id:ereceipt_id,
                    ereceipt_email:ereceipt_email
                },
                success:function(data,status){
                    swal('Resend E-receipt Complete!', 'Click okay to continue!', 'success');
                    $('#resend-ereceipt-loader').modal('hide'); 
                },

            });
            
        }
        
    } 
    
    function reprint_receipt_process(){
        
        var ereceipt_reprint_id = $("#hidden_cd_id").val();

            $.ajax({
                url:"assets/php/function/unpaidprocess.php",
                type:"POST",
                data:{
                    ereceipt_reprint_id:ereceipt_reprint_id
                },
                success:function(data,status){
                     window.open('assets/php/function/printreceipt_reprint.php','_blank');
                },

            });
     
        
    }    
    function additional_items(){
        
        var additional_items_id = $("#hidden_cd_id").val();
        var additems_items = $("#additems_items").val();
        var additems_kilos = $("#additems_kilos").val();
        var additems_pieces = $("#additems_pieces").val();
        var additems_amount = $("#additems_amount").val();

        if(additems_items ==  ""){
           swal("Opps!", "Please fill up required field", "error");
        }
        if(additems_amount ==  ""){
           swal("Opps!", "Please fill up required field", "error");
        }
        else{
            
            $.ajax({
                url:"assets/php/function/unpaidprocess.php",
                type:"POST",
                data:{
                    additional_items_id:additional_items_id,
                    additems_items:additems_items,
                    additems_kilos:additems_kilos,
                    additems_pieces:additems_pieces,
                    additems_amount:additems_amount
                },
                success:function(data,status){
                     swal('Additional items added complete!', 'Click okay to continue!', 'success');
                    document.getElementById('additems_items').value = "";
                    document.getElementById('additems_kilos').value = "";
                    document.getElementById('additems_pieces').value = "";
                    document.getElementById('additems_amount').value = "";
                     $("#additemscol").collapse('hide');
                    showreceipt();
                },

            });
        
        }
    }

</script>