<?php
    include('cmsfunction/ServicesCMS.php');
?>
<style>

</style>
<div class="col-md-12 bg-primary"><h3>Control Management System</h3></div>
<div class="col-md-12">
<div class="panel with-nav-tabs">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1primary" data-toggle="tab">Services</a></li>
            <li><a href="#tab2primary" data-toggle="tab">Corporate Account</a></li>
            <li><a href="#tab3primary" data-toggle="tab">Branch Partner</a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1primary">
                
                <!-- WAsh dry fold-->
                
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="col-md-12" align="center">
                                    <div class="col-md-10" align="center">
                                       <select class="form-control" id="db-services-display" onchange="BCwdfitems()">
                                            <option>Basic Care</option>
                                            <option>Special Care</option>
                                            <option>Premium Care</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button style="width:100%;" class="btn btn-success" type="button" data-toggle="collapse" data-target="#BCWDF" aria-expanded="false" aria-controls="collapseExample">
                                            Add Items
                                        </button>
                                    </div>
                                    <!--add items wdf-->
                                    <div class="col-md-12">
                                        <div class="collapse" id="BCWDF">
                                          <div class="card card-body" style="width:80%; background-color:whitesmoke; padding:2%;">
                                            <div class="row">
                                                <h3>Add Items</h3>
                                                <div class="col-md-8 col-md-offset-2">
                                                    <label>Services</label>
                                                        <select id="select-services-cms" class="form-control" required>
                                                            <option value="" selected disabled>Select</option>
                                                            <option value="Basic Care">Basic Care</option>
                                                            <option value="Special Care">Special Care</option>
                                                            <option value="Premium Care">Premium Care</option>
                                                        </select>
                                                    <br>
                                                    <label>Type</label>
                                                        <select id="select-type-cms" class="form-control" required>
                                                            <option value="" selected disabled>Select</option>
                                                            
                                                            <option style="font-size:20px; font-weight:bold;" disabled>Basic Care</option> 
                                                            <option value="WASH-DRY-FOLD">WASH-DRY-FOLD</option>
                                                            <option value="WASH-DRY-PRESS">WASH-DRY-PRESS</option>
                                                            
                                                            <option value=""disabled></option>
                                                           
                                                            <option style="font-size:20px; font-weight:bold;" disabled>Special Care</option> 
                                                            <option value="BULKY ITEMS">BULKY ITEMS</option>
                                                            <option value="COMFORTER">COMFORTER</option>
                                                            <option value="HAND WASH">HAND WASH</option>
                                                            <option value="HEAVY-SOILED ITEMS">HEAVY-SOILED ITEMS</option>
                                                            
                                                            <option disabled></option>
                                                           
                                                            <option style="font-size:20px; font-weight:bold;" disabled>Premium Care</option> 
                                                            <option value="DRY CLEANING">DRY CLEANING</option>
                                                            <option value="GENTLE CARE">GENTLE CARE</option>
                                                            
                                                        </select>
                                                    <br>
                                                    <label>Items</label>
                                                    <input type="text" class="form-control" id="wdf-items">  
                                                    <br>
                                                    <label>Price</label>
                                                    <input type="number" class="form-control" id="wdf-price">  
                                                    <br>
                                                    <div class="col-md-6">

                                                        <button  style="width:100%;" align="center;" class="btn btn-danger" type="button" data-toggle="collapse" data-target="#BCWDF" aria-expanded="false" aria-controls="collapseExample">
                                                        Cancel
                                                        </button>
                                                    </div>                                        
                                                    <div class="col-md-6">

                                                        <button  style="width:100%;" align="center;" class="btn btn-success" type="button" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseExample" onclick="bcadditems()">
                                                            Okay
                                                        </button>
                                                    </div>
                                              </div>    
                                            </div>
                                          </div>
                                        </div>
                                    </div>                                    
                                    
                                    <!--edit items wdf-->
                                    <div class="col-md-12">
                                        <div class="collapse" id="BCWDF-edit">
                                          <div class="card card-body" style="width:80%; background-color:whitesmoke; padding:2%;">
                                            <div class="row">
                                                <h3>Edit Items</h3>
                                                <div class="col-md-8 col-md-offset-2">
                                                    <label>Items</label>
                                                    <input type="text" class="form-control" id="wdf-items-edit">  
                                                    <label>Price</label>
                                                    <input type="number" class="form-control" id="wdf-price-edit">  
                                                    <br>
                                                    <div class="col-md-6">

                                                        <button  style="width:100%;" align="center;" class="btn btn-danger" type="button" data-toggle="collapse" data-target="#BCWDF-edit" aria-expanded="false" aria-controls="collapseExample">
                                                        Cancel
                                                        </button>
                                                    </div>                                        
                                                    <div class="col-md-6">

                                                        <button  style="width:100%;" align="center;" class="btn btn-success" type="button"  data-target="" aria-expanded="false" aria-controls="collapseExample" onclick="UpdateItemsDetails()">
                                                            Save
                                                        </button>
                                                        <input type="hidden" id="hidden_wdf_id">
                                                    </div>
                                              </div>    
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" style="margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="bcwdfitems"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr>
                <!-- WAsh dry press-->
                
                
                
            </div>
            <div class="tab-pane fade" id="tab2primary">
            </div>
            <div class="tab-pane fade" id="tab3primary">

            </div>
            <div class="tab-pane fade" id="tab4primary">Primary 4</div>
            <div class="tab-pane fade" id="tab5primary">Primary 5</div>
        </div>
    </div>
</div>
</div>

<script>

    $(document).ready(function () {
        BCwdfitems(); 
    });
    
	function BCwdfitems(){
		
		var BCwdfitems = "BCwdfitems";
		var dbservicesdisplay = $("#db-services-display").val();
		$.ajax({
			url:"assets/partials/cmsfunction/ServicesCMS.php",
			type:"POST",
			data:{
                BCwdfitems:BCwdfitems,
                dbservicesdisplay:dbservicesdisplay
            },
			success:function(data,status){
				$('#bcwdfitems').html(data);
			},

		});
	}
    
  	function bcadditems(){
        var selectservices = $("#select-services-cms").val();
        var selecttype = $("#select-type-cms").val();
        var wdfitems = $("#wdf-items").val();
        var wdfprice = $("#wdf-price").val();

        if(selectservices == null){
            swal("Opps!", "Please fill up the required field", "error");
        }
        else if(selecttype == null){
            swal("Opps!", "Please fill up the required field", "error");
        }
        else if(wdfitems == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }      
        else if(wdfprice == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }      
        else{
            $.ajax({
                url:"assets/partials/cmsfunction/ServicesCMS.php",
                type:'post',
                data: {
                    selectservices : selectservices,
                    selecttype : selecttype,
                    wdfitems : wdfitems,
                    wdfprice : wdfprice
                 },

                 success:function(data,status){
                    swal('Data Inserted!', 'Click okay to continue!', 'success');
                    document.getElementById("select-services-cms").value = "";
                    document.getElementById("select-type-cms").value = "";
                    document.getElementById("wdf-items").value = "";
                    document.getElementById("wdf-price").value = "";
                    $('#BCWDF').collapse('hide');
                    console.log(data);
                    BCwdfitems();
                 }

            });
        }
         
  	}
    
function wdfdeleteidfunc(wdfdeleteid){

    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
        
      if (willDelete) {
        $.ajax({
            url:"assets/partials/cmsfunction/ServicesCMS.php",
            type:'POST',
            data: {  
                wdfdeleteid : wdfdeleteid
            },

            success:function(data, status){
                console.log(status);
                console.log(data);
                BCwdfitems();
            }
        });
      }
        
    });
    
}    
    
    
function wdfgetfunc(id){
    $("#hidden_wdf_id").val(id);
	  $.post("assets/partials/cmsfunction/ServicesCMS.php", 
        {
            id: id
        },
        function (data, status) {
            //JSON.parse() parses a string, written in JSON format, and returns a JavaScript object.
            var wdf = JSON.parse(data);

            $("#wdf-items-edit").val(wdf.items);
            $("#wdf-price-edit").val(wdf.price);
        }
    );
    $("#BCWDF-edit").collapse("show");
}    
    
    
function UpdateItemsDetails() {
    var items = $("#wdf-items-edit").val();
    var price = $("#wdf-price-edit").val();
    var hidden_wdf_id = $("#hidden_wdf_id").val();
    $.post("assets/partials/cmsfunction/ServicesCMS.php", 
           {
            hidden_wdf_id: hidden_wdf_id,
            items: items,
            price: price
        },
        function (data, status) {
            $("#BCWDF-edit").collapse("hide");
            swal("Update Complete!", "Click okay to exit", "success");
            BCwdfitems(); 
        }
    );
}
</script>