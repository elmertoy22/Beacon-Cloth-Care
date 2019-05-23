<!doctype html>
<html lang="en">
    <style type="text/css">

        .beacon-logo{
            
            height: 50px;
        }
    </style>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
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
<body>
    
    <div class="wrapper">
       <div class="sidebar" data-image="assets/img/bgpos.png">
            <div class="sidebar-wrapper" style="background-color:#181242; opacity:0.8;"> 
                <div class="logo">
                    <center><img class="beacon-logo" src="assets/img/indexlogo.png"></center> 
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                     <li>
                        <a href="#">
                            <i class="pe-7s-map-marker"></i>
                            <p>Branches</p>
                        </a>
                    </li>
                    <li>
                        <a href="POS.php">
                            <i class="pe-7s-cart"></i>
                            <p>Point Of Sale</p>
                        </a>
                    </li>
                     <li>
                        <a href="#">
                            <i class="pe-7s-user"></i>
                            <p>Accounts</p>
                        </a>
                    </li>
                    <li class="active-pro">
                    <a href="">
                        <i class="pe-7s-rocket"></i>
                        <p>Elmer Torres</p>
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
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <p><span class="glyphicon glyphicon-cog"></span>&nbsp;Account</p>
                                </a>
                            </li>
                            <li>
           
                            </li>
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>
                                            Dropdown
                                            <b class="caret"></b>
                                        </p>

                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Content</a></li>
                                    <li><a href="#">Another Content</a></li>
                                    <li><a href="#">Another Content</a></li>
                                  </ul>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4"  data-aos="fade-up">
                            <div class="card">
                                <div class="header">
                                    <p>wfwf</p>
                                </div>
                                <div class="content">
                                    <a>dwd</a>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6"  data-aos="fade-up">
                            <div class="card">
                                <div class="header">
                                    <p>wfwf</p>
                                </div>
                                <div class="content">
                                    <a>dwd</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8"  data-aos="fade-down">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">CONTENT!</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="content">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                    <div class="footer">
                                        <div class="legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Bounce
                                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                                        </div>
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                        </div>
                                    </div>
                                </div>
                              <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                            </div>
                        </div>
        
                    </div>
                    
                </div>
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
                          <a href="login.php"><button type="button" class="btn btn-primary">Yes</button></a>
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

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
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
   
    <script>
      AOS.init();
    </script>
</html>