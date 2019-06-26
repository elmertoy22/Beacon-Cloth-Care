<?php

    session_start();
    ob_start();

?>
<!doctype html>
<html lang="en">
    <style type="text/css">
        .my-custom-scrollbar {
            position: relative;
            height: 360px;
            overflow: auto;
        }
        .my-custom-scrollbar-2 {
            position: relative;
            height: 350px;
            overflow: auto;
            
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
<head>
        
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
	<title>Beacon Laundry Shop</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
    
    <div class="wrapper">      
         <nav class="navbar navbar-default navbar-fixed bg-primary" style="background-color:#181242;">
                <div class="container-fluid">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
                    <a class="navbar-brand" href="#" style="color:white;"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Point Of Sale</a>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" style="color:white;">
                                    <p><span class="glyphicon glyphicon-cog"></span>&nbsp;Setting</p>
                                </a>
                            </li>
                            <li>
                                <a href="" style="color:white;">
                                    <p><span class="glyphicon glyphicon-user"></span>&nbsp;
                                        <?php  if(isset($_SESSION['username'])) 
                                            
                                                echo $_SESSION['username'];
                                            
                                            else{
                                                header("location:../../index.php");
                                            }
                                            
                                        ?>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" data-toggle="modal" data-target="#myModal" style="color:white;">
                                    <p><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel with-nav-tabs">
                                            <div class="panel-heading">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab1primary" data-toggle="tab">Services</a></li>
                                                    <li><a href="#tab2primary" data-toggle="tab">Unpaid</a></li>
                                                    <li><a href="#tab3primary" data-toggle="tab">Customer List</a></li>
                                                    <li class="dropdown">
                                                        <a href="#" data-toggle="dropdown">Others <span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#tab4primary" data-toggle="tab">Cash Advance</a></li>
                                                            <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="panel-body">
                                                <?php
                                                
                                                    include('assets/php/POSmodal.php');
                                                    include('assets/php/proceed.php');
                                                    include('assets/php/BasicCare.php');
                                                    include('assets/php/SpecialCare.php');
                                                    include('assets/php/PremiumCare.php');
                                                    include('assets/php/unpaid.php');
                                                    include('assets/php/customerlist.php');
                                                    include('assets/php/corporate.php');

                                                ?>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="tab1primary">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <a href="#basiccare" data-toggle="modal">
                                                                    <div class="alert alert-success" style="height:80px; font-size:18px;" >
                                                                        <span>Basic<br>Care</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#specialcare"  data-toggle="modal">
                                                                    <div class="alert alert-danger"  style="height:80px; font-size:18px;" >
                                                                        <span>Special<br>Care</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="#premiumcare" data-toggle="modal">
                                                                    <div class="alert alert-info"  style="height:80px; font-size:18px;" >
                                                                        <span>Premium Care</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-3" >
                                                                <a href="#corporate" data-toggle="modal">
                                                                    <div class="alert alert-info" style="height:80px; font-size:18px;" >
                                                                        <span>Corporate</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            
                                                            <div class="col-md-3" >
                                                                <a href="#/">
                                                                    <div class="alert alert-info" style="height:80px; font-size:18px;" >
                                                                        <span>branch partner</span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2primary">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="search" class="form-control" placeholder="Search">
                                                            </div>
                                                            <div class="col-md-12" style="margin-top:10px;">
                                                                <table class="table table-striped">
                                                                    <thead class="bg-primary">
                                                                      <tr>
                                                                        <th style="color:white;" >Job Order No.</th>
                                                                        <th style="color:white;" >Customer Name</th>
                                                                        <th style="color:white;" >Contact</th>
                                                                        <th style="color:white;" >Address</th>
                                                                        <th style="color:white;" ></th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>001</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><a href="#unpaid" data-toggle="modal"><button class="btn btn-success">Pay now</button></a></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>002</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><a href="#unpaid" data-toggle="modal"><button class="btn btn-success">Pay now</button></a></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>003</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><a href="#unpaid" data-toggle="modal"><button class="btn btn-success">Pay now</button></a></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>004</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><a href="#unpaid" data-toggle="modal"><button class="btn btn-success">Pay now</button></a></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>005</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><a href="#unpaid" data-toggle="modal"><button class="btn btn-success">Pay now</button></a></td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                    
                                                    
                                                    
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3primary">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="search" class="form-control" placeholder="Search">
                                                            </div>
                                                            <div class="col-md-12" style="margin-top:10px;">
                                                                <table class="table table-striped">
                                                                    <thead class="bg-primary">
                                                                      <tr>
                                                                        <th style="color:white;" >Job Order No.</th>
                                                                        <th style="color:white;" >Customer Name</th>
                                                                        <th style="color:white;" >Contact</th>
                                                                        <th style="color:white;" >Address</th>
                                                                        <th style="color:white;" ></th>
                                                                      </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td>001</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><a href="#customerlist" data-toggle="modal"><button class="btn btn-success">open</button></a></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>002</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><button class="btn btn-success">open</button></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>003</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><button class="btn btn-success">open</button></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>004</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><button class="btn btn-success">open</button></td>
                                                                      </tr>
                                                                      <tr>
                                                                        <td>005</td>
                                                                        <td>juan dela cruz</td>
                                                                        <td>09360459353</td>
                                                                        <td>001 mandaluyong city</td>
                                                                        <td><button class="btn btn-success">open</button></td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab4primary">
                                                        <h4>Cash Advance Form</h4>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="footer">
                            <div class="col-lg-12">
                                <button class="btn btn-primary" style="width:100%; margin-top:-10px;">BEACON CLOTH CARE</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card" style="height:100px;">
                            <div style="padding:10px 20px;">
                                <label style="font-size:20px;">Total</label>
                                <input style="font-size:50px; background-color:white; text-align:right; padding:10px; border:none;" class="form-control" type="text" id="totaltotal" value="0.00" readonly >
                            </div>
                        </div>
                        <div class="card" style="margin-top:-15px;">
                            <div class="table-wrapper-scroll-x my-custom-scrollbar-2 justify-content-center">
                                <table class="table table-fixed table-hover" id="myTable" >
                                    <thead class="bg-primary">
                                        <tr>
                                            <th style="color:white;">type</th>
                                            <th style="color:white;">desciption</th>
                                            <th style="color:white;">per kilo/pcs</th>
                                            <th style="color:white;">kilo</th>
                                            <th style="color:white;">Pieces</th>
                                            <th style="color:white;">Subtotal</th>
                                            <th style="color:white;">remove</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr style="cursor:pointer;">

                        
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <center>
                            <div class="col-lg-12" style="margin-top:-15px;">
                                <button style="width:100%;" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ProceedModal"><span class="glyphicon glyphicon-ok" ></span>&nbsp;Proceed</button>
                            </div>

                            <div class="col-lg-12"  style="margin-top:15px;">
                                <button style="width:100%;" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancel Transaction</button>
                            </div>

                        </center>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
</body>

 <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
   
    <!--<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to Beacon Cloth Care"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
   -->
</html>