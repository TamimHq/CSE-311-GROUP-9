<?php
   
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }

   $packs=$_POST['pack'];
   $price=$_POST['price'];

   $sql="INSERT INTO packs(PACKS,Price) VALUES('$packs','$price')";
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