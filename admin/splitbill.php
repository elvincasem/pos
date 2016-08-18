<?php
include('headers.php');

$cid=$_REQUEST['cid'];
?>
<div id="page-wrapper" disabled>
            <div class="row">
                <div class="col-lg-7">
                   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-md-8" style="margin-top:20px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="height:66px;">
                            <div class="row">
                                <div class="col-xs-8">
                                    
                                 <h5>Table No. TABLE1 &nbsp &nbsp Order No. 242</h5>
                                </div>
                                  
                                <div class="col-xs-4 text-right">
                                    <h3>Split Bill</h3>
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
                            <div class="panel-footer" style="height:500px;">
                               <!-- <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>-->
                                    <!--loob-->

                                    <!--toastmarmalade-->
                                   
                                       
                                      <table class="table">
                                        <thead class="thead-inverse">
                                          <tr>
                                            <th>Meal</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>


                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">Burger</th>
                                            <td>25</td>
                                            <td>3</td>
                                            <td>75</td>
                                            <td><button type="submit" class="btn btn-danger btn-sm">assign to</button></td>

                                          </tr>
                                          <tr>
                                            <th scope="row">coke</th>
                                            <td>25</td>
                                            <td>1</td>
                                            <td>25</td>
                                            <td><button type="submit" class="btn btn-danger btn-sm">assign to</button></td>
                                          </tr>
                                     
                                        </tbody>
                                      </table>
                                      <center><button type="submit" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#splitto">Split To</button></center> 
                                    <?php
                                      $x = 1;
                                   


                                      while($x <= 3) {

                                           echo '
                                              <div class="col-lg-4 col-md-8" style="margin-top:20px;">
                                                <div class="panel panel-primary">
                                                  <div class="panel-heading" style="height:66px;">
                                                    split no.'.$x.'
                                                  </div>
                                                    <div class="panel-footer" style="height:100px;">
                                                      burger<br><br>
                                                      <button type="submit" class="btn btn-success">CASH</button>
                                                      <button type="submit" class="btn btn-success">CREDIT</button>
                                                      <button type="submit" class="btn btn-danger">PRINT</button>
                                                    </div>
                                                </div>
                                              </div>';
                                            $x++;
                                        } 

                                    ?>
                                  <center>
                                  <button type="submit" class="btn btn-success btn-lg">CASH</button>
                                  <button type="submit" class="btn btn-success btn-lg">CREDIT</button>
                                  <button type="submit" class="btn btn-danger btn-lg">CREDIT</button>
                                </center>
                             </div>
                        </a>

                    </div><!--end blue panel-->



            </div><!-- end row-->








              
            </div>

                                 <!-- Modal -->
                                  <div id="splitto" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-sm">
                                      <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title" style="color:black;">
                                                <center>Split To </center>
                                              </h4>
                                          </div>
                                          <div class="modal-body" style="height:60px;">
                                          <div class="col-sm-12">
                                              <div class="input-group">
                                                <span class="input-group-addon">-</span>
                                                <input type="text" name="splitno" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-addon">+</span>
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