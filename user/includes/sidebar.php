
            <div class="left side-menu" style="background-color:#BCC6CC";>

                <div class="slimscroll-menu" id="remove-scroll">

                    <div class="topbar-left">
                       <h3> USER  </h3>
                       <hr />                    </div>

                
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/man.png" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>

                         <?php
$uid=$_SESSION['sid'];
$ret=mysqli_query($con,"select FullName from tbluser where ID='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                        <h5><?php echo $name; ?></a> </h5>
                    
                    </div>

              
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                           
                            <li>
                                <a href="welcome.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Enquiry </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="enquiry-request.php">Enquiry Form</a></li>
                                    <li><a href="enquiry-history.php">Enquiry History</a></li>
                                </ul>
                            </li>

          
<li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span> Service Request </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="service-request.php">Service Request Form</a></li>
									                                    <li><a href="service-status.php">Service Status</a></li>
                                    <li><a href="service-history.php">Service History</a></li>
                                </ul>
                            </li>
                                             
                 

  
                            




                        </ul>

                    </div>
            

                    <div class="clearfix"></div>

                </div>
        

            </div>
      

