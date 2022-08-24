<?php 
$db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   }

$id=$_GET['ID'];
$query="DELETE FROM packs WHERE ID='$id' ";


if(mysqli_query($db,$query)){
?>
<script type="text/javascript" >
alert("Data Deleted Successfully")
window.open("http://localhost/Telecommunication%20Management%20System/viewpacks.php","_self");

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
$query=mysqli_query($db,"select * from packs");
    $number=1;
    while($row=mysqli_fetch_array($query)){
        $id=$row['ID'];
        $sql = "UPDATE packs SET ID=$number WHERE ID=$id";
        if($db->query($sql) == TRUE){
            ;
        }
        $number++;
    }
     $sql = "ALTER TABLE packs AUTO_INCREMENT =1";
    if($db->query($sql) == TRUE){
        ;
    }else{
        echo"Error ALTER record: " . $db->error;
    } 


 ?>
