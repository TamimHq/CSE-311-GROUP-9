
<?php 
$db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   }
  $iD=$_GET['ID'];
  $select="SELECT * FROM user WHERE ID='$iD'";
  $data=mysqli_query($db,$select);
  $row=mysqli_fetch_array($data);
?>
<div>
  <form  action=""  method="POST" >
<input value="<?php echo $row['NAME'] ?>" type="text" id="NAME" name="NAME"
placeholder="Name" ><br><br>

<form  action=""  method="POST" >
<input value="<?php echo $row['EMAIL'] ?>" type="text" id="EMAIL" name="EMAIL"
placeholder="Email" ><br><br>

<form  action=""  method="POST" >
<input value="<?php echo $row['PASSWORD'] ?>" type="text" id="text" name="PASSWORD"
placeholder="Password" ><br><br>


<input type="submit" name="update_btn"
value="Update">

<button> <a href="viewcrud.php">  Back  </a> </button>


</form>
</div>



<?php

if(isset($_POST['update_btn'])){

$Sname=$_POST['NAME'];

$SEmail=$_POST['EMAIL'];

$Spassword=$_POST['PASSWORD'];

$update="UPDATE user SET NAME='$Sname', EMAIL='$SEmail',PASSWORD='$Spassword' WHERE ID='$iD'";

if(mysqli_query($db,$update)){

?>
<script type="text/javascript">

alert("DATA Updated Successfully");
window.open("http://localhost/telecommunication%20Management%20System/viewcrud.php","_self" );
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
