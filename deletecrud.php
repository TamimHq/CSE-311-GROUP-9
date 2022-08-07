<?php include 'connectingcrud.php';
$id=$_GET['ID'];
$query="DELETE FROM crud WHERE ID='$id' ";
$data=mysqli_query($con,$query);

if($data){
?>
<script type="text/javascript" >
alert("Data Deleted Successfully")
window.open("http://localhost:8090/CRUDOperation/viewcrud.php","_self");

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
