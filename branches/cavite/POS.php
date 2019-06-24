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
                                
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a  href="#1" data-toggle="tab">Services</a>
                                        </li>
                                        <li><a href="#2" data-toggle="tab">Unpaid</a>
                                        </li>
                                    </ul>
                                        
                                        <div class="tab-content ">
                                        <div class="tab-pane active" id="1">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="alert alert-success">
                                                    <span>Basic<br>Care</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="alert alert-danger">
                                                    <span>Special<br>Care</span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="alert alert-info">
                                                    <span>Premium Care</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form active-pink active-pink-2 mb-3 mt-0" style="float:right; width:100%; padding-top:10px;">
                                                  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <br>

                                             <?php
                                                    include('assets/database/connect.php');
                                                    $result = $connect->query("SELECT * FROM posservices") or die ($connect->error);

                                                ?>
                                                <div class="table-wrapper-scroll-x my-custom-scrollbar justify-content-center" style="margin-top:-20px;">
                                                    <table class="table table-fixed table-striped table-hover">
                                                        <thead class="bg-primary">
                                                            <tr>
                                                                <th style="color:white;">type</th>
                                                                <th style="color:white;">desciption</th>
                                                                <th style="color:white;">/kilo</th>
                                                                <th style="color:white;">/Pieces</th>
                                                                <th style="color:white;">select</th>
                                                            </tr>

                                                        </thead>
                                                    <?php while ($row = $result->fetch_assoc()): ?>
                                                        <tr style="cursor:pointer;">
                                                                
                                                                <td><?php echo $row['type'];?></td>
                                                                <td><?php echo $row['description'];?></td>
                                                                <td>₱ <?php echo $row['kilo'];?></td>
                                                                <td>₱ <?php echo $row['pieces'];?></td>
                                                                <td>							
                                                                    <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-primary">choose</a>
                                                                    <?php
                                                                        include('assets/php/POSmodal.php');
                                                                    ?>
                                                                </td>
                                                            
                                                        </tr>
                                                    <?php endwhile; ?>
                                                    </table>

                                                </div>
                                        </div>
                                    
                                        <div class="tab-pane" id="2">
                                            <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="margin-top: 20px; margin-bottom: 20px;">
                                            <table class="table table-fixed table-striped table-hover">
                                                <thead class="bg-primary">
                                                    <tr>
                                                        <th style="color:white;">Reciept No.</th>
                                                        <th style="color:white;">Costumer Name</th>
                                                        <th style="color:white;">Date</th>
                                                        <th style="color:white;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>034684</td>
                                                        <td>John Cruz</td>
                                                        <td>05/18/2019</td>
                                                        <td>							
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#UnpaidModal">Paid</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>034685</td>
                                                        <td>Elmer Torres</td>
                                                        <td>05/18/2019</td>
                                                        <td>							
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#UnpaidModal">Paid</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>034686</td>
                                                        <td>Juan dela cruz</td>
                                                        <td>05/18/2019</td>
                                                        <td>							
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#UnpaidModal">Paid</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>034687</td>
                                                        <td>Marie Santos</td>
                                                        <td>05/18/2019</td>
                                                        <td>							
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#UnpaidModal">Paid</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>034684</td>
                                                        <td>Ediie talucod</td>
                                                        <td>05/18/2019</td>
                                                        <td>							
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#UnpaidModal">Paid</button>
                                                  
                                                        </td>
                                                    </tr>
                                                  
                                                </tbody>
                                                
                                            </table>
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
                                <label style="font-size:30px;">Total</label>
                                <h2 style="float:right;">₱ 1,220.00</h2>
                            </div>
                        </div>
                        <div class="card" style="margin-top:-15px;">
                            <div class="table-wrapper-scroll-x my-custom-scrollbar-2 justify-content-center">
                                <table class="table table-fixed table-hover">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th style="color:white;">type</th>
                                            <th style="color:white;">desciption</th>
                                            <th style="color:white;">kilo/Pieces</th>
                                            <th style="color:white;">Quantity</th>
                                            <th style="color:white;">Subtotal</th>
                                            <th style="color:white;">remove</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr style="cursor:pointer;">

                                                <td>Basic Care</td>
                                                <td>WASH-DRY-FOLD</td>
                                                <td>₱ 50</td>
                                                <td>4</td>
                                                <td>₱ 200</td>
                                                <td><center><a style="color:red;" class="glyphicon glyphicon-remove"></a></center></td>

                                        </tr>
                                        <tr style="cursor:pointer;">

                                                <td>Basic Care</td>
                                                <td>WASH-DRY-FOLD</td>
                                                <td>₱ 50</td>
                                                <td>4</td>
                                                <td>₱ 200</td>
                                                <td><center><a style="color:red;" class="glyphicon glyphicon-remove"></a></center></td>

                                        </tr>
                                        <tr style="cursor:pointer;">

                                                <td>Basic Care</td>
                                                <td>WASH-DRY-FOLD</td>
                                                <td>₱ 50</td>
                                                <td>4</td>
                                                <td>₱ 200</td>
                                                <td><center><a style="color:red;" class="glyphicon glyphicon-remove"></a></center></td>

                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <center>
                            <div class="col-lg-12" style="margin-top:-15px;">
                                <button style="width:100%;" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ProceedModal"><span class="glyphicon glyphicon-ok"></span>&nbsp;Proceed</button>
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
            	message: "Welcome to Beacon Cloth Care"

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
