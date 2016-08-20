<div class="navbar-default sidebar" role="navigation"  >
   <ul class="nav" id="side-menu" >
      
        <li>        <h3 style="margin-top:-30px;"><center>Tables</center></h3> </li>
    </ul>
                <div class="sidebar-nav navbar-collapse" style="overflow-y: scroll; height:600px;" >
                    <ul class="nav" id="side-menu">
                      <!--  <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                      <!--  </li>-->
                       
                         <?php
                        include_once("include/functions.php");          
                        $emplist = selectListSQL("SELECT * FROM tbltable");
                        foreach ($emplist as $rows => $link) {
                            $table = $link['table_name'];
                            $tid = $link['tableid'];
                            

                          echo '<li>
                                    <a href="tables.php?tid='.$tid.'" style="font-size:20px;">'.$table.'</a>
                                </li>';
                            }
                        ?>
                        
                        <div class="col-sm-16" style="margin-left:20px; margin-top:20px;">
                        <button type="submit" class="btn btn-success btn-md col-sm-12" data-toggle="modal" data-target="#">Assign to Person</button>
                        <br>
                        <br>
                        <a href="addorder.php"><button type="submit" class="btn btn-primary btn-md col-sm-6">ADD<br> ORDER</button></a>
                        <button type="submit" class="btn btn-primary btn-md col-sm-6" data-toggle="modal" data-target="#viewcharges">VIEW<br>CHARGES</button>
                        
    
                        
                        <a href="splitbill.php"><button type="submit" class="btn btn-primary btn-md col-sm-6">SPLIT<br>BILL</button></a>
                        <button type="submit" class="btn btn-primary btn-md col-sm-6" data-toggle="modal" data-target="#transfer" >TRANSFER<br>TABLE</button>
                        
                        <button type="submit" class="btn btn-primary btn-md col-sm-6" data-toggle="modal" data-target="#complementary" >COMPLE-<br>MENTARY</button>
                        <button type="submit" class="btn btn-primary btn-md col-sm-6" data-toggle="modal" data-target="#viewnote" >VIEW<br>NOTE</button>
                        <button type="submit" class="btn btn-primary btn-md col-sm-6" data-toggle="modal" data-target="#addcharges" >ADD<br>CHARGES</button>
                      </div>
                      
                        <!--
						<li>
                            <a href="#"  style="color:#bd0000;"><i class="fa fa-cubes fa-2x"></i> ASSET MANAGEMENT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
									<a href="requisition.php" style="color:#000;"><i class="fa fa-check-square-o fa-2x"></i> REQUISITION</a>
								</li>
                               <li>
									<a href="assetassignment.php" style="color:#000;"><i class="fa fa-home fa-2x"></i> ASSET ASSIGNMENT</a>
								</li>
								<li>
									<a href="items" style="color:#bd0000;"><i class="fa fa-briefcase fa-2x"></i> ITEMS<span class="fa arrow"></span></a></a>
									
									<ul class="nav nav-third-level">
									<li>
										<a href="items.php" style="color:#000;"><i class="fa fa-briefcase fa-2x"></i> Items List</a>
									</li>
									<li>
										<a href="items_baseunit.php" style="color:#000;"><i class="fa fa-columns fa-2x"></i> Base Unit of Measure</a>
									</li>
									</ul>
								</li>
								<li>
									<a href="suppliers.php" style="color:#000;"><i class="fa fa-cubes fa-2x"></i> SUPPLIERS</a>
								</li>
                                <li>
                                    <a href="inventory.php" style="color:#000;"><i class="fa fa-gears fa-2x" style="bgcolor:#000;"></i> INVENTORY</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                     <!--   </li>
						<li>
                            <a href="#"  style="color:#bd0000;"><i class="fa fa-list fa-2x"></i> ORDER MANAGEMENT<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
									<a href="prequest.php" style="color:#0bafc8;"><i class="fa fa-share-square-o fa-2x"></i> PURCHASE REQUESTS</a>
								</li>
								<li>
									<a href="#" style="color:gray;"><i class="fa fa-money fa-2x"></i> PURCHASE ORDERS</a>
								</li>
								<li>
									<a href="#" style="color:gray;"><i class="fa fa-reply fa-2x"></i> RECEIVING</a>
								</li>
								
								
                            </ul>
                            <!-- /.nav-second-level -->
                     <!--   </li>
						
						
                        <li>
                            <a href="employees.php" style="color:#000000;"><i class="fa fa-user fa-2x"></i> EMPLOYEES</a>
                        </li>
                        <li>
                            <a href="reports.php" style="color:#000000;"><i class="fa fa-files-o fa-2x"></i> REPORTS</a>
                        </li>
						<li>
                            <a href="#"  style="color:#bd0000;"><i class="fa fa-gear fa-2x"></i> SETTINGS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="users.php" ><i class="fa fa-user fa-2x" style="bgcolor:green;"></i> Users</a>
                                </li>
                                <li>
                                    <a href="alerts.php"><i class="fa fa-bell fa-2x"></i> Alerts</a>
                                </li>
                                <li>
                                    <a href="#" ><i class="fa fa-gears fa-2x" style="bgcolor:green;"></i> System Settings</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                       <!-- </li>-->
						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>



           
            <!-- /.navbar-static-side -->
            <style>


                ::-webkit-scrollbar {
                  width: 30px; 
                   background-color: rgba(0,0,0,0);
                  -webkit-border-radius: 80px;
                }
                ::-webkit-scrollbar:hover {
                  background-color: rgba(0, 0, 0, 0.09);
                }

                ::-webkit-scrollbar-thumb:vertical {
                  background: rgba(0,0,0,0.61);
                  -webkit-border-radius: 80px;
                }
                ::-webkit-scrollbar-thumb:vertical:active {
                  background: rgba(0,0,0,0.61);
                  -webkit-border-radius: 80px;
                }

            </style>


            