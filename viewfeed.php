<?php 
$db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   }
?>

<a href="insertcrud.php"> Home </a>

<table border="1px" cellpadding="10px" cellspacing="0" >
  <tr>
<th>Name</th>
<th>Email</th>
<th>Password</th>

<th colspan="2"> Actions </th>

  </tr>


<?php
$query="SELECT * FROM feedback";
$data=mysqli_query($db, $query);
$result=mysqli_num_rows($data);

if($result){
while($row=mysqli_fetch_array($data)){

?>
<tr>
<td> <?php  echo$row['NAME']; ?></td>
<td> <?php  echo$row['EMAIL']; ?></td>
<td> <?php  echo$row['PHONE']; ?></td>
<td> <?php  echo$row['MESSAGE']; ?></td>
<td> <a onclick="return confirm('Are you Sure?')" href="delete.php? ID= <?php  echo $row['ID']; ?>" >Delete </a>   </td>

</tr>

<?php


}

}

 ?>

</table>
