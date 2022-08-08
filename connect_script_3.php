<?php
   
    $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
    die ("database not connected".mysqli_connect_error($db));
   }

    if(isset($_POST['submit']))
  {
     $admin_email=$_POST['email'];
     $admin_password=$_POST['password'];

      $sql2="SELECT * FROM admin WHERE EMAIL='$admin_email' AND PASSWORD='$admin_password' ";

     $result = mysqli_query($db,$sql2);
    if (mysqli_num_rows($result)==1) {
      ?>
      <script type="text/javascript" >
        alert("Log-in success")
        window.open("http://localhost/telecommunication%20Management%20System/viewcrud.php","_self");

        </script>

      <?php
   }

     else
     {
      echo "problem";
     }

  }
?>