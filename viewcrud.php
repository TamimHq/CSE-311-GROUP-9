<?php include 'connectingcrud.php';   ?>

<a href="insertcrud.php"> Home </a>

<table border="1px" cellpadding="10px" cellspacing="0" >
  <tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Password</th>

<th colspan="2"> Actions </th>

  </tr>


<?php
$query="SELECT * FROM crud";
$data=mysqli_query($con, $query);
$result=mysqli_num_rows($data);

if($result){
while($row=mysqli_fetch_array($data)){

?>
<tr>

<td> <?php  echo$row['Name']; ?></td>
<td> <?php  echo$row['Email']; ?></td>
<td> <?php  echo$row['Mobile']; ?></td>
<td> <?php  echo$row['Password']; ?></td>
<td><a href="updatedrud.php? ID= <?php  echo $row['ID']; ?>"  > Edit </a> </td>
<td> <a onclick="return confirm('Are you Sure?')" href="deletecrud.php? ID= <?php  echo $row['ID']; ?>" >Delete </a>   </td>

</tr>

<?php


}

}

 ?>

</table>
