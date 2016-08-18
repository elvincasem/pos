<?php
include('headerfin.php');

$cid=$_REQUEST['cid'];
?>
<div id="page-wrapper" disabled style="margin-left:0px;">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-5 col-md-6" style="margin-top:10px;">

                    <div class="panel panel-primary" id="undind">
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
                                            $catlist = selectListSQL("SELECT * FROM tblcategory WHERE categoryid = '$cid'");
                                            foreach ($catlist as $rowss => $cl) {
                                                $cname = $cl['category_name'];
                                                echo $cname;

                                            
                                            }
                                            ?>

                                    </h3></div>

                                </div>
                            </div>
                        </div>
                         
                        
                            <div class="panel-footer" style="height:490px; overflow-y: scroll;" >
                               <!-- <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>-->
                                    <!--loob-->

                                    <!--toastmarmalade-->
                                   
                                        <?php
                                       

                                            include_once("include/functions.php");          
                                            $emplist = selectListSQL("SELECT * FROM tblmenu WHERE categoryid = '$cid'");
                                            foreach ($emplist as $rows => $link) {
                                                $menuname = $link['menu_name'];
                                                $menuid = $link['menuid'];
                                                $price = $link['price'];
                                                
                                              echo '<div class="col-md-4">
                                                      <div data-toggle="modal" data-target="#myModal-'.$menuid.'">
                                                        <div class="panel panel-primary">
                                                          <div class="panel-heading" style="height:60px;">
                                                            <div class="row">
                                                              <div class="col-xs-16 text-center">
                                                                <h5>'.$menuname.'</h5>         
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="panel-footer" style="height:30px;" >';
                                                              echo '<center>Price:' .$price.'</center>';     
                                                              echo'
                                                          </div>     
                                                        </div>
                                                      </div>
                                                    </div>
                                             <!-- Modal -->
                                                <div id="myModal-'.$menuid.'" class="modal fade" role="dialog">
                                                  <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title" style="color:black;">';
                                                          echo $menuname;
                                                          echo '
                                                        </h4>
                                                      </div>
                                                    <div class="modal-body">';
                                                      $sublist = selectListSQL("SELECT * FROM tblsubmenu WHERE menuid = '$menuid'");
                                                      foreach ($sublist as $row => $sm) {
                                                      $submenuname = $sm['submenu_name']; 
                                                        echo '<div style="color:black;">'.$submenuname.'</div>';
                                                      }
                                                      echo'     
                                                    </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>';
                                                }
                                        ?>         
                                  <div class="col-sm-12">        
                                   <button id="unbind" class="btn btn-primary btn-lg col-sm-4" disabled>CASH</button>
                                   <button id="unbind1" class="btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#charge" disabled>CHARGE</button>
                                   <button id="unbind2" class="btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#credit" disabled>CREDIT CARD</button>
                                
                                  </div>
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
                                     <!-- Modal -->
                                  <div id="charge" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Reason</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:150px;">
                                          <div class="col-sm-12">
                                            <textarea class="col-sm-12" style="height:120px;resize: none;"> </textarea>
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--Charge-->
                                    <!--tablet mode-->
                                  <!-- <div class="col-sm-9">
                                    <br>

                                        <button id="unbind4" class="btn btn-default btn-lg col-sm-3" disabled>9</button>
                                        <button id="unbind5" class="btn btn-default btn-lg col-sm-3" disabled>8</button>
                                        <button id="unbind6" class="btn btn-default btn-lg col-sm-3" disabled>7</button>
                                        <button id="unbind7" class="btn btn-default btn-lg col-sm-3" disabled>100</button><br>
                                        <button id="unbind8" class="btn btn-default btn-lg col-sm-3" disabled>6</button>
                                        <button id="unbind9" class="btn btn-default btn-lg col-sm-3" disabled>5</button>
                                        <button id="unbind10" class="btn btn-default btn-lg col-sm-3" disabled>4</button>
                                        <button id="unbind11" class="btn btn-default btn-lg col-sm-3" disabled>500</button><br>
                                        <button id="unbind12" class="btn btn-default btn-lg col-sm-3" disabled>3</button>
                                        <button id="unbind13" class="btn btn-default btn-lg col-sm-3" disabled>2</button>
                                        <button id="unbind14" class="btn btn-default btn-lg col-sm-3" disabled>1</button>
                                        <button id="unbind15" class="btn btn-primary btn-lg col-sm-3" disabled>1000</button><br>
                                        <button id="unbind16" class="btn btn-default btn-lg col-sm-3" disabled>C</button>
                                        <button id="unbind17" class="btn btn-default btn-lg col-sm-3" disabled>0</button>
                                        <button id="unbind18" class="btn btn-default btn-lg col-sm-3" disabled>.</button>
                                        <button id="unbind19" class="btn btn-default btn-lg col-sm-3" disabled>Exact</button><br>
                                    </div>-->
                                    <div class="col-sm-12" style="margin-top:20px;" >
                                      <h3 style="font-weight:bold;">Total: <input type="text" class="form-control input-lg" value="1,260.00" id="unbind20" disabled></h3>
                                      <h3 style="font-weight:bold;">Tendered:<input type="text" class="form-control input-lg" id="unbind21" disabled></h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 style="font-weight:bold;">Change: <h3 style="font-weight:bold; color:red;">740.00</h3></h3>
                                    </div>
                                    <div class="col-sm-6" style="margin-top:20px;">
                                      <center><button type="button" class="btn btn-primary btn-lg col-sm-6">OK</button>
                                              <button type="button" class="btn btn-default btn-lg col-sm-6">SAVE</button>
                                      </center>
                                    </div>

                                   


                             </div>

                    </div><!--end blue panel-->
            </div><!-- end row-->
              








                <div class="col-lg-7 col-md-6" style="margin-top:10px;" >
                    <div class="panel panel-red">
                        <div class="panel-heading" style="height:65px;">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calculator fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                  <h3>SUMMARY OF ORDERS</h3>
                                </div>
                            </div>
                        </div>
                        
                            <div class="panel-footer" style="height:590px;">
                               <!-- <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>-->
                              <div style="height:200px; overflow-y: scroll;">
                                <table class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Item Name</th>
                                                          <th>Price</th>
                                                          <th>Quantity</th>
                                                          <th>Amount</th>
                                                          
                                                          
                                                        </tr>
                                                      </thead>
                                <?php
                                            include_once("include/functions.php");          
                                            $orderlist = selectListSQL("SELECT * FROM tmpsorder");
                                            foreach ($orderlist as $orders => $so) {
                                                $meal = $so['meal'];
                                                $price = $so['price'];
                                                $quantity = $so['quantity'];
                                                $amount = $so['amount'];
                                               
                                                echo'
                                                      <tbody>
                                                        <tr>
                                                          <th>'.$meal.'</th>
                                                          <td>'.$price.'</td>
                                                         <td class="col-sm-3">
                                                          <div class="input-group">
                                                            <span class="input-group-btn">
                                                              <button class="btn btn-danger btn-sm" type="button">-</button>
                                                            </span>
                                                            <input type="text" class="form-control" placeholder="'.$quantity.'">
                                                            <span class="input-group-btn">
                                                              <button class="btn btn-success btn-sm" type="button">+</button>
                                                            </span>
                                                          </div>
                                                          </td>
                                                          <td>'.$amount.'</td>
                                                          <th><form method="post" action="deleteso.php">
                                                                <input type="hidden" value='.$oid.' name="oid">
                                                                <button class = "btn btn-danger" type="submit">x</button>

                                                              </form>
</th>

                                                        </tr>
                                                      </tbody>
                                                   ';
                                                  
                                              }
                                ?>
                                   </table>
                                  <!--end of table-->
                               </div> 
                                
                                
                  <div class="col-sm-8">
                    <table class="table">
                      <thead class="thead-inverse">
                        <tr>
                          <th style="font-weight:bold;">Cashier: Richard</th>
                        </tr>
                        <tr>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td style="font-weight:bold;">Additional Charges:0.00</td>
                          <td style="font-weight:bold;">Senior Discount:0.00</td>
                        </tr>
                        <tr>
                          
                          <td style="font-weight:bold;">Amount Tender:0.00</td>
                          <td style="font-weight:bold;">Special Discount:0.00</td>
                        </tr>
                        <tr>
                          
                          <td style="font-weight:bold;">Amount Change:0.00</td>
                          <td style="font-weight:bold;">VAT(12%):0.00</td>
                        </tr>
                        <tr>                          
                          <td style="font-weight:bold;">Date: 
                                <?php 
                                  $zone=3600-29900;//USA 
                                  $date=gmdate("F j, Y, g:i a", time() + $zone); 
                                  echo $date;
                                 ?>
                          </td> <!--time-->
                          <td style="font-weight:bold;">Total Discount:0.00</td>
                        </tr>
                      </tbody>
                    </table><!--end of body-->
                  </div>
                  <div class="col-sm-4">
                    <h2 style="font-weight:bold;">Grand Total:</h2>
                    <h1 style="color:red;">0.00</h1>
                    <button type="submit" class="btn btn-danger btn-md" data-toggle="modal" data-target="#cancelorder">Cancel Order</button>
                  <!-- Modal -->
                                  <div id="cancelorder" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Reason</center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:150px;">
                                          <div class="col-sm-12">
                                            <textarea class="col-sm-12" style="height:120px;resize: none;"> </textarea>
                                          </div>

                                          
                                          </div>
                                          <div class="modal-footer">
                                              <center><button type="button" class="btn btn-primary  btn-lg">OK</button>
                                                      <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                                              </center>
                                          </div>
                                        </div>
                                      </div>
                                    </div><!--Charge-->
                    
                   
                  </div>
                  <div class="col-sm-12">
                     <a href="addorder.php"><button type="submit" class="btn btn-primary btn-lg col-sm-4">ADD ORDER</button></a>
                    <button type="submit" class="btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#seniord" >SENIOR DISCOUNT</button>
                    <button type="submit" class="btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#speciald" >SPECIAL DISCOUNT</button>
                    <button type="submit" class="btn btn-primary btn-lg col-sm-4">OPEN DRAWER</button>
                    <button type="submit" class="btn btn-primary btn-lg col-sm-4">PRINT BILL</button>
                    <a href="splitbill.php"><button type="submit" class="btn btn-primary btn-lg col-sm-4">SPLIT BILL</button></a>
                    <button type="submit" id="bind" class="btn btn-primary btn-lg col-sm-4">PAY</button>
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
                      <script>
                              $( "#bind" ).click(function() {
                                 $(this).attr("disabled", "disabled");
                                 $("#unbind").removeAttr("disabled");
                                 $("#unbind1").removeAttr("disabled");
                                 $("#unbind2").removeAttr("disabled");
                                 $("#unbind3").removeAttr("disabled");
                                 $("#unbind4").removeAttr("disabled");
                                 $("#unbind5").removeAttr("disabled");
                                 $("#unbind6").removeAttr("disabled");
                                 $("#unbind7").removeAttr("disabled");
                                 $("#unbind8").removeAttr("disabled");
                                 $("#unbind9").removeAttr("disabled");
                                 $("#unbind10").removeAttr("disabled");
                                 $("#unbind11").removeAttr("disabled");
                                 $("#unbind12").removeAttr("disabled");
                                 $("#unbind13").removeAttr("disabled");
                                 $("#unbind14").removeAttr("disabled");
                                 $("#unbind15").removeAttr("disabled");
                                 $("#unbind16").removeAttr("disabled");
                                 $("#unbind17").removeAttr("disabled");
                                 $("#unbind18").removeAttr("disabled");
                                 $("#unbind19").removeAttr("disabled");
                                 $("#unbind20").removeAttr("disabled");
                                 $("#unbind21").removeAttr("disabled");


                              });
                              $( "#unbind" ).click(function() {
                                   $(this).attr("disabled", "disabled");
                                   $("#bind").removeAttr("disabled");

                              });
                              
                              
                    </script>
                  </div>
                  </div>
                        
                    </div>    
                </div>
            </div>

                                 <!-- Modal -->
                                  <div id="takeoutcredit" class="modal fade" role="dialog">
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
                                    </div><!--TAKEOUTCREDIT-->
                                    <!-- Modal -->
                                  <div id="takeoutseniord" class="modal fade" role="dialog">
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
                                    </div><!--TAKEOUTsenoird-->
                                    <!-- Modal -->
                                  <div id="takeoutspeciald" class="modal fade" role="dialog">
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
                                    </div><!--TAKEOUTspeciald-->





            <!-- /.row -->
            <div id="myModal3" class="modal fade" role="dialog">
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
        </div>
        <!-- /#page-wrapper -->

    </div>

<?php
include('footer.php');
?>s