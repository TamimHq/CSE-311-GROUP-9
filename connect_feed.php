<?php

 $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }

   $user_name=$_POST["name"];
   $user_email=$_POST["email"];
   $user_phone=$_POST["phone"];
   $user_feed=$_POST["text"];
   $sql="INSERT INTO feedback(NAME,EMAIL,PHONE,MESSAGE) VALUES('$user_name','$user_email','$user_phone','$user_feed')";
 if(mysqli_query($db,$sql))
 {
 	echo "Thankyou for feedback";
 }
 else
 {
 	echo "problem".mysqli_errot($db);
 }
?>