<?php
   
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }
   $user_name=$_POST["name"];
   $user_email=$_POST["email"];
   $user_password=$_POST["password"];

   $sql="INSERT INTO user(NAME,EMAIL,PASSWORD) VALUES('$user_name','$user_email','$user_password')";
 if(mysqli_query($db,$sql))
{
   ?>
   
   <script type="text/javascript">
      alert("Data save succefully");
      window.open("http://localhost/Telecommunication-Management-System/index.html#","_self" );
   </script>
   <?php

   }
else
{
?>
<script type="text/javascript">
      alert("There is a problem");
   </script>
   <?php
} 

?>
