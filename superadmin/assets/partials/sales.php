
<script>
    function selectYorM(){
        var selectYorM = document.getElementById('selectYorM').value;
        
        if (selectYorM == "yearly"){
            $('#YorMmonth1').slideDown();
            $('#YorMmonth2').slideUp();
        }
        else{
            $('#YorMmonth1').slideUp();
            $('#YorMmonth2').slideDown();
        }
    }
</script>
<div class="col-md-12 bg-primary"><h3>Overall Sales</h3></div>
<div class="col-md-12">
<div class="panel with-nav-tabs">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tabprimarysales" data-toggle="tab">Overall Sales</a></li>
            <li><a href="#tab1primarysales" data-toggle="tab">Muntinlupa City</a></li>
            <li><a href="#tab2primarysales" data-toggle="tab">Cavite City</a></li>
            <li><a href="#tab3primarysales" data-toggle="tab">Davao City</a></li>
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
            <div class="tab-pane fade in active" id="tabprimarysales">
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
                        <table class="table table-striped">
                            <thead class="bg-primary">
                              <tr>
                                <th style="color:white;" >Date Received</th>
                                <th style="color:white;" >Job order #</th>
                                <th style="color:white;" >name of customer</th>
                                <th style="color:white;" >kilos/pcs</th>
                                <th style="color:white;" >amount</th>
                                <th style="color:white;" >pickup date</th>
                                <th style="color:white;" >pickup time</th>
                                <th style="color:white;" >date release</th>
                                <th style="color:white;" >Deposit/payment</th>
                                <th style="color:white;" >Date of payment</th>
                                <th style="color:white;" >Received</th>
                              </tr>
                            </thead>
                            <tbody align="center">
                              <tr>
                                <td>03/02/2019</td>
                                <td>0081</td>
                                <td>Juan dela Cruz</td>
                                <td>3 kilos</td>
                                <td>150.00</td>
                                <td>03/04/2019</td>
                                <td>3:02 pm</td>
                                <td>03/04/2019</td>
                                <td>Paid</td>
                                <td>03/04/2019</td>
                                <td>employee 1</td>
                              </tr>
                              <tr>
                                <td>03/02/2019</td>
                                <td>0081</td>
                                <td>Juan dela Cruz</td>
                                <td>3 kilos</td>
                                <td>150.00</td>
                                <td>03/04/2019</td>
                                <td>3:02 pm</td>
                                <td>03/04/2019</td>
                                <td>Paid</td>
                                <td>03/04/2019</td>
                                <td>employee 1</td>
                              </tr>
                                <tr>
                                <td>03/02/2019</td>
                                <td>0081</td>
                                <td>Juan dela Cruz</td>
                                <td>3 kilos</td>
                                <td>150.00</td>
                                <td>03/04/2019</td>
                                <td>3:02 pm</td>
                                <td>03/04/2019</td>
                                <td>Paid</td>
                                <td>03/04/2019</td>
                                <td>employee 1</td>
                              </tr>
                                <tr>
                                <td>03/02/2019</td>
                                <td>0081</td>
                                <td>Juan dela Cruz</td>
                                <td>3 kilos</td>
                                <td>150.00</td>
                                <td>03/04/2019</td>
                                <td>3:02 pm</td>
                                <td>03/04/2019</td>
                                <td>Paid</td>
                                <td>03/04/2019</td>
                                <td>employee 1</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>          
            </div>
            <div class="tab-pane fade" id="tab1primarysales">
            
                 <?php
                    include('city/muntinlupa.php');
                ?>
            
            </div>
            <div class="tab-pane fade" id="tab2primarysales"></div>
            <div class="tab-pane fade" id="tab3primarysales"></div>
            <div class="tab-pane fade" id="tab4primarysales">Primary 4</div>
            <div class="tab-pane fade" id="tab5primarysales">Primary 5</div>
        </div>
        </div>
    </div>
</div>

