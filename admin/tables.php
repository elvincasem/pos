<?php
include('headert.php');

$tid=$_REQUEST['tid'];
?>
<div id="page-wrapper" disabled>
            <div class="row">
                <div class="col-lg-7">
                     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-7 col-md-6" style="margin-top:10px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="height:66px;">
                            <div class="row">
                                <div class="col-xs-2">
                                    <i class="fa fa-cutlery fa-3x">

                                    </i>
                                 
                                </div>
                                  
                                <div class="col-xs-9 text-right">
                                    <!--<div class="huge">26</div>-->
                                    <div><h3>
                                         <?php
                                       

                                            include_once("include/functions.php");          
                                            $catlist = selectListSQL("SELECT * FROM tbltable WHERE tableid = '$tid'");
                                            foreach ($catlist as $rowss => $cl) {
                                                $tname = $cl['table_name'];
                                                echo $tname;
                                            
                                            }
                                            ?>

                                    </h3></div>
                                </div>
                            </div>
                        </div>
                         
                        <a href="#" >
<<<<<<< HEAD
                            <div class="panel-footer" style="height:480px; overflow-y: scroll;" >
=======
                            <div class="panel-footer" style="height:280px; overflow-y: scroll;" >
>>>>>>> origin/master
                               <!-- <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>-->
                                    <!--loob-->

                                    <!--toastmarmalade-->
                                   
                                        <?php
                                       

                                            include_once("include/functions.php");          
                                            $emplist = selectListSQL("SELECT * FROM tbltcontent WHERE tableid = '$tid'");
                                            foreach ($emplist as $rows => $link) {
                                                $tcontent_name = $link['tcontent_name'];
                                                $tcontentid = $link['tcontentid'];
                                                
                                              echo '<div class="col-md-4">
                                                  <div class="panel panel-primary">
                                                    <div class="panel-heading" style="height:60px;">
                                                        <div class="row">
                                                            <div class="col-xs-16 text-center">
                                                               
<<<<<<< HEAD
                                                                <a href="finalize.php" style="color:white;"><h4>'.$tcontent_name.'</h4></a>
=======
                                                                <div data-toggle="modal" data-target="#myModal-'.$tcontentid.'"><h4>'.$tcontent_name.'</h3></div>
>>>>>>> origin/master
                                                                    <!-- Modal -->
                                                                        <div id="myModal-'.$tcontentid.'" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title" style="color:black;">';
                                                                                echo $tcontent_name;
                                                                        echo '</h4>
                                                                              </div>
                                                                              <div class="modal-body">';
                                                                                $sublist = selectListSQL("SELECT * FROM tblsubmenu WHERE menuid = '$menuid'");
                                                                                foreach ($sublist as $row => $sm) {
                                                                                $submenuname = $sm['submenu_name']; 
                                                                                    echo '<div style="color:black;">'.$submenuname.'</div>';
                                                                            }
                                                                         echo'     </div>
                                                                              <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                              </div>
                                                                            </div>

                                                                          </div>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                        <div class="panel-footer" style="height:30px; overflow-y: scroll;" >
                                                          
                                                               
                                                         </div>
                                                    
                                                </div>
                                            </div>
                                    ';
                                                }
                                        ?>
                                                   

                            
                             </div>
                        </a>

                    </div><!--end blue panel-->
                                   
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
<<<<<<< HEAD
                          <th>Cashier: Richard</th>
                        </tr>
                        <tr>
=======
<<<<<<< HEAD
                          <th>Cashier: Richard</th>
                        </tr>
                        <tr>

=======
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
>>>>>>> origin/master
>>>>>>> origin/master
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
<<<<<<< HEAD
                          <td style="font-weight:bold;">Additional Charges:0.00</td>
                        </tr>
                        <tr>
                          <td style="font-weight:bold;">Date:
                            <?php 
                              $zone=3600-29900;//USA 
                              $date=gmdate("F j, Y, g:i a", time() + $zone); 
                              echo $date;
                            ?>
                          </td>
=======
<<<<<<< HEAD

                          <td>Additional Charges:0.00</td>
                          <td>Senior Discount:0.00</td>
                        </tr>
                        <tr>
                          
                          <td>Amount Tender:0.00</td>
                          <td>Special Discount:0.00</td>
                        </tr>
                        <tr>
                          
                          <td>Amount Change:0.00</td>
                          <td>VAT(12%):0.00</td>
                        </tr>
                        <tr>
                          
                          <td>Date:0.00</td>
                          <td>Total Discount:0.00</td>
=======
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
>>>>>>> origin/master
>>>>>>> origin/master
                        </tr>
                      </tbody>
                    </table>
            </div><!-- end row-->
                








                <div class="col-lg-5 col-md-6" style="margin-top:10px;">
                    <div class="panel panel-red">
<<<<<<< HEAD
                        <div class="panel-heading" style="height:75px;">
=======
                        <div class="panel-heading" style="height:65px;">
>>>>>>> origin/master
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calculator fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
<<<<<<< HEAD
                                  <h6>SUMMARY OF ORDERS</h6>
                                  <h4>Table No. 2  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Order No. 252</h4>
=======
                                  <h3>SUMMARY OF ORDERS</h3>
>>>>>>> origin/master
                                </div>
                            </div>
                        </div>
                        
<<<<<<< HEAD
                            <div class="panel-footer" style="height:300px;overflow-y: scroll;">
=======
                            <div class="panel-footer" style="height:280px;overflow-y: scroll;">
>>>>>>> origin/master
                               <!-- <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>-->
                                <table class="table">
                                  <thead>
                                    <tr>
<<<<<<< HEAD
                                      <th>Items</th>
=======
                                      <th>Meal</th>
>>>>>>> origin/master
                                      <th>Price</th>
                                      <th>Quantity</th>
                                      <th>Amount</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">French Fries</th>
                                      <td>90</td>
                                      <td>3</td>
                                      <td>270</td>
                                      <th>x</th>

                                    </tr>
                                    <tr>
                                      <th scope="row">Coke (RED)</th>
                                      <td>45</td>
                                      <td>3</td>
                                      <td>135</td>
                                      <th>x</th>
                                    </tr>
                                  </tbody>
                                </table>
                                <!--end of table-->
                                


                            </div>
                        
                    </div>
                        <div>
<<<<<<< HEAD
                            <h4>Note: lorem ups.....</h4>
                        </div>
                        <br>
                        <div class="col-sm-5" style="margin-top:-20px;">
=======
<<<<<<< HEAD
                            <h4>Note: lorem ups.....</h4>
                        </div>
                        <br>
                        <div class="col-sm-7">                   
                            <button type="submit" class="btn btn-primary btn-lg col-sm-7">CASH</button>
                            <button type="submit" class="btn btn-primary btn-lg col-sm-7">CREDIT</button>
                            <button type="submit" class="btn btn-danger btn-lg col-sm-7">CANCEL<br> ORDER</button>
                        </div>
                        <div class="col-sm-5" style="margin-top:-20px; margin-left:-60px;">
>>>>>>> origin/master
                                              <table class="table">
                                                          <thead>
                                                          <tr>
                                                            <th><h5>SUB TOTAL:</h5></th> 
                                                          </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                               <td><h3 style="margin-top:-5px; font-weight:bold;">0.00</h3></td>
                                                            </tr>
                                                          </tbody>
                                              </table>     
                                              <table class="table" style="margin-top:-40px;">
                                                          <thead>
                                                          <tr>
                                                            <th><h5>GRAND TOTAL:</h5></th> 
                                                          </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>
                                                               <td><h3 style="margin-top:-5px; font-weight:bold;">0.00</h3></td>
                                                            </tr>
                                                          </tbody>
                                              </table>    
<<<<<<< HEAD
                        </div>
                        <div class="col-sm-7">                   
                            <a href="finalize.php"><button type="submit" class="btn btn-primary btn-lg col-sm-7">BILL OUT</button></a>

                        </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Modal -->
                                  <div id="cash" class="modal fade" rocasle="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>CASH</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:200px;">
                                          <div class="col-sm-4">
                                              Amount Tendered:<br><br><br>
                                              Amount Change:
                                          </div>
                                          <div class="col-sm-8" style="margin-top:-10px;">
                                              <h3 style="font-weight:bold;"><input type="text" class="form-control" placeholder="0.00"></h3><br>
                                              <h3 style="font-weight:bold;"><input type="text" class="form-control"  placeholder="0.00"></h3>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--end of cash-->
                                     <!-- Modal -->
                                  <div id="credit" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>CREDIT</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:260px;">
                                          <div class="col-sm-12">
                                              Card Type:
                                              <br>
                                               <select class="custom-select form-control">
                                                <option selected>Choose</option>
                                                <option value="1">Visa</option>
                                                <option value="2">Master Card</option>
                                                <option value="3">American Express Card</option>
                                              </select>
                                             
                                              Name:<br>
                                              <input type="text" class="form-control">
                                              Reference Number:<br>
                                              <input type="text" class="form-control">
                                              Total Bill:<br>
                                              <input type="text" class="form-control">
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--CREDIT-->
                                    <div id="cancel" class="modal fade" role="dialog">
                                          <div class="modal-dialog modal-sm">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="color:black;"><center>WARNING! (you are about to cancel the order)</center></h4>
                                              </div>
                                              <div class="modal-body" style="height:100px;">
                                                <div class="col-sm-12">
                                                                          Enter Admin Password<br>
                                                                          <input type="password" class="form-control">
                                                                          
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                  <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                          <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                                  </center>
                                             </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--cancel order-->
                                     <div id="seniord" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>SENIOR DISCOUNT</center>
                                              </h4>
                                              
                                          </div>
                                          <div class="modal-body" style="height:260px;">
                                          <div class="col-sm-12">
                                              Number of person:<br>
                                              <input type="text" class="form-control">
                                              Number of Senior Citizen:<br>
                                              <input type="text" class="form-control">
                                              Name of Senior Citizen:<br>
                                              <input type="text" class="form-control">
                                              Senior ID No.:<br>
                                              <input type="text" class="form-control">
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--senoird-->
                                     <!-- Modal -->
                                  <div id="addcharges" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Add Charges</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:260px;">
                                          <div class="col-sm-12">
                                              Charges Type:
                                              <br>
                                               <select class="custom-select form-control">
                                                <option selected>Choose</option>
                                                <option value="1">Rent Hut</option>
                                                <option value="2">Shower</option>
                                                <option value="3">Cortage</option>
                                                <option  id ="bind" value="4">others...</option>
                                              </select>
                                              <br>
                                                <script>
                                                   $( "#bind" ).click(function() {
                                                   $(this).attr("disabled", "disabled");
                                                   $("#unbind").removeAttr("disabled");
                                                </script>
                                             
                                            <textarea id="unbind" class="col-sm-12" style="height:120px;resize: none;" disabled> </textarea>
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--addcharges-->
                                     <!-- Modal -->
                                  <div id="speciald" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>SPECIAL DISCOUNT</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:120px;">
                                          <div class="col-sm-12">
                                              <button type="button" class="btn btn-primary  btn-lg col-sm-6">5%</button>
                                              <button type="button" class="btn btn-primary  btn-lg col-sm-6">10%</button>
                                              <button type="button" class="btn btn-primary  btn-lg col-sm-6">15%</button>
                                              <button type="button" class="btn btn-primary  btn-lg col-sm-6">20%</button>
                                             
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--speciald-->
                                    </div>
=======
                                            </div>
=======
                            <h3>Grand Total:0.00</h3>
                        </div>
                        <br>
                        <center>                    
                            <button type="submit" class="btn btn-primary btn-lg" >DINE IN</button>
                            <button type="submit" class="btn btn-primary btn-lg">TAKE OUT</button>
                            <button type="submit" class="btn btn-danger btn-lg">Clear All</button><br><br>
                            <button type="submit" class="btn btn-primary btn-lg">ASSIGN TO PERSON</button>
                        </center>
>>>>>>> origin/master
                </div>
            </div>
            <!-- /.row -->
           
        </div>
>>>>>>> origin/master
        <!-- /#page-wrapper -->

    </div>

<<<<<<< HEAD



     <!-- Modal -->
                                                                        <div id="transfer" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog" style="width:90%;">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title" style="color:black;">
                                                                                        TABLES
                                                                              
                                                                                </h4>
                                                                              </div>
                                                                              <div class="modal-body" style="height:350px;">
                                                                         
                                                                              <div class="col-sm-5"><!--huts-->
                                                                                
                                                                                <?php
                                                                                 include_once("include/functions.php");          
                                                                                  $tlist = selectListSQL("SELECT * FROM tbltcontent");
                                                                                  foreach ($tlist as $rowsss => $links) {
                                                                                      $tcname = $links['tcontent_name'];
                                                                                      $tid = $links['tableid'];
                                                                                      $tidd= $links['tcontentid'];
                                                                                      $status = $links['status'];
                                                                                      if($tid==4){
                                                                                          //echo '<button type="submit" class="btn btn-primary btn-lg col-sm-2">'.$tcname.'</button>';
                                                                                          echo '
                                                                                          <button type="submit" class="btn btn-primary btn-lg col-sm-3" data-toggle="modal" data-target="#myModal-'.$tidd.'"> '.$tcname.'</button>
                                                                                          <!-- Modal -->
                                                                        <div id="myModal-'.$tidd.'" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog modal-sm">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                
                                                                                <h4 class="modal-title" style="color:black;">
                                                                                
                                                                              </h4>
                                                                              </div>
                                                                              <div class="modal-body">';
                                                                                if($status>0){
                                                                                  echo '<h3 style="color:red;">Occupied</h3>';
                                                                                }else{
                                                                                  echo'<h3>Dine here<br></h3>';
                                                                                  echo'<div class="modal-footer">
                                                                                          
                                                                                      </div>';
                                                                                }
                                                                       echo'        </div>
                                                                              
                                                                            </div>

                                                                          </div>
                                                                        </div>
                                                        ';
                                                                                      }else{
                                                                                         // echo '<button type="submit" class="btn btn-success btn-lg col-sm-2" disabled> '.$tcname.'</button>';
                                                                                      
                                                                                      }
                                                                                  }
                                                                                ?>
                                                                              </div>

                                                                              <div class="col-sm-7"><!--extra-->
                                                                                <?php
                                                                                 include_once("include/functions.php");          
                                                                                  $tlist = selectListSQL("SELECT * FROM tbltcontent");
                                                                                  foreach ($tlist as $rowsss => $links) {
                                                                                      $tcname = $links['tcontent_name'];
                                                                                      $tid = $links['tableid'];
                                                                                      $tidd= $links['tcontentid'];
                                                                                      $status = $links['status'];

                                                                                      if($tid==5){
                                                                                          //echo '<button type="submit" class="btn btn-primary btn-lg col-sm-2">'.$tcname.'</button>';
                                                                                          echo '
                                                                                          <button type="submit" class="btn btn-danger btn-lg col-sm-2" data-toggle="modal" data-target="#myModal-'.$tidd.'"> '.$tcname.'</button> <!-- Modal -->
                                                                        <div id="myModal-'.$tidd.'" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog modal-sm">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                               
                                                                                <h4 class="modal-title" style="color:black;">
                                                                                
                                                                              </h4>
                                                                              </div>
                                                                              <div class="modal-body">';
                                                                                if($status>0){
                                                                                  echo '<h3 style="color:red;">Occupied</h3>';
                                                                                }else{
                                                                                  echo"<h3>Dine here<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          
                                                                                      </div>';
                                                                                }
                                                                       echo'        </div>
                                                                              
                                                                            </div>

                                                                          </div>
                                                                        </div>
                                                        ';
                                                                                      }else{
                                                                                         // echo '<button type="submit" class="btn btn-success btn-lg col-sm-2" disabled> '.$tcname.'</button>';
                                                                                      
                                                                                      }
                                                                                  }
                                                                                ?>

                                                                              </div>

                                                                               <div class="col-sm-18" style="margin-top:100px;margin-left:200px;"><!--rails-->
                                                                                <?php
                                                                                 include_once("include/functions.php");          
                                                                                  $tlist = selectListSQL("SELECT * FROM tbltcontent");
                                                                                  foreach ($tlist as $rowsss => $links) {
                                                                                      $tcname = $links['tcontent_name'];
                                                                                      $tid = $links['tableid'];
                                                                                      $tidd= $links['tcontentid'];
                                                                                      $status = $links['status'];

                                                                                      if($tid==3){
                                                                                          //echo '<button type="submit" class="btn btn-primary btn-lg col-sm-2">'.$tcname.'</button>';
                                                                                          echo '
                                                                                          <button type="submit" class="btn btn-success btn-lg col-sm-1" data-toggle="modal" data-target="#myModal-'.$tidd.'"> '.$tcname.'</button>
                                                                                          <div id="myModal-'.$tidd.'" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog modal-sm">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                               
                                                                                <h4 class="modal-title" style="color:black;">
                                                                                
                                                                              </h4>
                                                                              </div>
                                                                              <div class="modal-body">';
                                                                                if($status>0){
                                                                                  echo '<h3 style="color:red;">Occupied</h3>';
                                                                                }else{
                                                                                  echo"<h3>Dine here<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          
                                                                                      </div>';
                                                                                }
                                                                       echo'        </div>
                                                                              
                                                                            </div>

                                                                          </div>
                                                                        </div>
                                                        ';
                                                                                      }else{
                                                                                         // echo '<button type="submit" class="btn btn-success btn-lg col-sm-2" disabled> '.$tcname.'</button>';
                                                                                      
                                                                                      }
                                                                                  }
                                                                                ?>
                                                                              </div>
                                                                              <div class="col-lg-10" style="margin-left:30px;" ><!--table-->
                                                                                <br>
                                                                                <?php
                                                                                 include_once("include/functions.php");          
                                                                                  $tlist = selectListSQL("SELECT * FROM tbltcontent");
                                                                                  foreach ($tlist as $rowsss => $links) {
                                                                                      $tcname = $links['tcontent_name'];
                                                                                      $tid = $links['tableid'];
                                                                                      $tidd= $links['tcontentid'];
                                                                                      $status = $links['status'];

                                                                                      if($tid==1){
                                                                                          //echo '<button type="submit" class="btn btn-primary btn-lg col-sm-2">'.$tcname.'</button>';
                                                                                          echo '

                                                                                          <button type="submit" class="btn btn-info btn-lg col-sm-3" data-toggle="modal" data-target="#myModal-'.$tidd.'"> '.$tcname.'</button>
                                                                                            <div id="myModal-'.$tidd.'" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog modal-sm">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                               
                                                                                <h4 class="modal-title" style="color:black;">
                                                                                
                                                                              </h4>
                                                                              </div>
                                                                              <div class="modal-body">';
                                                                                if($status>0){
                                                                                  echo '<h3 style="color:red;">Occupied</h3>';
                                                                                }else{
                                                                                  echo"<h3>Dine here<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                      
                                                                                      </div>';
                                                                                }
                                                                       echo'        </div>
                                                                              
                                                                            </div>

                                                                          </div>
                                                                        </div>
                                                        ';

                                                                                      }else{
                                                                                         // echo '<button type="submit" class="btn btn-success btn-lg col-sm-2" disabled> '.$tcname.'</button>';
                                                                                      
                                                                                      }
                                                                                  }
                                                                                ?>
                                                                              </div>
                                                                              <div class="col-lg-2" style="margin-top:-138px;margin-left:990px;"><!--sala-->
                                                                                
                                                                                <?php
                                                                                 include_once("include/functions.php");          
                                                                                  $tlist = selectListSQL("SELECT * FROM tbltcontent");
                                                                                  foreach ($tlist as $rowsss => $links) {
                                                                                      $tcname = $links['tcontent_name'];
                                                                                      $tid = $links['tableid'];
                                                                                      $tidd= $links['tcontentid'];
                                                                                      $status = $links['status'];

                                                                                      if($tid==2){
                                                                                          //echo '<button type="submit" class="btn btn-primary btn-lg col-sm-2">'.$tcname.'</button>';
                                                                                          echo '

                                                                                          <button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal-'.$tidd.'"> '.$tcname.'</button><br>
                                                                                          <div id="myModal-'.$tidd.'" class="modal fade" role="dialog">
                                                                          <div class="modal-dialog modal-sm">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                               
                                                                                <h4 class="modal-title" style="color:black;">
                                                                                
                                                                              </h4>
                                                                              </div>
                                                                              <div class="modal-body">';
                                                                                if($status>0){
                                                                                  echo '<h3 style="color:red;">Occupied</h3>';
                                                                                }else{
                                                                                  echo"<h3>Dine here<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          
                                                                                      </div>';
                                                                                }
                                                                       echo'        </div>
                                                                              
                                                                            </div>

                                                                          </div>
                                                                        </div>
                                                        ';

                                                                                      }else{
                                                                                         // echo '<button type="submit" class="btn btn-success btn-lg col-sm-2" disabled> '.$tcname.'</button>';
                                                                                      
                                                                                      }
                                                                                  }
                                                                                ?>
                                                                              </div>
                                                                            


                                                                           </div>
                                                                              <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                              </div>
                                                                            </div>

                                                                          </div>
                                                                        </div><!--table-->
                                                                     <!-- Modal -->
                                  <div id="complementary" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Complementary</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:260px;">
                                          <div class="col-sm-12">
                                              Charge To:
                                              <br>
                                               <select class="custom-select form-control">
                                                <option selected>Choose</option>
                                                <option value="1">Juan</option>
                                                <option value="2">Pedro</option>
                                                <option value="3">Ivan</option>
                                              </select>
                                             
                                              Search:<br>
                                              <div class="input-group">
                                                  
                                                  <input type="text" class="form-control" >
                                                  <span class="input-group-addon "> <span class="glyphicon glyphicon-search"></span></span>
                                                </div>
                                              
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--Complementary-->
                                                                      <!-- Modal -->
                                  <div id="viewcharges" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Other Charges</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:260px;">
                                          <div class="col-sm-12">
                                         <table class="table">
                                            <thead class="thead-inverse">
                                              <tr>
                                                <th>#</th>
                                                <th>Table No.</th>
                                                <th>Description</th>
                                                <th>Cost</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th scope="row">1</th>
                                                <td>HUT1</td>
                                                <td>hut rent</td>
                                                <td>1000</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">2</th>
                                                <td>table1</td>
                                                <td>shower</td>
                                                <td>100</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div><!--View Charges-->
                                                                        <!-- Modal -->
                                  <div id="viewnote" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Notes</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:260px;">
                                          <div class="col-sm-12">
                                            burger without onion <br>
                                            plus a bottle of red wine<br>
                                            w/chili powder or chili as it is 
                                          </div>
                                          
                                        </div>
                                        <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                      </div>
                                    </div>
                                    </div><!--View Charges-->
                                     




=======
>>>>>>> origin/master
<?php
include('footer.php');
?>