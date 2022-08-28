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
 <h1 class="text-white text-center">  Update Packs </h1>
 </div><br>
<?php

 $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   } 
  $id = $_GET['ID'];
  $select="SELECT * FROM packs WHERE ID='$id'";
  $data=mysqli_query($db,$select);
  $row=mysqli_fetch_array($data);
?>

 <label> Packs: </label>
 <input value="<?php echo $row['PACKS'] ?>" type="text" name="pack" class="form-control"> <br>
  <label> Price: </label>
 <input value="<?php echo $row['Price'] ?>"type="float-end" name="price" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="update"> Submit </button><br>

 </div>
 <?php
  if(isset($_POST['update'])){

  $id = $_GET['ID'];
   $packs=$_POST['pack'];
   $price=$_POST["price"];
 $update = " update packs set PACKS='$packs',Price='$price' where ID=$id  ";

 if(mysqli_query($db,$update)){

?>
<script type="text/javascript">

alert("DATA Updated Successfully");
window.open("http://localhost/Telecommunication%20Management%20System/viewpacks.php","_self" );
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