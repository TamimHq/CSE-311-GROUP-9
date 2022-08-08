<?php 
$db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   }

$id=$_GET['ID'];
$query="DELETE FROM user WHERE ID='$id' ";
$data=mysqli_query($db,$query);

if($data){
?>
<script type="text/javascript" >
alert("Data Deleted Successfully")
window.open("http://localhost/telecommunication%20Management%20System/viewcrud.php","_self");

</script>
<?php


}
else{

?>
<script type="text/text/javascript" >
alert("Please Try Again")

</script>

<?php

}

 ?>
