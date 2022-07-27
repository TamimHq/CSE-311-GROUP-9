<?php
   
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }
   else
   {
   	echo "Database connected"."<br>";
   }

  $sql= "CREATE TABLE user(ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,NAME VARCHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL, PASSWORD VARCHAR(30) NOT NULL)";
     if(mysqli_query($db,$sql))
   {
      echo "table created";
   }
   else
   {
      echo "there is an problem".mysqli_error($db);
   }
?>