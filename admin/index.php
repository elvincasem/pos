<?php
include('header.php');

$cid=$_REQUEST['cid'];
?>
<div id="page-wrapper" disabled>
            <div class="row">
                <div class="col-lg-7">
                     <div class="input-group custom-search-form page-header" style="margin:10px 0 10px ">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-7 col-md-6">
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
                         
                        <a href="#" >
                            <div class="panel-footer" style="height:400px; overflow-y: scroll;" >
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
                                                   echo'</div>
                                                    
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
                                    ';
                                                }
                                        ?>
                                                   
                                  
                            
                             </div>
                        </a>

                    </div><!--end blue panel-->



            </div><!-- end row-->
                








                <div class="col-lg-5 col-md-6" style="margin-top:-60px;">
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
                        
                            <div class="panel-footer" style="height:280px;overflow-y: scroll;">
                               <!-- <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>-->
                                <table class="table">
                                                      <thead>
                                                        <tr>
                                                          <th>Meal</th>
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
                                                if( count($orderlist)>1){
                                                  echo "";
                                                }else{
                                                  echo"nothing";
                                                }
                                                echo'
                                                      <tbody>
                                                        <tr>
                                                          <th>'.$meal.'</th>
                                                          <td>'.$price.'</td>
                                                          <td>'.$quantity.'</td>
                                                          <td>'.$amount.'</td>
                                                          <th>x</th>

                                                        </tr>
                                                      </tbody>
                                                   ';
                                                  
                                              }
                                ?>
                                   </table>
                                  <!--end of table-->
                                
                                
                                


                            </div>
                        
                    </div>
                        <div>
                            <h3>Grand Total:0.00</h3>
                        </div>
                        <br>
                        <center>
                                        
                            <button type="submit" class="btn btn-primary btn-lg"data-toggle="modal" data-target="#myModal1" >DINE IN</button>
                        <!-- Modal -->
                                                                        <div id="myModal1" class="modal fade" role="dialog">
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
                                                                                  echo'<h3>add note:<br></h3>';
                                                                                  echo'<div class="modal-footer">
                                                                                          <button type="submit" class="btn btn-primary btn-md col-sm-9" style="margin-left:30px;">PRINT TO <br>KITCHEN</button>
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
                                                                                  echo"<h3>add note:<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          <button type="submit" class="btn btn-primary btn-md col-sm-9" style="margin-left:30px;">PRINT TO <br>KITCHEN</button>
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
                                                                                  echo"<h3>add note:<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          <button type="submit" class="btn btn-primary btn-md col-sm-9" style="margin-left:30px;">PRINT TO <br>KITCHEN</button>
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
                                                                                  echo"<h3>add note:<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          <button type="submit" class="btn btn-primary btn-md col-sm-9" style="margin-left:30px;">PRINT TO <br>KITCHEN</button>
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
                                                                                  echo"<h3>add note:<br></h3>";
                                                                                  echo'<div class="modal-footer">
                                                                                          <button type="submit" class="btn btn-primary btn-md col-sm-9" style="margin-left:30px;">PRINT TO <br>KITCHEN</button>
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
                                                                        </div>
                        
                                                                   



                            <button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">TAKE OUT</button>
                                 <!-- Modal -->
                                  <div id="myModal2" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                TAKE OUT
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:480px;">';
                                               <div class="panel panel-green" style="margin-top:-20px;">
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
                                                
                                                    <div class="panel-footer" style="height:200px;overflow-y: scroll;">
                                                       <!-- <span class="pull-left">View Details</span>
                                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                        <div class="clearfix"></div>-->
                                                        <table class="table">
                                                          <thead>
                                                            <tr>
                                                              <th>Meal</th>
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
                                                            <tr>
                                                              <th scope="row">Coke (RED)</th>
                                                              <td>45</td>
                                                              <td>3</td>
                                                              <td>135</td>
                                                              <th>x</th>
                                                            </tr>
                                                            <tr>
                                                              <th scope="row">Coke (RED)</th>
                                                              <td>45</td>
                                                              <td>3</td>
                                                              <td>135</td>
                                                              <th>x</th>
                                                            </tr>
                                                            <tr>
                                                              <th scope="row">Coke (RED)</th>
                                                              <td>45</td>
                                                              <td>3</td>
                                                              <td>135</td>
                                                              <th>x</th>
                                                            </tr>
                                                            <tr>
                                                              <th scope="row">Coke (RED)</th>
                                                              <td>45</td>
                                                              <td>3</td>
                                                              <td>135</td>
                                                              <th>x</th>
                                                            </tr>
                                                            <tr>
                                                              <th scope="row">Coke (RED)</th>
                                                              <td>45</td>
                                                              <td>3</td>
                                                              <td>135</td>
                                                              <th>x</th>
                                                            </tr>
                                                            <tr>
                                                              <th scope="row">Coke (RED)</th>
                                                              <td>45</td>
                                                              <td>3</td>
                                                              <td>135</td>
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
                                            <div class="col-sm-4"style="text-align:right;">
                                                Amount Tender:<br>
                                                Amount Change:<br>
                                                Senior Discount:<br>
                                                Senior Discount 0.00:<br>
                                                VAT:<br>
                                                Date:<br>
                                                Total Discount:<br>
                                                Cashier:<br>

                                            </div>
                                            <div class="col-sm-2" style="text-align:left;">
                                                0.00<br>
                                                0.00<br>
                                                0.00<br>
                                                0.00<br>
                                                12%<br>
                                                0.00<br>
                                                0.00<br>
                                                0.00<br>

                                            </div>
                                           
                                            <div class="col-sm-4" style="margin-top:-20px;">
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
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                          <div style="margin-left:100px;">
                                            <button type="button" class="btn btn-primary col-sm-3 btn-md">CASH</button>
                                            <button type="button" class="btn btn-primary col-sm-3 btn-md">CREDIT</button>
                                            <button type="button" class="btn btn-primary col-sm-3 btn-md">SPLIT<br> BILL</button><br>
                                            <button type="button" class="btn btn-primary col-sm-3 btn-md">SENIOR<br> DISCOUNT</button>
                                            <button type="button" class="btn btn-primary col-sm-3 btn-md">SPECIAL<br> DISCOUNT</button>
                                            <button type="button" class="btn btn-primary col-sm-3 btn-md" data-toggle="modal" data-target="#myModal3">CANCEL<br> ORDER</button>

                                          </div>
                                          </div>
                                        </div>

                                      </div>
                                  </div><!--end of modal-->
                            <button type="submit" class="btn btn-danger btn-lg">Clear All</button><br><br>
                            <button type="submit" class="btn btn-primary btn-lg">ASSIGN TO PERSON</button>
                        </center>
                </div>
            </div>
            <!-- /.row -->
            <div id="myModal3" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color:black;">WARNING!</h4>
                  </div>
                  <div class="modal-body">
                    ARE YOU SURE YOU WANT TO CANCEL THE ORDER?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-wrapper -->

    </div>

<?php
include('footer.php');
?>