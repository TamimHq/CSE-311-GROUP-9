<?php
   
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }
   $min=$_POST["minute"];
   $data=$_POST["data"];
   $sms=$_POST["sms"];
   $validity=$_POST["validity"];
   $price=$_POST["price"];

   $sql="INSERT INTO packs(MINUTE,DATA,SMS,VALIDITY,Price) VALUES('$min','$data','$sms','$validity','$price')";
 if(mysqli_query($db,$sql))
{
   ?>
   
   <script type="text/javascript">
      alert("Data save succefully");
      window.open("http://localhost/Telecommunication%20Management%20System/viewpacks.php","_self" );
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