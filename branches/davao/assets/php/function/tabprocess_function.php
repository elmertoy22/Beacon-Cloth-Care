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
                if (cd.date_received == "null"){
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
            
                swal('Release Complete!', 'Click okay to continue!', 'success');
                $('#customer_details').modal('hide'); 
               
            }
        );

    }

</script>