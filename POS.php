<!doctype html>
<html lang="en">
    <style type="text/css">
        .my-custom-scrollbar {
            position: relative;
            height: 300px;
            overflow: auto;
            }
            .table-wrapper-scroll-y {
            display: block;
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
         <nav class="navbar navbar-default navbar-fixed bg-primary" style="background-color:#181242;">
                <div class="container-fluid">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            
                    <a class="navbar-brand" href="#" style="color:white;"><span class="glyphicon glyphicon-list"></span>&nbsp;Point Of Sale</a>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" style="color:white;">
                                    <p><span class="glyphicon glyphicon-cog"></span>&nbsp;Setting</p>
                                </a>
                            </li>
                            <li>
                           
           
                            </li>
                            <li class="dropdown" >
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white;">
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="content">
                                
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a  href="#1" data-toggle="tab">Services</a>
                                        </li>
                                        <li><a href="#2" data-toggle="tab">Pending</a>
                                        </li>
                                        <li><a href="#3" data-toggle="tab">Unpaid</a>
                                        </li>
                                    </ul>
                                        
                                        <div class="tab-content ">
                                        <div class="tab-pane active" id="1">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="alert alert-success">
                                                    <span>Basic Laundry</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="alert alert-danger">
                                                    <span>Medium Laundry</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="alert alert-info">
                                                    <span>Premium Laundry</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form active-pink active-pink-2 mb-3 mt-0" style="float:right; width:100%; padding-top:10px;">
                                                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <br>
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                              <table class="table table-bordered table-striped mb-0 table-hover">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr data-toggle="modal" data-target="#myModal-clickservices" >
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">4</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">5</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">6</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                  </tr>
                                                </tbody>
                                              </table>

                                            </div>
                                        </div>
                                    
                                        <div class="tab-pane" id="2">
                                              <h3>Notice the gap between the content and tab after applying a background color</h3>
                                        </div>
                            
                                        <div class="tab-pane" id="3">
                                              <h3>add clearfix to tab-content (see the css)</h3>
                                        </div>
                                </div>
                                


                                    <!--<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>-->
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="content table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
                    
        </div>
    </div>
</body>
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

        <div id="myModal-clickservices" class="modal fade" role="dialog">
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
    <!--
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
    -->
   
    <script>
      AOS.init();
    </script>
</html>