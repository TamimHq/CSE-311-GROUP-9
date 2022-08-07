<?php include 'connectingcrud.php';?>

<!DOCTYPE html>
<html>
<head>

<title>  </title>
</head>
<body>

  <div>
    <form  action=""  method="POST" >
<input type="text" name="Name"
placeholder="Name" ><br><br>

<form  action=""  method="POST" >
<input type="text" name="Email"
placeholder="Email" ><br><br>

<form  action=""  method="POST" >
<input type="number" name="Mobile"
placeholder="Mobile" ><br><br>

<form  action=""  method="POST" >
<input type="number" name="Password"
placeholder="Password" ><br><br>


<input type="submit" name="save_btn"
value="Save">

<button> <a href="viewcrud.php">  View  </a> </button> 


</form>
</div>
<?php
if(isset($_POST['save_btn'])){

$Sname=$_POST['Name'];

$SEmail=$_POST['Email'];

$Smobile=$_POST['Mobile'];
$Spassword=$_POST['Password'];

$query="INSERT INTO crud(Name,Email,Mobile,Password) VALUES('$Sname','$SEmail','$Smobile','$Spassword'  )";
$data=mysqli_query($con,$query);

if($data){

?>
<script type="text/javascript">

alert("DATA saved Successfully");
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

</body>
</html>
