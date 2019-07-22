<script type="text/javascript">
    ////// BASIC CARE
    ///// select category 
    function discount(){
        
        if(amount == ""){
            alert("Please choose a category!")
        }
        
        else{

            $("#discount-input").slideDown();   
        }
    }
    function discountcancel(){
        var amount = document.getElementById('amount').value;
        document.getElementById('newamount').value = amount;
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "";
        $("#discount-input").slideUp();
    }

    ////// type select
  /*  function typeselect(){

        var type1 = document.getElementById("items").value;
        var type2 = document.getElementById("items").value;
        
        if(type1 == "WDF"){
            $("#type-select1").slideDown();
            $("#type-select2").slideUp();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "";
            document.getElementById('pieces').value = "";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
            document.getElementById('amount').value = "0";
            

        }
        else{
            $("#type-select2").slideDown();
            $("#type-select1").slideUp ();
            document.getElementById('totalamount').value = "0";
            document.getElementById('kilo').value = "";
            document.getElementById('pieces').value = "";
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').value = "";
            document.getElementById('amount').value = "0";
            
        }
        
    } 
    
    function WDFchoices(){
        var WDFoption = document.getElementById('WDFoption').value;
        
        if (WDFoption == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        else if (WDFoption == "6.00"){
             $('#items-list').hide();
        }
        else{
            document.getElementById('amount').value = WDFoption;
            document.getElementById('newamount').value = WDFoption;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
            
        $('#items-list').slideDown();
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
            
            $('#items-list').slideDown();
        }
    } 

*/
    
    function servicestype(){
        var services_type = document.getElementById('services_type').value;
        
        
        if (services_type == ""){
         
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";

        }
        
        else{
            document.getElementById('amount').value = services_type;
            document.getElementById('newamount').value = services_type;
            document.getElementById('kilo').disabled = false;
            document.getElementById('pieces').disabled = false;
        }
    }
    function enterkilo(){
        $("#enterkilo").slideDown();
        $("#enterpieces").slideUp();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
    }
    function enterpieces(){
        $("#enterpieces").slideDown();
        $("#enterkilo").slideUp();
        document.getElementById('status').value = "";
        document.getElementById('finaltotalamount').value = "0";
        document.getElementById('totalamount').value = "0";
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
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
    
    
/*    function computetotalkilo(){
        
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
*/
    
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
                
                    var subto = document.getElementById('totalamount').value = amount * kilo + ".00";
                    var subtoto = parseInt(subto);
                    document.getElementById('totalamount').value = subtoto+".00";
                  
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
        document.getElementById('kilo').value = "";
        document.getElementById('pieces').value = "";
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
    
    function canceltransactt(){
        
        swal({
          title: "Are you sure want to cancel?",
          text: "Once canceled, you will not be able to recover this!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              
              $("#services").modal('hide');
            document.getElementById('services_type').value = "";
            document.getElementById('others').value = "";
            document.getElementById('status').value = "";
            document.getElementById('totalamount').value = "0";
            document.getElementById('finaltotalamount').value = "0";
            document.getElementById('kilo').value = "";
            document.getElementById('pieces').value = "";
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').disabled = true;
            $("#enterkilo").hide();
            $("#enterpieces").hide();
          }
          else {
              
          }
        });
    }
    function basiccare(){
        $('#services_title_display').html('Basic Care');
        document.getElementById('services_option').value = "Basic Care";
        var ServicesBasicCare = document.getElementById('services_option').value;;
 
    }
    
    function specialcare(){
        $('#services_title_display').html('Special Care');
        document.getElementById('services_option').value = "Special Care";
        var ServicesSpecialCare = document.getElementById('services_option').value;

    }
    function premiumcare(){
        $('#services_title_display').html('Premium Care');
        document.getElementById('services_option').value = "Premium Care";
        var ServicesPremiumCare = document.getElementById('services_option').value;

    }
    
</script>


<script type="text/javascript">
      
$(document).ready(function () {
    displaycart(); 
    displaytotal(); 
    displaytotalkilo(); 
    displaytotalpcs(); 
	});

    function addthisitems(){
                
           var checkboxes = document.getElementsByName('itemsss[]');
            var vals = "";
            for (var i=0, n=checkboxes.length;i<n;i++) 
            {
                if (checkboxes[i].checked) 
                {
                  var items =  vals += checkboxes[i].value + " = " + "\n";
                  var itemmmm = items;
                  document.getElementById('others').value = itemmmm;
                }
            }
    }
      
  	function addtocart(){
        

        var valid1 = document.getElementById("services_type").value;
        var valid2 = document.getElementById("others").value;
        var valid3 = document.getElementById("amount").value;
        var valid4 = document.getElementById("totalamount").value;
        var valid5 = document.getElementById("status").value;
        

        if (valid1 == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }
    /*    if (valid2 == ""){
             swal("Opps!", "Please fill up the required field", "error");
        }*/
        if (valid3 == ""){
             swal("Opps!", "Please fill up the required field", "error");
        }
        if (valid4 == ""){
             swal("Opps!", "Please fill up the required field", "error");
        }
        if (valid5 == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }
        else{

            var type = $('#services_option').val();
            var items = $('#others').val();
            var amount = $('#amount').val();
            var newamount = $('#newamount').val();
            var kilo = $('#kilo').val();
            var pieces = $('#pieces').val();
            var status = $('#status').val();
            var subtotal = $('#finaltotalamount').val();

            $.ajax({
                url:"assets/php/function/addtocartBC.php",
                type:'post',
                data: {
                    type :type,
                    items : items,
                    amount : amount,
                    newamount : newamount,
                    kilo : kilo,
                    pieces : pieces,
                    status : status,
                    subtotal : subtotal
                 },

                 success:function(data,status){
                     console.log(data);
                    displaycart();
                    displaytotal();
                    displaytotalkilo(); 
                    displaytotalpcs(); 
                 }

            });
            
            
            $('#services').modal('hide');
            document.getElementById('services_type').value = "";
            document.getElementById('others').value = "";
            document.getElementById('status').value = "";
            document.getElementById('totalamount').value = "0";
            document.getElementById('finaltotalamount').value = "0";
            document.getElementById('kilo').value = "";
            document.getElementById('pieces').value = "";
            document.getElementById('amount').value = "0";
            document.getElementById('newamount').value = "0";
            document.getElementById('kilo').disabled = true;
            document.getElementById('pieces').disabled = true;
            document.getElementById('status').disabled = true;
            $("#enterkilo").hide();
            $("#enterpieces").hide();
           
        }
         
  	}	
      
    function displaytotal(){
		
		var displaytotal = "displaytotal";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaytotal:displaytotal
            },
			success:function(data,status){
				$('#displaytotal').html(data);
				$('#displaytotalco').html(data);
			},

		});
	}        
    function displaytotalkilo(){
		
		var displaytotalkilo = "displaytotalkilo";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaytotalkilo:displaytotalkilo
            },
			success:function(data,status){
				$('#displaytotalkilo').html(data);
			},

		});
	}   
      
      function displaytotalpcs(){
		
		var displaytotalpcs = "displaytotalpcs";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaytotalpcs:displaytotalpcs
            },
			success:function(data,status){
				$('#displaytotalpcs').html(data);
			},

		});
	}      
      
    function displaycart(){
		
		var displaycart = "displaycart";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displaycart:displaycart
            },
			success:function(data,status){
				$('#displaycart').html(data);
  
			},

		});
	}      
    function displayreceipt(){
		var displayreceipt = "displayreceipt";
		$.ajax({
			url:"assets/php/function/addtocartBC.php",
			type:"POST",
			data:{
                displayreceipt:displayreceipt
            },
			success:function(data,status){
				$('#displayreceipt').html(data);
                
			},

		});
	}
      
function deletecart(deleteid){

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        
        $.ajax({
            url:"assets/php/function/addtocartBC.php",
            type:'POST',
            data: {  deleteid : deleteid},

            success:function(data, status){
                displaycart();
                displaytotal();
                displaytotalkilo(); 
                displaytotalpcs(); 
            }
        }); 
          
      } else {
        
      }
    });

}      
function canceltransac(){

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
          
        var deleteall = "del";
        $.ajax({

            url:"assets/php/function/addtocartBC.php",
            type:'POST',
            data: { 
            deleteall: deleteall
            },

            success:function(data, status){
                 console.log(data);
                displaycart();
                displaytotal();
                displaytotalkilo(); 
                displaytotalpcs(); 
            }
        });
      } 
      else {
       
      }
    });
}
  </script>