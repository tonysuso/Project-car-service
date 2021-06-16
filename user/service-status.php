<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sid']==0)) {
  header('location:logout.php');
  } else{

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Vehicle Service Managment System</title>
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


    <body>

        <div id="wrapper">

          <?php include_once('includes/sidebar.php');?>

      
            <div class="content-page">

                 <?php include_once('includes/header.php');?>

                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Service Current Status</h4>
                                    <p class="text-muted m-b-30 font-14">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
         
<table class="table table-bordered mg-b-0">
             
              <?php
              $tid=$_SESSION['sid'];
              $rno=mt_rand(1000,9999);
$ret=mysqli_query($con,"select * from  tblservicerequest where UserId=$tid and AdminStatus='1'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                <tr>  
                       <td><?php  echo $row['service_status'];?></td>
                 
         
                
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
               
              </tbody>
            </table>


                                                
                                            </div>
                                        

                                    
                                   

                                </div> 
                            </div>
                        </div>
                     



                    </div> 

                </div>

         
            </div>


     

        </div>
        

</div>
</div>

        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    <</body>
</html>
<?php }  ?>