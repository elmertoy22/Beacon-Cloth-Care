
<div id="services" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;"><div id="services_title_display"></div></h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <br>
                    <div class="row" style="text-align:center;">
                        <div class="col-md-10 col-md-offset-1">

                            <select class="form-control" id="services_option" disabled>
                                <option value="Basic Care">Basic Care</option>
                                <option value="Special Care">Special Care</option>
                                <option value="Premium Care">Premium Care</option>
                            </select>
                            
                            <label>type</label>

                                <?php
                                    include('function/connection/connect.php');
                            
                                    $display_bc = " SELECT * FROM `services` WHERE services = 'Basic Care'"; 
                                    $result_bc = mysqli_query($connect,$display_bc);
                            
                                    $display_sc = " SELECT * FROM `services` WHERE services = 'Special Care'"; 
                                    $result_sc = mysqli_query($connect,$display_sc);
                            
                                    $display_pc = " SELECT * FROM `services` WHERE services = 'Premium Care'"; 
                                    $result_pc = mysqli_query($connect,$display_pc);
                            
                                    echo '<select class="form-control" id="services_type" onchange="servicestype()">
                                            <option value="" disabled selected>Select</option>

                                    ';
                                    
                                   echo '<option style="font-size:20px; font-weight:bold; " disabled>Basic Care</option><br>';
                                
                                        if(mysqli_num_rows($result_bc) > 0){

                                                while ($row_bc = mysqli_fetch_array($result_bc)) {

                                                    $type_bc = $row_bc['type'];
                                                    $items_bc = $row_bc['items'];
                                                    $price_bc = $row_bc['price'];

                                                    echo '

                                                        <option value='.$price_bc.'>'.$type_bc.' / '.$items_bc.' / ₱'.$price_bc.'</option>

                                                    ';
                                                }
                                        } 
                                
                                    echo '<option style="font-size:20px; font-weight:bold;" disabled>Special Care</option><br>';
                            
                                        if(mysqli_num_rows($result_sc) > 0){

                                                while ($row_sc = mysqli_fetch_array($result_sc)) {

                                                    $items_sc = $row_sc['type'];
                                                    $price_sc = $row_sc['price'];
                                                    echo '

                                                        <option id="sc_option" value='.$price_sc.'>'.$items_sc.' / ₱'.$price_sc.'</option>

                                                    ';
                                                }

                                        } 
                            
                                    echo '<option style="font-size:20px; font-weight:bold;" disabled>Premium Care</option><br>';
                            
                                        if(mysqli_num_rows($result_pc) > 0){

                                                while ($row_pc = mysqli_fetch_array($result_pc)) {

                                                    $items_pc = $row_pc['type'];
                                                    $price_pc = $row_pc['price'];
                                                    echo '

                                                        <option id="sc_option" value='.$price_pc.'>'.$items_pc.' / ₱'.$price_pc.'</option>

                                                    ';
                                                }

                                        } 
                                    
                                 echo '</select>';
                                ?>
                                
                                <!--click items list -->  
                                <div id="item_lists" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                    <!-- Modal content-->
                                        <div class="modal-content">
                                              <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Item List</h4>
                                              </div>
                                              <div class="modal-body">
                                                  <p>qwfqwfqwf</p>

                                              </div>
                                              <div class="modal-footer">
                                                  <a href="logout.php"><button type="button" class="btn btn-primary">okay</button></a>
                                              </div>
                                        </div>

                                        </div>
                                </div>
                            
                                <div class="col-md-12">
                                    
                                        <label>items</label><br>
                                        <div class="col-md-4" align="left">
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="T-shirt">T-shirt<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Polo Shirt">Polo Shirt<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Long Sleeves">Long Sleeves<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Dress">Dress<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Skirt">Skirt<br>
                                        </div>
                                        <div class="col-md-4" align="left">
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Jacket">Jacket<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Cardingan">Cardingan<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Pajama">Pajama<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Slacks">Slacks<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Leggings">Leggings<br>
                                        </div>
                                        <div class="col-md-4" align="left">
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Brief">Brief<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Panty">Panty<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Bra">Bra<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Comforter">Comforter<br>
                                            <input onchange="addthisitems()" type="checkbox" name="itemsss[]" value="Curtain">Curtain<br>
                                        </div>
                                </div> 
                            
                                <div class="col-md-12">
                                        <textarea class="form-control" id="others" style="width:100%; height:150px;" placeholder="Others"></textarea>
                                </div>
                                    
                            <!--
                            <div class="col-md-12" style="display:none;" id="items-list">
                                <div class="col-md-12">
                                    <a href="#selectitems-bc" data-toggle="modal">
                                     <button class="btn btn-primary">View item list</button>
                                    </a>
                                </div>
                            </div>
                            -->
                            <div class="col-md-12">
                                <div class="col-md-8">
                                    <label>Amount per kilo/pcs</label>
                                    ₱<input style="text-align:center; border:none; font-size:20px;" type="text" class="form-control" id="amount" readonly placeholder="0">

                                </div> 
                                <div class="col-md-4">
                                    <label>Special Price</label>
                                    <input type="button" class="btn btn-success" value="Special Price" id="discount-btn" onclick="discount()">
                                </div>
                            </div>

                            <div class="col-md-12 bg-info" id="discount-input" style="display:none; border-radius:10px;">
                                <div class="col-md-12">
                                     <label style="float:left">New Amount</label>
                                </div>
                                <div class="col-md-10">
                                    <input style="text-align:center" type="number" class="form-control" min="0" id="newamount">
                                </div>
                                <div class="col-md-2">
                                    <input type="button" class="btn btn-warning" value="Cancel" onclick="discountcancel()">
                                </div>

                            </div> 
        
                            <div class="col-md-12">
                                <div class="col-md-6" align="center">
                                    <input type="button" class="btn btn-primary" onclick="enterkilo()" value="Enter Kilos">
                                </div>
                                <div class="col-md-6" align="center">
                                    <input type="button" class="btn btn-danger" onclick="enterpieces()" value="Enter Pieces">
                                </div>
                            </div> 


                            <div class="col-md-12 bg-info" id="enterkilo" style="border-radius:10px;">
                                <label>No. of Kilograms</label>
                                <div class="bg-danger" id="minimumalert" style="display:none; text-align:center; padding:5px;">minimum of 3 kilos   </div>
                                <input style="text-align:center" type="number" class="form-control" id="kilo" onkeyup="computetotalkilo()" min="0" placeholder="0" disabled>
                            </div> 
                            
                            <div class="col-md-12 bg-danger" id="enterpieces" style="display:none; border-radius:10px;">
                                <label>No. of Pieces</label>
                                
                                <input style="text-align:center" type="number" class="form-control" id="pieces" min="0" onkeyup="computetotalpieces()" placeholder="0" disabled>
                            </div> 


                            <div class="col-md-12">
                                <label>SubTotal</label>
                                ₱<input style="text-align:center; border:none;" type="number" class="form-control" id="totalamount" placeholder="0" readonly>
                            </div>
                                                        
                            <div class="col-md-12">
                                <label>Status</label>
                                <select class="form-control" id="status" onchange="rushregular()" disabled>
                                    <option value="" disabled selected>Select</option>
                                    <option value="regular" >Regular</option>
                                    <option value="rush">Rush</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label>Total Amount</label>
                                ₱<input style="text-align:center; border:none; font-size:25px;" type="number" class="form-control" id="finaltotalamount" placeholder="0" readonly>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-md-6">
                        <button  style="width:100%" type="button" class="btn btn-danger" id="btn_transac_cancel" onclick="canceltransactt()">Cancel</button>
                    </div>
                    <div class="col-md-6">
                         <button  style="width:100%" type="button" class="btn btn-primary" onclick="addtocart()">Okay</button>
                    </div>
                   
                </div>
            </form>
        </div>
    </div>
</div>


<!--<div id="selectitems-bc" class="modal fade" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header bg-primary">
                        <div class="row">
                            <h4 class="modal-title" style="text-align:center;">Select Items</h4>
                        </div>
                    </div>
                <div class="modal-body">
                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items1" value="option2">
                                      <label class="form-check-label" for="items1">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items2" value="option2">
                                      <label class="form-check-label" for="items2">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items3" value="option2">
                                      <label class="form-check-label" for="items3">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items4" value="option2">
                                      <label class="form-check-label" for="items4">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0"  id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items5" value="option2">
                                      <label class="form-check-label" for="items5">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items6" value="option2">
                                      <label class="form-check-label" for="items6">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items7" value="option2">
                                      <label class="form-check-label" for="items7">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items8" value="option2">
                                      <label class="form-check-label" for="items8">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <div class="form-check form-check-inline" align="center">
                                      <input class="form-check-input" type="checkbox" id="items9" value="option2">
                                      <label class="form-check-label" for="items9">T-Shirt</label>
                                </div>

                                <div class="col-md-6">
                                    <label>White</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                                <div class="col-md-6">
                                    <label>Colored</label>
                                    <input type="number" class="form-control" placeholder="0" value="0" min="0" id="jiji">
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="cancel()">Cancel</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal"  onclick="okay()">Okay</button>

                </div>
            </form>
        </div>
    </div>
</div>-->

<?php
    include 'function/servicesfunction.php';
?>

