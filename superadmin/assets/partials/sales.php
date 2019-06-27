<script>
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
                   <div class="col-md-6">
                       <center>
                           <select class="form-control">
                               <option disabled selected>Select</option>
                               <option>yearly</option>
                               <option>monthly</option>
                           </select>

                           <div class="col-md-12" style="display:none;">
                               <select class="form-control">
                                   <option disabled selected>Select</option>
                                   <option>January</option>
                                   <option>February</option>
                                   <option>March</option>
                                   <option>April</option>
                                   <option>May</option>
                                   <option>June</option>
                                   <option>July</option>
                                   <option>August</option>
                                   <option>September</option>
                                   <option>October</option>
                                   <option>November</option>
                                   <option>December</option>
                               </select>

                           </div>
                           <div class="col-md-12" style="display:none;">
                               <select class="form-control">
                                   <option disabled selected>Select</option>
                                   <option>2015</option>
                                   <option>2016</option>
                                   <option>2017</option>
                                   <option>2018</option>
                                   <option>2019</option>
                                   <option>2020</option>
                                   <option>2021</option>
                                   <option>2022</option>
                                   <option>2023</option>
                                   <option>2024</option>
                                   <option>2025</option>
                                   <option>2026</option>
                                   <option>2027</option>
                                   <option>2028</option>
                                   <option>2029</option>
                                   <option>2030</option>
                               </select>

                           </div>
                        </center>
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