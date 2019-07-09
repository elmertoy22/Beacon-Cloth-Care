<div class="col-md-12 bg-primary"><h3>Sales</h3></div>
<div class="col-md-12">
<div class="panel with-nav-tabs">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tabprimary" data-toggle="tab">Overall Sales</a></li>
            <li><a href="#tab1primary" data-toggle="tab">Warehouse</a></li>
            <li><a href="#tab2primary" data-toggle="tab">Branch 1</a></li>
            <li><a href="#tab3primary" data-toggle="tab">Branch 2</a></li>
            <li><a href="#tab4primary" data-toggle="tab">Corporate Account</a></li>
            <li><a href="#tab5primary" data-toggle="tab">Branch Partner</a></li>
            <!--<li class="dropdown">
                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                    <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                </ul>
            </li>-->
        </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tabprimary">
                <div class="row">
                    
                    <!--
                    <div class="col-md-12">
                         <div class="col-md-4"><button class="btn btn-primary" style="width:100%">Yearly Sales list</button></div>
                         <div class="col-md-4"><button class="btn btn-success" style="width:100%">Monthly Sales list</button></div>
                         <div class="col-md-4"><button class="btn btn-danger" style="width:100%">Daily Sales list</button></div>
                    </div>
                    -->
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="filtersales" onchange="filtersales()">
                               <option value="allsales" selected>All Sales</option>
                               <option value="paid">Paid</option>
                               <option value="unpaid">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-8" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search" id="allsales_search" onkeyup="allsales_search()">
                    </div>
                    <div class="col-md-4" style="margin-top:10px;">
                        <select class="form-control" id="allsales_search_dd">
                               <option value="id" selected>Job Order #</option>
                               <option value="branch_received_date">Branch Received Date</option>
                               <option value="type_customer">Customer Type</option>
                               <option value="name_customer">Customer Name</option>
                               <option value="contact_customer">Customer Contact</option>
                               <option value="address_customer">Customer Address</option>
                               <option value="total_kilo">Total Kilos</option>
                               <option value="total_pcs">Total Pieces</option>
                               <option value="amount">Amount</option>
                               <option value="pickordeliver">Pickup/Deliver</option>
                               <option value="pickordeliver">Pickup/Deliver</option>
                               <option value="pickup_date">Pickup Date</option>
                               <option value="date_release">Date Release</option>
                               <option value="remark">Remark</option>
                               <option value="paymentdate_received">Payment Date Received</option>
                               <option value="received_by">Received by</option>
                               <option value="notes">Notes</option>
                        </select>
                    </div>

                    <div class="col-md-12" style="margin-top:10px;">
                        
                        <div id="displayallsales"></div>
                        
                    </div>
                    <div class="col-md-12 bg-primary" style="margin-top:10px; height:200px;">
                        <div id="totalallkilosdisplay"></div>
                        <div id="totalallsales"></div>
                        
                    </div>
                </div> 
            </div> 
            <div class="tab-pane fade" id="tab1primary">
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="filtersales_warehouse" onchange="filtersales_warehouse()">
                               <option value="allsales" selected>All Sales</option>
                               <option value="paid">Paid</option>
                               <option value="unpaid">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                        <div id="warehousedisplay"></div>
                        
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="tab2primary">
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="filtersales_branch1" onchange="filtersales_branch1()">
                               <option value="allsales" selected>All Sales</option>
                               <option value="paid">Paid</option>
                               <option value="unpaid">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                        <div id="branch1display"></div>
                        
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="tab3primary">
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                    </div>
                </div> 
            </div>
            <div class="tab-pane fade" id="tab4primary">
                <div class="row">
                     <div class="col-md-12"  style="margin-top:10px;">
                        <select class="form-control">
                            <option disabled selected>Selct corporate account</option>
                            <option>corporate account 1</option>
                            <option>corporate account 2</option>
                            <option>corporate account 3</option>
                            <option>corporate account 4</option>
                            <option>corporate account 5</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                    </div>
                </div> 
            
            </div>
            <div class="tab-pane fade" id="tab5primary">         
                <div class="row">
                    <div class="col-md-12" style="margin-top:10px;">
                        <select class="form-control">
                            <option disabled selected>Selct Branch partner</option>
                            <option>branch partner 1</option>
                            <option>branch partner 2</option>
                            <option>branch partner 3</option>
                            <option>branch partner 4</option>
                            <option>branch partner 5</option>
                        </select>
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        <div class="col-md-5">
                           <select class="form-control" id="selectYorM" onchange="selectYorM()">
                               <option disabled selected >Select</option>
                               <option value="yearly">All Sales</option>
                               <option value="monthly">Paid</option>
                               <option value="monthly">Unpaid</option>
                           </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <input type="text" value="TO" class="form-control" disabled style="border:none; background-color:white;">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control">
                        </div>
                    </div> 
                    
                    <div class="col-md-12" style="margin-top:10px;">
                        <input type="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                        
                    </div>
                </div> 
            
            </div>
        </div>
    </div>
</div>
</div>

<script>
$(document).ready(function () {
    displayallsales(); 
    warehousedisplay(); 
    branch1display(); 
	});
    
    function allsales_search(){

    var allsales_search = document.getElementById('allsales_search').value;
    var allsales_search_dd = document.getElementById('allsales_search_dd').value;
    $.ajax({
        url:"assets/partials/salesfunction/allsalesdisplay.php",
        type:"POST",
        data:{
            allsales_search:allsales_search,
            allsales_search_dd:allsales_search_dd
        },
        success:function(data,status){
            $('#displayallsales').html(data);
        },

    });
}     
    function filtersales(){

    var filtersales = document.getElementById('filtersales').value;
    $.ajax({
        url:"assets/partials/salesfunction/allsalesdisplay.php",
        type:"POST",
        data:{
            filtersales:filtersales
        },
        success:function(data,status){
            $('#displayallsales').html(data);
        },

    });
}      
    function displayallsales(){
        
    var displayallsales = "displayallsales";
    $.ajax({
        url:"assets/partials/salesfunction/allsalesdisplay.php",
        type:"POST",
        data:{
            displayallsales:displayallsales
        },
        success:function(data,status){
            $('#displayallsales').html(data);
        },

    });
}    
   
    function filtersales_warehouse(){

    var filtersales_warehouse = document.getElementById('filtersales_warehouse').value;
    $.ajax({
        url:"assets/partials/salesfunction/warehousedisplay.php",
        type:"POST",
        data:{
            filtersales_warehouse:filtersales_warehouse
        },
        success:function(data,status){
            $('#warehousedisplay').html(data);
        },

    });
}    
    function warehousedisplay(){

    var warehousedisplay = "warehousedisplay";
    $.ajax({
        url:"assets/partials/salesfunction/warehousedisplay.php",
        type:"POST",
        data:{
            warehousedisplay:warehousedisplay
        },
        success:function(data,status){
            $('#warehousedisplay').html(data);
        },

    });
}   
    function filtersales_branch1(){

    var filtersales_branch1 = document.getElementById('filtersales_branch1').value;
    $.ajax({
        url:"assets/partials/salesfunction/branch1display.php",
        type:"POST",
        data:{
            filtersales_branch1:filtersales_branch1
        },
        success:function(data,status){
            $('#branch1display').html(data);
        },

    });
}
    function branch1display(){

    var branch1display = "branch1display";
    $.ajax({
        url:"assets/partials/salesfunction/branch1display.php",
        type:"POST",
        data:{
            branch1display:branch1display
        },
        success:function(data,status){
            $('#branch1display').html(data);
        },

    });
}    
   
</script>