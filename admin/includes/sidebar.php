
            <div class="left side-menu" style="background-color:#BCC6CC";>

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                       <h3> Admin  </h3>
                       <hr />                    </div>

                  
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/man.png" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>

                            <?php
$adid=$_SESSION['adid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                        <h5><?php echo $name; ?></a> </h5>
                        <p class="text-muted">Admin</p>
                    </div>

       
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

     

                            <li>
                                <a href="dashboard.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>

                          

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Mechanics </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-mechanics.php">Add Mechanics</a></li>
                                    <li><a href="manage-mechanics.php">Manage Mechanics</a></li>
                                </ul>
                            </li>

   <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Vehicle Category </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="add-category.php">Add Category</a></li>
                                    <li><a href="manage-category.php">Manage Category</a></li>
                                </ul>
                            </li>



  

                            <li>
                                <a href="reg-user.php">
                                  <i class="icon-people"></i> <span> Register Users </span>
                                </a>
                            </li>


<li>
<a href="javascript: void(0);"><i class="fi-paper"></i><span> Service Request </span> <span class="menu-arrow"></span></a>
<ul class="nav-second-level" aria-expanded="false">
<li><a href="pending-service.php"> New </a></li>
<li><a href="rejected-services.php">Rejected</a></li>
</ul>
</li>
<li>
<a href="javascript: void(0);"><i class="fi-paper"></i><span> Servicing </span> <span class="menu-arrow"></span></a>
<ul class="nav-second-level" aria-expanded="false">
<li><a href="pending-servicing.php"> Pending</a></li>
<li><a href="servicead-status.php"> Service Status</a></li>
<li><a href="completed-service.php"> Completed </a></li>
</ul>
</li>


<li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i><span> Customer Enquiry </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="notrespond-enquiry.php"> Not Respond Enquiry</a></li>
                                    
                                     <li><a href="respond-enquiry.php"> Respond Enquiry </a></li>
                                </ul>
                            </li>


  <li>
                                <a href="search-enquiry.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Enquiry Search </span>
                                </a>
                            </li>

                             <li>
                                <a href="search-service.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Service Search </span>
                                </a>
                            </li>
      






                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

