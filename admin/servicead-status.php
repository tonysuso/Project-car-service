
<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost", "root", "", "vsmsdb");
    

if(isset($_POST['update']))
  {
    
 
  
   $name=$_POST['name'];
  $status=$_POST['tt'];
    
	$qu=mysqli_query($con,"select ID from tbluser where FullName='$name'");
   $data=mysqli_fetch_array($qu);
 $res=$data['ID'];
   $query=mysqli_query($con, "update  tblservicerequest set service_status='$status'
   where UserId= '$res' and AdminStatus='1'");
    if ($query) {
    $msg="Status has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  

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

        <link rel="shortcut icon" href="assets/images/favicon.ico">

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

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Service Status</h4>
                                    <p class="text-muted m-b-30 font-14">
                                       
                                    </p>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="p-20">
                                       <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>       


<table>
<tr><td> <form class="" action="#" name="update" id="update" method="POST">
  User:
  <select name="name" id="name" class="form-control" required="true">
    <option disabled selected >-- Select User --</option>
    <?php
	
    $con=mysqli_connect("localhost", "root", "", "vsmsdb");
        $records = mysqli_query($con, "SELECT tbluser.FullName From tbluser inner join 
		tblservicerequest on tbluser.ID=tblservicerequest.UserId where tblservicerequest.AdminStatus='1' ");  

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['FullName'] ."' >" .$data['FullName'] ."</option>"; 
        }	
    ?>  
  </select>


<?php mysqli_close($con); ?>
<tr>
    <td>
	<Input type ="text" name="tt"  class="form-control">
	
    </tr>
 <tr align="center">
    <td colspan="2"><button type="update" name="update" class="btn btn-az-primary pd-x-20">Update</button></td>
  </tr>
 
</table>
 </form>
              

                                                
                                            </div>
                                        </div>

                                    </div>
                

                                </div> 
                            </div>
                        </div>
                       


        



                        <!-- end row -->





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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php   ?>