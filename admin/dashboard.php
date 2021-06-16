<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else {




?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>
<style>

</style>

    <body>

       
        <div id="wrapper">


          
          
            <div class="left side-menu"  style="background-color:#BCC6CC";>

                <div class="slimscroll-menu" id="remove-scroll">

                
                    <div class="topbar-left">
                       <h3> Admin  </h3>
                       <hr />                    </div>

                    
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/man.png" class="rounded-circle img-fluid">
                        </div>

                            <?php
$adid=$_SESSION['adid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                        <h5 ><?php echo $name; ?></a> </h5>
                        <p class="text-muted"> Admin</p>
                    </div>

                    
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                          
                            <li>
                                <a href="dashboard.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span > Dashboard </span>
                                </a>
                            </li>

                          

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i><span > Mechanics </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li style="color:white"><a href="add-mechanics.php"  >Add Mechanics</a></li>
                                    <li ><a href="manage-mechanics.php" >Manage Mechanics</a></li>
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
                             <li>
                                <a href="report.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Current Report </span>
                                </a>
                            </li>






                        </ul>

                    </div>
                    

                    <div class="clearfix"></div>

                </div>
               

            </div>
                  


         
            <div class="content-page" >
<?php include_once('includes/header.php');?>
              

    
               
                <div class="content"  >

                    <div class="container-fluid"  >

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box" style="background-color:#EBF4FA">
                                    <h4 class="header-title mb-4">Account Overview</h4>

                                    <div class="row"  >
                                        <div class="col-sm-6 col-lg-6 col-xl-3" >
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
 <?php $query=mysqli_query($con,"Select * from tbluser");
$usercount=mysqli_num_rows($query);
?>
                                                    <input  data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor value="<?php echo $usercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">

                                                    <p class="text-muted mb-0 mt-2">Total Registered User</p>
                                                    
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <?php $query1=mysqli_query($con,"Select * from tblenquiry");
$enqcount=mysqli_num_rows($query1);
?>
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f9bc0b" value="<?php echo $enqcount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Total Enquiry</p>
                                                    
                                                </div>

                                            </div>
                                        </div>

<div class="col-sm-6 col-lg-6 col-xl-3">
<div class="card-box mb-0 widget-chart-two">
<div class="float-right">
<?php $query2=mysqli_query($con,"Select * from tblmechanics");
$meccount=mysqli_num_rows($query2);
?>
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f1556c" value="<?php echo $meccount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Total Mechanics</p>
                                                    
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <?php $query3=mysqli_query($con,"Select * from tblservicerequest");
$sercount=mysqli_num_rows($query3);
?>
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#2d7bf4" value="<?php echo $sercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Total Service Requests</p>
                                                    
                                                </div>

                                            </div>
                                        </div>

  



                                    </div>
                                    <!-- end row -->



   <div class="row">
                                     

                         

                       

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
<?php $query31=mysqli_query($con,"Select * from tblservicerequest where AdminStatus is null");
$newrequest=mysqli_num_rows($query31);
?>
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#2d7bf4" value="<?php echo $newrequest;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">New Service Requests</p>
                                                    
                                                </div>

                                            </div>
                                        </div>



<div class="col-sm-6 col-lg-6 col-xl-3">
<div class="card-box mb-0 widget-chart-two">
<div class="float-right">
<?php $query32=mysqli_query($con,"Select * from tblservicerequest where AdminStatus='2'");
$rejectedrequest=mysqli_num_rows($query32);
?>
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f1556c" value="<?php echo $rejectedrequest;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Rejected Service Requests</p>
                                                    
                                                </div>

                                            </div>
                                        </div>


<div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
 <?php $query33=mysqli_query($con,"Select * from tblservicerequest where AdminStatus='3'");
$compsercount=mysqli_num_rows($query33);
?>
                                                <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#0acf97" value="<?php echo $compsercount;?>" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".2"/>
                                                </div>
                                                <div class="widget-chart-two-content">

                                                    <p class="text-muted mb-0 mt-2">Completed Services </p>
                                                    
                                                </div>

                                            </div>
                                        </div>


                                    </div>











                                </div>
                            </div>
                        </div>
                 




                    </div> <!-- container -->

                </div> <!-- content -->

               
            </div>


        

        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>