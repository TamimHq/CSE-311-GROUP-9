<?php
   
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }

    if(isset($_POST['submit']))
  {
     $user_email=$_POST['email'];
     $user_password=$_POST['password'];

     $sql="SELECT * FROM user WHERE EMAIL='$user_email' AND PASSWORD='$user_password' ";

     $result = mysqli_query($db,$sql);
    if (mysqli_num_rows($result)==1) {
      echo "LOG IN SUCCESS";

   }
     else
     {
      echo "problem".mysqli_errot($db);
     }

  }
?>