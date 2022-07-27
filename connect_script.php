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
   echo " Infromation insert";
}
else
{
   echo "problem".mysqli_errot($db);
} 

?>