<?php 
$db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   }

$id=$_GET['ID'];
$query="DELETE FROM feedback WHERE ID='$id' ";
$data=mysqli_query($db,$query);

if($data){
?>
<script type="text/javascript" >
alert("Data Deleted Successfully")
window.open("http://localhost/Telecommunication-Management-System/viewfeed.php","_self");

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
$query=mysqli_query($db,"select * from feedback");
    $number=1;
    while($row=mysqli_fetch_array($query)){
        $id=$row['ID'];
        $sql = "UPDATE feedback SET ID=$number WHERE ID=$id";
        if($db->query($sql) == TRUE){
            echo "Record RESET succesfully<br>";
        }
        $number++;
    }
     $sql = "ALTER TABLE feedback AUTO_INCREMENT =1";
    if($db->query($sql) == TRUE){
        echo "Record ALTER succesfully";
    }else{
        echo"Error ALTER record: " . $db->error;
    } 


 ?>
