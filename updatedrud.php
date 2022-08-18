<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>
<?php

 $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   } 
  $id = $_GET['ID'];
  $select="SELECT * FROM user WHERE ID='$id'";
  $data=mysqli_query($db,$select);
  $row=mysqli_fetch_array($data);
?>

 <label> Username: </label>
 <input value="<?php echo $row['NAME'] ?>" type="text" name="NAME" class="form-control"> <br>

 <label> Password: </label>
 <input value="<?php echo $row['PASSWORD'] ?>"type="text" name="PASSWORD" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="update"> Submit </button><br>

 </div>
 <?php
  if(isset($_POST['update'])){

 $id = $_GET['ID'];
 $username = $_POST['NAME'];
 $password = $_POST['PASSWORD'];
 $update = " update user set NAME='$username', PASSWORD='$password' where ID=$id  ";

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
 </form>
 </div>
</body>
</html>