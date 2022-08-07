<?php

$host="localhost";
$root="root";
$pass="";
$db="crud";

$con=mysqli_connect($host,$root,$pass,$db);
if($con){

echo "";

}
else{
echo"Not Connected ok";

}
?>
