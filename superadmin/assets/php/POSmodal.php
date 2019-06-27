

<style>
#enterkilo .modal-dialog {
    -webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top: 50%;
    margin: 0 auto;
}


</style>

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


<!-- /.modal -->