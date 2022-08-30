<?php
     session_start();

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
    $record = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)==1) {
      $_SESSION['EMAIL']=$admin_email;
      $_SESSION['NAME']=$record['NAME'];

      ?>
      <script type="text/javascript" >
        alert("Log-in success")
        window.open("http://localhost/Telecommunication-Management-System/index2.php","_self");

        </script>

      <?php
   }

     else
     {
      ?>
      <script type="text/javascript" >
        alert("There is a problem")
        window.open("http://localhost/Telecommunication-Management-System/admin.html","_self");

        </script>
        <?php

     }

  }
?>
