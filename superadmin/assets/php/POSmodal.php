
<script>

    $("#paylaterbtn").click(function(){
      $("#paynow").hide();
    }); 
    
    $("#paynowbtn").click(function(){
      $("#paynow").show();
    }); 
    


</script>
<!--click unpaid modal -->    
<div id="finishq" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Proceed</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class=" col-md-6">
                          <input type="button" class="btn btn-success btn-lg" value="Pay Now"> 
                      </div>
                      <div class=" col-md-6">
                          <input type="button" class="btn btn-success btn-lg" value="Pay Later">
                      </div>
                  
                  </div>
                  
                  </div>
              </div>
        </div>
    </div>
<!--click procedd modal -->    
<div id="ProceedModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
        <div class="modal-content">
              <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:center;">Proceed</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                        <label>Customer name</label>
                        <input type="text" class="form-control" placeholder="Full Name">  
                    </div>
                    <div class="col-md-4">
                        <label>Pick-up Date</label>
                        <input type="date" name="bday" max="3000-12-31" 
                            min="1000-01-01" class="form-control">
                    </div>  
                    <div class="col-md-4">
                        <label>Time</label>
                         <input type="time" class="form-control">
                    </div>
                    </div>
                    <div class="row">
                        <div style="text-align:center;">
                            <h2>Total : ₱ 1,220.00</h2>  
                        </div>

                    </div>
                    <div class="row">
                        <center>
                            <div class="col-md-6"><input class="btn btn-success btn-lg" value="Pay Now" id="paynowbtn" type="button"></div>
                            <div class="col-md-6"><input class="btn btn-success btn-lg" value="Pay Later" id="paylaterbtn" type="button"></div>
                        </center>
                    </div>
                    <div id="paynow" style="display:none;">
                        <div class="row" style="text-align:center;">
                             <div class="col-md-6 col-md-offset-3">
                                <label>Payment</label>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <div class="row" style="text-align:center;">
                             <div class="col-md-6 col-md-offset-3">
                                <label>change</label>
                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <br><hr>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <button class="btn btn-success btn-lg" data-dismiss="modal" style="width:100%;" onclick="finish()">Finish</button>

                                <script type="text/javascript">

                                    function finish(){

                                        swal("Transaction Complete!", "Click okay to exit", "success");
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>

<!--click logout modal -->  
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
<!-- Edit -->
     <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <!-- <center><h4 class="modal-title" id="myModalLabel">Quantity</h4></center>-->
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($connect,"select * from posservices where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row" >
						<!--<div class="col-md-6 alert alert-primary" style=" border-radius:0px;">
							<label style="position:relative;">Type:<h4><?php echo $erow['type']; ?></h4></label>
						</div>
						<div class="col-md-6 alert alert-primary" style=" border-radius:S0px;">
							<label style="position:relative;">Description:<h4><?php echo $erow['description']; ?></h4></label>
						</div>
						<div class="col-md-6 alert alert-primary" style=" border-radius:10px;">
							<label style="position:relative;">/Kilo:<h4>₱ <?php echo $erow['kilo']; ?></h4></label>
						</div>
                        -->
                        <center>
                            <div style=" border-radius:10px; width:80%;">
                                <label style="float:left">kilo/Pieces</label>
                                <input type="number" class="form-control" placeholder="per kilo">	
                            </div> 
                        </center>
                    </div>
                </div> 
                    
				</div>
                <div class="modal-footer">
                    <form method="post" action="POS.php">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" name="addtocart">Okay</button>
                    </form>
                </div>
				</form>
            </div>
        </div>

    </div>



<!-- /.modal -->