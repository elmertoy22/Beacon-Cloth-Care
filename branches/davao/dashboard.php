<?php
    session_start();
    ob_start();
?>
<!doctype html>
<html ng-app="dashboard">
    <style type="text/css">

        .beacon-logo{
            
            height: 50px;
        }
    </style>
<head>
    
	<meta charset="utf-8" />
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
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<script>
$(document).ready(function(){
  $("#sales").click(function(){
    $("#sales").addClass("active");
    $("#accounts").removeClass("active");
    $("#inventory").removeClass("active");
    $("#logbook").removeClass("active");
    $("#contents").load('assets/partials/sales.php');
  });
    
  $("#accounts").click(function(){
      $("#accounts").addClass("active");
      $("#sales").removeClass("active");
    $("#inventory").removeClass("active");
    $("#logbook").removeClass("active");
    $("#contents").load('assets/partials/accounts.php');
  });  
  $("#inventory").click(function(){
      $("#inventory").addClass("active");
      $("#sales").removeClass("active");
    $("#accounts").removeClass("active");
    $("#logbook").removeClass("active");
    $("#contents").load('assets/partials/inventory.php');
  });  
  $("#logbook").click(function(){
      $("#logbook").addClass("active");
      $("#sales").removeClass("active");
    $("#accounts").removeClass("active");
    $("#inventory").removeClass("active");
    $("#contents").load('assets/partials/branchreceivinglogbook.php');
  });
});    
    
</script>
<body>
    
    <div class="wrapper">
       <div class="sidebar" data-image="assets/img/bgpos.png">
            <div class="sidebar-wrapper" style="background-color:#181242; opacity:0.8;"> 
                <div class="logo">
                    <center><img class="beacon-logo" src="assets/img/indexlogo.png"></center> 
                </div>
                <ul class="nav">
                    <li id="sales">
                        <a href="#/sales">
                            <i class="pe-7s-graph"></i>
                            <p>Sales</p>
                        </a>
                    </li>
                     <li id="accounts">
                        <a href="#/accounts">
                            <i class="pe-7s-user"></i>
                            <p>Accounts</p>
                        </a>
                    </li>
                     <li id="logbook">
                        <a href="#/logbook">
                            <i class="pe-7s-map-marker"></i>
                            <p>Branch Receiving Log</p>
                        </a>
                    </li>
                     <li id="inventory">
                        <a href="#/inventory">
                            <i class="pe-7s-map-marker"></i>
                            <p>Inventory</p>
                        </a>
                    </li>
                </ul>
           </div>
        
        </div>
        
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Davao Branch</a>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="">
                                    <p><span class="glyphicon glyphicon-user"></span>&nbsp;
                                        <?php
                                            if(isset($_SESSION['username'])) 
                                            
                                                echo $_SESSION['username'];
                                            
                                            else{
                                                header("location:../../index.php");
                                            }
                                            
                                        ?>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="" data-toggle="modal" data-target="#myModal" >
                                    <p><span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="contents" >
                
            </div>
            
                    
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Logout</h4>
                      </div>
                      <div class="modal-body">
                          <p>Are you sure want to logout?</p>

                      </div>
                      <div class="modal-footer">
                          <a href="logout.php"><button type="button" class="btn btn-primary">Yes</button></a>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                      </div>
                </div>

                </div>
            </div>
    </div>
                 
</body>
 <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>


<!--	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to Beacon laundry shop"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>
   -->
</html>