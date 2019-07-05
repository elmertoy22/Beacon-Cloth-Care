<?php
    include('cmsfunction/BasicCareCMS.php');
?>

<div class="col-md-12 bg-primary"><h3>Control Management System</h3></div>
<div class="col-md-12">
<div class="panel with-nav-tabs">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1primary" data-toggle="tab">Basic Care</a></li>
            <li><a href="#tab2primary" data-toggle="tab">Special Care</a></li>
            <li><a href="#tab3primary" data-toggle="tab">Premium Care</a></li>
            <li><a href="#tab3primary" data-toggle="tab">Corporate Account</a></li>
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
                                <div class="col-md-" align="center">
                                    <div class="col-md-10 bg-danger" align="center">
                                       <p style="font-size:20px;">Wash-Dry-Fold</p>
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
                                                    <label>Items</label>
                                                    <input type="text" class="form-control" id="wdf-items">  
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
		$.ajax({
			url:"assets/partials/cmsfunction/BasicCareCMS.php",
			type:"POST",
			data:{
                BCwdfitems:BCwdfitems
            },
			success:function(data,status){
				$('#bcwdfitems').html(data);
			},

		});
	}
    
  	function bcadditems(){
        var wdfitems = $('#wdf-items').val();
        var wdfprice = $('#wdf-price').val();

        if(wdfitems == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }      
        if(wdfprice == ""){
            swal("Opps!", "Please fill up the required field", "error");
        }      
        else{
            $.ajax({
                url:"assets/partials/cmsfunction/BasicCareCMS.php",
                type:'post',
                data: {
                    wdfitems : wdfitems,
                    wdfprice : wdfprice
                 },

                 success:function(data,status){
                    swal('Data Inserted!', 'Click okay to continue!', 'success');
                    document.getElementById('wdf-items').value = "";
                    document.getElementById('wdf-price').value = "";
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
            url:"assets/partials/cmsfunction/BasicCareCMS.php",
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
	  $.post("assets/partials/cmsfunction/BasicCareCMS.php", 
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
    $.post("assets/partials/cmsfunction/BasicCareCMS.php", 
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