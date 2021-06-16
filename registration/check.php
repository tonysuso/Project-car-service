<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['username'])){
   $username = $_POST['username'];

   $query = "select count(*) as cntUser from login where name='".$username."'";

   $result = mysqli_query($con,$query);
   $response = "<span style='color: green;'>Available.</span>";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<span style='color: red;'>Not Available.</span>";
      }
   
   }

   echo $response;
   die;
}

if(isset($_POST['user_email'])){
   $user_email = $_POST['user_email'];

   $query = "select count(*) as cntUser from registration where email='".$user_email."'";

   $result = mysqli_query($con,$query);
   $response = "<span style='color: green;'>Email Available</span>";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<span style='color: red;'>Existing Email</span>";
      }
   
   }

   echo $response;
   die;
}
if(isset($_POST['user_phone'])){
   $user_phone = $_POST['user_phone'];

   $query = "select count(*) as cntUser from registration where mobile='".$user_phone."'";

   $result = mysqli_query($con,$query);
   $response = "<span style='color: green;'>Phone Number Available</span>";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<span style='color: red;'>Existing Phone Number</span>";
      }
   
   }

   echo $response;
   die;
}


?>