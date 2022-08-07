
<?php include 'connectingcrud.php';

  $iD=$_GET['ID'];
  $select="SELECT* FROM crud WHERE ID='$iD'  ";
  $data=mysqli_query($con,$select);
  $row=mysqli_fetch_array($data);

?>
<div>
  <form  action=""  method="POST" >
<input value="<?php echo $row['Name'] ?>" type="text" name="Name"
placeholder="Name" ><br><br>

<form  action=""  method="POST" >
<input value="<?php echo $row['Email'] ?>" type="text" type="text" name="Email"
placeholder="Email" ><br><br>

<form  action=""  method="POST" >
<input value="<?php echo $row['Mobile'] ?>" type="text" type="number" name="Mobile"
placeholder="Mobile" ><br><br>

<form  action=""  method="POST" >
<input value="<?php echo $row['Password'] ?>" type="text" type="number" name="Password"
placeholder="Password" ><br><br>


<input type="submit" name="update_btn"
value="Update">

<button> <a href="viewcrud.php">  Back  </a> </button>


</form>
</div>



<?php
if(isset($_POST['update_btn'])){

$Sname=$_POST['Name'];

$SEmail=$_POST['Email'];

$Smobile=$_POST['Mobile'];
$Spassword=$_POST['Password'];

$update="UPDATE  crud SET Name='$Sname', Email='$SEmail', Mobile='$Smobile', Password='$Spassword' WHERE ID='  $iD' ";
$data=mysqli_query($con,$update);

if($data){

?>
<script type="text/javascript">

alert("DATA Updated Successfully");
window.open("http://localhost:8090/CRUDOperation/viewcrud.php","_self" );
</script>
<?php

}
else{

  ?>
  <script type="text/javascript">

  alert("Please Try again");
  </script>
  <?php
}

}

?>
