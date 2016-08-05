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
                            <div class="panel-footer" style="height:280px; overflow-y: scroll;" >
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
                                                               
                                                                <div data-toggle="modal" data-target="#myModal-'.$tcontentid.'"><h4>'.$tcontent_name.'</h3></div>
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
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                        </tr>
                      </tbody>
                    </table>
            </div><!-- end row-->
                








                <div class="col-lg-5 col-md-6" style="margin-top:10px;">
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
                            <h3>Grand Total:0.00</h3>
                        </div>
                        <br>
                        <center>                    
                            <button type="submit" class="btn btn-primary btn-lg" >DINE IN</button>
                            <button type="submit" class="btn btn-primary btn-lg">TAKE OUT</button>
                            <button type="submit" class="btn btn-danger btn-lg">Clear All</button><br><br>
                            <button type="submit" class="btn btn-primary btn-lg">ASSIGN TO PERSON</button>
                        </center>
                </div>
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>

<?php
include('footer.php');
?>