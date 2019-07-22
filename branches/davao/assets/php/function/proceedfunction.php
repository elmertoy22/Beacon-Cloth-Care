
<script>
          
$(document).ready(function () {
    displaycart(); 
    displaytotal(); 
    displaytotalkilo(); 
    displaytotalpcs(); 
	});
    
    
    
    function jeje(){
        swal({
          title: "Transaction Complete!",
          text: "Do you want to print a receipt ?",
          icon: "success",
          buttons: true,
        })
        .then((willprint) => {
          if (willprint) {
            swal("Transaction Complete!", {
              icon: "success",
            });
          } else {
            location.reload(true);
          }
        });
    }
    
    function customerinfo(){
        
        var type_customer =  $("#customertype").val();
        var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();

        
        if(type_customer == null){
            swal("Opps!", "Please fill up the customer type", "error");
        }
        else if(pickordeliver == null){
            swal("Opps!", "Please fill up the transaction type", "error");
        }
        else if (pickordeliver == "deliver" && address_customer == ""){
            swal("Opps!", "Please fill up the address", "error");
        }
        else if(pickup_date == ""){
            swal("Opps!", "Please fill up the delivery/pickup date", "error");
        }
        else if(pickup_time == ""){
            swal("Opps!", "Please fill up the delivery/pickup time", "error");
        }
        else if(name_customer == ""){
            swal("Opps!", "Please fill up the customer name", "error");
        }
        else if(contact_customer == ""){
            swal("Opps!", "Please fill up the customer contact", "error");
        }
        else{
            $('#ProceedModal').modal("hide");
            $('#enterpepe').modal("show");
        }
            

    }    
    function unpaid_customerinfo(){
        
        var type_customer =  $("#customertype").val();
        var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();

        var ru_today = new Date();
        var ru_date_received = (ru_today.getMonth()+1)+'/'+ru_today.getDate()+'/'+ru_today.getFullYear();
        
        if(type_customer == null){
            swal("Opps!", "Please fill up the customer type", "error");
        }
        else if(pickordeliver == null){
            swal("Opps!", "Please fill up the transaction type", "error");
        }
        else if (pickordeliver == "deliver" && address_customer == ""){
            swal("Opps!", "Please fill up the address", "error");
        }
        else if(pickup_date == ""){
            swal("Opps!", "Please fill up the delivery/pickup date", "error");
        }
        else if(pickup_time == ""){
            swal("Opps!", "Please fill up the delivery/pickup time", "error");
        }
        else if(name_customer == ""){
            swal("Opps!", "Please fill up the customer name", "error");
        }
        else if(contact_customer == ""){
            swal("Opps!", "Please fill up the customer contact", "error");
        }
       
        else{ 
            unpaid_finishtransaction();
            
        }
            
 
    }
    
    
    function finishtransaction(){
        
        var today = new Date();
        var type_customer =  $("#customertype").val();
        
        
        if(type_customer == "warehouse"){
            var date_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
            var branch_received_date = ""
            console.log('pasok sa warehouse');
        }
        if (type_customer == "branch1"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = "Pending"
            console.log('pasok sa branch1');
        }
        if (type_customer == "branch2"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = "Pending"
            console.log('pasok sa branch2');
        }
        
        var type_customer =  $("#customertype").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();
		var total_kilo =  document.getElementById('displaytotalkilo').textContent;
		var total_pcs =  document.getElementById('displaytotalpcs').textContent;
        var amountc =  document.getElementById('displaytotalco').textContent;
        var amount = amountc.replace(/,/g,"");
		var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
		var date_release =  "Pending";
		var remark =  "Paid";
        var email_customer = $("#email_customer").val();
		var receipt =  "wala pa";
		var notes =  $("#notes").val();
		var paymentdate_received =  (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();

		$.ajax({

			url:"assets/php/finishtransaction.php",
			type:'POST',
			data: {
				branch_received_date:branch_received_date,
				date_received:date_received,
				type_customer:type_customer,
				name_customer:name_customer,
				contact_customer:contact_customer,
				address_customer:address_customer,
				total_kilo:total_kilo,
				total_pcs:total_pcs,
				amount:amount,
				pickordeliver:pickordeliver,
				pickup_date:pickup_date,
				pickup_time:pickup_time,
				date_release:date_release,
				remark:remark,
				paymentdate_received:paymentdate_received,
				email_customer:email_customer,
				receipt:receipt,
				notes:notes,
			},
			success:function(data, status){
                swal({
                  title: "Transaction Complete!",
                  text: "Do you want to print a receipt ?",
                  icon: "success",
                })
                .then((willprint) => {
                  if (willprint) {
                        window.open('assets/php/function/printreceipt_paid.php','_self');
                        deletecartnewtransac();
                      
                  } else {
                        window.open('assets/php/function/printreceipt_paid.php','_self');
                        deletecartnewtransac();
                  }
                     window.open('assets/php/function/printreceipt_paid.php','_self');
                     deletecartnewtransac();
                });
			},

		});
    }    
    
    function unpaid_finishtransaction(){
        
        var today = new Date();
        var type_customer =  $("#customertype").val();
        
        
        if(type_customer == "warehouse"){
            var date_received = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear();
            var branch_received_date = ""
            console.log('pasok sa warehouse');
        }
        if (type_customer == "branch1"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = "Pending"
            console.log('pasok sa branch1');
        }
        if (type_customer == "branch2"){
            var branch_received_date = (today.getMonth()+1)+'/'+today.getDate()+'/'+today.getFullYear(); 
            var date_received = "Pending"
            console.log('pasok sa branch2');
        }
        
        var type_customer =  $("#customertype").val();
        var name_customer =  $("#name_customer").val();
        var contact_customer =  $("#contact_customer").val();
        var address_customer =  $("#address_customer").val();
		var total_kilo =  document.getElementById('displaytotalkilo').textContent;
		var total_pcs =  document.getElementById('displaytotalpcs').textContent;
		var amountc =  document.getElementById('displaytotalco').textContent;
        var amount = amountc.replace(/,/g,"");
		var pickordeliver =  $("#pickordeliver").val();
		var pickup_date =  $("#pickup_date").val();
		var pickup_time =  $("#pickup_time").val();
		var date_release =  "Pending";
		var remark =  "Unpaid";
        var email_customer = $("#email_customer").val();
		var receipt =  "wala pa";
		var notes =  $("#notes").val();
		var paymentdate_received =  "";

		$.ajax({

			url:"assets/php/finishtransaction.php",
			type:'POST',
			data: {
				branch_received_date:branch_received_date,
				date_received:date_received,
				type_customer:type_customer,
				name_customer:name_customer,
				contact_customer:contact_customer,
				address_customer:address_customer,
				total_kilo:total_kilo,
				total_pcs:total_pcs,
				amount:amount,
				pickordeliver:pickordeliver,
				pickup_date:pickup_date,
				pickup_time:pickup_time,
				date_release:date_release,
				remark:remark,
				paymentdate_received:paymentdate_received,
				email_customer:email_customer,
				receipt:receipt,
				notes:notes,
			},
			success:function(data, status){
            //    console.log(total_kilo);
            //    $('#joborder_unpaid').html(data);
                swal({
                  title: "Transaction Complete!",
                  text: "Do you want to print a receipt ?",
                  icon: "success",
                })
                .then((willprint) => {
                  if (willprint) {
                        window.open('assets/php/function/printreceipt_unpaid.php','_self');
                      
                        deletecartnewtransac();
                      
                  } else {
                        window.open('assets/php/function/printreceipt_unpaid.php','_self');
                        deletecartnewtransac();
                  }
                     window.open('assets/php/function/printreceipt_unpaid.php','_self');
                     deletecartnewtransac();
                });
			},

		});
    }
    

    function deletecartnewtransac(){
            $('#ProceedModal').modal('hide');
            $('#resend-ereceipt-loader').modal('show');
            var deletecartnewtransac =  "deletecartnewtransac";
        
            $.ajax({

                url:"assets/php/finishtransaction.php",
                type:'POST',
                data: { 
                    deletecartnewtransac: deletecartnewtransac
                },

                success:function(data, status){
                   deletecartnewtransac();
                }
            });   
            
    }    
    

    
    ////diplay all carts


    
    
</script>